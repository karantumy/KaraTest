    /*
    function submit_answer(id, q) {
        alert('ghgieheg');
    }
    */

$(document).ready(function() {

    function millisecondsToString(milliseconds) {
    var oneHour = 3600000;
    var oneMinute = 60000;
    var oneSecond = 1000;
    var seconds = 0;
    var minutes = 0;
    var hours = 0;
    var result;

    if (milliseconds >= oneHour) { hours = Math.floor(milliseconds / oneHour); }
    milliseconds = hours > 0 ? (milliseconds - hours * oneHour) : milliseconds;
    if (milliseconds >= oneMinute) { minutes = Math.floor(milliseconds / oneMinute); }
    milliseconds = minutes > 0 ? (milliseconds - minutes * oneMinute) : milliseconds;
    if (milliseconds >= oneSecond) { seconds = Math.floor(milliseconds / oneSecond); }
    milliseconds = seconds > 0 ? (milliseconds - seconds * oneSecond) : milliseconds;
    if (hours > 0) { result = (hours > 9 ? hours : "0" + hours) + ":"; } else { result = "00:"; }
    result = "";
    if (minutes > 0) { result += (minutes > 9 ? minutes : "0" + minutes) + ":"; } else { result += "00:"; }
    if (seconds > 0) { result += (seconds > 9 ? seconds : "0" + seconds) + ":"; } else { result += "00:"; }
    if (milliseconds > 0) {
        if (milliseconds < 100) {
            if (milliseconds < 10) { result += "00" + milliseconds; } else { result += "0" + milliseconds; }
        } else {
            result += milliseconds;
        }
    } else {
        result += "000";
    }

    return result;
}

    $.fn.preloadImages = function(callback) {
        counter = this.length;
        this.each(function() {
            $('<img>').attr({ src: this }).load(function() {
            counter--;
            if (counter == 0) { callback(); }
            });
        });
    };

    var timer_start = 0;
    var answers_array = new Array();
    var timer = '';

    function clock() {
        this_timer = new Date();
        this_milli = this_timer.getTime() - timer_start.getTime();
        this_time = millisecondsToString(this_milli);
        $('.timer span').html(this_time);
        //console.log('clock called' + timer_start.getTime() );
    }

    function build_quiz() {
        var folder = 'assets/img/';
        var json = window.json;
        var image_array = new Array();
        $.each(json, function() {
          //image_array.push(folder + this.images.clue);
          image_array.push(folder + this.images.map);
        });
        console.log('Preloading ' + image_array.length + ' images.');
        $(image_array).preloadImages(function () {
            console.log('Images preloaded.')
            $('.top_panel').append('<div id="slides"><div id="slides_holder"></div></div>');
            $('.top_panel').append('<div id="overlay"></div>');
            q_counter = 1;
            $.each(json, function(k) {
                slide = '<div class="slide" style="background: url( ' + folder + this.images.map + ') top left no-repeat;"><div class="bottomPanel">';
                this_which = this.which;
                $.each(this.hotspots, function (j) {
                    slide += '<a data-bi="' + this.id + '" data-bw="' + this_which + '" class="button" style="display: block; position: absolute; top: ' + this.x + 'px; left: ' + this.y + 'px;" href="#location' + (j+1) + '">' + this.id + '</a>';
                });
                slide += '<div class="q_a">' + this.question_a +
                '</div>';
                slide += '<div class="q_b">' + this.question_b + '</div>';
                slide += '<div class="q_c">' + this.question_c + '</div>';
                slide += '<div class="question">QUESTION: <span class="number"><span class="active">' + q_counter + '</span> <span>of</span> ' + image_array.length +'</span></div><div class="questionTitle"><p>' + this.question + '</p></div></div></div>';
                q_counter++;
                $('#slides_holder').append(slide);
            });
            // start timer
            timer_start = new Date();
            timer = window.setInterval(function(){clock()}, 62);
            $('#overlay').fadeOut(100);
        });

        $( document ).on( "click", "a.button", function(e) {
            e.preventDefault()
            index = $(this).parent().parent().index();
            id = $(this).data('bi');
            wh = $(this).data('bw');
            var tmp_timer = new Date();
            var this_milli = tmp_timer.getTime() - timer_start.getTime();
            answers_array.push({ a_id: id, a_qu: wh, a_t: this_milli});
            if (index + 1 == $('.slide').length) {
                $('.timer').hide();
                timer=window.clearInterval(timer);
                console.log('quiz finished');
                $.ajax({
                    type: 'POST',
                    url: 'score.php',
                    data: {ans: answers_array},
                    success: function(score) {
                        $('.top_instructions').hide();
                        $('#slides_holder').fadeOut(100);
                        $('#slides').append(score);
                    },
                    dataType: 'html'
                });
            } else {
                $('#slides_holder').animate({
                    left: "-=760"
                }, 100);
            }
        });

    }

    if ( $('.build_quiz').length == 1 ) {
        build_quiz(json);
    }

});