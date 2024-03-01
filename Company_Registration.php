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
                var cname =
                        document.forms.RegForm.CName.value;
                var Phone =
                        document.forms.RegForm.phone.value;
                var pincode =
                        document.forms.RegForm.Pincode.value;
                var password =
                        document.forms.RegForm.Password.value;
                var cpassword =
                        document.forms.RegForm.CPassword.value;
                var caddress =
                        document.forms.RegForm.CAddress.value;
                var email = document.forms.RegForm.Email.value;
                var regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;
                var regPhone = /^\d{10}$/;									 


                if (cname == "") {
                    window.alert("Please enter your Company name.");

                }

                if (caddress == "") {
                    window.alert("Please enter your Company address.");

                }

                if (pincode == "") {
                    window.alert("Please enter your Pincode.");

                }
                if (pincode.length < 6 || pincode.length > 6)
                {
                    window.alert("Pincode mus be less than 6")
                }
                if (email == "" || !regEmail.test(email)) {
                    window.alert("Please enter a valid e-mail address.");
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




            }
        </script>
</head>

<body>
    <?php
        if(isset($_POST['Submit']))
        {
        $comp_name="";
        @$name=$_POST['CName'];
                if(empty($name))
                {
                    $comp_name="<p class='error'> Enter Company Name </p>";
                }
        $comp_reg="";
        @$number=$_POST['crn'];
        if(empty($number))
        {
            $comp_reg="<p class='error'> Enter Register Number </p>";
        }
        $address_error="";
        $address=$_POST['CAddress'];
                if(empty($address))
                {
                    $address_error="<p class='error'> Enter Your Address </p>";
                }
                else {
            if(!preg_match("/^[A-Za-z0-9'\.\-\s\,_]{10,100}$/", $_POST['CAddress']))
            {
            $address_error = "<p class='error'>Enter Valid address</p>";
            }
      }
      $pincode_error="";
      $pincode=$_POST['Pincode'];
      if(empty($pincode))
      {
          $pincode_error="<p class='error'>Enter your Pincode </p>";
      }
      else
      {
          if(!preg_match("^[1-9]{1}[0-9]{2}\\s{0, 1}[0-9]{3}$",$_POST['Pincode']))
          {
           $pincode_error="<p class='error'>Enter Valid Pincode</p>";       
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
        $email_error="";
        $email=$_POST['Email'];
        if(empty($email))
        {
            $email_error="<p class='error'> Enter your email </p>";
        }
        else
        {
            if( !preg_match("/^[_.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+.)+[a-zA-Z]{2,6}$/i",$_POST['Email'])) {
                $email_error = "<p class='error'> Enter valid email id </p>";
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
      $estdate="";
      $estdt=$_POST['dt'];
              if(empty($estdt))
              {
                  $estdate="<p class='error'>Select Establishment Date </p>";
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
                  <h3 class="mb-5 text-uppercase">Company Registration </h3>
                  <form name="RegForm"   action="Company_database.php" onsubmit="return Validations()" method="POST">
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="row">
                        <div class="col-md-12 mb-4">
                          <div class="form-outline">
                            <p>Company Name: <input type="text" class="form-control form-control-lg" size="65"
                                name="CName" /> <?php echo @$comp_name; ?>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <p>Company Registration Number : <input type="text" size="65" name="crn"
                          class="form-control form-control-lg" /> <?php echo @$comp_reg; ?></p>

                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <p>Company Address: <input type="text" class="form-control form-control-lg" size="65"
                            name="CAddress" /> <?php echo @$address_error; ?>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <p>Pincode: <input type="text" class="form-control form-control-lg" size="65" name="Pincode" />
                        <?php echo @$pincode_error; ?>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <p> Email: <input type="text" size="65" name="Email" class="form-control form-control-lg" />
                          <?php echo @$email_error; ?>
                        </p>

                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <p> Phone: <input type="number" size="65" name="phone" class="form-control form-control-lg" />
                          <?php echo @$phone; ?>
                        </p>

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
                 


                  <p> Establishment Date: <input type="date" class="form-control form-control-lg" name="dt">
                  </p>
                  <?php echo @$estdate; ?> <br>
                  <p> State :
                    <select type="text" value="" name="State" class="custom-select">
                      <option>Gujarat</option>
                    </select>
                    District :<select type="text" value="" name="District" class="custom-select">
                      <option>Surat</option>
                      <option>Bardoli</option>
                    </select>
                    Region :<select type="text" value="" name="Region"class="custom-select">
                      <option>Majura</option>
                      <option>Adajan</option>
                      <option>Katargam</option>
                      <option>Udhana</option>
                      <option>Puna Patiya</option>
                      <option>Jakatanaka</option>
                      <option>Varachha</option>
                    </select>
                  </p>


                  <br><br><br>
                  <div class="d-flex justify-content-end pt-3">
                    <input type="submit" class="btn btn-light btn-lg" value="Submit" name="Submit"
                      class="btn btn-secondary" />
                    <input type="reset" class="btn btn-warning btn-lg ms-2" value="Reset" class="btn btn-light btn-lg"
                      name="Reset" />
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</form>
                  
</body>

</html> 