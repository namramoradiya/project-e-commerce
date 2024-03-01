 <!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .card-registration .select-input.form-control[readonly]:not([disabled]) {
      font-size: 1rem;
      line-height: 2.15;
      padding-left: .75em;
      padding-right: .75em;
    }

    .card-registration .select-arrow {
      top: 13px;
    }
  </style>
  <script>
            function Validations() {
                var fname =
                        document.forms.FarmerForm.FName.value;
                var lname =
                        document.forms.FarmerForm.LName.value;

                var Phone =
                        document.forms.FarmerForm.phone.value;
                var pincode =
                        document.forms.FarmerForm.Pincode.value;
                var password =
                        document.forms.FarmerForm.Password.value;
                var cpassword =
                        document.forms.FarmerForm.CPassword.value;
                var faddress =
                        document.forms.FarmerForm.FAddress.value;
                var raddress =
                        document.forms.FarmerForm.RAddress.value;
                var regPhone = /^\d{10}$/;
                var regName = /\d+$/g;

                if (fname == "" || regName.test(fname)) {
                    window.alert("Please enter your first name properly.");

                }
                if (lname == "" || regName.test(lname)) {
                    window.alert("Please enter your last name properly.");

                }

                if (faddress == "") {
                    window.alert("Please enter your farm address.");

                }

                if (raddress == "") {
                    window.alert("Please enter your Residential address.");

                }

                if (pincode == "") {
                    window.alert("Please enter your Pincode.");

                }
                if (pincode.length < 6 || pincode.length > 6)
                {
                    window.alert("Pincode mus be less than 6")
                }

                if (password == "") {
                    alert("Please enter your password");

                }


                if (password.length < 8) {
                    alert("Password should be atleast 8 character long");

                }
                if (password != cpassword) {
                    alert("Password and Confirm Should be Same");

                }
                if (Phone == "" || !regPhone.test(Phone)) {
                    alert("Please enter valid phone number.");

                }
                return true;
            }
        </script>
</head>

<body>
    <?php
     $check=true;
    $fname_error = "";
    if (isset($_POST["Submit"])) {
    @$fnm = $_POST["FName"];
        if (empty($fnm)) {
            $fname_error = "<p class='error'> Please Enter Your Name </p>";
            $check=false;
        } else {
            if (!preg_match("/^[a-zA-Z]*$/", $fnm)) {
                $fname_error = "<p class='error'> Only Letter and White Spaced Allowed </p>";
            }
        }
        $lname_error = "";

        @$lnm = $_POST["LName"];
        if (empty($lnm)) {
            $lname_error = "<p class='error'> Please Enter Your Last Name </p>";    
        } else {
            if (!preg_match("/^[a-zA-Z]*$/", $lnm)) {
                $lname_error = "<p class='error'> Only Letter and White Spaced Allowed </p>";
            }
        }
        $Farm_address = "";
        $frm_addr = $_POST['FAddress'];
        if (empty($frm_addr)) {
            $Farm_address = "<p class='error'>Enter your Farm Address </p>";
        } else {
            if(!preg_match("/^[A-Za-z0-9'\.\-\s\,_]{10,100}$/", $frm_addr))
            {
            $Farm_address = "<p class='error'>Enter Valid address</p>";
            }
      }
      $Res_address = "";
        $res_addr = $_POST['RAddress'];
        if (empty($res_addr)) {
            $Res_address = "<p class='error'>Enter your Residential Address</P>";
        } else {
            if(!preg_match("/^[A-Za-z0-9'\.\-\s\,_]{10,100}$/", $res_addr))
            {
            $Res_address = "<p class='error'>Enter Valid address</p>";
            }
      }
      $phone="";
      $phone_no=$_POST['phone'];
      if(empty($phone_no))
      {
          $phone="<p class='error'> Enter Phone Number </p>";
      }
      else
      {
          if(!preg_match("/^[6-9][0-9]{9}$/",$phone_no))
          {
              $phone="<p class='error'> Enter Valid Phone Number </p>";
          }
      }
      $password_error="";
      $pass=$_POST['Password'];
      if(empty($pass))
      {
          $password_error="<p class='error'> Enter password </p>";
      }
      else
      {
          if(!preg_match("/^(?=.*[0-9])(?=.*[#$@&])[a-zA-Z0-9].{8,}$/",$pass))
          {
             $password_error="<p class='error'> Enter Valid Password </p>"; 
          }
      }
      $Cpassword_error="";
      $Cpass=$_POST['CPassword'];
      if(empty($Cpass))
      {
          $Cpassword_error="<p class='error'> Enter Confirm password</p>";
      }
      else 
      {
          if($Cpass!=$_POST['Password'])
          {
              $Cpassword_error="<p class='error'> Password and Confirm Password Should be Same</p>";
          }
      }
      $gender_error="";
      @$gender=$_POST['gender'];
      if(empty($gender))
      {
          $gender_error="<p class='error'> Select your Gender</P>";
      }
      $dob_error="";
      $dob=$_POST['dt'];
              if(empty($dob))
              {
                  $dob_error="<p class='error'> Enter your Birth Date</p>";
              }
              $pincode_error="";
      $pincode=$_POST['Pincode'];
      if(empty($pincode))
      {
          $pincode_error="<p class='error'>Enter your Pincode </p>";
      }
      
      
    }
    
    ?>
  <section class="h-100 " style="background-color:#00a651;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4">
            <div class="row g-0">
              <div class="col-xl-6 d-none d-xl-block">
                <img
                  src="https://images.unsplash.com/photo-1505471768190-275e2ad7b3f9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"
                  alt="Sample photo" class="img-fluid"
                  style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
              </div>
              <div class="col-xl-6">
                <div class="card-body p-md-5 text-black">
                  <h3 class="mb-5 text-uppercase">Farmer Registration </h3>
                  <form name="FarmerForm"  action="farmer_database.php" onsubmit="return Validations()" method="POST">
                     <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <p>First Name: <input type="text" class="form-control form-control-lg"
                                                                              size="65" name="FName" /> </div>
