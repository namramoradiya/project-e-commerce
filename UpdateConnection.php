<?php
session_start();
$conn=mysqli_connect("localhost","root","","project");
if(mysqli_connect_errno())
{
    echo "Failed to Connect to mysql :".mysqli_connect_error();
}
//
include 'loginConnection.php';
if(isset($_SESSION['id']))
{
$user_id1 = $_SESSION["id"];
$firstname = $_POST['cfname'];
$lastname=$_POST['clname'];
$faddress=$_POST['cfadd'];
$resaddress=$_POST['cradd'];
$phone=$_POST['cphone'];
$dob=$_POST['cdob'];
$state=$_POST['cstate'];
$district=$_POST['cdistrict'];
$sql = "UPDATE farmer_registration SET first_name='$firstname', last_name='$lastname',farm_address='$faddress',res_address='$resaddress',phone='$phone',dob='$dob',state='$state',district='$district' WHERE farmer_id='$user_id1'";
$result = mysqli_query($conn, $sql);
if($result) {
    include'ProfileConnection.php';
}
}
else
{
    $userid=$_SESSION['cid'];
    $cname=$_POST['cname'];
    $crgsno=$_POST['crno'];
    $caddress=$_POST['cadd'];
    $Cemail=$_POST['cmail'];
    $cmobile=$_POST['cphone'];
    $estdate=$_POST['cdt'];
    $cstate=$_POST['cstate'];
    $cmregion=$_POST['cregion'];
    $sql = "UPDATE company_registration SET company_name='$cname', registration_no='$crgsno',company_address='$caddress',email='$Cemail',phone='$cmobile',establish_date='$estdate',state='$cstate',region='$cmregion' WHERE company_id='$userid'";
$result = mysqli_query($conn, $sql);
if($result) {
    include'companyprofile.php';
}
}
mysqli_close($conn);
?>
