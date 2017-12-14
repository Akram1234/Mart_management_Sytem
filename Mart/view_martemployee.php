<html>
<head>
<title>
CUSTOMERS INFORMATION
</title>
</head>
</body>
<h1 align = center text-color=red>EMPLOYEE'S INFORMATION</h1> 
<?php 
 
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
      
      $qry='SELECT * FROM employee'; 
      //Execute query 
      $result=mysql_query($qry); 
      echo '<br><br><br><br><br><br><br><br><br><br><br><br>';
	  echo '<table width=560 cellpadding=5 cellspacing=4 border=1 bordercolor="Blue" style="border-right-width:1;" align = center> 

       <th> EMPLOYEE NAME </th> 
       <th> EMPLOYEE ID </th>
	   <th> DEPARTMENT NUMBER</th>
       <th> Mobile Number </th> 
	   <th> Address</th> 
	   <th> EMAIL</th>
	   <th> WORKING Hours</th>
	   <th> POINTS</th>';
	   while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['Empl_name'].'</td>
<td>'.$row['Empl_id'].'</td>
<td>'.$row['Dnum'].'</td> 
<td>'.$row['Mobile_num'].'</td>
<td>'.$row['Address'].'</td>
<td>'.$row['Email_id'].'</td>
<td>'.$row['working_hours'].'</td>
<td>'.$row['Points'].'</td>
</tr>'; 
}
?>
</body>
</html> 