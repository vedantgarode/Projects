<html>
<head>
<style>
h2{
	font-family:'Bungee';
	margin-top:10px;
text-align:center;	}
table {
  margin-top:40px;
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
 
}

th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
  background-color:#000;
  color:white;
}
td{
	text-align:center;
	border-bottom:1px solid #000;

tr:nth-child(even) {
  background-color:white
  color:color;
}

</style>
</head>
<body>

<h2>ISSUED DETAILS</h2>

<table>
  <tr>
   <th>Book ID</th>
    <th>Roll No.</th>
    <th>Class</th>
    <th>Issue Date</th>
	<th>Return Date</th>
    <th>Book Name</th>
    <th>Book Author</th>
	
  </tr>
  <?php 
  $res=$con->query("SELECT * from issuebook");
  if($res->num_rows>0)
  {
	  while($row=$res->fetch_assoc())
	  {
		  echo "<tr><td>".$row['b_id']."</td><td>".$row['s_roll']."</td><td>".$row['s_class']."</td><td>".$row['issue_date']."</td><td>".$row['return_date']."</td><td>".$row['b_name']."</td><td>".$row['b_author']."</td><td></tr>";
	  }
	  echo "</table>";
  }
  
  
  ?>