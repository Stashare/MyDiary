<?php include "templates/include/header.php" ?>

  <div data-role="page" id="signupForm">

    <div data-role="header">
      <h1>Sign Up</h1>
    </div>

    <div role="main" class="ui-content">

      <div style="text-align: center;">
        <h2>Task Tango</h2>
      </div>

      <form action="<?php echo APP_URL?>" method="post" data-transition="fade">
        <input type="hidden" name="action" value="signup" />
        <input type="hidden" name="signup" value="true" />

        <div class="ui-field-contain">
          <input type="email" name="emailAddress" id="emailAddress" placeholder="Email address" required autofocus maxlength="50">
        </div>

        <div class="ui-field-contain">
          <input type="password" name="password" id="password" placeholder="Password" required maxlength="30">
        </div>

        <div class="ui-field-contain">
          <input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Retype password" required maxlength="30">
        </div>

        <input type="submit" name="signup" value="Sign Up" />
        <a href="<?php echo APP_URL?>" class="ui-btn ui-btn-b" data-rel="back" data-transition="slide" data-direction="reverse">Cancel</a>

      </form>

    </div>

  </div>

<?php include "templates/include/footer.php" ?>

