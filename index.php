<!DOCTYPE html>
<head>
	<title>CGPA Calculator</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
<head>
<body>
	<div class="head"><h1>CGPA Calculator</h1></div>
	<form method="get">
	<span class="s">Enter number of subjects:</span>
		 <select name= "num" id="num">
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</select> 
		<button class="button" type="button" id="a" onclick="load();">OK</button> <br> 	
	<fieldset>
	<legend class="gpa">Calculate GPA:</legend> 
	<span id="gpa">
		<span class="gpa">Subject</span>
		<span class="gpa">Credits</span>
		<span class="gpa">Grade</span><br>
		
		<div id="ch"></div> 
		<span><input class="button" type="submit" name='submit'></span>
		
		<?php
			
				$c1=isset($_GET['credits1'])? $_GET['credits1'] : 0;
				$g1=isset($_GET['grade1'])? $_GET['grade1']: 0;
				$c2=isset($_GET['credits2'])? $_GET['credits2']: 0;
				$g2=isset($_GET['grade2'])? $_GET['grade2']: 0;
				$c3=isset($_GET['credits3'])? $_GET['credits3']: 0;
				$g3=isset($_GET['grade3'])? $_GET['grade3']: 0;
				$c4=isset($_GET['credits4'])? $_GET['credits4']: 0;
				$g4=isset($_GET['grade4'])? $_GET['grade4']: 0;
				$c5=isset($_GET['credits5'])? $_GET['credits5'] : 0;
				$g5=isset($_GET['grade5'])? $_GET['grade5']: 0;
				$c6=isset($_GET['credits6'])? $_GET['credits6']: 0;
				$g6=isset($_GET['grade6'])? $_GET['grade6']: 0;
				$c7=isset($_GET['credits7'])? $_GET['credits7']: 0;
				$g7=isset($_GET['grade7'])? $_GET['grade7']: 0;
				$c8=isset($_GET['credits8'])? $_GET['credits8']: 0;
				$g8=isset($_GET['grade8'])? $_GET['grade8']: 0;
				$c9=isset($_GET['credits9'])? $_GET['credits9'] : 0;
				$g9=isset($_GET['grade9'])? $_GET['grade9']: 0;
				$c10=isset($_GET['credits10'])? $_GET['credits10']: 0;
				$g10=isset($_GET['grade10'])? $_GET['grade10']: 0;
				$c11=isset($_GET['credits11'])? $_GET['credits11']: 0;
				$g11=isset($_GET['grade11'])? $_GET['grade11']: 0;
				$c12=isset($_GET['credits12'])? $_GET['credits12']: 0;
				$g12=isset($_GET['grade12'])? $_GET['grade12']: 0;
			
			//$value = isset($c1['my_index']) ? $array['my_index'] : '';	
		$cg1=$c1*convert($g1);
		$cg2=$c2*convert($g2);
		$cg3=$c3*convert($g3);
		$cg4=$c4*convert($g4);
		$cg5=$c5*convert($g5);
		$cg6=$c6*convert($g6);
		$cg7=$c7*convert($g7);
		$cg8=$c8*convert($g8);
		$cg9=$c9*convert($g9);
		$cg10=$c10*convert($g10);
		$cg11=$c11*convert($g11);
		$cg12=$c12*convert($g12);
		
				
		$tcg=$cg1+$cg2+$cg3+$cg4+$cg5+$cg6+$cg7+$cg8+$cg9+$cg10+$cg11+$cg12;
		$tc=$c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12;
		if($tc>0){
		$gpa=$tcg/$tc;
		}
		else {
		$gpa=0;
		}	
			//print "CG1: " .$tcg;
		
		function convert($grade) {
			$gr=0;
			switch($grade){
			case "O":
				$gr=10;
				break;
			case "A+":
				$gr=9;
				break;
			case "A":
				$gr=8;
				break;
			case "B+":
				$gr=7;
				break;
			case "B":
				$gr=6;
				break;	
			}
			return $gr;	
		}
		?>		
		<script type="text/javascript">
			function load() {
			$("#ch").load("txtdata/" + $(num).val() + ".txt");
			};
		</script>
		</span>
	</fieldset>	
		</form>
		<br>
		<span class="a">
		<?php
			print "GPA: ".round($gpa,2);
		?>
		</span>	
	<br><br>
	<form method="get">
	<span class="s">Enter number of semesters:</span>
		<select name= "cho" id="cho">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
		</select>	
		<button class="button" type="button" onclick="loads();">OK</button>  
	<fieldset>
	<legend class="gpa">Calculate CGPA:</legend>	
	<span id="cgpa">
		<script type="text/javascript">
			function loads() {
			console.log($(cho).val());	
			$("#cgpa").load("txtdata/" + $(cho).val() + "a.txt");
			};
		</script>
		
	<?php
				$s1=isset($_GET['sem1'])? $_GET['sem1']:0;
				$s2=isset($_GET['sem2'])? $_GET['sem2']:0;
				$s3=isset($_GET['sem3'])? $_GET['sem3']:0;
				$s4=isset($_GET['sem4'])? $_GET['sem4']:0;
				$s5=isset($_GET['sem5'])? $_GET['sem5']:0;
				$s6=isset($_GET['sem6'])? $_GET['sem6']:0;
				$s7=isset($_GET['sem7'])? $_GET['sem7']:0;
				$s8=isset($_GET['sem8'])? $_GET['sem8']:0;
				$s=isset($_GET['cho'])? $_GET['cho']:0;
				$ts=$s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8;
				if($s>0){
				$cgpa=$ts/$s;
				}
				else{
				$cgpa=0;
				}
	?>
	</span>
	<span><input class="button" type="submit" name='submit'></span>
	</fieldset>	
		</form>
		<br>
		<span class="a">
		<?php
			print "CGPA: ".round($cgpa,2);
		?>
		</span>	
</body>
</html>		