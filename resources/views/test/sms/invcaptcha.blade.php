<script src="https://www.gstatic.com/firebasejs/5.7.0/firebase.js"></script>
<script>
    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyB-Zlzt-upCW0-lstAyhiCjAsfPj65AUQY",
        authDomain: "n0aing-group-sms-verification.firebaseapp.com",
        databaseURL: "https://n0aing-group-sms-verification.firebaseio.com",
        projectId: "n0aing-group-sms-verification",
        storageBucket: "n0aing-group-sms-verification.appspot.com",
        messagingSenderId: "206661798924"
    };
    firebase.initializeApp(config);





</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.orange-indigo.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <h3>
                        <center><img src="sd.PNG" width="5%"/>
                            Firebase Phone Auththentication With Laravel
                        </center>
                    </h3>
                </div>
            </div>
            <div>
                <form id="sign-in-form" action="#">
                    <input type="text" name="phone" class="form-control">

                    <button class="btn btn-primary" id="sign-in-button" onclick="onSignInSubmit()">Sign-in</button>
                </form>
            </div>
        </div>
    </div>
    <br/>
    <br/>
</div>
</body>
</html>
<script>
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('sign-in-button', {
        'size': 'invisible',
        'callback': function(response) {
            // reCAPTCHA solved, allow signInWithPhoneNumber.
            onSignInSubmit();
        }
    });

    function onSignInSubmit()
    {
        var phoneNumber ="+959760870808";
        var appVerifier = window.recaptchaVerifier;

        firebase.auth().signInWithPhoneNumber(phoneNumber, appVerifier)
            .then(function (confirmationResult) {
                // SMS sent. Prompt user to type the code from the message, then sign the
                // user in with confirmationResult.confirm(code).
                alert('hi');
                window.confirmationResult = confirmationResult;

            }).catch(function (error) {
            // Error; SMS not sent
            // ...
            console.log(error);
        });
    }
</script>