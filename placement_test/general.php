<?php require_once('../QuizClasses/Common.php'); ?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/general.css">
    <title>General Placement Test</title>
</head>
<body>
<div class="large_container container shadow_container">
    <div class="row page_1">
        <div class="col-12">
            <h2>UCEDA General Placement Test</h2>
            <p>
            <p>The purpose of this test is to assess your level of English. For an accurate assessment,
                please do not use any external resources or friends to help you with this test. Fill in all answers!
                Those that are left blank will be marked incorrect.</p>
            <p class="text-center">ESTIMATED TIME TO COMPLETE THIS TEST: 10 MIN</p>
            <hr>
        </div><!-- end. col -->
    </div><!-- end. row -->
    <form method="POST" action="#" class="form_page">
        <!-- PAGE 1 -->
        <div class="page_1">
            <!-- Students Information -->
            <div class="row">
                <div class="container-fluid grey_border_left">
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label>First Name <span class="red">*</span>
                                    <input type="text" class="form-control" aria-describedby="FirstName"
                                           name="first_name"
                                           required>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label>Last Name <span class="red">*</span>
                                    <input type="text" class="form-control" aria-describedby="LastName" name="last_name"
                                           required>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label>Phone Number
                                    <input type="text" class="form-control" aria-describedby="LastName" name="phone">
                                </label>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label>Email <span class="red">*</span>
                                    <input type="email" class="form-control" aria-describedby="LastName" name="email"
                                           required>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label>Skype (optional)
                                    <input type="text" class="form-control" aria-describedby="LastName" name="skype">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>What country are you from? <span class="red">*</span>
                                    <select class="form-control" name="country" required>
                                        <option value="">Select a Country</option>
                                        <?php
                                        foreach (\QuizClasses\Common::$countries as $country) {
                                            echo '<option value="' . $country . '">' . $country . '</option>';
                                        }
                                        ?>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>What is your first language? <span class="red">*</span>
                                    <select class="form-control" name="country" required>
                                        <option value="">Select your Language</option>
                                        <?php
                                        foreach (\QuizClasses\Common::$languages as $languages) {
                                            echo '<option value="' . $languages . '">' . $languages . '</option>';
                                        }
                                        ?>
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- end. grey row -->
            </div> <!-- end. row -->
            <hr>
            <!-- GREEN SECTION -->
            <div class="row">
                <div class="container-fluid green_border_left">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="small_title">The verb “TO BE”:</p>
                            <p class="font-italic"> Fill in the blanks with (am / is / are) in the present tense.</p>

                            <div class="form-group form-inline ml-5">
                                <label>She &nbsp;
                                    <input type="text" class="form-control" name="verb_to_be_1" size="5">
                                    &nbsp; a really good teacher.
                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>We &nbsp;
                                    <input type="text" class="form-control" name="verb_to_be_2" size="5">
                                    &nbsp; in English class.
                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>I &nbsp;
                                    <input type="text" class="form-control" name="verb_to_be_3" size="5">
                                    &nbsp; happy with my friends.
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 border-left">
                            <p class="small_title">The verb “TO BE” negative:</p>
                            <p class="font-italic">Change the following sentences to their equivalent negative form</p>

                            <div class="form-group form-inline ml-5">
                                <label>James &nbsp;
                                    <input type="text" class="form-control" name="to_be_negative_1" size="5"
                                           value="likes">
                                    &nbsp; socccer.
                                </label>
                            </div>

                            <div class="form-group form-inline ml-5">
                                <label>Victor and Martha &nbsp;
                                    <input type="text" class="form-control" name="to_be_negative_2" size="5"
                                           value="are">
                                    &nbsp; married.
                                </label>
                            </div>

                            <div class="form-group form-inline ml-5">
                                <label>I &nbsp;
                                    <input type="text" class="form-control" name="to_be_negative_3" size="5" value="am">
                                    &nbsp; ready for the test.
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <p class="small_title">Present Tense – Comprehension:</p>
                            <p class="font-italic">Choose the correct word from the drop down menu.</p>

                            <div class="form-group form-inline ml-5">
                                <label>We &nbsp;
                                    <select class="form-control" name="present_tense_1">
                                        <option value="">...</option>
                                        <option value="ate">ate</option>
                                        <option value="ates">ates</option>
                                        <option value="eat">eat</option>
                                        <option value="eats">eats</option>

                                    </select>
                                    &nbsp; breakfast every morning.
                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>She &nbsp;
                                    <select class="form-control" name="present_tense_2">
                                        <option value="">...</option>
                                        <option value="spoke">spoke</option>
                                        <option value="spoke">spoke</option>
                                        <option value="speak">speak</option>
                                        <option value="speaks">speaks</option>

                                    </select>
                                    &nbsp; English very well.
                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>They &nbsp;
                                    <select class="form-control" name="present_tense_3">
                                        <option value="">...</option>
                                        <option value="does">does</option>
                                        <option value="work">work</option>
                                        <option value="works">works</option>
                                        <option value="fact">fact</option>
                                    </select>
                                    &nbsp; in the factory.
                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>Allen &nbsp;
                                    <select class="form-control" name="present_tense_4">
                                        <option value="">...</option>
                                        <option value="don't">don't</option>
                                        <option value="doesn't">doesn't</option>
                                        <option value="dozen">dozen</option>
                                        <option value="isn't">isn't</option>
                                    </select>
                                    &nbsp; drink coffee.
                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>Michelle &nbsp;
                                    <select class="form-control" name="present_tense_5">
                                        <option value="">...</option>
                                        <option value="don't">don't</option>
                                        <option value="doesn't">doesn't</option>
                                        <option value="dozen">dozen</option>
                                        <option value="isn't">isn't</option>
                                    </select>
                                    &nbsp; go to school.
                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>They &nbsp;
                                    <select class="form-control" name="present_tense_6">
                                        <option value="">...</option>
                                        <option value="don't">don't</option>
                                        <option value="doesn't">doesn't</option>
                                        <option value="dozen">dozen</option>
                                        <option value="isn't">isn't</option>
                                    </select>
                                    &nbsp; play the accordion.
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <!-- Yellow SECTION -->
            <div class="row">
                <div class="container-fluid yellow_border_left">
                    <p class="small_title">Past Tense:</p>
                    <p class="font-italic"> Write the correct past tense for each verb.</p>
                    <div class="row">

                        <div class="col-sm-3">
                            <div class="form-group form-inline ml-5">
                                <label>Speak &nbsp;
                                    <input type="text" class="form-control" name="past_tense_1" value="">
                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>See &nbsp;
                                    <input type="text" class="form-control" name="past_tense_3" value="">
                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>Stop &nbsp;
                                    <input type="text" class="form-control" name="past_tense_5" value="">
                                </label>
                            </div>

                        </div>
                        <div class="col-sm-3">
                            <div class="form-group form-inline ml-5">
                                <label>Give &nbsp;
                                    <input type="text" class="form-control" name="past_tense_2" value="">
                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>Buy &nbsp;
                                    <input type="text" class="form-control" name="past_tense_4" value="">
                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>Read &nbsp;
                                    <input type="text" class="form-control" name="past_tense_6" value="">
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p class="font-italic">Choose the correct word from the drop down menu.</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group form-inline ml-5">
                                <label>They &nbsp;
                                    <select class="form-control" name="past_tense_7">
                                        <option value="">...</option>
                                        <option value="ate">goes</option>
                                        <option value="ates">go</option>
                                        <option value="eat">goed</option>
                                        <option value="eats">went</option>
                                    </select>
                                    &nbsp; to the park yesterday.
                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>We &nbsp;
                                    <select class="form-control" name="past_tense_8">
                                        <option value="">...</option>
                                        <option value="study">study</option>
                                        <option value="studied">studied</option>
                                        <option value="studyed">studyed</option>
                                        <option value="are studying">are studying</option>

                                    </select>
                                    &nbsp; for the test last night.
                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>She &nbsp;
                                    <select class="form-control" name="past_tense_9">
                                        <option value="">...</option>
                                        <option value="didn't">didn't</option>
                                        <option value="doesn't">doesn't</option>
                                        <option value="isn't">isn't</option>
                                        <option value="wasn't">wasn't</option>
                                    </select>
                                    &nbsp; call me last week.

                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>Nancy &nbsp;
                                    <select class="form-control" name="past_tense_10">
                                        <option value="">...</option>
                                        <option value="didn't">didn't</option>
                                        <option value="doesn't">doesn't</option>
                                        <option value="isn't">isn't</option>
                                        <option value="wasn't">wasn't</option>
                                    </select>
                                    &nbsp; dancing at the party.
                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>Michelle &nbsp;
                                    <select class="form-control" name="past_tense_11">
                                        <option value="">...</option>
                                        <option value="are">Are</option>
                                        <option value="do">Do</option>
                                        <option value="did">Did</option>
                                        <option value="does">Does</option>
                                    </select>
                                    &nbsp; you sleep well last night?
                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>They &nbsp;
                                    <select class="form-control" name="past_tense_12">
                                        <option value="">...</option>
                                        <option value="did">Did</option>
                                        <option value="was">was</option>
                                        <option value="where">where</option>
                                        <option value="were">were</option>
                                    </select>
                                    &nbsp; they watch T.V. AT 8:00 PM?
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
            <!-- ORANGE SECTION -->
            <div class="row">
                <div class="container-fluid orange2_border_left">
                    <p class="small_title">Future:</p>
                    <p class="font-italic">Change the following sentences into WILL and GOING TO forms.</p>
                    <div class="row">

                        <div class="col-sm-4">
                            <p class="font-weight-bold">They Speak English</p>
                            <div class="form-group form-inline ml-5">
                                <label>will &nbsp;
                                    <input type="text" class="form-control" name="future_1a" value="" size="30">
                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>going to &nbsp;
                                    <input type="text" class="form-control" name="future_1b" value="" size="30">
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-4 border-left">
                            <p class="font-weight-bold">She walks in the park</p>
                            <div class="form-group form-inline ml-5">
                                <label>will &nbsp;
                                    <input type="text" class="form-control" name="future_2a" value="" size="30">
                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>going to &nbsp;
                                    <input type="text" class="form-control" name="future_2b" value="" size="30">
                                </label>
                            </div>
                            <br>


                        </div>

                    </div>
                    <hr>
                    <p class="font-italic">Choose the correct word from the drop down menu.</p>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-inline ml-5">
                                <label>
                                    <select class="form-control" name="future_question1">
                                        <option value="">...</option>
                                        <option value="when_she_will">When she will</option>
                                        <option value="when_will_she">When will she</option>
                                        <option value="where_she_will">Where she will</option>
                                        <option value="where_will_she">Where will she</option>

                                    </select>
                                    &nbsp; walk in the park? Answer: On Sunday.
                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>
                                    <select class="form-control" name="future_question2">
                                        <option value="">...</option>
                                        <option value="when_she_will">When she will</option>
                                        <option value="when_will_she">When will she</option>
                                        <option value="where_she_will">Where she will</option>
                                        <option value="where_will_she">Where will she</option>

                                    </select>
                                    &nbsp; walk on Sunday? Answer: In the park.
                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>
                                    <select class="form-control" name="future_question3">
                                        <option value="">…</option>
                                        <option value="how_sam">How Sam</option>
                                        <option value="how_will_sam">How will Sam</option>
                                        <option value="why_sam">Why Sam</option>
                                        <option value="who_will_sam">Who will Sam</option>
                                    </select>
                                    &nbsp; go to class everyday? Answer: He’ll take the bus.

                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <!-- Red SECTION -->
            <div class="row">
                <div class="container-fluid red_border_left">
                    <p class="small_title">Past Participles:</p>
                    <p class="font-italic">Complete the chart writing verbs in past participle.</p>
                    <div class="row">
                        <div class="col">
                            <div class="form-group form-inline ml-5">
                                <label>I have &nbsp;
                                    <select class="form-control" name="p_tense_1">
                                        <option value="">...</option>
                                        <option value="live">live</option>
                                        <option value="living">living</option>
                                        <option value="lived">lived</option>
                                        <option value="liven">liven</option>
                                    </select>
                                    &nbsp; in the United States for 3 years.
                                </label>
                            </div>

                            <div class="form-group form-inline ml-5">
                                <label>My parents &nbsp;
                                    <select class="form-control" name="p_tense_2">
                                        <option value="">...</option>
                                        <option value="been">been</option>
                                        <option value="did">did</option>
                                        <option value="have">have</option>
                                        <option value="has">has</option>
                                    </select>
                                    &nbsp; bought a new car.
                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>They &nbsp;
                                    <select class="form-control" name="p_tense_3">
                                        <option value="">...</option>
                                        <option value="have">have</option>
                                        <option value="havent">haven’t</option>
                                        <option value="dont_have">don’t have</option>
                                        <option value="hand">hand</option>

                                    </select>
                                    &nbsp; eaten Chinese food in a long time
                                </label>
                            </div>

                            <div class="form-group form-inline ml-5">
                                <label>Have you ever &nbsp;
                                    <select class="form-control" name="p_tense_4">
                                        <option value="">...</option>
                                        <option value="ride">ride</option>
                                        <option value="ridden">ridden</option>
                                        <option value="riding">riding</option>
                                        <option value="rode">rode</option>

                                    </select>
                                    &nbsp; a horse.
                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>I have &nbsp;
                                    <select class="form-control" name="p_tense_5">
                                        <option value="">...</option>
                                        <option value="never">never</option>
                                        <option value="ever">ever</option>
                                        <option value="no">no</option>
                                        <option value="yet">yet</option>
                                    </select>
                                    &nbsp; been to France. I don't speak French.
                                </label>
                            </div>
                            <div class="form-group form-inline ml-5">
                                <label>Daniel hasn’t finished his homework &nbsp;
                                    <select class="form-control" name="p_tense_6">
                                        <option value="">...</option>
                                        <option value="at">at</option>
                                        <option value="for">for</option>
                                        <option value="since">since</option>
                                        <option value="yet">yet</option>
                                    </select>
                                </label>
                            </div>

                            <div class="form-group form-inline ml-5">
                                <label>We have been waiting for the train &nbsp;
                                    <select class="form-control" name="p_tense_7">
                                        <option value="">...</option>
                                        <option value="at">at</option>
                                        <option value="for">for</option>
                                        <option value="since">since</option>
                                        <option value="yet">yet</option>
                                    </select>
                                    &nbsp; thirty minutes!
                                </label>
                            </div>

                            <div class="form-group form-inline ml-5">
                                <label>Martha has worked as a waitress &nbsp;
                                    <select class="form-control" name="p_tense_8">
                                        <option value="">...</option>
                                        <option value="for">for</option>
                                        <option value="during">during</option>
                                        <option value="since">since</option>
                                    </select>
                                    &nbsp; 2004.
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ..end PAGE 1 -->
        <div class="page_2">

        </div>
        <!-- Submit and Continue -->
        <hr>
        <div class="row">
            <div class="col-10">
                <button type="submit" class="btn btn-block btn-outline-primary mt-2">Submit and Continue</button>
            </div>
            <div class="col-2">
                <button type="button" id="exit_form" class="btn btn-block btn-outline-danger mt-2">Exit Placement Test
                </button>
            </div>
        </div>
    </form>

    <form method="POST" action="#" id="page_2">
    </form>

</div><!-- end. main container -->
<div id="loading_container" style="display: none">
    <div class="loader"></div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<!-- Always include main,js before any templates scripts -->
<script src="js/main.js"></script>
<script src="js/general.js"></script>


<div id="fixed_logo">
    <img src="https://uceda.edu/wp-content/uploads/2017/04/Triangle.png" height="35px" width="inherit">
</div>
</body>
</html>