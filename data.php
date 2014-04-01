<?php

/* data */

// $number_of_questions_in_quiz = 9;
$number_of_questions_in_quiz = 9;

$questions = array();

$questions[] = array(
    'which' => 1,
    'question' => 'Which of these subjects do you most enjoy?',
    'images' => array('clue' => 'clue/1.jpg', 'map' => 'letts/q_abc.jpg'),
    'hotspots' => array('a' => array( 70, 680, 'a'), 'b' => array( 168, 680, 'b'), 'c' => array( 265, 680, 'c')),
    'answers' => array(
        'a' => 'English',
        'b' => 'Languages',
        'c' => 'Drama'
    )
);
$questions[] = array(
    'which' => 2,
    'question' => 'Which of these are you most likely to do if you get bored in class?',
    'images' => array('clue' => 'clue/18.jpg', 'map' => 'letts/q_abc.jpg'),
    'hotspots' => array('a' => array( 70, 680, 'a'), 'b' => array( 168, 680, 'b'), 'c' => array( 265, 680, 'c')),
    'answers' => array(
        'a' => 'Doodle',
        'b' => 'Talk',
        'c' => 'Fiddle'
    )
);
$questions[] = array(
    'which' => 3,
    'question' => 'If you are doing something for the first time, which of the following approaches do you prefer?',
    'images' => array('clue' => 'clue/20.jpg', 'map' => 'letts/q_abc.jpg'),
    'hotspots' => array('a' => array( 70, 680, 'a'), 'b' => array( 168, 680, 'b'), 'c' => array( 265, 680, 'c')),
        'answers' => array(
        'a' => 'Watch someone else show me how to do it',
        'b' => 'Ask someone to explain it to me',
        'c' => 'Get on with it myself'
    )
);
$questions[] = array(
    'which' => 4,
    'question' => 'Where are you most likely to sit when you go to the cinema?',
    'images' => array('clue' => 'clue/26.jpg', 'map' => 'letts/q_abc.jpg'),
    'hotspots' => array('a' => array( 70, 680, 'a'), 'b' => array( 168, 680, 'b'), 'c' => array( 265, 680, 'c')),
        'answers' => array(
        'a' => 'At the front so that I get the best view',
        'b' => 'Somewhere in the middle to make the most of the surround sound',
        'c' => 'Near the door as it&rsquo;s handy for getting snacks and making a quick exit'
    )
);
$questions[] = array(
    'which' => 5,
    'question' => 'Which of the following best describes your map reading skills?',
    'images' => array('clue' => 'clue/28.jpg', 'map' => 'letts/q_abc.jpg'),
    'hotspots' => array('a' => array( 70, 680, 'a'), 'b' => array( 168, 680, 'b'), 'c' => array( 265, 680, 'c')),
        'answers' => array(
        'a' => 'I&rsquo;m a really good map reader',
        'b' => 'Listening to satnat give the directions is much easier',
        'c' => 'I&rsquo;m too distracted by the car stereo or other things to pay attention'
    )
);
$questions[] = array(
    'which' => 6,
    'question' => 'How would you react if someone you didn’t know very well came up to you and gave you a hug?',
    'images' => array('clue' => 'clue/31.jpg', 'map' => 'letts/q_abc.jpg'),
    'hotspots' => array('a' => array( 70, 680, 'a'), 'b' => array( 168, 680, 'b'), 'c' => array( 265, 680, 'c')),
        'answers' => array(
        'a' => 'I&rsquo;d feel uncomfortable &ndash; I don&rsquo;t know them',
        'b' => 'I&rsquo;d rather speak to them first to get to know them a bit',
        'c' => 'I&rsquo;d hug them back - what a lovely gesture'
    )
);
$questions[] = array(
    'which' => 7,
    'question' => 'Which of the following best describes the way you remember key events?',
    'images' => array('clue' => 'clue/37.jpg', 'map' => 'letts/q_abc.jpg'),
    'hotspots' => array('a' => array( 70, 680, 'a'), 'b' => array( 168, 680, 'b'), 'c' => array( 265, 680, 'c')),
        'answers' => array(
        'a' => 'I remember who was there',
        'b' => 'I remember the names of the places I visited',
        'c' => 'I remember what happened'
    )
);
$questions[] = array(
    'which' => 8,
    'question' => 'How would you describe your dress sense?',
    'images' => array('clue' => 'clue/75.jpg', 'map' => 'letts/q_abc.jpg'),
    'hotspots' => array('a' => array( 70, 680, 'a'), 'b' => array( 168, 680, 'b'), 'c' => array( 265, 680, 'c')),
        'answers' => array(
        'a' => 'I never leave the house without making sure I look immaculate',
        'b' => 'As long as I&rsquo;m dressed for the occasion I don&rsquo;t mind what I wear',
        'c' => 'I need to make sure I&rsquo;m comfortably dressed for the activity I&rsquo;m doing'
    )
);
$questions[] = array(
    'which' => 9,
    'question' => 'Where would you most like to go on holiday?',
    'images' => array('clue' => 'clue/76.jpg', 'map' => 'letts/q_abc.jpg'),
    'hotspots' => array('a' => array( 70, 680, 'a'), 'b' => array( 168, 680, 'b'), 'c' => array( 265, 680, 'c')),
        'answers' => array(
        'a' => 'A deserted beach &ndash; I love peace and tranquillity',
        'b' => 'Las Vegas &ndash; I love the noise and ambience',
        'c' => 'Skiing or rock climbing &ndash; I love being active'
    )
);

