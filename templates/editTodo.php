<?php include "templates/include/header.php" ?>

  <div data-role="page" id="todoForm">

    <div data-role="header">
      <h1><?php echo $results['pageTitle']?></h1>
    </div>

    <div role="main" class="ui-content">

      <form action="<?php echo APP_URL?>" method="post" data-transition="slide">
        <input type="hidden" name="action" value="<?php echo $results['formAction']?>" />
        <input type="hidden" name="todoId" value="<?php echo htmlspecialchars($results['todo']->id)?>" />
        <input type="hidden" name="authToken" value="<?php echo $_SESSION['authToken']?>" />

        <div class="ui-field-contain">
          <input type="text" name="title" id="title" value="<?php echo htmlspecialchars($results['todo']->title)?>" placeholder="Title" required maxlength="255">
        </div>

        <div class="ui-field-contain">
          <textarea name="notes" id="notes" placeholder="Notes" maxlength="65535"><?php echo htmlspecialchars($results['todo']->notes)?></textarea>
        </div>

        <input type="submit" name="saveChanges" value="Save Changes" />
<?php if ( $results['todo']->id ) { ?>        
        <a href="<?php echo APP_URL?>?action=deleteTodo&amp;todoId=<?php echo htmlspecialchars($results['todo']->id)?>" class="ui-btn ui-btn-c" data-transition="fade">Delete To-Do</a>
<?php } ?>
        <a href="<?php echo APP_URL?>?action=listTodos" class="ui-btn ui-btn-b" data-transition="slide" data-direction="reverse">Cancel</a>

      </form>

    </div>

  </div>

<?php include "templates/include/footer.php" ?>

