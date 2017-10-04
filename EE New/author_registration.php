<?php


	session_start();

  	//ESTABLISHING CONNECTION TO DATABASE
  	$conn = new mysqli('localhost','root','','tailbox');

  	if ($conn->connect_error) 
  	{
    	die("Connection failed: " . $conn->connect_error);
  	}

  	var name = $_POST['']; //FIRST NAME OF THE AUTHOR
  	var name = $_POST[''];	
  	var name = $_POST[''];
  	var name = $_POST[''];
  	var name = $_POST[''];
?>