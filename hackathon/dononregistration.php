<!DOCTYPE html>
<html>
<head>
  <title>Donor Registration</title>
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
  background-image: url(data:image/jpeg;base64,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);
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

<form action="dononregistration.php" method="post">

    <h2><center>Donor Registration</center></h2>
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

        <label for="packed">Date the Food was Prepared/Packed</label>
      <script>  $("input[type=date] input[name=date1]").datepicker({
  dateFormat: 'yy-mm-dd',
  onSelect: function(dateText, inst) {
    $(inst).val(dateText);
  }
});


$("input[type=date] input[name=date2]").on('click', function() {
  return false;
});
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<input type="date" name="date1">

</script>

<br>
<br>
<br>

<label for="expiry" >Food expiration Date</label>
<script>  $("input[type=date]").datepicker({
dateFormat: 'yy-mm-dd',
onSelect: function(dateText, inst) {
$(inst).val(dateText); // Write the value in the input
}
});

// Code below to avoid the classic date-picker
$("input[type=date]").on('click', function() {
return false;
});
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<input type="date" name="date2">

</script>

<br>
<br>
<br>

<label for="kilogram">Food Available in Kilogram</label>
<input type="text" id="kilogram" name="kilogram" placeholder="available quantity of food...." required>

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
  $date1=$_POST['date1'];
  $date2=$_POST['date2'];
  $state=$_POST['State'];
  $available=$_POST['kilogram'];



  $connection = mysqli_connect('localhost', 'root', '', 'Donor');
  if($connection)
  {
    echo "Registration Successful.... We'll contact you soon.....";
  }
  else
  {
    die("Database connection failed");
    }
    $query = "INSERT INTO donor_details(firstname,lastname,organization,address,pincode,state,email,phonenumber,date1,date2,available)";
    $query .= "VALUES('$FirstName','$SecondName','$organization','$address','$pincode','$state','$email','$number','$date1','$date2','$available')";
    $result = mysqli_query($connection,$query);
    if(!result)
    {
      die('Query Failed!' . mysqli_error());
    }
}

 ?>
