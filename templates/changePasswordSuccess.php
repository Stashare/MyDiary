<?php include "templates/include/header.php" ?>

  <div data-role="page" data-dialog="true" id="changePasswordSuccess">

    <div data-role="header">
      <h1>Password Changed</h1>
    </div>

    <div role="main" class="ui-content">

      <div style="text-align: center;">
        <h2>Password Changed</h2>
        <p>Your password has been changed.</p>
      </div>

      <a href="<?php echo APP_URL?>?action=options" class="ui-btn">OK</a>

    </div>

  </div>

<?php include "templates/include/footer.php" ?>

