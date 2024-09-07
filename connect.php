<?php
$conn = mysqli_connect('localhost','root','','greencycle');

$query = "select * from bike ";
$result = mysqli_query($conn,$query);

$query2 = "select * from walks";
$result2 = mysqli_query($conn,$query2);

$query3 = "SELECT * FROM `user`";
$result4 = mysqli_query($conn,$query3);

$query4 = "select * from location ";
$result5 = mysqli_query($conn,$query4);
?>