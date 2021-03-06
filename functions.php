<?php

/* functions */

$settings['title'] = 'Letts - Learning Styles Quiz';

function letts_header() {
    global $settings;
    echo '
    <!DOCTYPE html>
    <!--[if IE 7]>
    <html class="ie ie7" lang="en-US">
    <![endif]-->
    <!--[if IE 8]>
    <html class="ie ie8" lang="en-US">
    <![endif]-->
    <!--[if !(IE 7) | !(IE 8)  ]><!-->
    <html lang="en-US">
    <!--<![endif]-->
    <head>
    <link rel="shortcut icon" href="assets/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo" rel="stylesheet" type="text/css">
    <link href="assets/css/reset.css" rel="stylesheet" />
    <link href="assets/css/styles.css?v='.date('U').'" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/fancybox/source/jquery.fancybox.css" />

    <script src="assets/js/jquery.js"></script>
    <!-- <script src="assets/fancybox/source/jquery.fancybox.js"></script> -->
    <script src="assets/js/scripts.js?v='.date('U').'"></script>
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta charset="UTF-8" />
    <title>'.$settings['title'].'</title>
    <meta name="viewport" content="width=802px">
    </head>
    <body>
    <!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WNPNGV"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-WNPNGV');</script><!-- End Google Tag Manager -->
    ';
}

function letts_footer() {
    echo '
    <footer id="pageFooter">
        <nav>
            <ul class="clearfix">
                <li><a href="http://www.collins.co.uk/page/Terms+%26+Conditions" target="_blank">Terms & Conditions</a><span>|</span></li>
                <li><a href="http://www.collins.co.uk/page/Privacy+policy" target="_blank">Privacy Policy</a></li>
            </ul>
        </nav>
        <p>&copy;'.date('Y').' HarperCollins Publishers Limited. All rights reserved.</p>
    </footer>';
}

function footer_boxes() {
    echo '
    <div class="bottom_panel clearfix">
        <div class="box_a box">
            <a href="http://www.collins.co.uk/product/9781844192786/Letts+GCSE+Success+-+Maths+-+Higher+Tier%3a+Revision+Guide" target="_blank">
                <h2>See the Maths revision&nbsp;guides</h2>
            </a>
        </div>
        <div class="box_b box">
            <a href="http://www.collins.co.uk/product/9781844195145/Letts+GCSE+Success+-+Science%3a+Revision+Guide" target="_blank">
                <h2>See the Science revision&nbsp;guides</h2>
            </a>
        </div>
        <div class="box_c box">
            <a href="http://www.collins.co.uk/product/9781844195206/Letts+GCSE+Success+-+English+Language+and+Literature%3a+Revision+Guide" target="_blank">
                <h2>See the English revision&nbsp;guides</h2>
            </a>
        </div>
        <p>Please note, your entry may take time to appear. Want to report a problem? <a href="mailto:education.marketing@harpercollins.co.uk">education.marketing@harpercollins.co.uk</a></p>
    </div>';
}