<?php include "templates/include/header.php" ?>

  <div data-role="page" id="options">

    <div data-role="header">
      <h1>Options</h1>
      <a href="<?php echo APP_URL?>?action=listTodos" class="ui-btn ui-btn-left ui-btn-inline ui-mini ui-icon-arrow-l ui-btn-icon-left">Back</a>
    </div>

    <div role="main" class="ui-content">

      <a href="<?php echo APP_URL?>?action=deleteCompleted" class="ui-btn" data-transition="fade" data-prefetch>Delete Completed To-Dos</a>
      <a href="<?php echo APP_URL?>?action=changePassword" class="ui-btn" data-transition="slide" data-prefetch>Change Password</a>
      <a href="<?php echo APP_URL?>?action=logout" class="ui-btn" data-ajax="false">Log Out</a>

    </div>

  </div>

<?php include "templates/include/footer.php" ?>

