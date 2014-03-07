
// Toggle Class
$(".toggle").click(function(){
    var myelement = $(this).attr("href")
    $(myelement).toggle();
    return false;
});
