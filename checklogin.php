<?php session_start();
if (isset($_SESSION['student'])) {

echo "<style>

.student{display:block}
.teacher{display:none}
.forregister{display:none}


</style>";
}
if (isset($_SESSION['teacher'])) {


echo "<style>

.student{display: none}
.teacher{display:block}
.forregister{display:none}

</style>";
	
}




 ?>