<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

	<div class="container py-2">
		<div class="mb-2 text-end">
			<a class="btn btn-primary" href="<?= site_url('posts/new') ?>"><i class="bi bi-plus-lg"></i></a>
		</div>
		
		<?php foreach($posts as $post) : ?>
			<div class="card mb-2">
				<div class="card-body">
					<a class="text-decoration-none" href="<?= site_url(uri_string() . "/{$post->slug}") ?>"><?= $post->title ?></a>
					<p class="text-secondary mb-0"><?= $post->image ?></p>
				</div>
			</div>
		<?php endforeach ?>
	</div>

<?= $this->endSection() ?>