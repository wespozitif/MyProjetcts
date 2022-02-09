<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>G5</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  </head>
  <body>

    <input type="checkbox" id="check">
    
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Welcome to <span>BNC</span></h3>
      </div>
      <div class="right_area">
      <a href="../login/login.php" class="logout_btn">Deconnexion</a>
      </div>
     <!-- <div class="i">
      <img src="g5.png">
      </div>-->
    </header>
    
    <div class="sidebar">
      <center>
        <img src="download.jpg" class="profile_image" alt="">
        <h4>Groupe G5</h4>
        <hr>
      </center>
      <a href="accueil.php"><i class="fas fa-home"></i><span>Home</span></a>
    
      <a href="Enregistrer_Client.php"><span><i class="fas fa-users"></i>Gestions clients</span></a>
      <a href="Enregistrer_Compte.php"><i class="fas fa-table"></i><span>Gestions comptes</span></a>
      <a href="Enregistrer_Transaction.php"><i class="fas fa-th"></i><span>Gestions transactions</span></a>
      <a href="Enregistrer_Utilisateur.php"><i class="fas fa-users"></i><span>Gestions utilisateurs</span></a>
      <a href="Enregistrer_Rapport.php"><i class="fas fa-cogs"></i><span>Statistiques</span></a>
      <hr>
    </div>
    

    <div class="content">
      <img src="bnc.png">
        <div class="aside1">
      
        <h3>Services</h3>
        <hr>
      <a href="#"> </i>Carte de credit</a>
      <hr>
      <a href="#"> </i>Creation compte</a>
      <hr>
      <a href="#"> </i>Echange US</a>
      <hr>
      <a href="#"> </i>Solde interet</a>
      <hr>
      <a href="#"> </i>Achat monnaie</a>
      <hr>
      <a href="#"> </i>Webmasters</a>
      <hr>
      
      </div>
    </div>


    <style>

body{
  margin: 0;
  padding: 0;
  font-family: "Roboto", sans-serif;
}

header{
  position: fixed;
  background: #133e5a;
  padding: 20px;
  width: 100%;
  height: 30px;
}
.i{
position:absolute;
 top:-100px;
width:150px;
height: 100px;
float:right;
margin-left:900px;
  
}
.i img{
  
}
.left_area h3{
  color: #fff;
  margin: 0;
  font-family:arial black;
  text-transform: uppercase;
  font-size: 22px;
  font-weight: 900;
}

.left_area span{
  color: #ff0000;
}

.logout_btn{
  padding: 5px;
  background: #ff0000;
  text-decoration: none;
  float: right;
  margin-top: -30px;
  margin-right: 40px;
  border-radius: 2px;
  font-size: 15px;
  font-weight: 600;
  color: #cccccc;
  transition: 0.5s;
 
}

.logout_btn:hover{
  background:#ff0000;
}

.sidebar {
  background: #133e5a;
  margin-top: 70px;
  padding-top: 30px;
  position: fixed;
  left: 0;
  width: 250px;
  height: 100%;
  transition: 0.5s;
  transition-property: left;
}

.sidebar .profile_image{
  width: 100px;
  height: 100px;
  border-radius: 100px;
  margin-bottom: 10px;
}

.sidebar h4{
  color: #ccc;
  margin-top: 0;
  margin-bottom: 20px;
}

.sidebar a{
  color: #fff;
  display: block;
  width: 100%;
  line-height: 50px;
  text-decoration: none;
  padding-left: 40px;
  box-sizing: border-box;
  transition: 0.5s;
  transition-property: background;
}

.sidebar a:hover{
  text-decoration:underline;
}

.sidebar i{
  padding-right: 10px;
}

label #sidebar_btn{
  z-index: 1;
  color: #fff;
  position: fixed;
  cursor: pointer;
  left: 700px;
  text-align:center;
  font-size: 40px;
  margin: 5px 0;
  transition: 0.5s;
  transition-property: color;
  top:8px;
}

label #sidebar_btn:hover{
  color: #fff;
}

#check:checked ~ .sidebar{
  left: -190px;
}

#check:checked ~ .sidebar a span{
  display: none;
}

#check:checked ~ .sidebar a{
  font-size: 20px;
  margin-left: 170px;
  width: 80px;
}

.content{
  margin-left: 300px;
  background: url(H12.jpg) no-repeat;
  background-position: left;
  background-size: 100%;
  height: 100vh;
  transition: 0.5s;
  top:40px;
}
.content img{
  z-index: 1;
  width:80%;
  position:relative;
  top:170px;
  float:left;
  left:-50px;
}
.aside1{
  width:12%;
  height:395px;
  position :relative;
  background-color:#133e5a;
  display:block;
  float:right;
  top:180px;
  right:2px;
  border-radius:10px;
}
.aside1 h3{
  color:#fff;
  text-align:center;
  margin-top:15px;
  text-decoration: ;
}
.aside1 hr{
  margin-bottom:20px;
}
.aside1 a{
  text-decoration:none;
  display:block;
  line-height:10px;
  text-align:center;
  color:#fff;
  margin-top:30px;
  font-family: "Roboto", sans-serif
}
.aside1 a:hover{
  text-decoration:underline #fff;
}
#check:checked ~ .content{
  margin-left: 60px;
}

#check{
  display: none;
}

</style>
  </body>
</html>
