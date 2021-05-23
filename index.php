<!DOCTYPE HTML>

    <head>
        <link rel="icon" type="image/x-icon" href="<?php echo ('favicon.ico'); ?>">
	<title>Hitokoto API</title>
    </head>

    <pre style="word-wrap: break-word; white-space: pre-wrap;"><?php

	$stime=microtime(true);

	$path = dirname(__FILE__);
	$file = file($path."/hitokoto.txt");
	$arr  = mt_rand( 0, count( $file ) - 1 );
	$content  = trim($file[$arr]);
	if (isset($_GET['charset']) && !empty($_GET['charset'])) {
   		$charset = $_GET['charset'];
   	 	if (strcasecmp($charset,"gbk") == 0 ) {
        	$content = mb_convert_encoding($content,'gbk', 'utf-8');
    	}
	} else {
    	$charset = 'utf-8';
	}

	header("Content-Type: text/html; charset=$charset");

	if ($_GET['encode'] == 'js') {
    	$echo = "function hitokoto(){document.write('".$content."');}";
        echo $echo;
    } elseif ($_GET['encode'] == 'json') {
    	$echo = array('hitokoto' => $content);
        echo json_encode($echo);
    } else {
    	echo $content;
    }

	$etime=microtime(true);
	$total=$etime-$stime;
	if ($_GET['time'] == 1) {
      	echo $total;
    }

?></pre>
