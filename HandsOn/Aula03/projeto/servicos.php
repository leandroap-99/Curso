

<?php include_once '_topo.php'; ?>

<h1>Servicos</h1>

<table class="table">
	<thead> 
		<tr> 
			<th>#</th> 
			<th>Nome</th> 
			<th>Tipo</th> 
			<th>Carga Horária</th> 
			<th>Requisitos</th> 
		</tr> 
	</thead> 
	<tbody> 
	<?php foreach ($cursos as $curso): ?>
		<tr> 
			<th><?= $curso['id'];?></th> 
			<td><?= $curso['nome'];?></td> 
			<td><?= $curso['tipo'];?></td> 
			<td><?= $curso['carga_horaria'];?></td> 
			<td><?= $curso['requisitos'];?></td> 
		</tr> 
	<?php endforeach; ?>
	</tbody> 
</table>

<?php include_once '_rodape.php'; ?>