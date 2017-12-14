<html>
<head>
<title>
Sales Between Dates
</title>
</head>
</body>
<h1 align = center text-color=red>Sales Between Dates</h1> 
<?php 
$sdate = $_POST['startdate'];
$edate = $_POST['enddate'];
 
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
WHERE Date_placed BETWEEN ('$sdate') AND ('$edate')
GROUP BY Date_placed 



"; 
      //Execute query 
      $result=mysql_query($qry); 
      echo '<br><br><br><br><br><br><br><br><br><br><br><br>';
	  echo '<table width=560 cellpadding=5 cellspacing=4 border=1 bordercolor="Blue" style="border-right-width:1;" align = center> 

       <th> Date_placed</th> 
       <th> Total</th>';
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