<?php
include('dbcon.php');

if (isset($_POST['city_text'])) {

  $city = $_POST['city_text'];

  $query = "select * from city_name where city LIKE '%$city%';";

  $run = mysqli_query($con, $query);

  $total_rows = mysqli_num_rows($run);

  $output = "<ul class='list-unstyled'>";
  if ($total_rows > 0) {
    while ($row = mysqli_fetch_array($run)) {
      $output .= "<li>" . $row[1] . "</li>";
    }
  }
  $output .= "</ul>";

  echo  $output;
}
