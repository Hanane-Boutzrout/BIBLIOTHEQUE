<?php

if(session_start()){
	session_destroy();
	header("location:../");
}

header("localion:../");
?>