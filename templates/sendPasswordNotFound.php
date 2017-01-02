<?php include "templates/include/header.php" ?>

  <div data-role="page" data-dialog="true" id="sendPasswordNotFound">

    <div data-role="header">
      <h1>Error</h1>
    </div>

    <div role="main" class="ui-content">

      <div style="text-align: center;">
        <h2>Task Tango</h2>
        <p>We couldn't find your email address in the database. You can sign up using this email address if you like.</p>
      </div>

      <a href="<?php echo APP_URL?>?action=signup" class="ui-btn">Sign Up</a>
      <a href="<?php echo APP_URL?>?action=sendPassword" class="ui-btn">Try Another Address</a>

    </div>

  </div>

<?php include "templates/include/footer.php" ?>

