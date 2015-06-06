/**
 * Created by Anas on 6/7/2015.
 */
$(document).ready(function(){

    $("#submit").click(function() {
        var regNum = $("#regnumber").val();
        var recNum = $("#recnumber").val();
        var name = $("#icon_name").val();
        var parent = $("#icon_parent").val();
        var tel = $("#icon_phone").val();
        var mob = $("#icon_cell").val();
        var add = $("#icon_home").val();
        var work = $("#icon_work").val();
        var occ = $("#icon_occ").val();
        var date = $("#datepicker").val();
        var age = $("#icon_Age").val();
        var gender = $("#gender").val();
        var email = $("#icon_email").val();
        var pHistory = $("#icon_prefix2").val();


        var datastring = 'regnumber=' + regNum + '&recnumber=' + recNum +'&name=' + name + '&parent=' + parent + '&phonenumber=' + tel + '&mobilenumber=' + mob + '&homeaddress=' + add + '&workaddress=' + work + '&occupation=' + occ + '&regdate=' + date + '&age=' + age + '&gender=' + gender + '&email=' + email + '&patientHistory' + pHistory;

        $.ajax(
            {
                type: "POST",
                url: "Controllers/c_insertPatient.php",
                data: datastring,
                cahce: false,
                success: function(result){
                    Materialize.toast(result, 4000);
                }
            }
        );
    });

});