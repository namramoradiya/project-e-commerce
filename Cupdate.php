
<html lang="en">
<head>
<meta charset="utf-8">


<title>Company Profile </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{margin-top:20px;
background-color:#f2f6fc;
color:#69707a;
}
.img-account-profile {
    height: 10rem;
}
.rounded-circle {
    border-radius: 50% !important;
}
.card {
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}
.card .card-header {
    font-weight: 500;
}
.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}
.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: rgba(33, 40, 50, 0.03);
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}
.form-control, .dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.nav-borders .nav-link.active {
    color: #0061f2;
    border-bottom-color: #0061f2;
}
.nav-borders .nav-link {
    color: #69707a;
    border-bottom-width: 0.125rem;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 0;
    padding-right: 0;
    margin-left: 1rem;
    margin-right: 1rem;
}
    </style>
</head>
<body>
    <?php
     @session_start();
    $conn=mysqli_connect("localhost","root","","project");
if(mysqli_connect_errno())
{
    echo "Failed to Connect to mysql :".mysqli_connect_error();
}
if (isset($_SESSION['cid'])) {
    include('conn.php');
    $query = mysqli_query($conn, "select * from company_registration where company_id='" . $_SESSION['cid'] . "'");
    $row = mysqli_fetch_assoc($query);
} 
    ?>
<div class="container-xl px-4 mt-4">

<nav class="nav nav-borders">
<a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Profile</a>
</nav>
<hr class="mt-0 mb-4">
<div class="row">
<div class="col-xl-4">

<div class="card mb-4 mb-xl-0">
<div class="card-header">Profile Picture</div>
<div class="card-body text-center">

<img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">

<button class="btn btn-primary" type="button">Upload new image</button>
</div>
</div>
</div>
<div class="col-xl-8">

<div class="card mb-4">
<div class="card-header"></div>
<div class="card-body">
<form action="UpdateConnection.php"method="POST">


<div class="row gx-3 mb-3">

<div class="col-md-6">
<label class="small mb-1" for="inputFirstName">Company name</label>
<input class="form-control" id="inputFirstName" type="text" name="cname"value="<?php if (isset($_SESSION['cid'])) { echo$row['company_name'];}?>">
</div>

<div class="col-md-6">
<label class="small mb-1" for="inputLastName">Company Register No   </label>
<input class="form-control" id="inputLastName" type="text"  name="crno" value="<?php if (isset($_SESSION['cid'])) { echo$row['registration_no'];}?>">
</div>

<div class="mb-3">
<label class="small mb-1" for="inputUsername">Company Address </label>
<input class="form-control" id="inputUsername" type="text"  name="cadd" value="<?php if (isset($_SESSION['cid'])) { echo$row['company_address'];}?>">
 </div>
    
<div class="col-md-6">
<label class="small mb-1" for="inputPhone">Email Address</label>
<input class="form-control" id="inputPhone" type="email" name="cmail" value="<?php if (isset($_SESSION['cid'])) { echo$row['email'];}?>">
</div>
    
<div class="col-md-6">
<label class="small mb-1" for="inputBirthday">Phone</label>
<input class="form-control" id="inputBirthday" type="text" name="cphone"  value="<?php if (isset($_SESSION['cid'])) { echo$row['phone'];}?>">
</div>
</div>
<div class="row gx-3 mb-3">


<div class="row gx-3 mb-3">
<div class="col-md-6">
<label class="small mb-1" for="inputBirthday">Establishment Date</label>
<input class="form-control" id="inputBirthday" type="date" name="cdt"  value="<?php if (isset($_SESSION['cid'])) { echo @$row['establish_date'];}?>">
</div>
    <div class="col-md-6">
<label class="small mb-1" for="inputOrgName">State</label>
<input class="form-control" id="inputOrgName" type="text" name="cstate" value="<?php if (isset($_SESSION['cid'])) { echo$row['state'];}?>">
</div>
    <div class="col-md-6">
<label class="small mb-1" for="inputOrgName">Region</label>
<input class="form-control" id="inputOrgName" type="text"  name="cregion" value="<?php if (isset($_SESSION['cid'])) { echo$row['region'];}?>">
</div>
</div>

<button type="submit">Save Changes</button>
</form>
</div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>