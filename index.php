<html>
<head>
<style>
.myDiv {
  background-color: white;
  height: 50%;
  width: 50%;
  overflow: hidden;
  word-wrap: break-word;
  overflow:scroll;
  font-family: Cursive;
  font-weight: bolder;}

 .myDiv2 {
  height: 80%;
  width: 70%;
  border:10px solid black;
  background-color: #deb887;
  font-family: Cursive;
  font-weight: bolder;}

input {
  text-align: center;
  font-weight: bolder;
  border:3px solid black;
  height: 7%;
  font-family: Cursive;}


h1{
	font-family: Cursive;
	font-weight: bolder;}

</style>

<title> Fibonacci Program</title>
</head>
<center> 
<body style="background-color:#FDF5E6;">
<form method="POST">
<h1> Fibonacci Calculator </h1> 
<div class="myDiv2">
<p>&ensp;</p>
<input type="text" name="number" placeholder="Enter a number" />
<p></P> 
<input type="submit" name="submit" value="Submit" />
<p>&ensp;</p>

<div class="myDiv">
<p>&ensp;</p>


<?php  

if(isset($_POST['submit']))
if($_POST['submit'] == "Submit") {
$input = $_POST['number'];

$num = $input;  


/* Recursive function for fibonacci series. */  
function series($num){  
    if($num == 0){  
    return 0;  
    }else if( $num == 1){  
return 1;  
}  else {  
return (series($num-1) + series($num-2));  
}   
}  
/* Call Function. */  
for ($i = 0; $i < $num; $i++){  
echo series($i);  
echo "\n";  
}  }

?>

</div>
</div>
</center> 
</form>
</body>
</html> 