<?php
require_once 'functions.php';
require_once 'data.php';
letts_header();
?>

<div class="container build_quiz">
    <div class="top_instructions" style="display: none;"><p>Take this quiz to find out which learning style suits you best.
Don&rsquo;t think about the questions too much &ndash; just go with your first response. </p></div>
    <div class="top_panel">
        <div class="timer"></div>
    </div>
    <?php footer_boxes(); ?>
    <?php
            // choose random questions and shuffle
            $rand_keys = array_rand($questions, $number_of_questions_in_quiz);
            shuffle($rand_keys);

            // create json of data to write to page
            $output_questions = array();
            foreach($rand_keys as $key) {
                $output_hotspots = array();
                $hotspots = $questions[$key]['hotspots'];
                foreach($hotspots as $hotspot_key => $hotspot) {
                    $output_hotspots[] = array(
                        'id' => $hotspot_key, 'x' => $hotspot[0], 'y' => $hotspot[1]
                    );
                }
                $output_questions[] = array(
                    'which' => $questions[$key]['which'],
                    'question' => $questions[$key]['question'],
                    'images' => array( 'clue' => $questions[$key]['images']['clue'], 'map' => $questions[$key]['images']['map'], ),
                    'hotspots' => $output_hotspots,
                    'question_a' => $questions[$key]['answers']['a'],
                    'question_b' => $questions[$key]['answers']['b'],
                    'question_c' => $questions[$key]['answers']['c']
                );
            }
            $json = json_encode($output_questions);
        ?>
        <script type="text/javascript">
        <?php echo 'window.json = '.$json.';'; ?>
        </script>
</div>
<?php
require_once 'fb.php';
letts_footer();
?>
</body>
</html>
<?php
