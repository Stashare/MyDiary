<?php include "templates/include/header.php" ?>

  <div data-role="page" data-dialog="true" id="deleteCompleted">

    <div data-role="header">
      <h1>Delete Completed To-Dos</h1>
    </div>

    <div role="main" class="ui-content">

      <div style="text-align: center;">
        <h2>Delete Completed To-Dos</h2>
        <p>Delete all completed to-dos?</p>
      </div>

      <form action="<?php echo APP_URL?>" method="post">
        <input type="hidden" name="action" value="deleteCompleted" />
        <input type="hidden" name="confirm" value="true" />
        <input type="hidden" name="authToken" value="<?php echo $_SESSION['authToken']?>" />
        <input type="submit" name="delete" data-theme="c" value="Delete To-Dos" />
        <a href="<?php echo APP_URL?>?action=options" data-rel="back" class="ui-btn ui-btn-b">Cancel</a>
      </form>

    </div>

  </div>

<?php include "templates/include/footer.php" ?>

