<?php include "templates/include/header.php" ?>

  <div data-role="page" data-dialog="true" id="sendPasswordSuccess">

    <div data-role="header">
      <h1>Password Sent</h1>
    </div>

    <div role="main" class="ui-content">

      <div style="text-align: center;">
        <h2>Password Sent</h2>
        <p>Your new password has been sent to your email address.</p>
      </div>

      <a href="<?php echo APP_URL?>?action=login" class="ui-btn">OK</a>

    </div>

  </div>

<?php include "templates/include/footer.php" ?>

