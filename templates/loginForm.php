<?php include "templates/include/header.php" ?>

  <div data-role="page" id="loginForm">

    <div data-role="header">
      <h1>Login</h1>
    </div>

    <div role="main" class="ui-content">

      <div style="text-align: center;">
        <h2>Task Tango</h2>
      </div>

      <form action="<?php echo APP_URL?>" method="post" data-transition="fade">
        <input type="hidden" name="action" value="login" />
        <input type="hidden" name="login" value="true" />

        <div class="ui-field-contain">
          <input type="email" name="emailAddress" id="emailAddress" placeholder="Email address" required autofocus maxlength="50">
        </div>

        <div class="ui-field-contain">
          <input type="password" name="password" id="password" placeholder="Password" required maxlength="30">
        </div>

        <input type="submit" name="login" value="Login" />
        <a href="<?php echo APP_URL?>?action=signup" class="ui-btn" data-transition="slide">Sign Up</a>
        <a href="<?php echo APP_URL?>?action=sendPassword" class="ui-btn" data-transition="slide">Forgot Your Password?</a>

      </form>

    </div>

  </div>
  
  <div data-role="footer" data-position="fixed"><h1>Fixed Footer</h1></div>
</div>

<?php include "templates/include/footer.php" ?>

