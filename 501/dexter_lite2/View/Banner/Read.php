<div class="row">
	<div class="col-sm-8"><h1>Listar banners</h1></div>
	<div class="col-sm-4 text-right"><a href="?route=banners/create" class="btn btn-primary"> Criar banner </a></div>
</div>

<?php if( isset($msg) ): ?>
	<div class="alert alert-<?= $msg['class'] ?>"><?= $msg['text'] ?></div>
<?php endif; ?>

<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Descrição</th>
			<th>Url</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data as $banner) : ?>
		<tr>
			<td> <?= $banner->getId() ?> </td>
			<td> <?= $banner->getNome() ?> </td>
			<td> <?= $banner->getDescricao() ?> </td>
			<td> <?= $banner->getUrl() ?> </td>
			<td>
				<a href="?route=banners/update&id=<?= $banner->getId() ?>" class="btn btn-primary"> Editar </a>
				<a href="?route=banners/delete&id=<?= $banner->getId() ?>" class="btn btn-danger"> Delete </a>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>