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
	$x=($x/10);
}
echo "<div class='p1'>";
echo "<h3>PREDICTION OF YOUR NUMEROLOGY<h3><br>";
while($tot >= 10) {
    $tot1 = 0;
    while ($tot > 0) {
        $a = $tot % 10;
        $tot1 = $tot1 + $a;
        $tot = (int)($tot / 10);
    }
    $tot = $tot1;
}
echo "NUMBER:$tot1<br>";
if($tot==1||$tot1==1){
	echo "You possess leadership qualities and a strong sense of independence. Your character is like that of a king, with confidence and determination, but you may also have a tendency towards being egoistic.";
}
elseif($tot==2||$tot1==2){
	echo "   You are deeply emotional and empathetic, with a nurturing nature. Your character is like that of a queen, gentle and compassionate, with a strong intuitive sense.";
}
elseif($tot==3||$tot1==3){
	echo "	You are creative, knowledgeable, and a natural counselor. Your character is like that of a guru or minister, with a hunger for wisdom and a talent for communication";
}
elseif($tot==4||$tot1==4){
	echo "	You are practical, disciplined, and a master planner. Your character is like that of an architect or builder, with a strong foundation and a focus on stability";
}
elseif($tot==5||$tot1==5){
	echo "	You are versatile, curious, and thrive on change. Your character is like that of a prince, with a keen sense of adventure and a talent for balancing mental and emotional aspects.";
}
elseif($tot==6||$tot1==6){
	echo "	You are responsible, caring, and have a love for beauty. Your character is like that of a nurturer, with a focus on family, harmony, and a luxurious lifestyle.";
}
elseif($tot==7||$tot1==7){
	echo "	You are introspective, spiritual, and have a deep understanding of the mysteries of life. Your character is like that of a sage, with a strong connection to the inner self and the unseen.";
}
elseif($tot==8||$tot1==8){
	echo "	You are ambitious, disciplined, and have a natural ability to manage resources. Your character is like that of a judge, with a focus on justice, struggle, and financial success";
}
elseif($tot==9||$tot1==9){
	echo " You are compassionate, humanitarian, and have a strong sense of duty. Your character is like that of a commander, with a focus on serving others, courage, and a sense of honor.";
}
echo "</div>";	

?>
</body>
</html>
