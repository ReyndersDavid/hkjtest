<?php

include_once '36_dbh.inc.php';


$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "
INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first','$last' ,'$email', '$uid', '$pwd');";
$result = mysqli_query($conn, $sql);

header("Location:38_ Insert_data_2.php?signup=success");
 ?>
