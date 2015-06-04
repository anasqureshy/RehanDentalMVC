<?php
$name = array("Ahmed", "Asif", "Ishtiaq", "Mueed", "Omair", "Yosuf", "Mushtaq", "Zaheer", "Javaid", "Faizan");
$age = array("16", "9", "32", "48", "23");
$reg = array("134", "369", "94", "501", "200", "454", "892", "430", "416", "222", "690");

?>

<?php include("joints/header4views.php"); ?>
<?php include("joints/sidebar.php"); ?>
    <div class="contentBody">
        <div class="indigo lighten-5">
            <div class="row override-row">
                <div class="input-field col s3">
                    <i class="mdi-editor-format-list-numbered prefix"></i>
                    <input id="regnumber" type="text" name="regnumber" class="validate">
                    <label for="regnumber">Search</label>
                </div>
            </div>
            <table class="bordered hoverable lime lighten-4">
                <thead>
                <tr>
                    <th data-field="id">Registration Number</th>
                    <th data-field="name">Full Name</th>
                    <th data-field="age">Age</th>
                    <th>More Options</th>
                </tr>
                </thead>

                <tbody>
                <?php
                for ($i = 1; $i < 7; $i++) {
                    $rand_name = array_rand($name, 2);
                    $rand_age = array_rand($age, 2);
                    $rand_reg = array_rand($reg, 3);
                    echo "<tr>";
                    echo "<td>" . $reg[$rand_reg[0]] . $reg[$rand_reg[1]] . $reg[$rand_reg[2]] . "</td>";
                    echo "<td>" . $name[$rand_name[0]] . " " . $name[$rand_name[1]] . "</td>";
                    echo "<td>" . $age[$rand_age[0]] . "</td>";

                }

                ?>
                </tbody>

            </table>
            <div class="center">
                <ul class="pagination">
                    <li class="disabled"><a href="#!"><i class="mdi-navigation-chevron-left"></i></a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li class="waves-effect"><a href="#!">2</a></li>
                    <li class="waves-effect"><a href="#!">3</a></li>
                    <li class="waves-effect"><a href="#!">4</a></li>
                    <li class="waves-effect"><a href="#!">5</a></li>
                    <li class="waves-effect"><a href="#!"><i class="mdi-navigation-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
<?php include("joints/footer4views.php"); ?>