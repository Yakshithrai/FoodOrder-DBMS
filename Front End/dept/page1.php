<?php

try{
$server = "localhost";
$user = "root";
$pass = "";
$database = "project";

$conn = mysqli_connect($server, $user, $pass, $database);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $pass = $_POST['itname'];
  $item = $_POST['price'];
  $img = $_POST['img'];


  $sql="INSERT INTO `items` (`item_name`,`price`,`img`) VALUES ( '$pass','$item','$img')";


  $result= mysqli_query($conn,$sql);
}
}
catch(Exception $e)
{
  echo '<script>alert("Please enter the item_name provided by the admin")</script>';
}
?>



<!DOCTYPE html>
<html lang="en">
<head><title>Adding Items</title></head>
<body>
<?php
  include('nav2.php');
  ?>




<div class="container">
<form class="box-form" action="page1.php" method="post">

    <div class="box-title">
      <h2>ADD ITEM</h2>
    </div>

    <div class="box-inputs">

  
    <div class="inputs-password">
        <input  name="img" id="password" class="input" placeholder="Type your password">
        <label for="password" class="label-inputs">Img Link</label>
      </div>
      <div class="inputs-password">
        <input name="itname" id="password" class="input" placeholder="Type your password">
        <label for="password" class="label-inputs">Item_name</label>
      </div>
      <div class="inputs-password">
        <input name="price" id="password" class="input" placeholder="Type your password">
        <label for="password" class="label-inputs">Price</label>

      
      </div>

      <div class="box-btn-login">
        <button class="btn-login" type="submit" value="enter">Enter</button>
      </div>
    </div>
    </form>
</div>


<div class="container">
<form class="box-form" action="ep.php" method="post">

    <div class="box-title">
      <h2>EDIT ITEM PRICE</h2>
    </div>
    <form class="box-form" action="ep.php" method="post">

    <div class="box-inputs">

  
      <div class="inputs-email">
        <input type="username" name="inam" id="email" class="input" >
        <label for="email" class="label-inputs">Item_name</label>
      </div>

      <div class="inputs-password">
        <input  name="prc" id="password" class="input" placeholder="Type your password">
        <label for="password" class="label-inputs">Price</label>
      </div>
      
   

      <div class="box-btn-login">
        <button class="btn-login" type="submit" value="enter">Enter</button>
      </div>
    </div>
    </form>
</div>



    
<div class="container">
<form class="box-form" action="ditem.php" method="post">

    <div class="box-title">
      <h2>DELETE ITEM </h2>
    </div>

    <div class="box-inputs">

  
      <div class="inputs-email">
        <input type="username" name="item" id="email" class="input" >
        <label class="label-inputs">Item_name</label>
      </div>


      <div class="box-btn-login">
        <button class="btn-login" type="submit" value="enter">Enter</button>
      </div>
    </div>
    </form>
</div>

    


    

<style>

@import url("https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap");

:root {
  --prymaryColor: #222;
  --colorText: #444;
  --secondColor: #eef;
  --colorHover: #000;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;

  font-family: "Ubuntu", sans-serif;
}

body,
.container,
.box-form,
.box-midias {
  display: flex;
  justify-content: center;
  align-items: center;
}

body {
  width: 100%;
  height: 100vh;

  background: background-image: -moz-linear-gradient( 136deg, rgb(0,158,253) 0%, rgb(42,245,152) 100%);
    background-image: -webkit-linear-gradient( 136deg, rgb(0,158,253) 0%, rgb(42,245,152) 100%);
    background-image: -ms-linear-gradient( 136deg, rgb(0,158,253) 0%, rgb(42,245,152) 100%);
}

.container {
  width: 640px;
  padding: 10px;

  border-radius: 20px;
  background-color: var(--prymaryColor);
}

/* box's*/

.box-form {
  min-width: 320px;
  padding: 20px 15px;

  border-radius: 10px;
  background-color: var(--secondColor);

  flex-direction: column;
}

.box-title {
  padding: 25px;
  font-size: 1.3em;
  color: var(--colorText);
}

.box-inputs {
  position: relative;
  min-width: 100%;
}

/*inputs*/

