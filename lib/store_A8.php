<?php
  require("../connect.php");
  // print_r($_POST);
  @$x1_open = $_POST['x1_open']; @$x2 = $_POST['x2']; @$x2_size = $_POST['x2_size']; @$x2_open = $_POST['x2_open']; @$x2_add = $_POST['x2_add']." ".$_POST['x2_tel']." ".$_POST['x2_mail'];
  @$x3_name = $_POST['x3_name'];
  @$x4 = $_POST['x4']; @$x4_21_number = $_POST['x4_21_number']; @$x4_22_number = $_POST['x4_22_number']; @$x4_23_open = $_POST['x4_23_open']; @$x4_23_number = $_POST['x4_23_number'];
  @$x5 = $_POST['x5']; @$x5_41 = $_POST['x5_41']; @$x5_42 = $_POST['x5_42']; @$x5_43 = $_POST['x5_43']; @$x5_44 = $_POST['x5_44']; @$x5_45 = $_POST['x5_45']; @$x5_46 = $_POST['x5_46']; @$x5_47 = $_POST['x5_47']; @$x5_47_open = $_POST['x5_47_open'];
  @$x6 = $_POST['x6']; @$x6_21 = $_POST['x6_21']; @$x6_22 = $_POST['x6_22']; @$x6_23 = $_POST['x6_23']; @$x6_24 = $_POST['x6_24']; @$x6_25 = $_POST['x6_25']; @$x6_25_open = $_POST['x6_25_open'];
  @$x8 = $_POST['x8'];
  @$x9 = $_POST['x9']; @$x9_number = $_POST['x9_number'];
  @$x10 = $_POST['x10']; @$x10_open = $_POST['x10_open'];
  @$x11 = $_POST['x11']; @$x11_open = $_POST['x11_open'];
  @$x12_open = $_POST['x12_open']; @$x13_open = $_POST['x13_open'];

  $sql = "INSERT INTO questionnaire.A8_interview_hospital 
            (id, x1_open, x2, x2_size, x2_open, x2_add,
            x3_name,
            x4, x4_21_number, x4_22_number, x4_23_open, x4_23_number,
            x5, x5_41, x5_42, x5_43, x5_44, x5_45, x5_46, x5_47, x5_47_open,
            x6, x6_21, x6_22, x6_23, x6_24, x6_25, x6_25_open,
            x7, x7_21, x7_22, x7_23, x7_24, x7_25, x7_25_open,
            x8,
            x9, x9_number,
            x10, x10_open,
            x11, x11_open,
            x12_open, x13_open, created) 
          VALUES 
            (NULL, '$x1_open', '$x2', '$x2_size', '$x2_open', '$x2_add',
              '$x3_name',
              '$x4', '$x4_21_number', '$x4_22_number', '$x4_23_open', '$x4_23_number',
              '$x5', '$x5_41', '$x5_42', '$x5_43', '$x5_44', '$x5_45', '$x5_46', '$x5_47', '$x5_47_open',
              '$x6', '$x6_21', '$x6_22', '$x6_23', '$x6_24', '$x6_25', '$x6_25_open',
              '$x7', '$x7_21', '$x7_22', '$x7_23', '$x7_24', '$x7_25', '$x7_25_open',
              '$x8',
              '$x9', '$x9_number',
              '$x10', '$x10_open',
              '$x11', '$x11_open',
              '$x12_open', '$x13_open', CURRENT_TIMESTAMP)";
  $run = mysqli_query($dbcon, $sql);
  if ($run) {
    echo "<script type='text/javascript'>window.location='../index.php';</script>";
  } else {
    echo "Failure: ".mysqli_error($dbcon);
  }
?>