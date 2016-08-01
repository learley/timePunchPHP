<?php


// function get_current_position() {
//   return 0;
// }

function new_entry() {
  include("connection.php");

  $now = date("Y-m-d H:i:s");

  end_current();

  $sql = "INSERT INTO time_entries (begin) VALUES ('" . $now . "')";
  $db->query($sql);

  return;
}

function end_current() {
  include("connection.php");
  
  $now = date("Y-m-d H:i:s");
  
  $sql = "SELECT * FROM time_entries WHERE end IS NULL";
  $result = $db->query($sql);

  $row = $result->fetchColumn(0);
  if (!empty($row)) {
    $sql = "UPDATE time_entries SET end='" . $now . "' WHERE id=" . $row;
    $db->query($sql);
  }
  
  return;
}

function displayTable() {
  include("connection.php");

  $sql = "SELECT begin, end FROM time_entries";
  $result = $db->query($sql);

  $tz = new DateTimeZone('America/New_York');
  $tf = "Y-m-d H:i:s";
  
  $html = '<div class="container-fluid">';
  foreach($result as $row) {
  
  $begin = date_create($row['begin'])->setTimeZone($tz)->format($tf);
  if (!is_null($row['end'])) {
    $end = date_create($row['end'])->setTimeZone($tz)->format($tf);
  } else {
    $end = null;
  }
  
  $html .= '<div class="row equal">'
    . '<div class="col-xs-4">' 
    . $begin
    . '</div>'
    . '<div class="col-xs-4">' 
    . $end
    . '</div>'
    . '<div class="col-xs-4">Delete</div>'
    . '</div>';
  }
  $html .= '</div>';

  return $html;
}