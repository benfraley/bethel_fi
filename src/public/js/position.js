var Position = {
    
    /*
     * put a position on the page and save it to the db
     */
    addPosition: function(e) {
        
        //var parentOffset = $(this).parent().offset();
        var relX = e.pageX; // - parentOffset.left;
        var relY = e.pageY; // - parentOffset.top;
        var position_num = $(".positions").length;
        
        $.ajax({
            url: "bethelfi/index/addPosition",
            cache: false,
            data: {x:relX, y:relY, position:position_num},
            success: function(data){
                console.log(data);
            }
        });
        
        $("#dashboard-page").append("<div id=\"position"+position_num+"\">" + position_num +"</div>");
        $("#position"+position_num).offset({left: relX, top: relY});
        $("#position"+position_num).addClass("positions");

        $("#position"+position_num).click(function(e){
            $(this).remove();
        });
    }
    
    
}

$(document).ready(function(){

    $("#layout").click(function(e){
        Position.addPosition(e);
    });
    
});