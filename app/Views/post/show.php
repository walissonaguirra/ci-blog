<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h3><?= esc($post->title) ?></h3>
	<p><?= esc($post->content) ?></p>
	<a href="<?= previous_url() ?>">voltar</a>
</body>
</html>