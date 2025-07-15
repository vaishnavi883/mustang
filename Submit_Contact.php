<?php

include('./admin-pannal/connection.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST["Submit"])){

    $name=$_POST['p_name'];
    $Email_address=$_POST['p_email'];
    $Phone_Number=$_POST['p_phone'];
    $Subject=$_POST['p_subject'];
    $Message=$_POST['p_message'];


    $stmt=$conn->prepare("INSERT INTO contact (name,email,phone,subject,message) VALUES (?,?,?,?,?)");
    $stmt->bind_param("ssiss",$name,$Email_address,$Phone_Number,$Subject,$Message);

    if($stmt->execute()){
        echo "<script>
        alert('Your form Submited SucessFully!');
         window.location.href='contact-2.php';
        </script>";

    }
    else{
        echo"Error Found :".$stmt->error;
    }
    $stmt->Close();
    $conn->Close();
}
else{
echo $conn->error;

}





?>