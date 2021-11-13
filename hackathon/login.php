<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login/Register</title>

      <style type = "text/css">

    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body
{
  background-image: url(https://media.istockphoto.com/photos/assistance-concept-at-quarantine-time-because-of-coronavirus-covid19-picture-id1223246830?k=20&m=1223246830&s=612x612&w=0&h=g1exNujFGoVYTwU1G_0OBsid0GFrCwwprxLNFhYf2Oc=);
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
body {
  height: 100vh;
  background-color: rgb(139, 62, 85);
  font-family: "Poppins", sans-serif;
}
a,
button {
  font-family: "Poppins", sans-serif;
}

.dropdown {
  height: 10vh;
  width: 60%;
  margin: auto;
  display: flex;
  justify-content: space-around;
  align-items: center;
}

.Admin,
.Donor,
.Agent {
  position: relative;
}

.Admin ul,
.Donor ul,
.Agent ul{
  margin-top: 10px;
  position: absolute;
  display: block;
  justify-content: space-around;
  flex-direction: column;
  align-items: center;
  width: 150px;
  height: 70px;
  background: black;
  left: 0px;
  list-style: none;
  border-radius: 5px;



}


.Admin li,
.Donor li,
.Agent li {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;

}

.Admin li:hover,
.Donor li:hover,
.Agent li:hover {
  background-color: rgb(199, 173, 181);
}

.Admin a,
.Donor a,
.Agent a {
  color: white;
  text-decoration: none;

}

.dropdown button,
.home {
  background: none;
  text-decoration: none;
  border: none;
  color: black;
  font-size: 18px;
  cursor: pointer;
  font-size: 35px;
  font-family: monospace;
}



h2{
  font-size: 40px;
  font-family: Chalkduster, fantasy;
}
li a {
  display: flex;
  color: black;
  text-align: center;
  padding: 15px 20px;
  text-decoratioten: none;
  font-size: 25px;
  font-family: monospace;
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

    <h2><center>LOGIN PAGE</center></h2>



<div class="btn-group">
<button onclick="goBack()"><h3>Home</h3></button>

<script>
function goBack() {
window.history.back();
}
</script>
</div>

    <nav>
      <div class="dropdown">


        <div class="Admin">
          <button>Admin</button>
          <ul>
            <li><a href="loginauth/adminlogin.php">Sign In</a></li>


            </ul>
        </div>
        <div class="Donor">
          <button>Donor</button>
          <ul>
            <li><a href="dononregistration.php" >Register</a></li>
            </ul>
        </div>
        <div class="Agent">
          <button>Agent</button>
            <ul>
              <li><a href="agentregistration.php">Register</a></li>
            </ul>

        </div>
      </div>
    </nav>



  </body>
</html>
