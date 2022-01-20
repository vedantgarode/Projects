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
	padding: 8px;
	text-align:center;
	border-bottom:1px solid #000;

tr:nth-child(even) {
  background-color:white
  color:color;
}


</style>
</head>
<body>

<h2>STUDENT DETAILS</h2>

<table>
  <tr>
    <th>Roll No.</th>
    <th>Student Name</th>
    <th>Class</th>
	<th>Phone Number</th>
    <th>Address</th>
   
  </tr>
  <?php 
  $res=$con->query("SELECT * from student");
  if($res->num_rows>0)
  {
	  while($row=$res->fetch_assoc())
	  {
		  echo "<tr><td>".$row['stud_roll']."</td><td>".$row['stud_name']."</td><td>".$row['stud_class']."</td><td>".$row['stud_phn']."</td><td>".$row['stud_addr']."</td></tr>";
	  }
	  echo "</table>";
  }
  
  
  ?>