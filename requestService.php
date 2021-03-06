<?php require_once './template/header.php'; ?>

<!-- Contact -->
<section id="signup">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase"style="color:white;">Request Service Session</h2><br/>
            </div>
        </div>
        <?php


        //array(6) { ["title"]=> string(0) "" ["date"]=> string(0) "" ["time"]=> string(0) "" ["fee"]=> string(0) "" ["ctype"]=> string(1) "2" ["record"]=> string(0) "" }
        if (isset($_POST['record'])) {
            if (empty($_POST['title']) || $_POST['title'] == "" || empty($_POST['date']) || empty($_POST['time']) || empty($_POST['fee'])) {
                echo '<div class="alert alert-danger">
                <strong>Warning!</strong> Please fill all the fields!
            </div>';
            } else {

                if ($_POST['serviceType']==1) {
                  $sessionfor='Cooking';
                }
                if ($_POST['serviceType']==2) {
                  $sessionfor='Cleaning';
                }
                if ($_POST['serviceType']==3) {
                  $sessionfor='Driving';
                }
                if ($_POST['serviceType']==5) {
                  $sessionfor='Nursing';
                }

                // group
                $sql = "INSERT INTO `servicesessions` (`title`, `tdate`,`time`, `fee`, `notes`, `stype`,`sessionfor`, `status`,`createdby`)
                VALUES ('{$_POST['title']}', '{$_POST['date']}','{$_POST['time']}','{$_POST['fee']}','{$_POST['notes']}', '{$_POST['serviceType']}','$sessionfor','Pending',{$_SESSION['uniqueID']})";

                if (($db->query($sql))) {
                    echo '<div class="alert alert-success">
                <strong>Success!</strong> Data has been saved to the database!
            </div>';
                }
            }
        }
        ?>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="member" role="tabpanel"><br/><br/>
                <div class="row">
                    <div class="col-lg-12 offset-md-3">
                        <form  name="recordt" id="member" method="POST" action="#" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="title" name="title" type="text"  onblur="valideatRecordTraining()"  value="" placeholder="Title *" required >
                                        <p class="text-danger" style="color: red;" id="mtitle"></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="date" name="date" type="date" placeholder="Date *" onblur="valideatRecordTraining()"   required value="">
                                        <p class="help-block text-danger" id="mdate"></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="time" name="time" type="time" placeholder="Time *" onblur="valideatRecordTraining()"  required>
                                        <p class="help-block text-danger" style="color: red;" id="mtime" ></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="fee" name="fee" type="number" placeholder="Fee *" required onblur="valideatRecordTraining()" onfocus="valideatRecordTraining()">
                                        <p class="help-block text-danger" style="color: red;" id="mfee"></p>
                                    </div>
                                    <div class="form-group" style="color: white; font-size: large;text-transform: uppercase">

                                         <div class="form-group">
                                            <?php
                                            $sql = "SELECT * FROM `ctype`";
                                            $result = $db->query($sql);
                                            ?>
                                            <label for="serviceType" style="color:white;">Service Type</label>
                                            <select class="form-control" name="serviceType" id="serviceType" >
                                                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                                    <option  value="<?php echo $row['idctype']; ?>"><?php echo $row['name']; ?></option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="notes" id="notes" type="text" placeholder="Notes*">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <!--- display only whne the user click the group button !-->
                                    <div id="group" style="display: none">

                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                        <br/>
                                        <div id="success"></div>
                                        <button id="resetButton" class="btn btn-primary btn-xl text-uppercase" type="reset">Reset</button>
                                        <button name="record" class="btn btn-primary btn-xl text-uppercase" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>


    </div>
</section>

<?php
require_once './template/footer.php';
