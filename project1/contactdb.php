
<?php
// Retrieve form data

    if(isset($_POST["btnsubmit"]))
    {
$fname = $_POST["txtf"];
$lname = $_POST["txtl"];
$email = $_POST["txte"];
$comm = $_POST["txtc"];

// Database connection details

// Create a connection
$con = mysqli_connect("localhost:3306","root","","contactdb");
mysqli_select_db($con,"contactdb");

if(mysqli_connect_error()){
    echo "failed";
    exit();
}echo "connection sucess correct<br>";



$sql= "INSERT INTO contact(First Name,Last Name,E-Mail,Comment) values('$fname','$lname','$email','$comm')";
        $ret = mysqli_query($con,$sql);


        echo "No of records inserted: $ret <br>";



       
    }
    else{
        echo "not inserted";
 
    }//disconnect
        mysqli_close($con);
?>