<html>
	<head>
		<title>PHP BASICS</title>
	</head>
	<body>
		<div  method="post" class="form-wrap">
			<label id="namelabel" for="name">Name</label>
			<input id="namein" type = "text" name = "name">	
			<label id="namelabel" for="age">Age</label>
			<input id="namein" type = "text" name = "age">	
			<label id="namelabel" for="address">Address</label>
			<input id="namein" type = "text" name = "address">	
		</div>
		<?php
			//BASICS OF PHP///////////////////////////////////////////////////////////////////////
		
			//input data from form//
			$name = $_POST['name'];
			$age = $_POST['age'];
			$address = $_POST['address'];
			/////////////////////////
			
			//STRINGS/////////////////////////////////////////////////////////////////
			$mystr ="my name amd this is the basics";//"<-words between these are strings->"
			/*echo=print*/echo "Jacobs".$mystr;// . <-is used to concatenate strings
			
			//hear_dock_syntax
			$str = <<<EOD The user name is $name and  they are $age years old
			living at $address!</br>EOD;
			echo $mystr;
			
			$sum ="harder than two diamonds crushed by a blackhole at singularity"
			//print format (%s for string,%d for int,%.(decimalplaces)f for floats)
			printf("Life is %s </br>",$sum);
			
			//strtoupper() //capitalize all char
			//strtolowe() // lowercase all char
			//ucfirst() //uppercase for word in string
			//strlen() shows amount of chars in strings
			//trim() removes excess spcaces on both sides of string
			//ltrim() trims excess spaces left rtrim() trims excess spaces right
			//explode(' ',$array, 10); (seperation,array,amount of sections in array)
			//strstr($string,"the") return all the strings after located string inside variable
			//strcasecmp($man,$manhole); adds strings together
			//substr("Random String",0,6); prints selected indexes of string
			//strpos($string,"t") locates where the char is indexed in variable
			//str_replace(whattoreplace,replace,$string) replaces string inside variable
			///////////////////////////////////////////////////////////////////////////
			
			
			
			//INTS&BOOOLEAN/////////////////////////////////////////////////////////////
			$mynum = 5;
			$mysecnum= 16;
			echo "</br>5+10 =".(5+10);
			
			//Condition ? value if true: value if false	
			$biggestNum =(15>10)?15:10;
			echo $biggestNum;
			
			//+= -= *= /= %= (add,subtract,multiply,divide,remainder)
			echo$mysecnum +=4;
			$mythirdnum =&mysecnum; //set this variable equal to secnum
			mysecnum = 50;//resetting value of variable 
			echo '$mythirdnum='.mythirdnum;
			
			define('PI',3.1415926);
			///////////////////////////////////////////////////////////////////////////////

			
			//ARRAYS///////////////////////////////////////////////////////////////////
			$people = array("Kinkta","Bavabon","Dightad","Ladash","Janiz")
			echo $people[4];
			foreach($people as $person){ //for loop specifically for arrays
				echo $person.' is in the list!';
			}
			//storing data in array from input form
			$information = array('Name'=>$name,'Age'=>$age,'City'=>address);
			
			//multi-dimensional array
			$md= array(array('Kinkta','25','2441 Deli Main'),
					   array('Bavabon','31','11 Handad Ave'),
					   array('Dightad','19','1515 Samkins St '));
			for($row=0;$row<3;$row<3;$row++{
				for($col=0;$row<3;$col++){
					echo $md[$row][$col].',';
				}
				echo '</br>';
			}
			//sort($array): assorts in ascending(SORT_NUMERIC or SORT_STRING)
			//asort() sorts arrays with keys
			//ksort() sorts by the key
			//r in front reverses order	
			///////////////////////////////////////////////////////////////////////////
			
		
			//IF ELSE//////////////////////////////////////////////////////////////////
			
			//logical operators are &&(and),||(or), !(not true)
			loggedIn=true;
			if(($loggedIn==true) && (mythirdnum==50)){
				echo "<p>You are logged in<p>";
			}else{
				echo "You aren't logged in!";
			}
		
			////////////////////////////////////////////////////////////////////////////	
			
			//SWITCH////////////////////////////////////////////////////////////////////
			$numSwitch =10;
			
			switch($numSwitch){
				case 5:
					echo"5 is the answer";
					break;
				case 10:
					echo"10 is the answer";	
					break;
				default:
					echo"No value could be determined";
					break;
			}
			////////////////////////////////////////////////////////////////////////////
			
			//FOR///////////////////////////////////////////////////////////////////////
			for($num =1;$num <=20; $num++){
				echo $num;
				
				if($num !=20){
					echo ',';
				}else{
					break;
				}
			}
			
			//WHILE/////////////////////////////////////////////////////////////////////
			$numWhile=0;
			while($numWhile<20){
				echo ++$num.',';
			}
			////////////////////////////////////////////////////////////////////////////
			
			//FUNCTIONS/////////////////////////////////////////////////////////////////
			function addNumbers($numa1,$numa2){
				return $numa1+$numa2;
			}
			echo "3+4=".addNumbers(3,4);
			
			//DATE//////////////////////////////////////////////////////////////////////
			date_default_timezone_set('UTC');
			/*Starting comment tag 
			h: 12 hr format 
			H: 24 hr format
			i: Minutes
			s: Seconds
			u: Microseconds
			a: Lowercase am or pm
			l: Full text for the day
			F: Full text for the month
			j: Day of the month
			S: Suffix for the day st,nd,rd,etc
			Y: 4 digits y
			Ending comment tag*/
			echo date('h:i:s:u a, l F jS Y e')
			
		?>
	</body>
</html>