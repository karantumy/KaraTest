<?php

require_once 'data.php';

$total_score = 0;
$num_correct = 0;
$points_for_correct = 10000;
$time_cutoff = 5000;

function grouping($score) {
    global $number_of_questions_in_quiz, $points_for_correct, $time_cutoff;
    $max_possible = $number_of_questions_in_quiz * ($points_for_correct + $time_cutoff);
    if ($score > $max_possible) {
        return 'Cheat!';
    } else {
        if ($score > $max_possible * 0.8) {
            return 'Very Good';
        }
        if ($score > $max_possible * 0.6) {
            return 'Above Average';
        }
        if ($score > $max_possible * 0.4) {
            return 'Average';
        }
        if ($score > $max_possible * 0.2) {
            return 'Below Average';
        }
        return 'Poor';
    }
}

if ( isset($_POST['ans']) && $_POST['ans'] != '' ) {

    echo '
    <div class="results">
        <div class="finish_top clearfix">
            <a class="quit" href="index.php">PLAY AGAIN</a>
            <h1>Congratulations you have<br />completed the quiz</h1>';

    $a = 0;
    $b = 0;
    $c = 0;

    foreach($_POST['ans'] as $ans) {
        if ($ans['a_id'] == 'a') { $a++; }
        if ($ans['a_id'] == 'b') { $b++; }
        if ($ans['a_id'] == 'c') { $c++; }
    }

    if ($a > $b && $a > $c) {
        // a
        $this_top   = $a_top;
        $this_left  = $a_left;
        $this_right = $a_right;
    }
    if ($b > $a && $b > $c) {
        // b
        $this_top   = $b_top;
        $this_left  = $b_left;
        $this_right = $b_right;
    }
    if ($c > $a && $c > $b) {
        // b
        $this_top   = $c_top;
        $this_left  = $c_left;
        $this_right = $c_right;
    }
    if ($a == $b && $a > $c) {
        // ab
        $this_top   = $ab_top;
        $this_left  = $ab_left;
        $this_right = $ab_right;
    }
    if ($b == $c && $c > $a) {
        // bc
        $this_top   = $bc_top;
        $this_left  = $bc_left;
        $this_right = $bc_right;
    }
    if ($a == $c && $a > $b) {
        // ac
        $this_top   = $ac_top;
        $this_left  = $ac_left;
        $this_right = $ac_right;
    }
    if ($a == $c && $a == $b) {
        // abc
        $this_top   = $abc_top;
        $this_left  = $abc_left;
        $this_right = $abc_right;
    }

    echo $this_top;
    echo '<div class="finish_top_divided">';
    echo '<div class="finish_top_left">'.$this_left.'</div>';
    echo '<div class="finish_top_right">'.$this_right.'</div>';
    echo '</div>';

    echo '
        </div>
        <div class="finish_bottom clearfix">
            <div class="finish_bottom_left"><a class="finish_bottom_left_link" href="#letts25"><span style="color:#fff;">Get a 25% discount when purchasing any Letts Revison<br />guide simply click here and use the code LETTS25</span></a></div>
            <div class="finish_bottom_right"><p>Tell your friends what learning style you are</p><div class="fb-share-button" data-href="https://prettygoodwebhost.com/fb/letts/" data-width="120" data-type="button_count"></div></div>
        </div>
    </div>
    <script>
        try {
            FB.XFBML.parse();
        } catch(ex){}
    </script>
    ';
} else {
    echo 'Error';
}