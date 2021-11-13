<!DOCTYPE html>
<html>
<head>
  <title>Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
body
{
  background-image: url(https://wallpaper.dog/large/10723773.png);
  background-size: cover;
  background-attachment: fixed;
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
  font-size: 45px;
  font-family: monospace;
}

.container {
  border-radius: 5px;
  background-color: transparent;
  padding: 10px;
}


.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}


.row:after {
  content: "";
  display: table;
  clear: both;
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
h5{
  font-size: 20px;
  font-family: Chalkduster, fantasy;
}

h6{
  font-size: 18px;
  font-family: Chalkduster, fantasy;

}
h7{
  font-size: 18px;
  font-size: Chalkduster, fantasy;
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


<div class="container">
  <div style="text-align:center">
    <button onclick="goBack()"><h3>Back</h3></button>
    <script>
    function goBack() {
    window.history.back();
    }
    </script>


    <h2>Contact Us</h2>

  </div>

  <form action="contact.php" method="post">
  <div class="row">
    <div class="column">
      <h2>Contact Us @</h2>
      <h5>Email: </h5><h5><a href="mailto: helpinghand@gmail.com">helpinghand@gmail.com</a></h5>
      <h5>Phone Number:  9191991919</h5>


    </div>
    <div class="column">
      <form action="/action_page.php">
        <h6>Or...... Fill in your details and we'll get in touch with you..</h6>
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
        <label for="State">State</label>
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
        <label for="phone">Enter your Phone Number: </label>
        <input type="number" id="phone" name="phone" placeholder="Your Phone number..." maxlength="10" minlength="10" required>
        <br>
        <br>
        <label for="email">Enter your Email: </label>
        <input type="email" id="email" name="email" placeholder="Your email....." required>
</br>
<br>

        <input type="submit" value="Submit" name="submit">
      </form>
    </div>
  </div>
</div>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
  $FirstName = $_POST['firstname'];
  $SecondName = $_POST['lastname'];
  $state = $_POST['State'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $connection = mysqli_connect('localhost', 'root','','Contact');
  if($connection)
  {
    echo "<h7>Submission Successful..... We'll contact you soon </h7>";
  }
  else
  {
    die("Connection failed.... ");
  }
  $query = "INSERT INTO contact_details(firstname,lastname,state,phone,email)";
  $query .= "VALUES('$FirstName','$SecondName','$state','$phone','$email')";
  $result = mysqli_query($connection,$query);
  if(!result)
  {
    die('Query Failed' . mysqli_error());
  }
}

?>
