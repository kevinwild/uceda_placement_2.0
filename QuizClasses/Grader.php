<?php

namespace QuizClasses;


class Grader
{
    private $quizObj;
    private $results = [
        'letter_grade' => null,
        'percent' => 0,
        'total_questions' => 0,
        'total_gradable' => 0,
        'total_correct' => 0,
    ];
    private $current_page;
    public static $proceed_page_min = 85; //.. The minimum score a user must get in order to proceed to the next page

    //.. Dynamically Created
    private $valid_field_names = [];

    //.. This defines the lower limit of a letter grade
    public static $letterGrades = [
        'A+' => 97,
        'A' => 93,
        'A-' => 90,
        'B+' => 87,
        'B' => 83,
        'B-' => 80,
        'C+' => 77,
        'C' => 73,
        'C-' => 70,
        'D+' => 67,
        'D' => 63,
        'D-' => 60,
        'F' => 0
    ];


    public function __construct($post)
    {
        $quiz_name = (isset($post['quiz_name'])) ? $post['quiz_name'] : ''; //.. if quiz name not provided load default main rules
        $this->current_page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

        $this->loadRules($quiz_name);
        $this->constructQuiz($post);
    }

    //.. Grades Results
    public function evaluate()
    {
        // echo json_encode($this->quizObj); die();
        foreach ($this->quizObj as $field_name => $props) {
            //.. If the answers array is empty it means the field is not calculated towards the total score
            //.. Only process the questions that are on the current page
            if (!empty($this->quizObj[$field_name]['answers']) && $this->quizObj[$field_name]['page'] <= $this->current_page) {
                switch ($props['question_type']) {
                    case 'string':
                        $this->handleStringEval($field_name);
                }

                //.. Initialize results section in $quizObj
                if (!array_key_exists($props['section_name'], $this->results)) {
                    $this->results[$props['section_name']] = ['total' => 0, 'correct' => 0, 'percent' => 0, 'letter_grade' => ''];
                }
                if ($this->quizObj[$field_name]['correct'] === true) {
                    $this->results['total_correct']++;
                    $this->results[$props['section_name']]['correct']++;
                }

                $this->results['total_gradable']++;
                $this->results[$props['section_name']]['total']++;
                $this->results['total_questions']++;

            } else {
                if (key_exists('section_name', $props) && !key_exists($props['section_name'], $this->results)) {

                    $this->results[$props['section_name']] = ['total' => 0];
                }
            }
            if(key_exists('section_name', $props)){
                $this->results[$props['section_name']]['total']++;
                $this->results['total_questions']++;
            }

        }
        // .. Calculate Percentages and letter grades
        $this->calculatePercents();
        return $this->results;
    }

    //.. View Quiz Obj
    public function quiz()
    {
        return $this->quizObj;
    }

    //.. View Results
    public function results()
    {
        return $this->results;
    }


    //.. Loads Grading quizObj for calculations to determine correct answers
    private function loadRules($quizType)
    {
        switch ($quizType) {
            case 'test':
                $name = 'test';
                break;
            case 'general':
                $name = 'main';
                break;
            default:
                $name = 'main';
        }

        $raw_quizObj = json_decode(file_get_contents('grade_rules/' . $name . '.json'), true);
        $this->quizObj['structure'] = ['pages' => null, 'sections' => []];
        foreach ($raw_quizObj as $rule) {
            $this->quizObj[$rule['question_name']] = $rule;
            array_push($this->valid_field_names, $rule['question_name']);
            //.. Define how many pages in the Quiz
            if ($this->quizObj['structure']['pages'] === null || $this->quizObj['structure']['pages'] < $rule['page']) {
                $this->quizObj['structure']['pages'] = $rule['page'];
            }
            //.. Define All the sections in the quiz
            if (!in_array($rule['section_name'], $this->quizObj['structure']['sections'])) {
                array_push($this->quizObj['structure']['sections'], $rule['section_name']);
            }
        }

    }

    //.. Adds submissions from $_POST request to the $quizObj for later parsing
    private function constructQuiz($post)
    {


        foreach ($post as $key => $value) {
            if (in_array($key, $this->valid_field_names)) {
                $this->quizObj[$key]['submission'] = $value;
            }
        }
    }


    //.. Comparison check for plain
    private function handleStringEval($field_name)
    {

        //.. Make string lower case and remove whitespace from beginning and end
        if (in_array(strtolower(trim($this->quizObj[$field_name]['submission'])), $this->quizObj[$field_name]['answers'])) {
            $this->quizObj[$field_name]['correct'] = true;
        } else {
            $this->quizObj[$field_name]['correct'] = false;
        }
    }

    private function ifRequired($field_name)
    {
        if ($this->quizObj[$field_name]['required'] === true) {
            return true;
        }
        return false;
    }

    //.. Calculates the percent for the entire test plus each section
    private function calculatePercents()
    {
        //.. Calculate total percent
        $this->results['percent'] = sprintf("%.2f", $this->results['total_correct'] / $this->results['total_gradable']) * 100;
        $this->results['letter_grade'] = self::returnLetterGrade($this->results['percent']);

        //.. Calculate each section
        foreach ($this->results as $key => $values) {
            if (is_array($values) && array_key_exists('correct', $values)) {
                $this->results[$key]['percent'] = sprintf("%.2f", $values['correct'] / $values['total']) * 100;
                $this->results[$key]['letter_grade'] = self::returnLetterGrade($this->results[$key]['percent']);
            }
        }
    }


    //.. Returns letter grade based on integer
    public static function returnLetterGrade($int)
    {
        foreach (self::$letterGrades as $letter => $num) {
            if ($int >= $num) {
                return $letter;
            }
        }
        return null;
    }

    //.. Determines if there are additional pages after this POST
    public function morePages()
    {
        return $this->current_page < $this->quizObj['structure']['pages'];
    }


}