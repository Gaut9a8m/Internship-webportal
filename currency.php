<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(isset($_POST['2weeks'])=="2weeks"){
			echo"<script>window.open('amount.php','_self');</script>";
		}
		if(isset($_POST['3weeks'])=="3weeks"){
			echo"<script>window.open('amount2.php','_self');</script>";
		}
	}
?>