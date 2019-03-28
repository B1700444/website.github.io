<?php

require_once("inc/dbcall.php");
$db = new Db();
$sql = "SELECT * FROM `servicesessions` WHERE `idtable1` =" . $_POST['id'] . " LIMIT 1";
$result = $db->query($sql);
$row = mysqli_fetch_assoc($result);
$sql2 = "SELECT * FROM `ctype` WHERE `idctype`=" . $row['stype'] . " LIMIT 1";
$result2 = $db->query($sql2);
$time = date('h:m A', strtotime($row['time']));
//speciality
$sql3 = "SELECT * FROM `users`WHERE users_idusers=" . $row['createdby'];
$result3 = $db->query($sql3);
$row3 = mysqli_fetch_assoc($result); //fname
//trainer name
$sql4 = "SELECT * FROM `users` WHERE `idusers` =" . $row['createdby'] . " LIMIT 1";
$result4 = $db->query($sql4);
$row4 = mysqli_fetch_assoc($result4); //fname
//avergare rating
$sql5 = "SELECT SUM(rating) as tot FROM `review` WHERE `trainerid` =" . $row['createdby'];
$result5 = $db->query($sql5);
$row5 = mysqli_fetch_assoc($result5); //fname


$sql6 = "SELECT * FROM `review` WHERE `trainerid` =" . $row['createdby'];
$result6 = $db->query($sql6);
$row6 = mysqli_fetch_assoc($result6); //fname
$numrwows = $db->numRows($result6);
if ($numrwows > 0) {
    $rating = $row5['tot'] / $numrwows;
}else{
    $rating=0;
}

//get the session type mma,sport,dance
$rowctype = mysqli_fetch_assoc($result2);
$uppercase = strtoupper($rowctype['name']);
echo "<h3 class='text-uppercase'>{$row['title']}</h3>
     <p class='item-intro text-muted'>{$uppercase}</p>
     <ul class='list-inline'>
     <li>Senior Name: {$row4['fname']}</li>
     <li>Date: {$row['tdate']}</li>
     <li>Time: {$time} </li>
     <li>Fee: RM {$row['fee']}</li>
     <li>Average Rating: {$rating}</li>
     </ul>
     <div class='col-lg-12 text-center'>
     <button class='btn btn-primary btn-md' data-dismiss='modal' onclick='registerUser({$_SESSION['uniqueID']},{$_POST['id']})' type='button'>
     <i class='fa fa-check'></i>Accept</button></div>";
