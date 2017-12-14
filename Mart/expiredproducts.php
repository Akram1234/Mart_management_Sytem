<html>
<head>
<title>
expired products upto date
</title>
</head>
</body>
<h1 align = center text-color=red>Expired products upto date</h1> 
<?php 

$pdate = strtotime($_POST['startdate']);
$pdate = date('Y-m-d',$pdate);
 
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
      
      $qry="SELECT Product_id,Product_name
FROM product
WHERE Exp_date <= $pdate



"; 
      //Execute query 
      $result=mysql_query($qry); 
      echo '<br><br><br><br><br><br><br><br><br><br><br><br>';
	  echo '<table width=560 cellpadding=5 cellspacing=4 border=1 bordercolor="Blue" style="border-right-width:1;" align = center> 

       <th> Product Id</th> 
	   <th> Product Name</th>';
       
	   while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['Product_id'].'</td>
<td>'.$row['Product_name'].'</td>
</tr>';
}
?>
</body>
</html> 