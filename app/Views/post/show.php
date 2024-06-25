<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

	<h3><?= esc($post->title) ?></h3>
	<p><?= esc($post->content) ?></p>
	<a href="<?= previous_url() ?>">voltar</a>

<?= $this->endSection() ?>