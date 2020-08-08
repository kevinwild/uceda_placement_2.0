$(document).ready(function() {
    const loading = $('#loading_container');



    //.. Shared class between all form pages
    $('.form_page').submit(function (e) {

        loading.show();

        // Prevent form submission which refreshes page
        e.preventDefault();

        // Serialize data
        let formData = $(this).serialize();

        // Make AJAX request
        $.ajax({
            url: '../index.php?page='+configForm.page,
            type: 'POST',
            data: formData
        }).done(function(data) {
            const rsp = JSON.parse(data);
            console.log(rsp.more_pages);
            if(rsp.more_pages === true){
                morePages();
            }
            loading.delay(1000).fadeOut();


        }).fail(function() {
            console.log('fail');
            loading.delay(1000).fadeOut();

        });

    });

});



function morePages(){
    $('.page_'+configForm.page).hide();
    configForm.page++;
    console.log(configForm.page);
}