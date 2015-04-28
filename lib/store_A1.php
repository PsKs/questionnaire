<?php
  require("../connect.php");
  // print_r($_POST);
  $x1_open = "-"; $x2_open = "-";
  $x3 = 0; $x3_1 = 0; $x3_2 = 0; $x3_3 = 0; $x3_4 = 0; $x3_5 = 0; $x3_5_open = "-";
  $x4 = 0; $x4_1 = 0; $x4_2 = 0; $x4_3 = 0; $x4_4 = 0; $x4_5 = 0; $x4_5_open = "-";
  $x5 = 0; $x5_1 = 0; $x5_2 = 0; $x5_3 = 0; $x5_4 = 0; $x5_4_open = "-";
  $x6 = 0; $x6_1 = 0; $x6_2 = 0; $x6_3 = 0;
  $x7_1 = 0; $x7_2 = 0; $x7_3 = 0; $x7_4 = 0; $x7_5 = 0; $x7_5_1 = 0; $x7_5_2 = 0; $x7_5_3 = 0; $x7_5_4 = 0; $x7_5_5 = 0; $x7_5_6 = 0; $x7_5_7 = 0; $x7_5_7_open = "-";
  $x8 = 0; $x8_1 = 0; $x8_2 = 0; $x8_3 = 0; $x8_4 = 0; $x8_5 = 0; $x8_6 = 0; $x8_6_open = "-";
  $x9 = 0; $x9_1 = 0; $x9_2 = 0; $x9_3 = 0; $x9_4 = 0; $x9_5 = 0; $x9_5_open = "-";
  $x10 = 0; $x10_1 = 0; $x10_2 = 0; $x10_3 = 0; $x10_4 = 0; $x10_5 = 0; $x10_1_open = "-"; $x10_2_open = "-"; $x10_3_open = "-"; $x10_4_open = "-"; $x10_5_open = "-"; 
  $x11_open = "-"; $x12_open = "-";

  @$x1_open = $_POST['x1_open']; @$x2_open = $_POST['x2_open'];
  @$x3 = $_POST['x3']; @$x3_1 = $_POST['x3_1']; @$x3_2 = $_POST['x3_2']; @$x3_3 = $_POST['x3_3']; @$x3_4 = $_POST['x3_4']; @$x3_5 = $_POST['x3_5']; @$x3_5_open = $_POST['x3_5_open'];
  @$x4 = $_POST['x4']; @$x4_1 = $_POST['x4_1']; @$x4_2 = $_POST['x4_2']; @$x4_3 = $_POST['x4_3']; @$x4_4 = $_POST['x4_4']; @$x4_5 = $_POST['x4_5']; @$x4_5_open = $_POST['x4_5_open'];
  @$x5 = $_POST['x5']; @$x5_1 = $_POST['x5_1']; @$x5_2 = $_POST['x5_2']; @$x5_3 = $_POST['x5_3']; @$x5_4 = $_POST['x5_4']; @$x5_4_open = $_POST['x5_4_open'];
  @$x6 = $_POST['x6']; @$x6_1 = $_POST['x6_1']; @$x6_2 = $_POST['x6_2']; @$x6_3 = $_POST['x6_3'];
  @$x7_1 = $_POST['x7_1']; @$x7_2 = $_POST['x7_2']; @$x7_3 = $_POST['x7_3']; @$x7_4 = $_POST['x7_4']; @$x7_5 = $_POST['x7_5']; @$x7_5_1 = $_POST['x7_5_1']; @$x7_5_2 = $_POST['x7_5_2']; @$x7_5_3 = $_POST['x7_5_3']; @$x7_5_4 = $_POST['x7_5_4']; @$x7_5_5 = $_POST['x7_5_5']; @$x7_5_6 = $_POST['x7_5_6']; @$x7_5_7 = $_POST['x7_5_7']; @$x7_5_7_open = $_POST['x7_5_7_open'];
  @$x8 = $_POST['x8']; @$x8_1 = $_POST['x8_1']; @$x8_2 = $_POST['x8_2']; @$x8_3 = $_POST['x8_3']; @$x8_4 = $_POST['x8_4']; @$x8_5 = $_POST['x8_5']; @$x8_6 = $_POST['x8_6']; @$x8_6_open = $_POST['x8_6_open'];
  @$x9 = $_POST['x9']; @$x9_1 = $_POST['x9_1']; @$x9_2 = $_POST['x9_2']; @$x9_3 = $_POST['x9_3']; @$x9_4 = $_POST['x9_4']; @$x9_5 = $_POST['x9_5']; @$x9_5_open = $_POST['x9_5_open'];
  @$x10 = $_POST['x10']; @$x10_1 = $_POST['x10_1']; @$x10_2 = $_POST['x10_2']; @$x10_3 = $_POST['x10_3']; @$x10_4 = $_POST['x10_4']; @$x10_5 = $_POST['x10_5']; @$x10_1_open = $_POST['x10_1_open']; @$x10_2_open = $_POST['x10_2_open']; @$x10_3_open = $_POST['x10_3_open']; @$x10_4_open = $_POST['x10_4_open']; @$x10_5_open = $_POST['x10_5_open'];
  @$x11_open = $_POST['x11_open']; @$x12_open = $_POST['x12_open'];

  $sql = "INSERT INTO questionnaire.A1_questionnaire_province 
            (id, x1_open, x2_open, 
            x3, x3_1, x3_2, x3_3, x3_4, x3_5, x3_5_open,
            x4, x4_1, x4_2, x4_3, x4_4, x4_5, x4_5_open,
            x5, x5_1, x5_2, x5_3, x5_4, x5_4_open,
            x6, x6_1, x6_2, x6_3,
            x7_1, x7_2, x7_3, x7_4, x7_5, x7_5_1, x7_5_2, x7_5_3, x7_5_4, x7_5_5, x7_5_6, x7_5_7, x7_5_7_open,
            x8, x8_1, x8_2, x8_3, x8_4, x8_5, x8_6, x8_6_open,
            x9, x9_1, x9_2, x9_3, x9_4, x9_5, x9_5_open,
            x10, x10_1, x10_2, x10_3, x10_4, x10_5, x10_1_open, x10_2_open, x10_3_open, x10_4_open, x10_5_open,
            x11_open, x12_open, created) 
          VALUES 
            (NULL, '$x1_open', '$x2_open',
            '$x3', '$x3_1', '$x3_2', '$x3_3', '$x3_4', '$x3_5', '$x3_5_open',
            '$x4', '$x4_1', '$x4_2', '$x4_3', '$x4_4', '$x4_5', '$x4_5_open',
            '$x5', '$x5_1', '$x5_2', '$x5_3', '$x5_4', '$x5_4_open',
            '$x6', '$x6_1', '$x6_2', '$x6_3',
            '$x7_1', '$x7_2', '$x7_3', '$x7_4', '$x7_5', '$x7_5_1', '$x7_5_2', '$x7_5_3', '$x7_5_4', '$x7_5_5', '$x7_5_6', '$x7_5_7', '$x7_5_7_open',
            '$x8', '$x8_1', '$x8_2', '$x8_3', '$x8_4', '$x8_5', '$x8_6', '$x8_6_open',
            '$x9', '$x9_1', '$x9_2', '$x9_3', '$x9_4', '$x9_5', '$x9_5_open',
            '$x10', '$x10_1', '$x10_2', '$x10_3', '$x10_4', '$x10_5', '$x10_1_open', '$x10_2_open', '$x10_3_open', '$x10_4_open', '$x10_5_open',
            '$x11_open', '$x12_open', CURRENT_TIMESTAMP)";
  $run = mysqli_query($dbcon, $sql);
  if ($run) {
    echo "<script type='text/javascript'>window.location='../index.php';</script>";
  } else {
    echo "Failure: ".mysqli_error($dbcon);
  }
?>