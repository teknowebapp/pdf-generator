<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#7952b3">
	<title>Offcanvas - Bootstrap v5.0</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="apple-touch-icon" href="<?= base_url('assets/img/favicons/apple-touch-icon.png');?>" sizes="180x180">
	<link rel="icon" href="<?= base_url('assets/img/favicons/favicon-32x32.png');?>" sizes="32x32" type="image/png">
	<link rel="icon" href="<?= base_url('assets/img/favicons/favicon-16x16.png');?>" sizes="16x16" type="image/png">
	<link rel="manifest" href="<?= base_url('assets/img/favicons/manifest.json');?>">
	<link rel="mask-icon" href="<?= base_url('assets/img/favicons/safari-pinned-tab.svg');?>" color="#7952b3">
	<link rel="icon" href="<?= base_url('assets/img/favicons/favicon.ico');?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/offcanvas.css');?>">
	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}

		a {
			text-decoration:none;
		}
	</style>
</head>
<body class="bg-light">
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url();?>">PDF Generator</a>
			<button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="offcanvas"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item active">
						<a class="nav-link" aria-current="page" href="<?= base_url();?>">Home</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<main class="container">
		<div class="pt-4">
			<a href="<?= base_url('index.php/welcome/generate?student=1&periode=1');?>" class="btn btn-primary">Print</a>
			<div class="pt-4">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="text-nowrap">No</th>
							<th class="text-nowrap">Student</th>
							<th class="text-nowrap">Code</th>
							<th class="text-nowrap">Lesson</th>
							<th class="text-nowrap">Periode</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 0; foreach ($course as $data): $no++; ?>
						<tr>
							<td><?= $no;?></td>
							<td><?= $data->student;?></td>
							<td><?= $data->code;?></td>
							<td><?= $data->lesson;?></td>
							<td><?= $data->periode;?></td>
						</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
	</main>
	<script src="<?= base_url('assets/js/bootstrap.bundle.min.js');?>" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/js/offcanvas.js');?>"></script>
	<script src="<?= base_url('assets/js/jquery.min.js');?>"></script>
</body>
</html>
