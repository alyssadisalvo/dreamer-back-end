<?php

$conn = mysqli_connect("localhost", "root", "51648e01a6b8b836", "Dreamer");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
//$orbID = mysqli_real_escape_string($conn, $_POST['orbID']);
$Story = mysqli_real_escape_string($conn, $_POST['Story']);

$sql = "UPDATE Orb SET Story = '".$Story."' WHERE orbID = '".$orbID."'";
//echo $orbID;
//echo $Story;

$sql = "UPDATE Orb SET Emotion = '".$Emotion."' WHERE orbID = '".$orbID."'";

$sql = "UPDATE Orb SET Image_Path_1 = '".$Image_Path_1."' WHERE orbID = '".$orbID."'";
$sql = "UPDATE Orb SET Image_Path_2 = '".$Image_Path_2."' WHERE orbID = '".$orbID."'";

if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// close connection
mysqli_close($conn);


?>
