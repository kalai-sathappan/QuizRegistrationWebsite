<?php include("header.html")
?>  
<head> 
<style> 
.form1{
height:500px;
width:1000px;
margin-left:auto;
margin-right:auto;
border: #CC3333 solid; 
background-color:white;

}
.form1 form{
padding-left:20px;}
.service label{
font-size:24px;
}
.form1 input{
padding-right:40px;}
</style> 
</head>
<body>  
<center>
<div class="form1"> 
<form action="connect.php" method="post"> 
<label for="name"><mark>Name</mark></label><br>
<input type="text" size="40" placeholder="Enter Your Name" name="n" required /><br><br>
<label for="name"><mark>Age</mark></label><br>
<input type="number" name="a" required /><br><br>
<label for="name"><mark>DOB</mark></label><br>
<input type="date" name="d" required /><br><br>
<label for="name"><mark>Gender</mark></label><br>
<input type="radio" name="g"   value="male"/>Male
<input type="radio" name="g"   value="female"/>FeMale<br><br>
<label for="name"><mark>E-mailID</mark></label><br>
<input type="email" size="40" placeholder="Enter Your Mail" name="e" required /><br><br>
<label for="name"><mark>Password</mark></label><br>
<input type="password" min="4" maxlength="8" name="p" required /><br><br>
<label for="name"><mark>Department</mark></label><br>
<select name="s">
<option value="cse">CSE</option>
<option value="ece">ECE</option>
<option value="eee">EEE</option>   
<option value="it">IT</option> 
<option value="ai">AI</option>


</select>  
<br/> 
<input type="submit" value="Submit"/> 
<input type="reset" value="Reset"/>
</form> 
</center>  
</body>




<?php include("footer.html")
?> 
