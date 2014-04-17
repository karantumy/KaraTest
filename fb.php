<?php
/* fb */
?>
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
          appId      : '648098001912462', // App ID
          status     : true, // check login status
          cookie     : true, // enable cookies to allow the server to access the session
          xfbml      : true  // parse XFBML
        });

        FB.Canvas.setSize({ width: 810, height: 1149 });

        FB.Canvas.setDoneLoading( function(response) {
            FB.Canvas.setAutoGrow();
        });
    };

    function requestCallback(response) {
        console.log('requestCallback: ' + response);
    }

    function postScore(score) {
        FB.ui({ method: 'feed',
            caption: 'I got ' + score + ' - Curabitur blandit tempus porttitor. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.',
            picture: 'https://prettygoodwebhost.com/fb/atlas/assets/img/atlas_quiz_logo.jpg',
            name: 'Atlas by Collins Quiz',
            link: 'https://www.facebook.com/pages/Pretty-Good-Test/112238675534399?id=112238675534399&sk=app_659643390727212'
        });
    }

    function Challenge(score) {
        var auth = false;
        FB.getLoginStatus(function(response) {
            if (response.status === 'connected') {
                auth = true;
            }
        });
        if (auth) {
            if (score == '' || score === undefined) {
                FB.ui({
                    method: 'apprequests',
                    title: 'Atlas Quiz by Collins',
                    message: 'Curabitur blandit tempus porttitor. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.'
                });
            } else {
                FB.ui({
                    method: 'apprequests',
                    title: 'Atlas Quiz by Collins',
                    message: 'I got ' + score + ' - Curabitur blandit tempus porttitor. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.'
                });
            }
        } else {
            console.log('=> loginThenChallenge');
            loginThenChallenge(score);
        }
    }
    function loginThenChallenge(score) {
        console.log('loginThenChallenge');
        FB.login(function(response) {
            console.log(response);
            if (response.authResponse) {
                Challenge(score);
            } else {
                console.log('User cancelled login or did not fully authorize.');
            }
        },{scope: 'email,user_photos'});
    }

    function Login() {
        FB.login(function(response) {
            if (response.authResponse) {
                getUserInfo();
                // FB.ui({method: 'apprequests', message: 'Atlas Challenge' }, requestCallback);
            } else {
                console.log('User cancelled login or did not fully authorize.');
            }
        },{scope: 'email,user_photos'});
    }

    function getUserInfo() {
        FB.api('/me', function(response) {
        var str="<b>Name</b> : "+response.name+"<br>";
            str +="<b>Link: </b>"+response.link+"<br>";
            str +="<b>Username:</b> "+response.username+"<br>";
            str +="<b>id: </b>"+response.id+"<br>";
            str +="<b>Email:</b> "+response.email+"<br>";
            str +="<input type='button' value='Get Photo' onclick='getPhoto();'/>";
            str +="<input type='button' value='Logout' onclick='Logout();'/>";
            document.getElementById("status").innerHTML=str;
        });
    }

    function getPhoto() {
        FB.api('/me/picture?type=normal', function(response) {
            var str="<br/><b>Pic</b> : <img src='"+response.data.url+"'/>";
            document.getElementById("status").innerHTML+=str;
        });
    }

    function Logout() {
        FB.logout(function(){document.location.reload();});
    }


    // Load the SDK asynchronously
    (function(d){
        var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement('script'); js.id = id; js.async = true;
        js.src = "//connect.facebook.net/en_US/all.js";
        ref.parentNode.insertBefore(js, ref);
    }(document));

</script>