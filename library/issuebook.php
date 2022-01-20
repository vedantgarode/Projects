<html>
<head>
 <link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>

<style>

.field{
margin-bottom:20px;
margin-top:20px;
	margin-left:30%;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	border-radius:20px;
	width:40%;
//	background-image:linear-gradient(#b21f66,#b21f66,white);
}
.txt{
	margin-left:50px;
	margin-right:30px;
	padding-left:10px;
	margin-bottom:10px;
	border:none;
	width:80%;
	border-bottom:2px solid black;
	height:40px;
	
}
.dt{
	margin-left:50px;
	
border:2px solid;
	width:75%;

}
.dt input{border:none;width:100%;}
.btn{
	
	margin-left:35%;
	margin-bottom:20px;
	border-radius:10px;
	color:black;
	width:30%;
	font-family: sans-serif;
    border:4px solid;
	height:8%;
	background:white;
	font-size:18px;
	
}
.btn::after{
  background: #fff;
  transition: 0.4s;
}
.btn:hover::after{
  transform: scale(1.3);
  opacity: 0;
}
.btn:hover
{ 
  border: 4px solid #fff;
  background:black;
  color:#fff;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  transition: width 0.4s, height 0.4s;
 }	
.heading{
 padding-top:30px;
 text-align:center;
 font-family:'Bungee';
	
}
</style>
</head>
<body>
<div class="field">
<form method="POST" action="issueinsert.php" >
<h1 class="heading">ISSUE BOOK</h1>
<input type="text" name="sroll" placeholder="Roll Number" class="txt"><br>
<input type="text" name="sclass" placeholder="Class" class="txt"><br>
<fieldset class ="dt">
<legend style="font-family:sans-serif;">Issue Date</legend>
<input type="date" name="bissdate" placeholder="Purchasing Date" class="">
</fieldset><br>
<fieldset class ="dt">
<legend style="font-family:sans-serif;">Returning Date</legend>
<input type="date" name="bredate" placeholder="Returning Date" class=""><br>
</fieldset><br>

<input type="text" name="bname" placeholder="Book Title" class="txt"><br>
<input type="text" name="bauth" placeholder="Book Author" class="txt"><br>
<input type="text" name="bid" placeholder="Book ID" class="txt"><br>
<input type="submit" name="issueb" value="ISSUE BOOK" class="btn">

</div>

</form>

 
</body>
</html>
