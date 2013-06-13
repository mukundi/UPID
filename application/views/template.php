<html>
	<head>
		<?php
		$this -> load -> view('sections/head');
		?>
	</head>
	<body>
		
		<?php

		$this -> load -> view($contentView);
		?>

		<footer class="well">
			2013 C4A
		</footer>
	</body>
</html>