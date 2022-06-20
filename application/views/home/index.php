<div class="container">
	<?php if ($rol == 'auth') : ?>
		<h2>Bienvenido <b><?= $_SESSION['persona']->loginname ?></b></h2>
		<br>
		<a href="<?= base_url() ?>carrito/add">
			<button>Comprar Productos</button>
		</a><br>
		<br />
	<?php elseif ($rol == 'admin') : ?>
		<h2>Bienvenido <b>Administrador</b></h2>
		<br>
		<a href="<?= base_url() ?>producto/r">
			<button>Producto</button>
		</a><br>
	<?php else : ?>
		<h2>Debes hacer login o registrarte para poder empezar a operar</h2>
	<?php endif; ?>
</div>