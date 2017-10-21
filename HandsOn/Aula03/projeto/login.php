

<?php include_once '_topo.php'; ?>

<?php 
	
	if ($_POST) {
		if (verificaUsuario($_POST,$usuarios)) {
			header('Location: admin/index.php');
		} else {
			echo 'Usuário ou Senha Inválido';
		}
	}

 ?>

<h1>Login</h1>

<form action="#" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<?php include_once '_rodape.php'; ?>