<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

	<?= validation_list_errors() ?>
	<?= form_open() ?>
		<label>Title:</label>
		<input type="text" name="title" value="<?= set_value('title') ?>" autofocus/>

		<label>Content:</label>
		<input type="text" name="content" value="<?= set_value('content') ?>" />

		<button type="submit">save</button>
	<?= form_close() ?>

	<?php foreach($posts as $post) : ?>
		<?php //var_dump($post) ?>
		<a href="<?= site_url(uri_string() . "/{$post->slug}") ?>"><?= $post->title ?></a>
		<br/>
	<?php endforeach ?>

<?= $this->endSection() ?>