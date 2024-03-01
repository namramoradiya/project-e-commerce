<?php
$conn = mysqli_connect("localhost", "root", "", "project");
if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $target_dir="images/";
     $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    $extensions= array("jpeg","jpg","png");
    
    if(in_array($imageFileType,$extensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152){
       $errors[]='File size must be excately 2 MB';
    }
    
   // if(empty($errors)==true){
//       move_uploaded_file($file_tmp,'C://xampp//htdocs//html//images//.$file_name');
       
  //  }else{
    //   print_r($errors);
    //}
    include 'loginConnection.php';
session_start();
    if(isset($_SESSION['id']))
    {
        $fid=$_SESSION['id'];
    }
    $cname = $_POST['name'];
    $cprice = $_POST['price'];
    $cvdate = $_POST['vdate'];
    $cqty = $_POST['qty'];
    $cdesc = $_POST['description'];
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // Save image details to the database
        $sql = "INSERT INTO crop_information(farmer_id,crop_name,crop_quantity,crop_type,crop_price,date,imgpath)
                                                    values('" .$fid. "','" . $cname . "','" . $cqty . "','" . $cdesc . "','" . $cprice . "','" . $cvdate . "','".$target_file."')";
    
        if ($conn->query($sql) === TRUE) {
//            echo'image added successfully';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading image.";
    }
 }
 
?>
