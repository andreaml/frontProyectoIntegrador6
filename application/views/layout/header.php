<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand pl-3" href="<?= base_url() ?>"><img src="<?= base_url("public/img/logoMenu.png") ?>" alt="Volkswagen" class="nav-logo"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse pr-3" id="navbar">
			<ul class="navbar-nav ml-auto mt-2 mt-lg-0 text-uppercase">
			<?php if ($user == 'agency_manager'): ?>
				<li class="nav-item">
				<a class="nav-link" href="<?= base_url("agency_managers/users") ?>">Usuarios</a>
				</li>
				<li class="nav-item active">
				<a class="nav-link" href="<?= base_url("agency_managers/shippings") ?>">Envios</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="<?= base_url("agency_managers/reports") ?>">Reportes</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="<?= base_url("agency_managers/stocks") ?>">Stocks</a>
				</li>
			<?php elseif ($user == 'seller'): ?>
				<li class="nav-item">
				<a class="nav-link" href="<?= base_url("agency_managers/users") ?>">Usuarios</a>
				</li>
				<li class="nav-item active">
				<a class="nav-link" href="<?= base_url("agency_managers/shippings") ?>">Envios</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="<?= base_url("agency_managers/reports") ?>">Reportes</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="<?= base_url("agency_managers/stocks") ?>">Stocks</a>
				</li>
			<?php elseif ($user == 'general_manager'): ?>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("gerenteGeneral/sucursales") ?>">Sucursales</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("gerenteGeneral/usuarios") ?>">Usuarios</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url("gerenteGeneral/catalogo") ?>">Catálogo</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("gerenteGeneral/stocks") ?>">Stocks</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("gerenteGeneral/reportes") ?>">Reportes</a>
				</li>
			<?php endif; ?>
			<li class="nav-item dropdown ml-lg-3">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fa fa-bell"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="#">Notificación 1</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Notificación 2</a>
				</div>
			</li>
			<li class="nav-item dropdown btn-secondary ml-lg-3">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Usuario
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="#">Perfil: <span>Gerente de agencia</span></a>
				<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Opción 1</a>
					<a class="dropdown-item" href="#">Opción 2</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Cerrar sesión</a>
				</div>
			</li>
			</ul>
		</div>
    </nav>
</header>
