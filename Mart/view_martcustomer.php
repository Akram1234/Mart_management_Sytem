<html>
<head>
<title>
CUSTOMERS INFORMATION
</title>
</head>
</body>
<br><br>
<font color=red><h1 align = center>CUSTOMER'S INFORMATION</h1></font>
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
      
      $qry='SELECT * FROM customer'; 
      //Execute query 
      $result=mysql_query($qry); 
      echo '<br><br><br><br><br><br><br><br><br><br>';
	  echo '<table width=560 cellpadding=5 cellspacing=4 border=1 bordercolor="Blue" style="border-right-width:1;" align = center> 

       <th> customer Name </th> 
       <th> Customer Number </th>
       <th> Mobile Number </th> 
	   <th> Address</th> ';
	   while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['Cust_num'].'</td>
<td>'.$row['Cust_name'].'</td>
<td>'.$row['Mobile_num'].'</td> 
<td>'.$row['Address'].'</td>
</tr>'; 
}
?>
</body>
</html>  
      
       
    
    
  
  
   


