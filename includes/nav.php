<nav class="mobile navbar navbar-dark">
	<a class="navbar-brand white" href="/index">
		<img src="<?php echo $logo ?>" alt="<?php echo $company_name ?> Logo" class="logo" />
	</a>
	
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
		<span class="nav-toggle"></span>
		<span class="nav-toggle"></span>
		<span class="nav-toggle"></span>
	</button>
	
	<div class="collapse navbar-collapse fill" id="navbar">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item"><a class="nav-link" href="index">Home</a></li>
			<li class="nav-item"><a class="nav-link" href="/about">About</a></li>
			<li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo $phone_href ?>"><span style="margin-right: 10px;">Call Now:</span><?php echo $phone_display ?></a></li>
		</ul>
	</div>
</nav>