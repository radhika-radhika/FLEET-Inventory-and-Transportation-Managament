<!DOCTYPE html>
<html>
<head>
	<title>FLEET</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
  height:740px;
}

.left {
  width: 70%;
  background-image: url('7.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  border-style: solid;
  border-color: baby blue
}

.right {
  width: 30%;
  text-align:center;
  border-style: solid;
  border-color: baby blue;
  font-variant: small-caps;
  font-size: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #1434A4;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 26px;
  font-variant: small-caps;
  font-style: oblique;
  padding: 20px;
  width: 300px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

.button {border-radius: 12px;}
</style>
</head>
<body>

<div class="row">
  <div class="column left">
  </div>
  <div class="column right" style="background-color:#F0FFFF;">
    <h1>FLEET</h1>
    <h3>Inventory and Transportation Managament</h3>
    <br>
    <p class='a'> Do you wish to manage your Transportation company or your Shipments?<br>(And why not both)</p> 
    <br>
    <p>Here we provide services for your requirements</p>
    <br>
    <button class="button" onclick="document.location='inventoryhome.php'" style="vertical-align:middle"><span>Cargo </span></button>
    <br>
    <br>
    <button class="button" onclick="document.location='transporthome.php'" style="vertical-align:middle"><span>Transportation </span></button>
  </div>
</div>

</body>
</html>


