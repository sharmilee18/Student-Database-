<?php
session_start();

if(session_destroy())
{	
	header("location:page1.html");
}

?>