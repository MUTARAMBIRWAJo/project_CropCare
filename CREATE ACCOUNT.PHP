<?php

$dbhost = "localhost";
$dbuname = "root";
$dbpassword = "";
$dbname = "crop care";

$con = mysqli_connect($dbhost,$dbuname,$dbpassword,$dbname);

if($con){
   // echo "You are now connected";
}
else{
    echo "You are not connected";
}

?>

<?php

$con = mysqli_connect($dbhost,$dbuname,$dbpassword,$dbname);

if(isset($_POST['LogIn'])){

$email= $_POST['Username'];
$password= $_POST['pword'];
 
$select="SELECT * FROM signup WHERE email='$email' limit 1";
$result= mysqli_query($con,$select);
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)>0){
    if($password == $row['pword']){
        header("location:c:\Users\JOSEPH\Desktop\PEOJECT FILE  AND REQUIRE\WEB PROJECT\htdocs\My Web Project\User/Front page.html");
    }
    else{
        echo "<script> alert(' Incorect password ');</script>";
    }
}
else{
    echo "<script> alert('User not Registered ');</script>";
}
}


?>
<!DOCTYPE Html>
    <html lang="en">
    <head><title>CROP CARE| Home Page</title>
        <link rel="icon" href="Images/CR Logo2.png" type="image/x-icon">
        <style>
            *{
                margin: 0px;
                padding: 0px;
            }
            .container-reg{
                justify-content: center;
                display: flex;
                font-size: larger;
                
            }
            form#form{
                margin-top: 50px;
                width: 800px;
                height: auto;
                box-shadow: darkgreen;
                border: 10px;
                border-radius: 10px;
                
                
            } 
              #firstname{
                margin: 20px 0px 20px 0px;
                width: 400px;
                
            }
            #lastname{
                margin: 0px 0px 20px 0px;
                width: 400px;
               
            }  
            #email{
                margin: 0px 0px 20px 0px;
                width: 400px;
               
            }
            #lplace{
                margin: 0px 0px 20px 0px;
                width: 200px;
               
            } 
            #tel{
                margin: 0px 0px 20px 0px;
                width: 200px;
                
            }
            #DOB{
                margin: 0px 0px 20px 0px;
                width: 200px; 
                
            }
            button{
                align-items: center;
               
            }
            #pro{
                margin: 0px 0px 20px 0px;
               
            }
            .lower{
                display: contents;
                width: 50px;
                
            }
            #upperUpper{
                margin: 0px 0px 20px 0px; 
                
            }
            #lowerLower{
                margin: 0px 0px 20px 0px;
               
            }
            #gender{
                margin: 20px 20px 20px 20px; 
               
            }
    /*--------------------------FORM CSS--------------------------*/
    body{
        margin: 0px;
        height: auto;
        display: flex;
        background-size: cover;
    }  
         .dd{
            position: relative;
            display: inline-block;
         }
         .form-log{
            position: absolute;
            width: auto;
            height: 0px;
            transition: height 0.3s;
            overflow: hidden;
         }
         .dd:hover > .form-log{
            height: 250px;
         }
         .form-log > a {
            display: block;
            height: 150px;
            color: blue;
         }
         input{
            outline: none;
            padding: 5px;
            border: none;
            border-bottom: 3px solid green;
         } 
         

        </style>
    </head>
    <link rel="stylesheet" type="text/css" href="CSS/mystylee.css">
    <body background="#2C7#">
        <table style="table-layout: none;"border= "0">
            <tr style="background-color: green;">
               <td colspan="6">
           <div class="content-header" style="display: flex;  flex-wrap: wrap;height: 100px;">
               <img src="Images/CR Logo2.png" style="width: auto; height: 100px;">
               <ul style="display: flex; flex-wrap: wrap; margin-top: 70px; list-style: none;margin-left: 10px;">
               <li><a style="text-decoration: none; color: white;margin-right: 100px;margin-left: 30px;" href="homepage.html">Home</a></li>
               <li><a style="text-decoration: none; color: white;margin-right: 100px;margin-left: 30px;" href="Sign_Up.php">Create Account</a></li>
               <li><div class="dd">
                  <span class="link-log">
                  <a style="text-decoration: none; color: white;margin-right: 100px;margin-left: 30px;" href="#" class="logini">Log In</a>
                  </span>
                  <div class="form-log" style="border: 1px solid green;border-radius: 10px;text-align: left;background-color: gray;">
               <form action="Sign_Up" method="get" style="padding: 30px;">
                  <h3 style="color: green;text-align: center;">Log In Form</h3>
                  <hr>
                  <label for="username" style="font-size: larger;">Email:<br></label>
                  <input type="text" name="Username" style="border-radius: 0px;background-color: aliceblue;"><br>
                  <label for="password" style="font-size: larger;">Password:<br></label>
                  <input type="password" name="pword" style="border-radius: 0px;background-color: aliceblue;"><br>
                  <button name="LogIn" style="color: white; background-color: green; border-radius: 5px;margin-top: 10px;">Log In</button>
              </form>
             </div>
          </div>
              </li>
               <li><a style="text-decoration: none; color: white;margin-right: 100px;margin-left: 30px;" href="Services Page.html">Services</a></li>
               
               <li><a style="text-decoration: none; color: white;margin-right: 100px;margin-left: 30px;" href="CONTACT US.html">Contact Us</a></li>
               <li><a href="#" style="color: aliceblue;text-decoration: none;margin-right: 50px;margin-left: 30px;">Announcement</a></li>
           </ul>
       </div>
                  </td>
            </tr>
            <tr>
                <td colspan="6">     
              <div class="container-reg" style="margin-bottom: 30px;">
             <form method="POST" autocomplete="off" style="border: none;  
                                                     border-radius: 6px;padding: 20px 60px 30px 40px;box-shadow: 0 5px 10px green;">
                    <h3 style="text-align: center;margin-top: 20px;">CREATE AN ACCOUNT BY FILLING THE FORM AND SUBMIT</h3>
                    <hr style="background-color: green; height: 10px;">
            First Name:
            <input id="firstname" type="text" name="fname" placeholder="First Name" required><br>
            Last Name:
            <input id="lastname" type="text" name="lname" placeholder="Last Name" required><br>
            Date Of Birth:
            <input id="DOB" type="date" placeholder="" name="dob" required><br>
            Gender:
            <span id="gender" style="display: flex;">
            <input type="radio" name="Gender" value="male"><label for="Male" required="checked">Male</label>
            <input type="radio" name="Gender" value="female"><label for="Female" required="checked">Female</label><br>
            </span>
            Telephone Number:
            <input id="tel" type="tel" name="tel" placeholder="+250..." required><br>
            Email:
            <input id="email" type="text" name="email" placeholder="..............................................@gmail.com" required><br>
            Living Place:
            <input id="lplace" name="place" type="text"  placeholder="Country" required><br>
            Province:
            <select name="PROVINCE" id="pro" required>
                <option value="Sel">Select Your Province</option>
                <option value="K">Kigali City</option>
                <option value="S">Southern Province</option>
                <option value="N">Northern Province</option>
                <option value="W">Western Province</option>
                <option value="E">Eastern Province</option>
            </select> <br>
            <div class="lower">
                <section id="upperUpper">
            <input type="text" name="District" value="" placeholder="District"> <label for="District" required>District </label>
            <input type="text" name="Sector" value="" placeholder="Sector"> <label for="Sector" required>Sector</label><br>
            </section>
            <section id="lowerLower" style="margin-bottom: 50px;">
                <input type="text" name="cell" value="" placeholder="cell"> <label for="cell" required>Cell </label>
                <input type="text" name="village" value="" placeholder="village"> <label for="village" required>Village</label> <br>
                


                <div class="button_sub_canc" style="margin-top: 30px;padding:30px">
                <h3 style="color:green;text-allignment: center;margin-bottom:30px"><u style="color:green">Account Log In Information</u></h3>
                <label for="UsName">User Name:</label> 
            <input type="text" class="form-control"
            id="Usname" name="Usname" required> </br>
                <label for="password">Password</label> 
            <input type="password" class="form-control"
            id="password" name="password" required> </br>
            <label for="cpassword">Confirm Password</label> 
            <input type="password" class="form-control"
                id="cpassword" name="cpassword" required>
    
            <small id="emailHelp" class="form-text text-muted">
            Make sure to type the same password
            </div> 
           </small> 
            </section>
            </div>
            <div class="button_sub_canc" style="margin-top: 30px;padding:10px">
             <button type="submit" value="Sign Up" name="send" style="margin-left: 100px;">Sign Up</button>
             <button type="cancel" style="margin-left: 100px;"><a href="homepage.html" style="text-decoration: none;color: black;"></a>Back</a></button>  
            </div>
        </form>
        </div>
    </td>
    </tr> 
            <tr bgcolor="black">
              <td colspan="6">
                <section style="display: flex;margin-left: 20px;">
                <div style="text-align: left;margin-top: 20px;" >
                <h4 style="color: rgb(23, 136, 8);"><b><u>PARTNERS LINKS :</u></b></h4>
                <a href="www.rab.gov.rw" style="color: aliceblue;">www.rab.gov.rw</a><br/>
                <a href="www.rab.gov.rw" style="color: aliceblue;">www.reg.gov.rw</a><br/>
                <a href="www.rab.gov.rw" style="color: aliceblue;">www.rema.gov.rw</a><br/>
                <p style="color: rgb(14, 53, 87);">With the help of these links you may visit <br> the websites of our partners to see 
                  their activity <br> and explore much more of them</p>
                </div>
                <div style="margin-top: 20px;margin-left: 300px;">
                  <h4 style="color: rgb(23, 136, 8);"><b><u>SUPPORTING LINKS:</u></b></h4>
                  <a href="www:help.html" style="color: aliceblue;">Helps</a><br/>
                 <a href="www.AboutUs.html" style="color: aliceblue;">About Us</a><br/>
                 <a href="www.Faq.html" style="color: aliceblue;">FAQ</a><br/>
                 <p style="color: rgb(14, 53, 87);"> If these links do not help you enough Please use <br>
                   <mark> Contact Us </mark> on the top of this website</p>
                </div>
                <div style="margin-top: 20px;margin-left: 300px;">
                  <h4 style="color: rgb(23, 136, 8);"><b><u>VISIT OUR SOCIAL MEDIA:</u></b></h4>
                  <a href="http://www:facebook/Crop Care.com" style="color: aliceblue;">Facebook</a><br/>
                 <a href="http://www.twitter/Crop Care.com" style="color: aliceblue;">Twitter</a><br/>
                 <a href="http://www>instagram/Crop Care.com" style="color: aliceblue;">Instagram</a><br/>
                 <p style="color: rgb(14, 53, 87);"> If these links do not help you enough Please use <br>
                   <mark> Contact Us </mark> on the top of this website</p>
                </div>
              </section>
              </td>
              
            </tr>
        </table>
    </body>
