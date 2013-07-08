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
					<li>
						<a>POVERTY</a>
					</li>
					<li>
						<a>CRIME</a>
					</li>
					<li>
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