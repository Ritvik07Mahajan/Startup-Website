<?php
include 'connection.php';

$insert = false;
if(isset($_POST['submit'])){
    // Set connection variables
   
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $roll = $_POST['roll'];
    $phone = $_POST['phone'];
    $DOB = $_POST['DOB'];
    $branch=$_POST['branch'];

$sql ="INSERT INTO `form`(`name`, `address`, `gender`, `email`, `phone`, `roll no.`, `DOB`, `Branch`, `date of submission`) 
VALUES ('$name','$address','$gender','$email','$phone','$roll','$DOB','$branch',current_timestamp());";
    // echo $sql;

    // Execute the query
   
$res=mysqli_query($con,$sql);

if($res){
    ?>
<script>

alert("Thank you for registering");
    </script>
<?php
}


else{

    ?>
    <script>
    
    alert("An error occured");
        </script>
    <?php

}


    // Close the database connection
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartUp-club GCET</title>

    <link rel="stylesheet" href="styles.css">        
    <style>
        *{
            box-sizing: border-box;
        }
       

        .container{
            background-color: darkgray;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightslategray;
            border-radius: 4px;
        }    

        .aligncenter {
            text-align: center;
            
        }

        section h2{
            text-decoration: underline;
        
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="date"],select,textarea{
            padding: 12px;
            border:1px solid #ccc;
            border-radius: 5px;
            margin:10px
        }
        fieldset{
            background-color: #fff;
            border:1px solid #ccc;
        }
        .main_heading{
            text-align: center;
        }
        input[type="submit"]{
            background-color:green;
            padding: 12px 20px;
            border:none;
            border-radius: 4px;
            cursor: pointer;
            width:50%;
            border:2px solid black;
            font-weight: bold;
        }
        input[type="submit"]:hover{
            background-color: #4caf84;
        }

        .formerror{
            color: red;

        }

        </style>



</head>
<body>
    <header>
        <img class="clip-circle" src="logo.png"> <h1>StartUp-Club GCET Jammu</h1>

   <nav>
       <a href="main.html">Home</a>
       <a href="core_team.html">Core Team Members</a>
       <a href="index.php">Register</a>
       <a href="contact.html">Contect-Us</a>
       <a href="gallery.html">Gallery</a>
	   <a href="notice.html">Notice</a>

       <marquee  direction="left">
        Welcome to the official website of StartUp-club GCET
        </marquee>
</nav> 

    </header>


<div class="container">

<form name="myform" id="myform" method="POST" action="" onsubmit="return validateform()">
    <h1 class="main_heading">Registration Form</h1>

<div id="name" class="formdesign">
    <p>Enter your Name: *<input type="text" name ="name" required placeholder="Rahul Sharma"><b><span class="formerror"> </span></b></p>
    <br>
    </div>


    <div id="gender" class="formdesign">
    <p>Select Gender *
<select required name="gender">
    <option value="">----Select Your Gender-----</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Other">Other</option>

</select>
</p>
    </div>


    <div id="address" class="formdesign">
<p>Address:<br>
     <textarea name="address" id="address" cols="100" rows="8" placeholder="Enter your Address here">

    </textarea>
    <b><span class="formerror"> </span></b>
     </p>
    </div>


    <div id="email" class="formdesign">
<p>Email: *<input type="email" name="email" id="email" required placeholder="xyz@gmail.com"> <b><span class="formerror"> </span></b></p>

    </div>



    <div id="roll" class="formdesign">
<p>Enter your college Roll number: *<input type="text" name ="roll" required placeholder="GCET\XX\20XX"><b><span class="formerror"> </span></b></p>
    </div>


    <div id="phone" class="formdesign">
<p>Phone Number: *<input type="phone" name="phone" id="phone" required placeholder="xxxxxxxxxx"><b><span class="formerror"></span></b></p>
    </div>

    <div id="DOB" class="formdesign">
<p>Date of Birth: <input type="date" reqired name="DOB" id="DOB"></p>
    </div>

    <div id="branch" class="formdesign">
<p>Select Branch *
<select required name="branch">
    <option value="">----Select Your Branch-----</option>
    <option value="Computer">Computer</option>
    <option value="ENC">ENC</option>
    <option value="Electrical">Electrical</option>
    <option value="Civil">Civil</option>
    <option value="Mechanical">Mechanical</option>
    <option value="Barch">B-Arch</option>

</select>
</p>
<br>
<br>
    </div>



<input type="submit" value="Register" name="submit"/>
<br>
<br>

</form>
</div>




<footer>
    <a href="#">FAQ</a>
       <a href="#">Terms of Use</a>
       <a href="#">Privacy policy</a>
       <a href="#">2021 StartUp-club</a>
        <a href="#">About</a>

</footer>
</body>

<script src="index.js"></script>

</html>







