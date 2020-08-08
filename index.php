<?php

require_once('QuizClasses/Grader.php');
require_once('QuizClasses/Common.php');


use QuizClasses\Grader;



//... REMOVE THIS LATER!!!!!!!!!!!
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $rsp = [];
    $quiz = new Grader($_POST);
    $quiz->evaluate();
    $rsp['results'] = $quiz->results();
    $rsp['more_pages'] = $quiz->morePages();

    echo json_encode($rsp);
}else {
    echo 'Invalid Request';
}