</html>    
   <?php 
          if(isset($_POST['send'])){
               $fname = $_POST["fname"]; 
               $lname = $_POST["lname"]; 
               $dob = $_POST["dob"];
               $Gender = $_POST["Gender"];
               $tel = $_POST["tel"];
               $email = $_POST["email"];
               $place = $_POST["place"];
               $PROVINCE = $_POST["PROVINCE"];
               $District = $_POST["District"];
               $Sector = $_POST["Sector"];
               $cell = $_POST["cell"];
               $village = $_POST["village"];
               $Usname = $_POST["Usname"];
               $password = $_POST["password"]; 
               $cpassword = $_POST["cpassword"];

               $query = mysqli_query($con,"SELECT * FROM 'users_info';");
           $data = mysqli_query($con,"INSERT INTO `users-info`(`UserId`, `First Name`, `Last Name`, `Date Of Birth`, `Gender`, `Telephone Number`, `Email`, `Living Place`, `Province`, `District`, `Sector`, `Cell`, `Village`,`User Name`, `password`, `cpassword`,`TimeForRegistration`) VALUES
            ('','$fname','$lname','$dob','$Gender','$tel','$email','$place','$PROVINCE','$District','$Sector','$cell','$village','$Usname','$password','$cpassword','')");
            if($data>0){    
           echo " You have inserted into your database.";
           header("Location: UserLogin.php");
        
         echo $query;
           }}
       else{
         //  echo "No data inserted";
       }

     ?>
     