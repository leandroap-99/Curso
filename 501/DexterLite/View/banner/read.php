<h1>Listar Banners</h1>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Descricao</th>
			<th>URL</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($data as $banner):?>
		<tr>
		<td><?= $banner['id']?></td>
		<td><?= $banner['nome']?></td>
		<td><?= $banner['descricao']?></td>
		<td><?= $banner['url']?></td>
		<td>
		<a href="?route=update_banner&id=<?=$banner['id']?>"
		class="btn btn-primary"> Editar </a> 
		<a href="?route=delete_banner&id=<?=$banner['id']?>"
		class="btn btn-danger"> Exluir </a> 
		</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
