<?php
    
    $mysqli=new mysqli("localhost","root","","project");
    if($mysqli===false)
    {
        die("Error:Could Not Connect to Databse Server !".$mysqli->connect_errno);
    }
    $sql="INSERT INTO farmer_registration(first_name,last_name,farm_address,res_address,pincode,phone,password,gender,dob,state,district,taluka) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
    if($stmt=$mysqli->prepare($sql))
    {
        $stmt->bind_param("ssssssssssss",$fname,$lname,$faddress,$raddress,$pcode,$phone,$passwrd,$gndr,$db,$state,$district,$taluka);
        $fname=$_POST['FName'];
        $lname=($_POST['LName']);
        $faddress=$_POST['FAddress'];
        $raddress=$_POST['RAddress'];
        $pcode=$_POST['Pincode'];
        $phone=$_POST['phone'];
        $passwrd=md5($_POST['Password']);
        @$gndr=$_POST['gender'];
        $db=$_POST['dt'];
        $state=$_POST['State'];
        $district=$_POST['district'];
        $taluka=$_POST['taluka'];
        $stmt->execute();
        include_once 'Login.php';
    }
 else {
        echo "There is a Problem in Preparation of Query !".$mysqli->error;
     
 }
 $stmt->close();
 $mysqli->close();
    
?>
