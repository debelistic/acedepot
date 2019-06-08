var HOME_DIR;
$.ajax({
    type: "GET",
    url: "config.xml",
    dataType: "xml",
    success: function (xml) {
        HOME_DIR = $(xml).find('application').children('url').text();
    }
});
$(document).ready(function () {
    $("#country").change(switchCountry);
    $("#state").change(loadLocalGovt);
    $("#other_country").parent().hide();
});


function loadLocalGovt() {
    var state = $("#state option:selected").val();
    var data = HOME_DIR + "/ajax_handler.php?query=load_lga&state=" + state;
    $.ajax({
        type: "GET",
        url: data,
        data: data,
        cache: false,
        success: function (response) {
            $("#lga").html(response);
        }
    });
}

function switchCountry(){
    var country = $("#country option:selected").val();
    if(country == "Other"){
        $("#state, #lga").parent().fadeOut();
        $("#other_country").parent().fadeIn();
    } else {
        $("#state, #lga").parent().fadeIn();
    }
}