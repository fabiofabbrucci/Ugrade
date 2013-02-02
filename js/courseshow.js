$(document).ready(function(){
    $('#read_more').toggle(function () {
        $("#course_description").addClass("open");
        $("#read_more").html('Close description');
    }, function () {
        $("#course_description").removeClass("open");
        $("#read_more").html('Read more ...');
    });
});
