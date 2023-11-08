<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<style>
body{font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(90deg,#03a9f4,#119fa4,#2995d4,#03a9f4);
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.main{
    text-align: center;
    justify-content: center;
    align-items: center;
    margin-top: 15%;
}
h2{
    font-size: 80px;
    color: rgba(255, 255, 255, 0.808);
    color: #999;
    filter: drop-shadow(7px 0px 6px #000);
}
p{
    font-size: 20px;
    color: rgb(68, 67, 67);
}

button {
  background:linear-gradient(90deg,#03a9f4,#f441a5,#ffab3d,#03a9f4);
  color: white;
  width: 100%;
  height: 50px;
  padding: 13px 50px;
  margin: 8px 0;
  text-align: center;
  border-radius: 30px;
  border: none;
  font-size: 20px;
  cursor: pointer;
  box-shadow: 0 6px 20px -5px rgba(0,0,0,0.4);
}

button:not([disabled]):hover {
  -webkit-transform: translateY(-.3rem);
  transform: translateY(-.3rem);
  -webkit-box-shadow: 6px 10px 16px 0 rgba(0,0,0,.4);
  box-shadow: 6px 10px 16px 0 rgba(0,0,0,.4)
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 65%; 
  height: 100%; 
  overflow: auto; 
  padding-top: 60px;
}

.modal-content {
  box-shadow:  0 5px 15px rgba(0,0,0,.5);
  backdrop-filter: blur(10px);
  margin: 5% auto 15% auto;
  border: 1px solid #888;
  width: 80%;
}

.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<div class="main">
<h2>Musify</h2>
<p> Listion uninterrupted & add free music</p>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
</div>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="./src/main.html" method="post">
    
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background:rgba(0,0,0,0)">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>