/*
    A: VISUAL
    B: AUDITORY
    C: KINAESTHETIC
*/

// ALL a's

$a_top = '<h2>You have a <span>VISUAL</span> learning style</h2><i class="icon icon_a"></i>';
$a_left = '<p>You learn best by seeing and looking. You like to keep an eye on the teacher by sitting at the front of the class. You often find that information ‘clicks’ when someone shows you how it works using pictures and diagrams.  You may close your eyes to visualise or remember something so that you can picture it in your head.</p>';
$a_right = '<p>Revision techniques that work well for you:</p>
    <ul>
    <li>study in a quiet place away from noise, which will distract you</li>
    <li>take notes and collect hand-outs</li>
    <li>use colour to highlight key points</li>
    <li>circle or underline key words</li>
    <li>use brainstorming and spider diagrams to get your ideas down</li>
    <li>draw diagrams, charts, maps, timelines, etc. to illustrate ideas and help memorize them</li>
    <li>use videos and films where relevant</li>
    </ul>';

// ALL b's

$b_top = '<h2>You have an <span>AUDITORY</span> learning style</h2><i class="icon icon_b"></i>';
$b_left = '<p>You learn best by hearing and listening. You like to sit where you can hear but you don’t need to see what is going on. You acquire knowledge by reading aloud or by listening to others explain things. You remember information by verbalising lessons to yourself.</p>';
$b_right = '<p>Revision techniques that work well for you:</p>
    <ul>
        <li>listen to podcasts and audio books</li>
        <li>read your notes out loud and repeat facts out loud with your eyes closed</li>
        <li>record your own notes so that you can play them back to yourself</li>
        <li>add jingles or sound effects to your audio notes to help memorise key points</li>
        <li>discuss ideas with friends / parents / teachers or give a short speech or presentation</li>
        <li>revise in a small study group</li>
        <li>create mnemonics and rhymes to help you memorise key points</li>
    </ul>';

// ALL c's

$c_top = '<h2>You have a <span>KINAESTHETIC </span> learning style</h2><i class="icon icon_c"></i>';
$c_left = '<p>You learn best by touching and doing. You like to sit near a door or somewhere you can move around easily as you need to take frequent breaks. You are good at remembering events but are less good at recalling what people said. You like to be active and practical activities help you to perceive and learn. You enjoy field trips and want hands-on experience.</p>';
$c_right = '<p>Revision techniques that work well for you:</p>
    <ul>
        <li>revise in short bursts - take frequent breaks</li>
        <li>use memory games and flash cards to help you memorize key points</li>
        <li>make posters to put up in your room / study area</li>
        <li>put post-it notes covering key points around your room / the house</li>
        <li>create a revision file</li>
        <li>squeeze or bounce a ball whilst reading through your notes</li>
        <li>use short interactive tests and quizzes</li>
    </ul>';

// mostly A & B

