
<?php session_start() ?>
function connexion()
{

	if($_SESSION["login"]=="")
	{
		<?php header('Location: connexion.php'); ?>
	}
	else
		{

		}
} 