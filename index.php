<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Bethel First Impressions</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="js/jquery.mobile/jquery.mobile-1.4.5.min.css" rel="stylesheet"/>
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/jquery.mobile/jquery.mobile-1.4.5.min.js"></script>

        <style>
            h1 {
                text-align: center;
            }

            #layout {
                padding: 50px 50px;
            }

            .positions {
                width: 100px !important;
                background: #22aadd !important;
            }

        </style>

        <script type="text/javascript">

            $(document).ready(function(){
                $("#layout").click(function(e){
                    //var parentOffset = $(this).parent().offset();
                    var relX = e.pageX; // - parentOffset.left;
                    var relY = e.pageY; // - parentOffset.top;
                    var position_num = $(".positions").length;
                    $("#dashboard-page").append("<div id=\"position"+position_num+"\">Position " + position_num +"</div>");
                    $("#position"+position_num).offset({left: relX, top: relY});
                    $("#position"+position_num).addClass("positions");
                });
            });

        </script>

    </head>
    <body>
        <div data-role="page" id="dashboard-page">
            <div date-role="header">
                <h1>Bethel First Impressions</h1>
            </div>
            <div data-role="content">
                <div id="layout">
                    <img id="layout_img" src="images/layouts/hp1.png"/>
                </div>
            </div>
        </div>
    </body>
</html>
