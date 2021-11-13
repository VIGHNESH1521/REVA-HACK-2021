<!DOCTYPE html>
<html>
<head>
  <title>Agent Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}
.content
{
  background: transparent;
  width: 50%;
  padding: 40px;
  margin: 100px auto;
  font-family: calibri;

}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #000000;
}
h2{
  font-size: 40px;
  font-family: Chalkduster, fantasy;
}

body
{
  background-image: url(https://image.freepik.com/free-vector/low-poly-white-background-design_1017-33204.jpg);
  background-size: cover;
  background-attachment: fixed;
}
.container
{
  background: transparent;
  width: 50%;
  padding: 40px;
  margin: 100px auto;
  font-family: calibri;

}
}
h2{
  font-size: 40px;
  font-family: Chalkduster, fantasy;
}
button{
  float: right;
  border-radius: 12px;
  font-family: monospace;
  font-size: 15px;
  color: white;
  background: grey;
  width: 100px;
  height: 60px;
}
button:hover{
  background-color: #000000;
}
label{
    font-size: 30px;
    font-family: "Gill Sans", sans-serif;

}

@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

  <button onclick="goBack()"><h3>Back</h3></button>
  <script>
  function goBack() {
  window.history.back();
  }
  </script>
<div class="container">
  <div class="col-xs-6">

<form action="agentregistration.php" method="post">

    <h2><center>Agent Registration</center></h2>
    <div class="form-group">
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
    </div>
    <div class="form-group">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
      </div>

        <div class="form-group">
          <label for="organization">Organization Name</label>
          <input type="text" id="organization"name="organization" placeholder="organization name..." required>
        </div>
        <div class="form-group">
        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="Enter your address...." required>

        <div class="form-group">
        <label for="pincode">Pincode</label>
        <input type="text" id="pincode" name="pincode" placeholder="Pincode....." minlength ="6" maxlength="6" required>


        <label for="State">Enter State</label>
        <select id="State" name="State">
          <option value="Karnataka">Karnataka</option>
          <option value="Tamil Nadu">Tamil Nadu</option>
          <option value="Maharashtra">Maharashtra</option>
          <option value="Goa">Goa</option>
          <option value="Kerala">Kerala</option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
          <option value="Uttar Pradesh">Uttar Pradesh</option>

          </optgroup>
        </select>


        <label for="email">Enter your email:</label>
        <input type="email" id="email" name="email" required placeholder="your email...">

        <br>
        <br>
        <br>

        <label for="phonenumber">Enter Mobile Number</label>
        <input type="tel" id="phonenumber" name="phonenumber" placeholder="Your phone number...." minlength="10" maxlength="10">

        <br>
        <br>
        <br>

        <label for="heads">Total Number of Heads to Feed</label>
        <input type="number" id="heads" name="heads" placeholder="Enter the total no. of hungry heads...." required>
        <br>
        <br>
        <br>



</br>
<br>

        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
      </form>


</div>
</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
  $FirstName=$_POST['firstname'];
  $SecondName=$_POST['lastname'];
  $organization=$_POST['organization'];
  $address=$_POST['address'];
  $pincode=$_POST['pincode'];
  $email=$_POST['email'];
  $number=$_POST['phonenumber'];
  $state=$_POST['State'];
  $heads=$_POST['heads'];



  $connection = mysqli_connect('localhost', 'root', '', 'Agent');
  if($connection)
  {
    echo "Registration Successful....   We'll contact you soon.....";
  }
  else
  {
    die("Database connection failed");
    }
    $query = "INSERT INTO agent_details(firstname,lastname,organization,address,pincode,state,email,phone,heads)";
    $query .= "VALUES('$FirstName','$SecondName','$organization','$address','$pincode','$state','$email','$number','$heads')";
    $result = mysqli_query($connection,$query);
    if(!result)
    {
      die('Query Failed!' . mysqli_error());
    }
}

 ?>
