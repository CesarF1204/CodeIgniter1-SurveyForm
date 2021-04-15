<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="/user_guide/css/style_result.css">
</head>
<body>
	<div class='container'>
		<h4>Submitted Information: </h4>
		<p>Name: <?= $this->session->userdata('name') ?></p>
		<p>Dojo Location: <?= $this->session->userdata('location') ?></p>
		<p>Favorite Language: <?= $this->session->userdata('language') ?></p>
		<p>Comment: <?= $this->session->userdata('comment') ?></p>

		<a href="/">Go back</a>
	</div>

</body>
</html>