<?php include("joints/header4views.php"); ?>

<?php

    if(isset($_GET['notentry'])) {

        ?>

        <div style="background-color: #8b1014; color: white; height: 40px; width: 100%; text-align: center;">
            Could Not Enter Record Something Went Wrong.s
        </div>

        <?php
    }
    else if(isset($_GET['entry'])) {

        ?>

        <div style="background-color:green; color: white; height: 40px; width: 100%; text-align: center;">
            Succeed.
        </div>

    <?php

    }
?>

<?php include("joints/sidebar.php"); ?>

    <div class="contentBody">

        <div class="indigo lighten-5">


                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-editor-format-list-numbered prefix"></i>
                        <input id="regnumber" type="text" name="regnumber"  class="validate">
                        <label for="regnumber">Registration Number</label>
                    </div>

                    <div class="input-field col s6">
                        <i class="mdi-editor-format-list-numbered prefix"></i>
                        <input id="recnumber" type="text" name="recnumber"  class="validate">
                        <label for="recnumber">Record Number</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input id="icon_name" type="text" name="name" class="validate">
                        <label for="icon_name">Name</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="mdi-action-perm-identity prefix"></i>
                        <input id="icon_parent" type="text" name="parent" class="validate">
                        <label for="icon_parent">Parent/Gaurdian</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-communication-phone prefix"></i>
                        <input id="icon_phone" type="tel" name="phonenumber" class="validate">
                        <label for="icon_phone">Telephone</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="mdi-hardware-tablet-android prefix"></i>
                        <input id="icon_cell" type="tel" name="mobilenumber" class="validate">
                        <label for="icon_cell">Mobile</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-action-home prefix"></i>
                        <input id="icon_home" type="text" name="homeaddress" class="validate">
                        <label for="icon_home">Address</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="mdi-communication-business prefix"></i>
                        <input id="icon_work" type="text" name="workaddress" class="validate">
                        <label for="icon_work">Work Address</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-action-work prefix"></i>
                        <input id="icon_occ" type="text" name="occupation" class="validate">
                        <label for="icon_occ">Occupation</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="mdi-editor-insert-invitation prefix"></i>
                        <input id="datepicker" class="datepicker" name="regdate" value="Registration Date" type="date">

                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-editor-format-list-numbered prefix"></i>
                        <input id="icon_Age" type="number" name="age" class="validate">
                        <label for="icon_Age">Age</label>
                    </div>
                    <div class="input-field col s4">
                        <select class="browser-default blue lighten-5" name="gender" id="gender">
                            <option value="" disabled selected>Please Select Patient's Gender</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>

                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-communication-email prefix"></i>
                        <input id="icon_email" type="text" name="email"class="validate">
                        <label for="icon_email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="mdi-action-receipt prefix"></i>
                        <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                        <label for="icon_prefix2">Patient History</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <button class="btn waves-effect waves-light" id="submit" name="insertPatient">Insert Patient
                            <i class="mdi-navigation-check right"></i>
                        </button>


                        <button class="btn waves-effect waves-light" type="resets" name="action">Clear
                        </button> <!-- technicaly it must reset form -->

                    </div>

        </div>
    </div>
<?php include("joints/footer4views.php"); ?>