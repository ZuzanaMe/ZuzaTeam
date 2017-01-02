<?php
	
DEFINE ('DB_UZIVATEL', 'zidek01');
DEFINE ('DB_HESLO', 'zidek01');
DEFINE ('DB_HOSTITEL', 'localhost');
DEFINE ('DB_NAZEVDATABAZE', 'zidek01');

$dbc = @mysql_connect (DB_HOSTITEL, DB_UZIVATEL, DB_HESLO) OR die ('Nemohu se pripojit k databazi MySQL: '. mysql_error());
mysql_select_db (DB_NAZEVDATABAZE) OR die ('Nelze vybrat databazi: '. mysql_error());

//mysql_query("SET CHARACTER SET utf8");

?>
