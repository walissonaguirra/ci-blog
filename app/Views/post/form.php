<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

	<?= validation_list_errors() ?>
	<?= form_open('/posts') ?>
		<label>Title:</label>
		<input type="text" name="title" value="<?= set_value('title') ?>" autofocus/>

		<label>Content:</label>
		<input type="text" name="content" value="<?= set_value('content') ?>" />

		<button type="submit">save</button>
	<?= form_close() ?>

<?= $this->endSection() ?>