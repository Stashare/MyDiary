<?php include "templates/include/header.php" ?>

  <div data-role="page" id="sendPasswordForm">

    <div data-role="header">
      <h1>Send New Password</h1>
    </div>

    <div role="main" class="ui-content">

      <div style="text-align: center;">
        <h2>Send New Password</h2>
        <p>Enter your email address below, and we'll send a new password to you.</p>
      </div>

      <form action="<?php echo APP_URL?>" method="post" data-transition="fade">
        <input type="hidden" name="action" value="sendPassword" />
        <input type="hidden" name="sendPassword" value="true" />

        <div class="ui-field-contain">
          <input type="email" name="emailAddress" id="emailAddress" placeholder="Email address" required autofocus maxlength="50">
        </div>

        <input type="submit" name="sendPassword" value="Send Password" />
        <a href="<?php echo APP_URL?>" data-rel="back" class="ui-btn ui-btn-b" data-transition="slide" data-direction="reverse">Cancel</a>

      </form>

    </div>

  </div>

<?php include "templates/include/footer.php" ?>

