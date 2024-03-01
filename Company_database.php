<?php 
    $mysqli=new mysqli("localhost","root","","project");
    if($mysqli===false)
    {
        die("Error:Could Not Connect to Databse Server !".$mysqli->connect_errno);
    }
    $sql="INSERT INTO company_registration(company_name,registration_no,company_address,pincode,email,phone,password,establish_date,state,district,region) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    if($stmt=$mysqli->prepare($sql))
    {
        $stmt->bind_param("sssssssssss",$cname,$rno,$caddress,$pcode,$email,$phone,$passwrd,$edate,$state,$district,$region);
        $cname=$_POST['CName'];
        $rno=$_POST['crn'];
        $caddress=$_POST['CAddress'];
        $pcode=$_POST['Pincode'];
        $email=$_POST['Email'];
        $phone=$_POST['phone'];
        $passwrd=md5($_POST['Password']);
        $edate=$_POST['dt'];
        $state=$_POST['State'];
        $district=$_POST['District'];
        $region=$_POST['Region'];
        $stmt->execute();
        include_once 'Login.php';
    }
 else {
        echo "There is a Problem in Preparation of Query !".$mysqli->error;
     
 }
 @$stmt->close();
 @$mysqli->close();
?>
