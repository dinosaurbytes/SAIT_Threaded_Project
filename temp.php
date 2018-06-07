<?php

for ($i=1;$i<5;$i++)
{
	if (isset($_POST['button'.$i]))
	echo $_POST['button'.$i];
}




?>