<html>
<head>
	<script language="JAVASCRIPT">
        function hs1()
		{
			var dt=f1.d1.value;
			if(dt=="")
			{
				alert("please enter the date");
			}
		}
		function hs2()
		{
			var x1=f1.d1.value;
			document.write(x1);
		}
	</script>
	<style>
		*{
			margin:0;
			padding:0;
			box-sizing:border-box;
		}
		body{
			display:flex;
			justify-content:center;
			background-image:url("https://img.freepik.com/free-vector/gradient-numerology-illustration_23-2150037595.jpg");
			align-items:center;
			min-height:100vh;
			width:100%;
			background-repeat:no-repeat;
			background-size:cover;
		}
		h1{
			font-size:30px;
			font-style:"Times New Roman",Times,serif;
			position:absolute;
			top:0;
			color:white;
		}
		.samp{
			width:420px;
			padding:80px 40px;
			border:2px solid rgba(6,35,57,.5);
			background:transparent;
			background-filter:blur(20px);
			box-shadow:0 0 10px #062339;
			border-radius:10px;
		}
		.samp h2{
			font-size:32px;
			color:white;
		}
		.samp p{
			font-size:20px;
			color:white;
		}
		.samp label{
			font-size:20px;
			color:white;
		}
		.p1{
			width:420px;
			padding:80px 40px;
			border:2px solid rgba(6,35,57,.5);
			background:transparent;
			background-filter:blur(20px);
			box-shadow:0 0 10px #062339;
			border-radius:10px;
			margin-left:80px;
			font-style:"Times New Roman",Times,serif;
			color:white;
		}
		

		
		
	</style>

</head>
<body>
<h1>PREDICTION OF NUMEROLOGY BY DATE OF BIRTH</h1>
<div class="samp">
	<form name='f1' method="post">
	<h2>NUMEROLOGY PREDICTION</h2><br>
	<p><b>Please enter your date of birth to know about you</b></p>
	<label><b>Date of birth:</b></label>
	<input type="date" name="d1"><br>
	<input type="submit" name="Submit"><br>
	<input type="reset" value="Reset"><br>
</div>
</form>
<?php
$x=$_POST["d1"];
$x=str_replace("-","",$x);
$tot=0;
$tot1=0;
while($x>0)
{
	$r=$x%10;
	$tot=$tot+$r;
	$x=$x/10;
}
echo "<div class='p1'>";
echo "<h3>PREDICTION OF YOUR NUMEROLOGY<h3><br>";
if($tot>=10)
{
	while($tot>0)
	{
		$a=$tot%10;
		$tot1=$tot1+$a;
		$tot=$tot/10;
     }
     echo "NUMBER:$tot1<br>";
}
else{
	echo "NUMBER:$tot<br>";
}
if($tot==1||$tot1==1){
	echo "    According to the numerology your characters is like a King,Leadership qualities and Egoistic";
}
if($tot==2||$tot1==2){
	echo "   According to the numerology your character is like a queen and have emotions";
}
if($tot==3||$tot1==3){
	echo "	According to the numerology your character is like guru,minister,counselor,creative and hungry of knowledge";
}
if($tot==4||$tot1==4){
	echo "	According to the numerology your character is like mischievous,shadow of sun and planner";
}
if($tot==5||$tot1==5){
	echo "	According to the numerology your character is like prince,accountant,mental and emotional balance";
}
if($tot==6||$tot1==6){
	echo "	According to the numerology your character is like guru,bad minister,statergy,expert,dancer and luxury life";
}
if($tot==7||$tot1==7){
	echo "	According to the numerology your character is like shadow of moon,secretive and mischievous";
}
if($tot==8||$tot1==8){
	echo "	According to the numerology your character is like judge,struggle and money manager";
}
if($tot==9||$tot1==9){
	echo "	According to the numerology your character is like commander,humanity,anger and honorable old life";
}
echo "</div>";	

?>
</body>
</html>