$ab_top = '<h2>You have a combined <span>VISUAL</span> and <span>AUDITORY</span> learning style</h2><i class="icon icon_ab"></i>';
$ab_left = '<p>You learn by seeing and looking which is often reinforced by hearing and listening. You like to sit where you can hear your teacher and you often find that information ‘clicks’ when someone shows you how it works using pictures and diagrams.  You may close your eyes to visualise or remember something so that you can picture it in your head and can acquire information by reading it out loud. </p>';
$ab_right = '<p>Revision techniques that work well for you:</p>
    <ul>
        <li>take notes and collect hand-outs</li>
        <li>read your notes out loud and repeat facts out loud with your eyes closed</li>
        <li>use colour to highlight key points and circle or underline key words</li>
        <li>record your own notes so that you can play them back to yourself</li>
        <li>use brainstorming and spider diagrams to get your ideas down</li>
        <li>discuss ideas with friends / parents / teachers or give a short speech or presentation</li>
        <li>use videos and films where relevant</li>
    </ul>';

// mostly B & C

$bc_top = '<h2>You have a combined <span>AUDITORY</span> and <span>KINAESTHETIC</span> learning style</h2><i class="icon icon_bc"></i>';
$bc_left = '<p>You learn by hearing and listening which is often reinforced by touching and doing. You like to sit where you can hear but you don’t need to see what is going on. You acquire knowledge by reading aloud or by listening to others explain things. You remember information by verbalising lessons to yourself. You like to be active and practical activities help you to perceive and learn. You enjoy field trips and want hands-on experience.</p>';
$bc_right = '<p>Revision techniques that work well for you:</p>
    <ul>
        <li>listen to podcasts and audio books</li>
        <li>record your own notes so that you can play them back to yourself</li>
        <li>add jingles or sound effects to your audio notes to help memorise key points</li>
        <li>discuss ideas with friends / parents / teachers or give a short speech or presentation</li>
        <li>revise in short bursts - take frequent breaks</li>
        <li>use memory games and flash cards to help you memorize key points</li>
        <li>use short interactive tests and quizzes</li>
    </ul>';

// mostly A & C

$ac_top = '<h2>You have a combined <span>VISUAL</span> and <span>KINAESTHETIC</span> learning style</h2><i class="icon icon_ac"></i>';
$ac_left = '<p>You learn by seeing and looking and this is reinforced by touching and doing. You like to keep an eye on the teacher by sitting at the front of the class but need to take regular breaks. You may close your eyes to visualise or remember something so that you can picture it in your head. You like to be active and practical activities help you to perceive and learn. You enjoy field trips and want hands-on experience.</p>';
$ac_right = '<p>Revision techniques that work well for you:</p>
    <ul>
        <li>revise in short bursts - take frequent breaks</li>
        <li>use memory games and flash cards to help you memorize key points</li>
        <li>take notes and collect hand-outs</li>
        <li>use colour to highlight key points and circle or underline key words</li>
        <li>use brainstorming and spider diagrams to get your ideas down</li>
        <li>make posters to put up in your room / study area</li>
        <li>put post-it notes covering key points around your room / the house</li>
        <li>create a revision file</li>
    </ul>';

// mostly A & B & C

$abc_top = '<h2>You have a combined <span>VISUAL</span>, <span>AUDITORY</span> and <span>KINAESTHETIC</span> learning style</h2><i class="icon icon_abc"></i>';
$abc_left = '<p>You learn by seeing but need to listen to information to recall it effectively and learn best when it is reinforced through hands-on experience. You often find that information ‘clicks’ when someone shows you how it works using pictures and diagrams and you remember it by verbalising lessons to yourself. You like to be active and practical activities help you to perceive and learn.</p>';
$abc_right = '<p>Revision techniques that work well for you:</p>
    <ul>
        <li>take notes and collect hand-outs</li>
        <li>use colour to highlight key points and circle or underline key words</li>
        <li>listen to podcasts and audio books</li>
        <li>draw diagrams, charts, maps, timelines, etc. to illustrate ideas and help memorize them</li>
        <li>read your notes out loud and repeat facts out loud with your eyes closed</li>
        <li>discuss ideas with friends / parents / teachers or give a short speech or presentation</li>
        <li>revise in a small study group</li>
        <li>create mnemonics and rhymes to help you memorise key points</li>
    </ul>';