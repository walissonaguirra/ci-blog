<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
	
	<div class="container py-2">
		<div class="mb-2 text-end">
			<a class="btn btn-light" href="<?= previous_url() ?>"><i class="bi bi-arrow-return-left"></i></a>
		</div>

		<img class="img-thumbnail mb-3" src="/<?= $post->image ?>">
		<h1 class="h2"><?= esc($post->title) ?></h1>
		<p class="text-secondary h5"><?= esc($post->content) ?></p>
	</div>

<?= $this->endSection() ?>