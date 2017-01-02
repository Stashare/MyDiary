<?php include "templates/include/header.php" ?>

  <div data-role="page" id="changePasswordForm">

    <div data-role="header">
      <h1>Change Password</h1>
    </div>

    <div role="main" class="ui-content">

      <form action="<?php echo APP_URL?>" method="post" data-transition="fade">
        <input type="hidden" name="action" value="changePassword" />
        <input type="hidden" name="saveChanges" value="true" />
        <input type="hidden" name="authToken" value="<?php echo $_SESSION['authToken']?>" />

        <div class="ui-field-contain">
          <input type="password" name="currentPassword" id="currentPassword" placeholder="Current password" required autofocus maxlength="50">
        </div>

        <div class="ui-field-contain">
          <input type="password" name="newPassword" id="newPassword" placeholder="New password" required maxlength="30">
        </div>

        <div class="ui-field-contain">
          <input type="password" name="newPasswordConfirm" id="newPasswordConfirm" placeholder="Retype new password" required maxlength="30">
        </div>

        <input type="submit" name="saveChanges" value="Save Changes" />
        <a href="<?php echo APP_URL?>?action=options" data-rel="back" class="ui-btn ui-btn-b" data-direction="reverse">Cancel</a>

      </form>

    </div>

  </div>

<?php include "templates/include/footer.php" ?>

