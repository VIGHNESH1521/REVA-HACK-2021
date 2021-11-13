<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {background-color: lightGrey;}
body
{
  background-image: url(https://image.freepik.com/free-photo/long-hospital-corridor-with-empty-seats_117023-1679.jpg);
  background-size: cover;
  background-attachment: fixed;
}
.content
{
  background: transparent;
  width: 50%;
  padding: 40px;
  margin: 100px auto;
  font-family: calibri;

}


</style>
<div class="content">

</div>
  </head>
  <body>
    <button onclick="goBack()"><h3>Back</h3></button>
    <script>
    function goBack() {
    window.history.back();
    }
    </script>
    <h1><em><center>
      REGISTERED DONORS
    </center></em></h1>
    <table border="2">
      <tr>
        <td><em><h4>ID</h4></em></td>
        <td><em><h4>First Name</h4></em></td>
        <td><em><h4>Last Name</h4></em></td>
        <td><em><h4>Organization</h4></em></td>
        <td><em><h4>Address</h4></em></td>
        <td><em><h4>Pincode</h4></em></td>
        <td><em><h4>State</h4></em></td>
        <td><em><h4>Email</h4></em></td>
        <td><em><h4>Phone Number</h4></em></td>
        <td><em><h4>Date Food was Packed</h4></em></td>
        <td><em><h4>Food Expiry Date</h4></em></td>
        <td><em><h4>Total Quantity of Food in Kilograms</h4></em></td>

      </tr>
      <?php

include "donorconnection.php";
$records=mysqli_query($connection,"SELECT * from donor_details");
while($data=mysqli_fetch_array($records))
{
  ?>
  <tr>
    <td><em><?php echo $data['ID']; ?></em></td>
    <td><em><?php echo $data['firstname']; ?></em></td>
    <td><em><?php echo $data['lastname']; ?></em></td>
    <td><em><?php echo $data['organization']; ?></em></td>
    <td><em><?php echo $data['address']; ?></em></td>
    <td><em><?php echo $data['pincode']; ?></em></td>
    <td><em><?php echo $data['state']; ?></em></td>
    <td><em><?php echo $data['email']; ?></em></td>
    <td><em><?php echo $data['phonenumber']; ?></em></td>
    <td><em><?php echo $data['date1']; ?></em></td>
    <td><em><?php echo $data['date2']; ?></em></td>
    <td><em><?php echo $data['available']; ?></em></td>

  </tr>
  <?php
}


       ?>

    </table>
    <?php mysqli_close($connection);?>
</div>
  </body>
</html>
