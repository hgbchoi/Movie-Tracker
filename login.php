<?php include "includes/widgets.php"?>
<?php
widgets::navbar();
?>


  <div class = "wrapper-login">
      <div class = "signin-box">
        <form action ="includes/processForms.php" method = "POST">
          <h1>Sign In</h1>
          <input id = "email-field" name = "emailField" type = "text" placeholder = "Username">
          <input id = "password-field" name = "passwordField" type = "password" placeholder = "Password" >
          <button name = "loginButton">Sign in</button>
        </form>
        <p>Not Registered? <a class = "register-button" href = "register.php" >Create an account</a></p>
      </div>
    </div>
    <script type = "text/javascript" src="javascript/main.js"></script>

</body>
