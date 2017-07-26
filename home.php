<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic Page Needs
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <meta charset="utf-8">
        <title>
            Favorite Foods
        </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript">
            parse_user_info = function() {
                $.post("server.php",
                       {
                           action: "parse_user_info",
                           userInfo: $("#userInfo").val(),
                       }
                       ,
                       function(data){
                           data = JSON.parse(data);
                           $("#userInfoParsed").html("Email: " + data.email + "<br>Phone: " + data["phone"] +
                                                     "<br>Name: "+data["name"] + "<br>Address: " + data["address"]);
                       }
                      );
            };
            $(document).ready(function(){
                $(document).ajaxStart(function(){
                    $("#wait").css("display", "block");
                }
                                     );
                $(document).ajaxComplete(function(){
                    $("#wait").css("display", "none");
                }
                                        );
                $("button").click(function(){
                    $("#txt").load("demo_ajax_load.asp");
                }
                                 );
            }
                             );
        </script>
        <!-- Mobile Specific Metas
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- FONT
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
        <!-- CSS
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link rel="stylesheet" href="normalize.css">
        <link rel="stylesheet" href="skeleton.css">
        <style>
            html, body {
                height: 98%;
            }
            .table-container {
                display: table;
                height: 100%;
                width: 100%;
            }
            .table-block {
                display: table-row;
                height: 1px;
            }
            .footer-push {
                height: auto;
            }
            #footer {
                /* Placeholder footer styles */
                text-align: center;
            }
            nav.primary ul{
            }
            nav.primary ul li{
                margin: 0px;
                display: inline;
                float: left;
                position: relative;
            }
            nav.primary ul li a {
                display: inline-block;
                font-weight: bold;
                padding: 16px 14px;
                font-size: 16px;
            }
            nav.primary select {
                display: none;
                width: 100%;
                margin: 10px;
            }
            @media (max-width: 750px) {
            nav.primary select {
                display: block;
            }
            nav.primary ul {
                display: none;
            }
        }
        </style>
    </head>
    <body>
        <div class="table-container">
            <div style="margin:24px">
                <h1 style="text-align:left;">
                    Favorite Foods
                </h1>
                <div class="band navigation" style="border:1px solid;">
                    <nav class="container primary">
                        <div class="twelve columns">
                            <ul>
                                <li>
                                    <a href="food.php?food=ice_cream">ice cream</a>
                                </li>
                                <li>
                                    <a href="food.php?food=pizza">pizza</a>
                                </li>
                                <li>
                                    <a href="food.php?food=lasagna">lasagna</a>
                                </li>
                                <li>
                                    <a href="food.php?food=chicken">chicken</a>
                                </li>
                            </ul>
                            <select class="u-full-width" id="navselect" onchange=" window.location.href='food.php?food='+($('#navselect')).val();">
                                <option value="" selected="selected">Select</option>
                                <option value="ice_cream">ice cream</option>
                                <option value="pizza">pizza</option>
                                <option value="lasagna">lasagna</option>
                                <option value="chicken">chicken</option>
                            </select>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="table-block footer-push">
                <!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
                <div class="container">
                    <form>
                        <div class="row">
                            <!-- LOADING GRAPHIC -->
                            <div id="wait" style="display:none;position:absolute;top:50%;left:50%;margin-left:-110px;margin-top:-81px">
                                <img src="http://tvtraygraphics.com/portfolio/images/loading.gif" />
                            </div>
                            <div class="twelve columns">
                                <label for="userInfo">Enter your name, email, phone number, and address:</label>
                                <input class="u-full-width" type="textbox" id="userInfo" style="padding:10px">
                            </div>
                            <input class="button-primary" type="button" value="Submit" onclick="parse_user_info()">
                        </div>
                    </form>
                    <span id="userInfoParsed">&nbsp;</span>
                </div>
                <!-- end primary div.container -->
            </div>
            <!-- end primary div.table-block -->
            <div class="table-block">
                <!-- Page Footer Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
                <div class="container">
                    <footer id="footer" class="twelve columns">
                        <div class="container">
                            <div style="float:left;">
                                Parse Test
                            </div>
                            <div style="float:right">
                                Mark Anderson
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- end footer div.container -->
            </div>
            <!-- end footer div.table-block -->
        </div>
    </body>
</html>