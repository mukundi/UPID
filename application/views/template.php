<html>
	<head>
		<?php
		$this -> load -> view('sections/head');
		?>
	</head>
	<body>
		<header>
			<img src='<?php echo base_url()?>images/uPID_logo.png' />
			<div class="nav">
				<ul>
					<li id="poverty">
						<a >POVERTY</a>
					</li>
					<li id="crime">
						<a>CRIME</a>
					</li>
					<li id="incidents">
						<a>INCIDENTS</a>
					</li>
				</ul>
			</div>
		</header>
		<div class="content">
			<?php

			$this -> load -> view($contentView);
		?>
		</div>
		

	</body>
</html>