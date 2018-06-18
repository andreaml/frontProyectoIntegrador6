<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand pl-3" href="<?= base_url() ?>">
			<img src="<?= base_url("public/img/logoMenu.png") ?>" alt="Volkswagen" class="nav-logo">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false"
		    aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse pr-3" id="navbar">
			<ul class="navbar-nav ml-auto mt-2 mt-lg-0 text-uppercase">
				<?php if ($user == 'agency_manager'): ?>
				<li class="nav-item  <?= ($page_title == "Usuarios") ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url("gerenteAgencia/usuarios") ?>">Usuarios</a>
				</li>
				<li class="nav-item  <?= ($page_title == "Envíos") ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url("gerenteAgencia/envios") ?>">Envíos</a>
				</li>
				<li class="nav-item  <?= ($page_title == "Reportes") ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url("gerenteAgencia/reportes") ?>">Reportes</a>
				</li>
				<li class="nav-item  <?= ($page_title == "Stocks") ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url("gerenteAgencia/stocks") ?>">Stocks</a>
				</li>
				<?php elseif ($user == 'seller'): ?>
				<li class="nav-item <?= ($page_title == "Catálogo") ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url("vendedor/catalogo") ?>">Catálogo</a>
				</li>
				<li class="nav-item <?= ($page_title == "Clientes") ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url("vendedor/clientes") ?>">Clientes</a>
				</li>
				<li class="nav-item <?= ($page_title == "Solicitudes") ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url("vendedor/solicitudes") ?>">Solicitudes</a>
				</li>
				<li class="nav-item <?= ($page_title == "Ventas") ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url("vendedor/ventas") ?>">Ventas</a>
				</li>
				<li class="nav-item <?= ($page_title == "Seguimientos") ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url("vendedor/seguimientos") ?>">Seguimientos</a>
				</li>
				<?php elseif ($user == 'general_manager'): ?>
				<li class="nav-item <?= ($page_title == "Sucursales") ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url("gerenteGeneral/sucursales") ?>">Sucursales</a>
				</li>
				<li class="nav-item <?= ($page_title == "Usuarios") ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url("gerenteGeneral/usuarios") ?>">Usuarios</a>
				</li>
				<li class="nav-item <?= ($page_title == "Catálogo") ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url("gerenteGeneral/catalogo") ?>">Catálogo</a>
				</li>
				<li class="nav-item <?= ($page_title == "Stocks") ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url("gerenteGeneral/stocks") ?>">Stocks</a>
				</li>
				<?php endif; ?>
				<?php if ($user != 'public'): ?>
				<li class="nav-item dropdown btn-secondary ml-lg-3">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Usuario
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Perfil:
						<?php if ($user == 'agency_manager'): ?>
							<span>Gerente de agencia</span>
						<?php elseif ($user == 'seller'): ?>
							<span>Vendedor</span>
						<?php elseif ($user == 'general_manager'): ?>
							<span>Gerente de general</span>
						<?php endif; ?>	
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo base_url('logout')?>">Cerrar sesión</a>
					</div>
				</li>
				<?php endif; ?>				
			</ul>
		</div>
	</nav>
</header>