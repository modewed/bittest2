send();
function send() {
    if ($('#ip-address').val()){
        console.log(1);
        $.post(
            "soap.php",
            {
                ipAddress: $('#ip-address').val(),
            },
            onAjaxSuccess
        );
    } else {
        $.post(
            "soap.php",
            {
                ipAddress: 'none',
            },
            onAjaxSuccess
        );
    }


}
function onAjaxSuccess(dataJSON)
{
    dataArr = JSON.parse(dataJSON);
    if (!dataArr['Error']){
        $('#city').text(dataArr['City']);
        $('#country').text(dataArr['Country']);
        $('#error').text("")
    } else{

        $('#city').text("");
        $('#country').text("");
        $('#error').text("Error")
    }
}
