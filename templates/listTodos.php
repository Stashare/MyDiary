<?php include "templates/include/header.php" ?>

  <div data-role="page" id="listTodos">

    <div data-role="header">
      <h1>Task Tango</h1>
      <a href="<?php echo APP_URL?>?action=newTodo" class="ui-btn ui-btn-left ui-btn-inline ui-mini ui-icon-plus ui-btn-icon-left" data-prefetch data-transition="slide">New</a>
      <a href="<?php echo APP_URL?>?action=options" class="ui-btn ui-btn-right ui-btn-inline ui-mini ui-icon-gear ui-btn-icon-left">Options</a>
    </div>

    <div role="main" class="ui-content">

      <input type="hidden" name="authToken" id="authToken" value="<?php echo $_SESSION['authToken']?>"/>

      <ul data-role="listview">

<?php foreach ( $results['todos'] as $todo ) { ?>

        <li data-id="<?php echo htmlspecialchars($todo->id)?>" data-completed="<?php echo $todo->completed ? "true" : "false"?>">
          <a href="#">
            <img src="images/check-<?php echo $todo->completed ? "on" : "off"?>.png" alt="checkbox" class="ui-li-icon" />
            <?php echo $todo->title?>
          </a>
          <a href="<?php echo APP_URL?>?action=editTodo&amp;todoId=<?php echo $todo->id?>" data-transition="slide">View To-Do</a>
        </li>

<?php } ?>

      </ul>

<?php if ( count( $results['todos'] ) == 0 ) { ?>
      <p>Tap the "New" button to add a new to-do...</p>
<?php } ?>

    </div>

  </div>

<?php include "templates/include/footer.php" ?>

