<!DOCTYPE html>  
<html>  
    <head>   
	  <title>Task-2</title>  
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
	  </head>  
	<body>   
    <?php  
echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 6; $row++) { 
		echo "<tr>";
		for ($col=1; $col <= 5; $col++) { 
		   echo "<td>".$row." * ".$col."=".$row*$col."</td>";
		   	}
	  	    echo "</tr>";
		}

    ?>  
  </body>  
</html>  
	