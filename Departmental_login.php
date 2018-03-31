<html>
<head><title>Demo</title>
<script src="./js/jquery-3.3.1.min.js"></script>
<style type="text/css">
<!--
	 
#popup{
    background: url(./img/sample125.gif) no-repeat;
    position: absolute;
    width: 710px;
    height: 410px;
    margin: 0 auto;
    top: 50%;
    left: 50%;
    transform:translate(-50%, -50%);
    text-align: center;
    background-color: white;
    display: block;
    box-shadow:  2px 2px 2px 2px #ABABAB;
    border-radius: 10px ;
    border: 2px   #804040 ;
    z-index: 1003;
    }
    
   


 
  #overlay
            {
                display: none;
                width: 100%;
                height: 100%;
                left: 0;
                top: 0;
                position: fixed;
                z-index: 1000;
              background-color: silver;

            }
            .t1{
margin-top: 15px;
    margin-left: 45px;
    margin-right: 5px;
    margin-bottom: 5px;
}
.t2{
    margin-left: 3px;
    margin-top: 30px;
    margin-right: 5px;
    margin-bottom: 5px;
}
.t3{
    margin-top: 50px;
    margin-left: 30px;
   margin-right: 30px;
    background-color: #0000E1;
    color: white;
    width: 80%;
}
            
    
</style>
 <script type="text/javascript">
	$(document).ready(function () {

$("#popup").hide().fadeIn(2500);
$("#close").click(function (e) {
    e.preventDefault();
$("#popup").hide(1000); 
});
});
</script>
<div id="overlay"></div>
</head>
<body>
<div id="popup" class="popup panel panel-primary">
<div class="panel-footer">

<button id="close"><img src="./css/close_button1.png"/></button>
</div>

<div id="registration_form">
<p align="center"><b><font size="5" color="#8a1c1c">Departmental Login</font></b></p>
<form name="form" method="post" action="dept_login_process.php">
<label>Email ID:<input  class="t1" type="text" placeholder="Type your Email ID" id="emailid" name="emailid"/></label><br />

<label> Password:<input  class="t2" type="password" placeholder="Password" id="pwd" name="pwd"/></label><br />
<button type="sumbit" class="t3" name="btn">Login</button>



</div>
</body>
</html>
