<?php

require_once("inc/dbcall.php");
$db = new Db();
$sessionID = $_POST['sessionid'];
//    var dataString = 'sessionid=' + id + '&udate=' + udate + '&utime=' + utime + '&ufee=' + ufee + '&uclassStatus=' + uclassStatus + '&uclassType=' + uclassType;
$sql = "UPDATE `servicesessions` SET "
        . "`tdate` = '{$_POST['udate']}' "
        . ", `time` = '{$_POST['utime']}' "
        . ", `fee` = '{$_POST['ufee']}'"
        . ", `status` = '{$_POST['uclassStatus']}'"
        . ", `stype` = '{$_POST['uclassStatus']}'" .
        " WHERE `servicesessions`.`idtable1` =" . $sessionID;
$result = $db->query($sql);
$row = mysqli_fetch_assoc($result);
echo $sql;
