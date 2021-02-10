<?php

	$FILEBLOCK[0] = [
  'html.php'
  ];

	$DBQD[0] = [
	'{#TITLE#}' 			=> 'Simple HTML/PHP - TEMPLATE/PARSER - PHP EVAL HACKS',
	'{#CONTENT#}' 		=> 'Simple HTML/PHP TEMPLATE'
	];

	$FILE = array();
	foreach($FILEBLOCK[0] as $HTML_OUT){
		array_push($FILE, file_get_contents($HTML_OUT));
	}

	$EVALBOX ='';
	foreach($FILE as $OUTPUT){
		$EVALBOX = $EVALBOX.(preg_replace(array_keys($DBQD[0]), $DBQD[0], $OUTPUT));
	}

	eval(" ?> $EVALBOX <?php ");

	exit;

?>