<?php echo @$fname_error; ?>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        last Name: <input type="text" class="form-control form-control-lg"
                                                                          size="65" name="LName" /></p>
<?php echo @$lname_error; ?>
                                                    </div>
                                                </div>
                                            </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <p>Farm Address: <input type="text" class="form-control form-control-lg" size="65"
                                                                    name="FAddress" /> <?php echo @$Farm_address; ?>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <p>Residential Address: <input type="text" class="form-control form-control-lg"
                                                                           size="65" name="RAddress" /> <?php echo @$Res_address; ?>
                                            </p>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <p>Pincode: <input type="text" class="form-control form-control-lg" size="65"
                                                               name="Pincode" /> <?php echo @$pincode_error; ?></p>

                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                            <p> Phone: <input type="number" size="65" name="phone"
                                                              class="form-control form-control-lg" /></p> <?php echo @$phone; ?>

                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <p>Password: <input type="password" class="form-control form-control-lg" size="65"
                            name="Password" /> <?php echo @$password_error; ?></p>


                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <p> Confirm Password: <input type="password" class="form-control form-control-lg" size="65"
                            name="CPassword" /> <?php echo @$Cpassword_error; ?></p>

                      </div>
                    </div>
                  </div>
                  <?php echo @$estdate; ?> <br>
                  <p> Gender :
                    <select type="text" value="" name="gender" class="custom-select">
                      <option>Female</option>
                      <option>Male</option>
                      <option>Other</option>
                    </select> <?php echo @$gender_error; ?> 
                    Date of Birth :<input type="date" value="" name="dt" class="custom-select"> <?php echo @$dob_error; ?>
                     <p> State :
                                                <select type="text" value="" name="State">
                                                    <option>Gujarat</option>
                                                </select> <?php echo @$state_error; ?>
                                                District :<select type="text" value="" name="district">
                                                    <option>Surat</option>
                                                    <option>Bardoli</option>
                                                </select> <?php echo @$district_error; ?>
                                                Taluka :<select type="text" value="" name="taluka">
                                                    <option>Kamrej</option>
                                                    <option>Mahuva</option>
                                                    <option>Mandvi</option>
                                                    <option>Mangrol</option>
                                                    <option>Umarpada</option>
                                                    <option>Chorasi</option>
                                                    <option>Olpad</option>
                                                    <option>Palasana</option>
                                                </select> <?php echo @$taluka_error; ?>
                                            </p>
                  </p>


                  
                  <br><br><br>
                  <div class="d-flex justify-content-end pt-3">
                    <input type="submit" class="btn btn-light btn-lg" value="Submit" name="Submit"
                      class="btn btn-secondary" />
                    <input type="reset" class="btn btn-warning btn-lg ms-2" value="Reset" class="btn btn-light btn-lg"
                      name="Reset" />
                    </form>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html> 