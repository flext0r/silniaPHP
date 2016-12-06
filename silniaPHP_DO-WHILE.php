<?php

if(isset($_POST['N']))
{
	$N = $_POST['N'];
	if($N == '')
	{
		echo 'Formularz nie moze byc pusty!';
	}else{
		if(!is_numeric($N))
		{
			echo '<b>N</b> musi byc liczba!';
		}else{
			if($N == 0)
			{
				echo 'Silnia: 1';
			}else{
				$silnia = 1;
				$i = 1;
				do
				{
					$i++;
					$silnia = $silnia*$i;
				}
				while ($i<$N);
				echo 'Silnia: '.$silnia;
			}
		}
	}
}


?>

<form method="POST">
<hr>
Podaj N:
<br>
<input type="text" name="N">
<br><br>
<input type="submit" value="Oblicz">
<hr>

</form>