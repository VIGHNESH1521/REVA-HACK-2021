<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>

      <style type = "text/css">

    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body
{
  background-image: url(https://i.pinimg.com/originals/70/46/21/704621f1d7ff85014faf04e35dbcaaf9.jpg);
  background-size: cover;
  background-attachment: fixed;
}
ul {
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
background-color: transparent;
}

li {
float: left;
}

li a {
display: block;
color: black;
text-align: center;
padding: 15px 20px;
text-decoratioten: none;
font-size: 25px;
font-family: Chalkduster, fantasy;
}


li a:hover {
background-color: #C7F0F9;
}
.content
{
  background: transparent;
  width: 50%;
  padding: 40px;
  margin: 100px auto;
  font-family: calibri;

}
body {
  height: 100vh;
  background-color: rgb(139, 62, 85);
  font-family: "Poppins", sans-serif;
}
a,
button {
  font-family: "Poppins", sans-serif;
}




h2{
  font-size: 40px;
  font-family: Chalkduster, fantasy;
}

.btn-group button{
  float: right;
  border-radius: 12px;
  font-family: monospace;
  font-size: 15px;
  color: white;
  background: grey;
  width: 100px;
  height: 60px;
}
.btn-group button:hover{
  background-color: #000000;
}



  </style>
  </head>
  <body>

    <h2><center>WELCOME</center></h2>
<br>
<br>
<div class="btn-group">
<button onclick="goBack()"><h3>Back</h3></button>

<script>
function goBack() {
window.history.back();
}
</script>
</div>



<ul>

  <li><a href="donordisplay.php"><h3><em>Donor Requests</em></h3></a></li>
  <li><a href="agentdisplay.php"><h3><em>Agent Requests</em></h3></a></li>
  <li><a href="contactdisplay.php"><h3><em>Contact Requests</em></h3></a></li>

</ul>







  </body>
</html>
