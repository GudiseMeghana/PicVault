<?php
    session_start();
    if (isset($_GET["table_name"])) {
        $_SESSION['table_name']=$_GET['table_name'];
    }
?>
<style>
#my_camera{
   width: 100%;
   height: 100%;
}
input{
    margin: 20px;
    background-color: #6293f5;
    color:white;
    border-radius: 5px;
    padding: 6px;
}
img {
    max-width: 100%;
    height: auto;
    user-drag: none; 
    user-select: none; 
    -moz-user-select: none; 
    -webkit-user-drag: none; 
    -webkit-user-select: none; 
    -ms-user-select: none;
}
</style>

<center>
<div id="my_camera"></div>
<input type=button value="Take Snapshot" onClick="take_snapshot()">
<input type=button value="Flip Camera" onClick="flip_camera()">
<div id="results" ></div>
<input type=button value="Save" onClick="save_snapshot()">
<h3>OR</h3>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:<br>
    <input type="file" name="photo" id="photo">
    <input type="submit" value="Upload Image" name="submit">
</form>
</center>

<!-- Script -->
<script type="text/javascript" src="webcam.min.js"></script>

<!-- Code to handle taking the snapshot and displaying it locally -->
<script language="JavaScript">
// Configure a few settings and attach camera
var constraints = {
    width: window.innerWidth,
    height: window.innerHeight,
    image_format: 'jpeg',
    jpeg_quality: 90,
    constraints: {
        facingMode: "environment"
    }
};
Webcam.set(constraints);
Webcam.attach( '#my_camera' );

// Variable to hold the data URI
var data_uri;

function take_snapshot() {
    // Take snapshot and get image data
    Webcam.snap( function(uri) {
        data_uri = uri;
        document.getElementById('results').innerHTML = '<img src="' + data_uri + '" draggable="false">';
    });
}

function save_snapshot() {
    // Upload the image data to the server
    Webcam.upload( data_uri, 'insert_image.php', function(code, text,Name) {
        alert('Snapshot saved');
    });
}

function flip_camera() {
    // Flip the camera
    if (constraints.constraints.facingMode == "environment") {
        constraints.constraints.facingMode = "user";
    } else {
        constraints.constraints.facingMode = "environment";
    }
    Webcam.reset();
    Webcam.set(constraints);
    Webcam.attach( '#my_camera' );
}
</script>
