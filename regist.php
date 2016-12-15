<?php

echo ("
		<html><head><title>Server answer</title></head>
		<body>
		<h2> This document should display query string that contains values from named form's elements. </h2> <p>
		<h1> QUERY STRING: </h1> <br>
			".($_SERVER['QUERY_STRING'])."
		</body></html>
");
?>