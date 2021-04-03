<?php include 'connection.php'?>
<?php
if(isset($_POST['submit']))
{    
     $name = $_POST['Name'];
     $email = $_POST['Email'];
     $message = $_POST['Message'];
 
     $sql = "INSERT INTO contact (name,email,massege)
     VALUES ('$name','$email','$message')";
 
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>