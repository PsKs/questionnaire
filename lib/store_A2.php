<?php
  require("../connect.php");
  // print_r($_POST);
  @$x1_open = $_POST['x1_open']; @$x2_open = $_POST['x2_open']; @$x3 = $_POST['x3']; @$x4 = $_POST['x4'];
  @$x5 = $_POST['x5']; @$x5_1 = $_POST['x5_1']; @$x5_2 = $_POST['x5_2']; @$x5_3 = $_POST['x5_3']; @$x5_4 = $_POST['x5_4']; @$x5_5 = $_POST['x5_5']; @$x5_5_open = $_POST['x5_5_open'];
  @$x6 = $_POST['x6']; @$x6_1 = $_POST['x6_1']; @$x6_2 = $_POST['x6_2']; @$x6_3 = $_POST['x6_3']; @$x6_3_open = $_POST['x6_3_open'];
  @$x7 = $_POST['x7'];
  @$x8 = $_POST['x8']; @$x8_1 = $_POST['x8_1']; @$x8_1_number = $_POST['x8_1_number']; @$x8_2 = $_POST['x8_2']; @$x8_2_number = $_POST['x8_2_number']; @$x8_3 = $_POST['x8_3']; @$x8_3_number = $_POST['x8_3_number']; @$x8_4 = $_POST['x8_4']; @$x8_4_number = $_POST['x8_4_number']; @$x8_5 = $_POST['x8_5']; @$x8_5_open = $_POST['x8_5_open'];
  @$x9_open = $_POST['x9_open']; @$x10_open = $_POST['x10_open'];

  $sql = "INSERT INTO questionnaire.A2_questionnaire_dla 
            (id, x1_open, x2_open, x3, x4,
            x5, x5_1, x5_2, x5_3, x5_4, x5_5, x5_5_open,
            x6, x6_1, x6_2, x6_3, x6_3_open,
            x7,
            x8, x8_1, x8_1_number, x8_2, x8_2_number, x8_3, x8_3_number, x8_4, x8_4_number, x8_5, x8_5_open,
            x9_open, x10_open, created) 
          VALUES 
            (NULL, '$x1_open', '$x2_open', '$x3', '$x4',
            '$x5', '$x5_1', '$x5_2', '$x5_3', '$x5_4', '$x5_5', '$x5_5_open',
            '$x6', '$x6_1', '$x6_2', '$x6_3', '$x6_3_open',
            '$x7',
            '$x8', '$x8_1', '$x8_1_number', '$x8_2', '$x8_2_number', '$x8_3', '$x8_3_number', '$x8_4', '$x8_4_number', '$x8_5', '$x8_5_open',
            '$x9_open', '$x10_open', CURRENT_TIMESTAMP)";
  $run = mysqli_query($dbcon, $sql);
  if ($run) {
    echo "<script type='text/javascript'>window.location='../index.php';</script>";
  } else {
    echo "Failure: ".mysqli_error($dbcon);
  }
?>