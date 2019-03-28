<?php

require_once("inc/dbcall.php");
$db = new Db();
//user unique id
$uniqueid = $_SESSION['uniqueID'];
$sessionID = $_POST['sessionid'];
$sql = "SELECT * FROM `servicesessions` WHERE `idtable1` =" . $sessionID . " LIMIT 1";
$result = $db->query($sql);
$row = mysqli_fetch_assoc($result);
$date = date('F j, Y', strtotime($row['tdate']));
//$today = date("F j, Y, g:i a");
$time = date('h:m A', strtotime($row['time']));
if ($row['status'] == 1) {
    $status = "Available";
} elseif ($row['status'] == 2) {
    $status = "Completed";
} elseif ($row['status'] == 3) {
    $status = "Canceled";
}
//created by
$createdby = $row['createdby'];
$sql1 = "SELECT * FROM `users` WHERE idusers=" . $createdby;
$result2 = $db->query($sql1);
$row2 = mysqli_fetch_assoc($result2); //fname
//speciality


//count number of participants registered
$uppercase = strtoupper($row['sessionfor']);
$participated = $db->numPartcipants($sessionID);
echo "<div class='row'>
        <div class='col-lg-8 mx-auto'>
            <div class='modal-body'>
                <h3 class='text-uppercase'>{$row['title']}</h3>
                <p class='item-intro text-muted'>{$uppercase}</p>
               <ul class='list-inline'>
                    <li>Senior: {$row2['fname']}</li>
                    <li>Date:           {$date}</li>
                    <li>Time:           {$time}</li>
                    <li>Fee: RM         {$row['fee']}</li>
                    <li>Status:         {$status}</li>
                    </ul>
                    <form  name='sentMessage' novalidate>
                        <div class='col-md-12'>
                            <div class='form-group'>
                                <p class='item-intro'>Rating:&nbsp;&nbsp;
                                    <input type='radio' name='rrate' id='rrate' checked value='1'>&nbsp;1&nbsp;&nbsp;
                                    <input type='radio' name='rrate' id='rrate' value='2'>&nbsp;2&nbsp;&nbsp;
                                    <input type='radio' name='rrate' id='rrate' value='3'>&nbsp;3&nbsp;&nbsp;
                                    <input type='radio' name='rrate' id='rrate' value='4'>&nbsp;4&nbsp;&nbsp;
                                    <input type='radio' name='rrate' id='rrate' value='5'>&nbsp;5&nbsp;&nbsp;</p>
                            </div>
                            <div class='form-group'>
                                <textarea class='form-control' id='rmessage' rows='3' placeholder='Comments'></textarea>
                            </div>
                        </div>
                        <div class='clearfix'></div>
                        <div class='col-lg-12 text-center'>
                            <button class='btn btn-primary btn-xl' data-dismiss='modal' onclick='recordReview({$uniqueid},{$sessionID})' style='padding-bottom:25px;'>Submit Review</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>";
