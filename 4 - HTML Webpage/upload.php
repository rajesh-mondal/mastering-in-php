<?php
$allowedTypes = array(
    'image/png',
    'image/jpeg',
    'image/jpg'
);
if($_FILES['photo']){
    $totalFiles = count($_FILES['photo']['name']);
    for($i=0;$i<$totalFiles;$i++){
        if(in_array($_FILES['photo']['type'][$i], $allowedTypes)!==false && $_FILES['photo']['size'][$i]<5*1024*1024){
        move_uploaded_file($_FILES['photo']['tmp_name'][$i],"files/".$_FILES['photo']['name'][$i]);
        }
    //move_uploaded_file($_FILES['photo']['tmp_name'],"files/image.png");
    }
}
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
           
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <h2>For upload file</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <pre>
                        <p>
                            <?php 
                                print_r($_FILES);
                            ?>
                        </p>
                    </pre>
                </div>
            </div>
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <form method="POST" enctype="multipart/form-data">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname">

                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname">

                        <label for="photo">Photo</label>
                        <input type="file" name="photo[]" id="photo"></br>
                        <input type="file" name="photo[]" id="photo"></br>
                        <input type="file" name="photo[]" id="photo"></br>

                        <button type='submit'>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
