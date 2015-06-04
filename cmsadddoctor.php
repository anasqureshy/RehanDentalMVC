<?php include("joints/header4views.php"); ?>

<?php include("joints/sidebar.php"); ?>
    <div class="contentBody">
        <div class="indigo lighten-5">

            <form>

                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input id="icon_prefix" type="text" name="name" class="validate">
                        <label for="icon_prefix">Doctor Name</label>
                    </div>

                </div>

                <div class="row">

                    <div class="input-field col s6">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input id="icon_prefix" type="text" name="description" class="validate">
                        <label for="icon_prefix">Description/About</label>
                    </div>

                </div>



                <div class="row">

                       <label for="icon_prefix" style="margin-left: 20dp; padding-left: 20dp; font-size: 30px;">Time is in 24 hour formate</label>
                       <div style="height: 3px; width: 100%; background-color: #000000;">

                       </div>
                </div>

                <div class="row">

                    <div class="input-field col s6">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input id="icon_prefix" type="number" name="starthour" class="validate">
                        <label for="icon_prefix">Start Hour</label>
                    </div>

                    <div class="input-field col s6">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input id="icon_prefix" type="number" name="startminutes" class="validate">
                        <label for="icon_prefix">Start Minutes</label>
                    </div>



                    <div class="input-field col s6">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input id="icon_prefix" type="number" name="starthour" class="validate">
                        <label for="icon_prefix">End Hour</label>
                    </div>

                    <div class="input-field col s6">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input id="icon_prefix" type="number" name="startminutes" class="validate">
                        <label for="icon_prefix">End Minutes</label>
                    </div>

                </div>

                <div class="row">

                    <label for="icon_prefix" style="margin-left: 20dp; padding-left: 20dp; font-size: 30px;">Minutes Per Slot</label>
                    <div style="height: 3px; width: 100%; background-color: #000000;">

                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input id="icon_prefix" type="number" name="slotminutes" class="validate">
                        <label for="icon_prefix">Min/Slot</label>
                    </div>

                </div>


                <!-- available days -->

                <div class="row">

                    <label for="icon_prefix" style="margin-left: 20dp; padding-left: 20dp; font-size: 30px;">Available Week Days</label>
                    <div style="height: 3px; width: 100%; background-color: #000000;">

                    </div>
                </div>

                <div class="row">

                    <div class="input-field col s6">
                        <p>
                            <input type="checkbox" class="filled-in" id="filled-in-box" name="monday" />
                            <label for="filled-in-box">Monday</label>
                        </p>
                    </div>

                    <div class="input-field col s6">
                        <p>
                            <input type="checkbox" class="filled-in" id="filled-in-t" name="teusday" />
                            <label for="filled-in-t">Teusday</label>
                        </p>
                    </div>



                    <div class="input-field col s6">
                        <p>
                            <input type="checkbox" class="filled-in" id="filled-in-w" name="wednesday" />
                            <label for="filled-in-w">Wednesday</label>
                        </p>
                    </div>

                    <div class="input-field col s6">
                        <p>
                            <input type="checkbox" class="filled-in" id="filled-in-th" name="thursday" />
                            <label for="filled-in-th">thursday</label>
                        </p>

                    </div>

                    <div class="input-field col s6">
                        <p>
                            <input type="checkbox" class="filled-in" id="filled-in-fr" name="friday" />
                            <label for="filled-in-fr">Friday</label>
                        </p>
                    </div>

                    <div class="input-field col s6">
                        <p>
                            <input type="checkbox" class="filled-in" id="filled-in-sat" name="saturday" />
                            <label for="filled-in-sat">Saturday</label>
                        </p>
                    </div>

                    <div class="input-field col s6">
                        <p>
                            <input type="checkbox" class="filled-in" id="filled-in-sun" name="sunday" />
                            <label for="filled-in-sun">Sunday</label>
                        </p>
                    </div>

                </div>



                <!--div class="row">
                    <div class="input-field col s4">
                        <select class="browser-default blue lighten-5">
                            <option value="" disabled selected>Please Select Patient's Gender</option>
                            <option value="SH">Sherlock Holmes</option>
                            <option value="DW">Dr. Watson</option>
                        </select>
                    </div>
                    <div class="input-field col s4">
                        <i class="mdi-editor-insert-invitation prefix"></i>
                        <input id="datepicker" class="datepicker" value="Registration Date" type="date">

                    </div>
                </div-->
                <!--div class="row">
                    <div class="input-field col s6">
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Check Availaibility</a>
                    </div>
                </div-->
                <div class="row">
                    <div class="input-field col s6">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                            <i class="mdi-action-assignment-turned-in right"></i>
                        </button>


                        <button class="btn waves-effect waves-light" type="reset" name="action">Clear
                            <i class="mdi-action-assignment-turned-in right"></i>
                        </button>

                    </div>
                </div>
                <!-- Modal Structure
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4>Modal Header</h4>

                        <p>A bunch of text</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
                    </div>
                </div>-->
            </form>


        </div>
    </div>
<?php include("joints/footer4views.php"); ?>