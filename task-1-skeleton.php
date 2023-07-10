 <!DOCTYPE html>  
<html>   
 <head>   
  <title>Task-1</title>  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
  </head>  
  <body>  

  <?php  
		$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,  
					68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";  
		
		$array = preg_split("/,/", $month_temp);
		sort($array);
		$total = 0;
		$array_length = 0;
		foreach($array as $temp)
		{
			$array_length++;
			$total += $temp;
		}
		$avg_temp = $total/$array_length;
		echo nl2br("Average Temperature is : ".$avg_temp.""); 
		echo nl2br("\nList of seven lowest temperatures :");
		for ($i=0; $i< 7; $i++)
		{ 
			echo $array[$i].", ";
		}
		echo nl2br("\nList of seven highest temperatures :");
		for ($j=($array_length-7); $j< ($array_length); $j++)
		{
		echo $array[$j].", ";
		}
	?>
		
    
  </body>
  
</html>