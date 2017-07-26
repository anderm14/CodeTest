<?php
include ("foods.php");

if (isset($_REQUEST["food"]) && $_REQUEST["food"] != null) {
    $foods = new foods;
    $foodObj = $foods->getDescription($_REQUEST["food"]);
} else {
    $foodObj = array("name"=>"Error 404", "description"=>"Page Not Found");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic Page Needs
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <meta charset="utf-8">
        <title>
          <?php echo ($foodObj["name"]); ?>
        </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

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
                padding: 0 14px;
            }
            nav.primary select {
                display: none;
                width: 100%;
                margin: 10px;
            }
        }
        </style>
    </head>
    <body>
        <div class="table-container">
            <div style="margin:20px">
                <h1 style="text-align:left;">
                   <?php echo($foodObj["name"]); ?>
                </h1>
                <div class="band navigation" style="border:1px solid">
                    <nav class="container primary">
                        <div class="twelve columns">
 
                        </div>
                    </nav>
                </div>
            </div>
            <div class="table-block footer-push">
                <!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
                <div class="container">
                    <?php echo ($foodObj["description"]); ?>
                </div>
                <!-- end primary div.container -->
            </div>
            <!-- end primary div.table-block -->
        </div>
    </body>
</html>