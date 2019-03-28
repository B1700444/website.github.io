<?php

require_once("inc/dbcall.php");
$db = new Db();
$sessionID = $_POST['sessionid'];
$sql = "SELECT * FROM `servicesessions` WHERE `idtable1` =" . $sessionID . " LIMIT 1";
$result = $db->query($sql);
$row = mysqli_fetch_assoc($result);
//$time =date('h:m A', strtotime($row['time']));
////get the session type mma,sport,dance
//$rowctype = mysqli_fetch_assoc($result2);
// set teh select box to default selected value
$one = null;
$two = null;
$three = null;
if ($row['status'] == 1) {
    $one = 'selected';
} elseif ($row['status'] == 2) {
    $two = 'selected';
} elseif ($row['status'] == 3) {
    $three = 'selected';
}
if ($row['status'] == 1) {
    $status = 'Available';
} elseif ($row['status'] == 2) {
  $status = 'Completed';
} elseif ($row['status'] == 3) {
  $status = 'Canceled';
}
//class type set teh defaukt selected value
$cooking = null;
$cleaning = null;
$driving = null;
$nursing = null;


if ($row['stype'] == 1) {
    $cooking = 'selected';
} elseif ($row['stype'] == 2) {
    $cleaning = 'selected';
} elseif ($row['stype'] == 3) {
    $driving = 'selected';
} elseif ($row['stype'] == 5) {
    $nursing = 'selected';
}
echo "<h3 class='text-uppercase'>{$row['title']}</h3><br>
            <div class='row'>
                <div class='col-md-12'>
                    <h6>Date: {$row['tdate']}</h6><br>
                    <div class='form-group'>
                        <input class='form-control' id='utime' type='time' placeholder='{$row['time']}' value='{$row['time']}' >
                        <p class='help-block text-danger'></p>
                    </div>
                    <div class='form-group'>
                        <input class='form-control' id='ufee' type='number' placeholder='{$row['fee']}' value='{$row['fee']}' >
                        <p class='help-block text-danger'></p>
                    </div>
                    <div class='form-group'>
                        <label for='classStatus' style='float:left;'>Status</label>
                            <select class='form-control' id='uclassStatus'>
                                <option value='1' $one >Available</option>
                                <option value='2' $two>Completed</option>
                                <option value='3' $three>Canceled</option>
                            </select>
                    </div>
                    <div class='form-group'>
                        <label for='classType' style='float:left;'>Service Type</label>
                            <select class='form-control' id='uclassType'>
                                <option value='1' $cooking >Cooking</option>
                                <option value='2' $cleaning >Cleaning</option>
                                <option value='3' $driving >Driving</option>
                                <option value='3' $nursing >Nursing</option>
                            </select>
                    </div>
                    <div class='clearfix'></div>
                    <div class='col-lg-12 text-center'>
                    <br/>
                    <div id='success'></div>
                            <button class='btn btn-primary btn-md text-uppercase' data-dismiss='modal' onclick='updateTraningSession({$sessionID})'  style='padding-bottom:25px;'>Save</button>
                    </div>
                </div>

            </div>";
