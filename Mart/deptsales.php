<html>
<head>
<title>
Sales on a particular Date
</title>
</head>
</body>
<h1 align = center text-color=red>SALES TODAY for department</h1> 
<?php 
$dsale = $_POST['departmentnumber'];
 
     //Connect to mysql server 
      $link = @mysql_connect('localhost', 'root',''); 
      //Check link to the mysql server 
      if(!$link) { 
        die('Failed to connect to server: ' . mysql_error()); 
      } 
      //Select database 
      $db = mysql_select_db('mart'); 
      if(!$db) { 
        die("Unable to select database"); 
      } 
      
      $qry="SELECT Bills FROM departmemt WHERE Dnum=$dsale"
; 
      //Execute query 
      $result=mysql_query($qry); 
      echo '<br><br><br><br><br><br><br><br><br><br><br><br>';
	  echo '<table width=560 cellpadding=5 cellspacing=4 border=1 bordercolor="Blue" style="border-right-width:1;" align = center> 

        
       <th> Bills</th>';
	   while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 


<td>'.$row['Bills'].'</td>
</tr>'; 
}
?>
</body>
</html> 