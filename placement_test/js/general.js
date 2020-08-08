let configForm = {"page": 1, "pages": 2};

$(document).ready(function() {
    $('#exit_form').click(function () {
        rsp = confirm("Are you sure you want to quit the test and exit? All of your progress will be lost");
        if(rsp){
            window.location.href = "https://uceda.edu";
        }
    });
});