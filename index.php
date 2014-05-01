<?php
/*if ($_SERVER['HTTP_HOST']='prettygoodwebhost.com') {
?>
<script type="text/javascript">
window.top.location.href = "https://www.facebook.com/pages/Pretty-Good-Test/112238675534399?id=112238675534399&sk=app_659643390727212";
</script>
<?php
exit;
}*/
require_once 'functions.php';
letts_header();
?>
<div class="container show_initial_modal">
    <div class="top_panel">
      <div class="welcome">
        <div class="welcome_top">
          <h1>What&rsquo;s your learning style?</h1>
          <p>Learning styles are simply different approaches to learning. There are three common learning styles: <span>visual</span>, <span>auditory</span> and <span>kinaesthetic</span>. Take the quiz to find out which learning style you are and what study techniques can help you get the best out of your revision. You may find that more than one learning style works for you.</p>
        </div>
        <div class="welcome_bottom clearfix">
          <div class="welcome_bottom_left"><p>Don&rsquo;t think about the questions too much <br />&ndash; just go with your first response.</p></div>
          <div class="welcome_bottom_right"><a class="start" href="quiz.php">START</a></div>
        </div>
      </div>
    </div>
    <?php footer_boxes(); ?>
</div>
<?php
require_once 'fb.php';
letts_footer();
?>
</body>
</html>
<?php
