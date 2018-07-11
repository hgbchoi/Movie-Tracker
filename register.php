<?php include "includes/widgets.php"?>
<?php
widgets::navbar();
?>


      <div class = "wrapper-register">
        <div class = "register-box">
          <form action ="includes/processForms.php" method = "POST" id = "registerForm">
            <h1>Register</h1>
          <div class = "invalidInput">
            <p id = "invalidUsername" class = "hidden red-text">Username Invalid (6-18 characters)</p>
            <p id = "existingUsername" class = "hidden red-text">Username is already taken</p>
          </div>
            <input id = "username-field" name = "usernameField" type = "text" placeholder = "Username" >
          <div class = "invalidInput">
            <p id = "invalidPassword" class = "hidden red-text">Password Invalid (8+ characters)</p>
          </div>
            <input id = "password-field" name = "passwordField" type = "password" placeholder = "Password" >
          <div class = "invalidInput">
            <p id = "invalidConfirm" class = "hidden red-text">Passwords do not match</p>
          </div>
            <input id = "password-confirm" name = "confirmField" type = "password" placeholder = "Confirm Password" >
          <div class = "invalidInput">
            <p id = "invalidEmail" class = "hidden red-text">Invalid Eamil</p>
          </div>
            <input id = "email-field" name = "emailField" type = "text" placeholder = "Email">
            <button id = "signin-button" name = "signinButton">Register</button>
          </form>
        </div>
      </div>
      <script type = "text/javascript" src="javascript/validate.js"></script>
      <script type = "text/javascript" src="javascript/main.js"></script>

</body>