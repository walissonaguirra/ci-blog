<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<a href="<?= site_url('posts/new') ?>">+ New</a><br/>
	<?php foreach($posts as $post) : ?>
		<?php //var_dump($post) ?>
		<a href="<?= site_url(uri_string() . "/{$post->slug}") ?>"><?= $post->title ?></a>
		<br/>
	<?php endforeach ?>

<?= $this->endSection() ?>