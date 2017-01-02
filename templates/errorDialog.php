<?php include "templates/include/header.php" ?>

  <div data-role="page" data-dialog="true" id="errorDialog">

    <div data-role="header">
      <h1>Error</h1>
    </div>

    <div role="main" class="ui-content">

      <div style="text-align: center;">
        <h2>Task Tango</h2>
        <p><?php echo $results['errorMessage']?></p>
      </div>

      <a href="<?php echo APP_URL?>?action=<?php echo $results['errorReturnAction']?>" data-rel="back" data-transition="fade" class="ui-btn">OK</a>

    </div>

  </div>

<?php include "templates/include/footer.php" ?>

