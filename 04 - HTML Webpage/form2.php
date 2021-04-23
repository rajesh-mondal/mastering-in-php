<?php
header( 'X-XSS-Protection:0' );
include_once "form2-functions.php";
$fruits = ["mango","orange","Banana","apple","lemon","peach"];
?>
<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <title>Hello World</title>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
        <style>
            body{
                margin-top: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <h2>Select Dropdowns</h2>
                    <p>
                        <?php 
                        //$sfruits = isset($_POST['fruits'])? $_POST['fruits']:array();
                        //$sfruits = $_POST['fruits'] ?? array();
                        $sfruits = filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY);
                        if(count($sfruits)>0) {
                            echo "You have selected: ".join(", ",$sfruits);
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <form method="POST">
                        <label for="fruits">Select Some Fruits</label>
                        <select style="height: 155px;" name="fruits[]" id="fruits" multiple>
                            <option value="" disabled selected>Select Some Fruits</option>
                            <?php displayOptions($fruits, $sfruits); ?>
                        </select>

                        <button type='submit'>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>