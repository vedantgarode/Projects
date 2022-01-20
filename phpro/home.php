<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
<link href='https://fonts.googleapis.com/css?family=Coda Caption:800' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bilbo Swash Caps' rel='stylesheet'>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>
body{
background:#b2aad3;
}
#img{
width:50%;
}
/* MENUS(17 - 174) */
.wrap {
   position: fixed;
  top: 0;
  z-index: 9000;
 }
/*  nav container  */
#nav-container{
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  max-width: 1000px;
  }
  /*  text on menus   */
a {
  text-decoration: none;
  color: white;
  text-shadow:1px 2px #4b0082;
  display: block;
}
ul {
  list-style: none;
  position: relative;
  text-align: left;
}
li {
  float: left;
} 
ul:after {
  clear: both;
  
}
ul:before,
ul:after {
    content: " ";
    display: table;
	
	 
}
/*  nav tag   */
nav {
  position: relative;
  background:transparent;
  font-family:fantasy;
  text-align: center;
  letter-spacing: 2px;
  box-shadow:0 4px 3px 0 white, 0 6px 20px 0 #fff;
  border-bottom-right-radius: 8px;
  border-bottom-left-radius: 8px;
}
ul.primary li a {
  display: block;
  padding: 20px 30px;
  border-right: 1px solid #3D3D3D;
}
ul.primary li:last-child a {
  border-right: none;
}
ul.primary li a:hover {
  
  color: #000;
}
/*  sub menu items  */
ul.sub {
  position: absolute;
  z-index: 200;
  width: 50%;
  display:none;
}
ul.sub li {
  float: none;
  margin: 0;
}
ul.sub li a {
  border-bottom: 1px dotted #ccc;
  border-right: none;
  color: #000;
  padding: 15px 30px;
}
ul.sub li:last-child a {
  border-bottom: none;
}
/* hover effects for menu items*/
ul.sub li a:hover {
  color:#c71585;
  background: #eeeeee;
}
ul.primary li:hover ul {
  display: block;
  background: #fff;
}
ul.primary li:hover a {
  background: #fff;
  color: #c71585;
  text-shadow: none;
}
/* hover effects for menu items*/
ul.primary li:hover > a{
  
  color:#c71585;
} 
@media only screen and (max-width: 600px) {
  .decor {
    padding: 3px;
  }
  
  .wrap {
    width: 100%;
   // margin-top: 0px;
  }
  
   li {
    float: none;
  }
  
  ul.primary li:hover a {
    background: none;
    color: #c71585;
    text-shadow: 1px 1px #000;
  }
  ul.primary li:hover ul {
    display: block;
    background: #272727;
    color: #c71585;
  }
  
  ul.sub {
    display: block;  
    position: static;
    box-shadow: none;
    width: 100%;
  }
  
  ul.sub li a {
    background: #272727;
  	border: none;
    color:#c71585;
  }
  
  ul.sub li a:hover {
    color: #c71585;
    background: none;
  }
}
p,ul, li {
  margin: 0;
  padding: 0;
}
/*   heading   */
.heading h1 {
font-family:'Bungee';
font-size: 50px;
text-shadow:7px 4px #4b0082;
color:white;
line-height: 42px;
text-transform: uppercase;
	
}
.heading p {
    color:white;
    font-family:'Bilbo Swash Caps';
  	font-size:28px;
	line-height: 1.4;
	text-shadow:4px 2px 5px  #4b0082;
	text-align: right;
}
.footer{
   position: fixed;
   left: 0;
   display:block;
   bottom: 0;
   width: 100%;
   height:7%;
   float:left;
   background-color: #4b0082;
   color: white;
  
}
.contcss{
padding:4px 30px;
font-family:'Bungee';
text-shadow:3px 2px 2px  black;
}
.emailcss{
padding:4px;
margin-left:170%;
font-family:'Bungee';
width:100%;
text-shadow:3px 2px 2px  black;
}
</style>
</head>
<body>
<img id="img" src="bg.jpg" align="right" style="position:fixed;right:0;top:0" >
<div class="wrap">
<div id="nav-container">   
<nav>
  <ul class="primary">
    <li>
      <a href="about.php">ABOUT</a>
      <ul class="sub">
        <li><a href="about.php#mp">Mission and Philosophy</a></li>
        <li><a href="about.php#origin">Origin Story</a></li>
        <li><a href="about.php#cofounders">Co-Founders</a></li>
		  <li><a href="about.php#staff">Faculty and Staff</a></li>
      </ul>
    </li>
    <li>
      <a href="curriculam.php">CURRICULAM</a>
      <ul class="sub">
      <li><a href="curriculam.php#pgm">Program & Events</a></li>
      <li><a href="curriculam.php#acad">Academics</a></li>
      <li><a href="curriculam.php#arts">The Arts</a></li>
      <li><a href="curriculam.php#kinder">Transitional Kindergarten</a></li>
	  <li><a href="curriculam.php#movement">Movement</a></li>
      </ul>  
    </li>
    <li>
      <a href="enrichment.php">ENRICHMENT PROGRAMS</a>
	   <ul class="sub">
        <li><a href="enrichment.php#roots">Roots and Wings</a></li>
        <li><a href="enrichment.php#fest">Global Festivals</a></li>
        
      </ul>
    </li>
    <li>
      <a href="admissions.php">ADMISSION</a>
      <ul class="sub">
        <li><a href="admissions.php#applicationprocess">Application Process</a></li>
        <li><a href="admissions.php#apply">Apply Now</a></li>
      </ul>  
    </li>
  </ul>
</nav>
</div>
</div>
<section class="heading" style="margin-left:3%; margin-top:18%;width:40%">
				<h1>Little Dolphins</h1>
				<p>-A Better Future Starts Here! </p>
</section>
<section class="footer">
<ul>
 <li>
      <p class="contcss">Contact Us : +91 8973234566</p>     
 </li>
    <li>
     <p class="emailcss">Email : littledolphins@gmail.com</p>
	 </li>
</ul>
</section>
</body>
</html>