
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <br/>
	<center>
    <h1>
		<?php
			// comment
	 
			//echo "Hello World <br/>";
			$first_name = "Joh";
			$last_name = "Doe";
			// echo $first_name . " " .  $last_name;
			
		?>
		
		<?php
		//echo 'And then she said: "you\'re ugly"';
		if ($first_name == "John" ){
	//		 echo "hello John";
		}
		else{
			
			//echo "you're not John";
		}
			 
		 
		// $num_1 = 40;
		 //$num_2 = 5;
		 //if ($num_1 > 10){
		//	  echo $num_1 . "is greater than 10";
		// }
		// elseif($num_2 == 5){
		//	 echo $num_2 . "";
		// }
		// else{
		//	 echo  $num_1 . " is less than 10";
		 //}
		 
		   // loops foreach
		   $count= 0;
		   $names = array("John", "Steve" , "Mary");
		 //  while ($count < count($names)){
		   //foreach ($names as $value){
		//	   echo "Name: $names[$count] <br/>";
		//	   $count++;
		//   }
		   
		//  function hellothere($num_1, $num_2){
		//	 return($num_1 + $num_2);
		 // }			  
		
		 //$answer = hellothere(41, 4);
		// echo $answer;
		
		// Random functions
		
				//echo rand(0, 10);
		//		$num = 4;
		//		$rando = mt_rand(0,10);
		//		$names = array("John", "steve", "Mary");
		//		if($num == $rando){
		//			echo "you win $num = $rando";
		//		}
		//		else {
		//			echo "you lose $num doesn't equal $rando";
		//		}	
				
		//		$rando = mt_rand(0,2);
		//		echo $names[$rando];
				// Date function
					//echo date('l jS \of F, Y');
		//			$today_day = date('1');
					//echo "Today's day is $today_day";
					
		//			$todays_day = date("Y");
		//			echo "Copyright (c) $todays_day - All rights Reserved";
					
					// String manipulation
					
					//$stuff = "robin is a PH P coding person";
					//$monster = "person";
					//$dork = "dork";
					//echo str_replace($monster, $dork, $stuff);
					
					
		//case change
					$stuff = "robin wilson";
					//echo  strtoupper ($stuff);
					
					//first cap of each wordwrap
					//echo ucwords ($stuff);
	
			//		echo ucfirst($stuff);
			//		echo strtolower ($stuff);
			//		echo strlen($stuff);
			//		
					
					//foreach loops
			//		$names = array("John", "susan", "Mary");
		 
			//		foreach($names as $value){
			//			echo "$value<br/>";
			//		}
					
				//	$count = 0;
			//		while ($count < count($names)){
			//			echo "Name : $names[$count] <br/>";
			//			$count++;
			//		}
			//		
	
		 ?>
		 
		 
	 </center>
	<br/>
	</h1>
		<?php   ?>
	
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>

 