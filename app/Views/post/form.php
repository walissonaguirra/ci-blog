<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

	<div class="container py-2">
		<div class="mb-2 text-end">
			<a class="btn btn-light" href="<?= previous_url() ?>"><i class="bi bi-arrow-return-left"></i></a>
		</div>

		<?= validation_list_errors() ?>
		<?= form_open('/posts') ?>

			<div class="mb-3">
				<label class="form-label">Título</label>
				<input class="form-control" type="text" id="title" name="title" value="<?= set_value('title') ?>" autofocus/>
			</div>

			<div class="mb-3">
				<label class="form-label">Conteúdo</label>
				<textarea class="form-control" id="content" name="content" rows="3"><?= set_value('content') ?></textarea>
			</div>

			<button class="btn btn-primary col-12 col-md-3" type="submit">Salvar</button>
		<?= form_close() ?>
	</div>

<?= $this->endSection() ?>