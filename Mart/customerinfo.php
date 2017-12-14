<html>
<head>
<title>
No.of Customers visited on a particular Date
</title>
</head>
</body>
<h1 align = center text-color=red>Customers Today</h1> 
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
      
      $qry='SELECT Cust_name,Credits,customer.Cust_num
FROM customer,custoffers
WHERE Mobile_num =7869509877
      AND customer.Cust_num=custoffers.Cust_num'; 
      //Execute query 
      $result=mysql_query($qry); 
      echo '<br><br><br><br><br><br><br><br><br><br><br><br>';
	  echo '<table width=560 cellpadding=5 cellspacing=4 border=1 bordercolor="Blue" style="border-right-width:1;" align = center> 

       <th> Customer Name </th> 
       <th> Customer Number</th>
	   <th> Credits</th>';
	   while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['Cust_name'].'</td>
<td>'.$row['Cust_num'].'</td>
<td>'.$row['Credits'].'</td>
</tr>'; 
}
?>
</body>
</html> 