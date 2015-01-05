$(document).ready(function(){

    $("#layout").click(function(e){
        //var parentOffset = $(this).parent().offset();
        var relX = e.pageX; // - parentOffset.left;
        var relY = e.pageY; // - parentOffset.top;
        var position_num = $(".positions").length;
        $("#dashboard-page").append("<div id=\"position"+position_num+"\">Position " + position_num +"</div>");
        $("#position"+position_num).offset({left: relX, top: relY});
        $("#position"+position_num).addClass("positions");

        $("#position"+position_num).click(function(e){
            $(this).remove();
        });
    });



});