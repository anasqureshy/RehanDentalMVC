<?php

include("joints/header4views.php"); ?>

<?php include("joints/sidebar.php"); ?>

<?php
require_once('Connections/dbconnection.php');
require_once('Models/doctor.php');
require_once('Controllers/doctorManager.php');

$managerobj = new doctorManager();
$managerobj->GetAllDoctors(); //get the doctors

$doctorlist = $managerobj->doctorsList;


?>


    <div class="contentBody">
        <div class="indigo lighten-5">

            <form>

                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Patient Registration Number</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <select class="browser-default blue lighten-5">





                            <?php

                            echo '<option value="default" selected="selected">Select Doctor</option>';

                                foreach ($doctorlist as $key => $value) {
                                    echo "<option value='".$value->doctid."'>".$key."</option>";
                                }

                            ?>

                            <!--option value="SH">Sherlock Holmes</option>
                            <option value="DW">Dr. Watson</option-->


                        </select>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <select class="browser-default blue lighten-5">

                                <option value="default" disabled selected="selected">Appointment Status</option>
                                <option value="scheduled">Scheduled</option>
                                <option value="scheduled">Complete</option>
                                <option value="scheduled">Rescheduled</option>
                                <option value="scheduled">Cancelled</option>

                            </select>
                        </div>


                    <div class="input-field col s4">
                        <i class="mdi-editor-insert-invitation prefix"></i>
                        <input id="datepicker" class="datepicker" value="Appointment Date" type="date">

                    </div>

                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Check Availaibility</a>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                            <i class="mdi-action-assignment-turned-in right"></i>
                        </button>


                        <a class="waves-effect waves-light btn">Clear</a>

                    </div>
                </div>
                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4>Modal Header</h4>

                        <p>A bunch of text</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
                    </div>
                </div>
            </form>


        </div>
    </div>
<?php include("joints/footer4views.php"); ?>