<html>
<head>
<script language="JAVASCRIPT">
        function hs1()
		{
			var ne=f1.t1.value;
			if(ne=="")
			{
				alert("please enter your name");
			}
		}
		function hs2()
		{
			var x1=f1.t1.value;
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
			align-items:center;
			min-height:100vh;
			width:100%;
			background-image:url("https://t4.ftcdn.net/jpg/04/40/67/51/360_F_440675102_8AI4dGJPu8SRpeMywqI2nof0yw78DQ12.jpg");
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
		
		.temp{
			width:420px;
			padding:80px 40px;
			border:2px solid rgba(6,35,57,.5);
			background:transparent;
			background-filter:blur(20px);
			box-shadow:0 0 10px #062339;
			border-radius:10px;
		}
		.temp h2{
			font-size:32px;
			color:white;
		}
		.temp p{
			font-size:20px;
			color:white;
		}
		.temp label{
			font-size:20px;
			color:white;
		}
		.temp1{
			width:420px;
			padding:80px 40px;
			border:2px solid rgba(6,35,57,.5);
			background:transparent;
			background-filter:blur(20px);
			box-shadow:0 0 10px #062339;
			border-radius:10px;
			margin-left:80px;
			font-style:"Times New Roman",Times,serif;
		
		}
		

	</style>
</head>
<body>
<h1>PREDICTION OF NUMEROLOGY BY NAME</h1>
<div class="temp">
	<form name='f1' method="post">
	<h2><b>NUMEROLOGY PREDICTION </b></h2>
	<p><b>Please enter your name to know about you</b></p>
	<label><b>NAME</b></label>
	<input type="text" name="t1" placeholder="Enter your name"><br>
	<input type="submit" value="Submit" onfocusin="hs1()">
	<input type="reset" name="Reset">
</form>
</div>
<?php
if($_POST)
{
	$tot1=0;
	$arr=array('A'=>1,'B'=>2,'C'=>3,'D'=>4,'E'=>5,'F'=>8,'G'=>3,'H'=>5,'I'=>1,'J'=>1,'K'=>2,'L'=>3,'M'=>4,'N'=>5,'O'=>7,'P'=>8,'Q'=>1,'R'=>2,'S'=>3,'T'=>4,'U'=>6,'V'=>6,'W'=>6,'X'=>5,'Y'=>1,'Z'=>7);
	$str1=$_POST['t1'];
	$str1=strtoupper($str1);
	$len=strlen($str1);
	$num=0;
	echo "<div class='temp1'>";
	echo "<h3>PREDICTION OF YOUR NUMEROLOGY<h3><br>";
	for($i=0;$i<$len;$i++)
	{	
		$a=$str1[$i];
		$num=$arr[$a]+$num;
	}
	while($num>=10)
	{
		while($num>0)
		{
		$b=$num%10;
		$tot1=$tot1+$b;
		$num=$num/10;
     	}
    echo "Number:$tot1<br>";
    }
echo"PREDICTION:<br>";
if($num==1||$tot1==1){
	echo "You possess leadership qualities and a strong sense of independence. Your character is like that of a king, with confidence and determination, but you may also have a tendency towards being egoistic.";
}
elseif($num==2||$tot1==2){
	echo "   You are deeply emotional and empathetic, with a nurturing nature. Your character is like that of a queen, gentle and compassionate, with a strong intuitive sense.";
}
elseif($num==3||$tot1==3){
	echo "	You are creative, knowledgeable, and a natural counselor. Your character is like that of a guru or minister, with a hunger for wisdom and a talent for communication";
}
elseif($num==4||$tot1==4){
	echo "	You are practical, disciplined, and a master planner. Your character is like that of an architect or builder, with a strong foundation and a focus on stability";
}
elseif($num==5||$tot1==5){
	echo "	You are versatile, curious, and thrive on change. Your character is like that of a prince, with a keen sense of adventure and a talent for balancing mental and emotional aspects.";
}
elseif($num==6||$tot1==6){
	echo "	You are responsible, caring, and have a love for beauty. Your character is like that of a nurturer, with a focus on family, harmony, and a luxurious lifestyle.";
}
elseif($num==7||$tot1==7){
	echo "	You are introspective, spiritual, and have a deep understanding of the mysteries of life. Your character is like that of a sage, with a strong connection to the inner self and the unseen.";
}
elseif($num==8||$tot1==8){
	echo "	You are ambitious, disciplined, and have a natural ability to manage resources. Your character is like that of a judge, with a focus on justice, struggle, and financial success";
}
elseif($num==9||$tot1==9){
	echo " You are compassionate, humanitarian, and have a strong sense of duty. Your character is like that of a commander, with a focus on serving others, courage, and a sense of honor.";
}
echo "</div>";	
}
?>
</body>
</html>

