<!DOCTYPE html>  
<html>   
 <head>   
  <title>Task-3</title>  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
  </head>  
  <body>   
  <h3>Chess Board - PHP Nested Loops</h3>  
	<!-- cell 270px wide (8 columns x 60px) -->  
	     <table width="270px" height="270px" border="1px" cellspacing="0px" cellpadding="0px" >
      <?php  
      
        for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
			$sum=$row+$col;
			echo "<td bgcolor=";
			if($sum%2==0)
		  {
				echo "white";
          }
			else
		  {
				echo "black";
          }
			echo "></td>";
		  }
		  
          echo "</tr>";
    }
          ?>
  </table>  
  </body>  
  </html> 