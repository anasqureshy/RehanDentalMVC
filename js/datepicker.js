/**
 * Created by Anas on 6/1/2015.
 */
$('.datepicker').pickadate({
    selectMonths: false, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
});

$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
});