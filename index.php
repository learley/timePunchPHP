<?php 
include("inc/functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['new'])) {
      new_entry();
  } else if(isset($_POST['end'])) {
      end_current();
  }
}

include("inc/header.php"); ?>

<div>
  <form method="post" action="index.php">
    <input class="btn btn-primary btn-lg" type="submit" class="button" name="new" value="New" />
    <input class="btn btn-primary btn-lg" type="submit" class="button" name="end" value="End" />
  </form>
</div>

<?php echo displayTable() ?> 

<?php include("inc/footer.php"); ?>