.inputs-email,
.inputs-password {
  position: relative;

  min-width: 100%;
  height: 40px;
}

.inputs-email {
  margin-bottom: 25px;
}

.inputs-remember {
  margin: 15px 0 15px 0;
}

.input {
  appearance: none;

  min-width: 100%;
  height: 100%;

  border: none;
  border-bottom: 2px solid var(--colorText);
  background-color: transparent;
}

#email {
  padding-left: 55px;
  transition: 0.5s padding;
}

#password {
  padding-left: 80px;
  transition: 0.5s padding;
}

#email:focus,
#password:focus {
  outline: none;
  padding: 0px;
}

#remember {
  accent-color: var(--prymaryColor);
}

.input:hover {
  border-bottom: 2px solid var(--colorHover);
}

.input::placeholder {
  color: transparent;
}

/* label's*/

.label-inputs {
  position: absolute;
  top: 9px;
  left: 0px;

  cursor: text;

  transition: 0.5s top;
}
.input:focus + .label-inputs {
  top: -15px;
}

/*button*/

.box-btn-login {
  position: relative;
  min-width: 100%;
  height: 40px;
  margin-bottom: 15px;
  padding: 2px;

  border-radius: 100px;
  background-color: var(--prymaryColor);

  overflow: hidden;
}

.box-btn-login:hover {
  animation: colorAnimation 1s ease-in-out;
}

@keyframes colorAnimation {
  25% {
    transform: rotate(5deg) translate(5px);
  }
  50% {
    transform: rotate(-5deg) translate(-5px);
  }
  60% {
    transform: rotate(4deg) translate(4px);
  }
  70% {
    transform: rotate(-3deg) translate(-3px);
  }
  80% {
    transform: rotate(2deg) translate(2px);
  }
  90% {
    transform: rotate(-1deg) translate(-1px);
  }
  100% {
    transform: rotate(0deg);
  }
}

.btn-login {
  appearance: none;
  position: relative;

  width: 100%;
  height: 100%;

  border: none;
  background-color: var(--prymaryColor);

  font-size: 1em;
  color: var(--secondColor);

  cursor: pointer;
  transition: 0.3s;
}

/* register*/

.box-register {
  min-width: 100%;
  line-height: 1.5;

  color: var(--colorText);
}

.box-register a {
  color: var(--colorHover);
}

.box-register a:hover {
  color: var(--colorText);
}

.break-line {
  position: relative;
  min-width: 90%;
  height: 2px;
  margin-top: 30px;

  background: linear-gradient(
    to right,
    #ddd 43%,
    transparent 43%,
    transparent 57%,
    #ddd 57%
  );
}

.break-line p {
  position: absolute;
  left: 50%;
  transform: translate(-50%, -50%);
}

p::selection,
a::selection,
label::selection,
h1::selection,
h2::selection {
  background-color: var(--prymaryColor);
  color: var(--secondColor);
}

/*Midias*/

.box-midias {
  width: 100%;
  gap: 20px;

  padding: 30px 0 25px;
}

.midia {
  width: 40px;
  height: 40px;

  background-color: var(--prymaryColor);

  font-size: 30px;

  display: grid;
  place-content: center;

  transition: 0.5s;
}

.link-midias {
  text-decoration: none;

  display: block;

  width: 100%;
  height: 100%;

  color: var(--secondColor);
}

.link-midias ion-icon {
  display: grid;
  place-content: center;
}

.midia:hover {
  border-radius: 50%;
  transform: translate(0, -8px) scale(120%);
}

.midia::before {
  content: "";
  position: absolute;
  bottom: -13px;
  left: 20px;

  width: 0px;
  height: 0px;

  background: #ddd;
  border-radius: 100%;

  transition: 0.5s;
}

.midia:hover::before {
  width: 30px;
  height: 10px;

  left: 5px;
}

/**/

.hero {
  width: 100%;
  min-width: 150px;
  padding-left: 20px;
  color: var(--secondColor);
}

@media (max-width: 650px) {
  .container {
    flex-direction: column;
    width: 320px;
  }

  .hero {
    padding: 3px 10px 10px;

    order: 1;
  }

  .box-form {
    order: 2;
    min-width: 310px;
  }
}

</style>
</body>
</html>