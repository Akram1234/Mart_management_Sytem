<html>
<head>
<title>
Customers between dates
</title>
</head>
</body>
<h1 align = center text-color=red>Customers between dates</h1> 
<?php 
$csdate = $_POST['startdate'];
$cedate = $_POST['enddate'];
 
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
      
      $qry="SELECT invoice.Cust_num,Cust_name,Date_placed
            FROM customer,invoice
            WHERE invoice.Cust_num=customer.Cust_num
			AND Date_placed BETWEEN ('$csdate') AND ('$cedate')
			ORDER BY Date_placed DESC
			
			



"; 
      //Execute query 
      $result=mysql_query($qry); 
      echo '<br><br><br><br><br><br><br><br><br><br><br><br>';
	  echo '<table width=560 cellpadding=5 cellspacing=4 border=1 bordercolor="Blue" style="border-right-width:1;" align = center> 

       <th> Customer Name</th> 
       <th> Customer Id</th>
	   <th> Date</th>';
	   while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['Cust_name'].'</td>
<td>'.$row['Cust_num'].'</td>
<td>'.$row['Date_placed'].'</td>
 
</tr>'; 
}
?>
</body>
</html> 