<?php 
include 'config.php';

function create ($sql){
	global $pdo;
	return $pdo->query($sql);
} 

