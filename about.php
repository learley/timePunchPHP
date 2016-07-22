<?php include("inc/header.php"); ?>

<h2>About</h2>
<p>This is a simple time tracking application that allows the user to keep track of start and end times. An example use case would be quickly keeping accurate records of event start and end for later recording in a ticketing system for billable tracking.</p>
<p>The buttons work as follows:
<ul>
  <li>New : This button starts a new time entry at the current time. If one exists already and does not have an ending time specified, it also closes the previous entry.</li>
  <li>End : This ends an existing entry but does not start a new one.</li>
</ul>
<p>The "Delete" text seen in the table rows has not been implemented and currently serves as a layout placeholder for a future enhancement.

<?php include("inc/footer.php"); ?>