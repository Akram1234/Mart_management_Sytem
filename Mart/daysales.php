<html>
<head>
<title>
Sales on a particular Date
</title>
</head>
</body>
<h1 align = center text-color=red>SALES TODAY</h1> 
<?php 
$dsale = strtotime($_POST['startdate']);
$dsale = date('Y-m-d',$dsale);
 
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
      
      $qry="SELECT SUM(Total),Date_placed
FROM invoice
WHERE Date_placed In ('$dsale')
GROUP BY Date_placed"

; 
      //Execute query 
      $result=mysql_query($qry); 
      echo '<br><br><br><br><br><br><br><br><br><br><br><br>';
	  echo '<table width=560 cellpadding=5 cellspacing=4 border=1 bordercolor="Blue" style="border-right-width:1;" align = center> 

       <th> Date </th> 
       <th> Sales</th>';
	   while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['Date_placed'].'</td>
<td>'.$row['SUM(Total)'].'</td>
</tr>'; 
}
?>
</body>
</html> 