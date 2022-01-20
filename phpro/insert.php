<?php
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$s_name=$_POST['s_name'];
			if(str_word_count($s_name)<=2)
				$name_valid="Please Enter Student's Lastname"; 
  			elseif(empty($_POST['s_name']))
				$name_isempty="Student's Full Name Required!"; 
			
		}

?>