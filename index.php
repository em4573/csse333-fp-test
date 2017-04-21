<?php 
	echo date('Y-m-d H:i:s');
	readfile("pages/header.html");
	readfile("pages/home.html");
	if ($_REQUEST) {
		contents = $_REQUEST["text_box"];
    	file_put_contents("t.txt", contents);
	}
	readfile("t.txt");
	readfile("pages/footer.html");
?>
