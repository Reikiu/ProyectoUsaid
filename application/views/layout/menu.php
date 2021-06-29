<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('/dashboard') ?>">
		<div class="sidebar-brand-icon rotate-n-15">
			<li><img src="../resources/img/logo.svg" style="width: 50px;height: 50px" alt=""></li>
		</div>
		<div class="sidebar-brand-text mx-3">USAID <sup>2</sup></div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">


	<li class="nav-item">
		<a class="nav-link" href="<?php echo site_url('/dashboard') ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Interface
	</div>

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog"></i>
			<span>Usuarios</span>
		</a>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Usuarios</h6>
                <?php if ($this->session->userdata('role') == 'admin'): ?>
				<a class="collapse-item" href="<?php echo site_url('admin/user') ?>">Agregar Usuarios</a>
				<a class="collapse-item" href="<?php echo site_url('admin/user/power') ?>">Agregar user power</a>
                <?php else: ?>
                <?php if(check_power(1)):?>
                <a href="<?php echo site_url('admin/user') ?>"><i class="collapse-item"></i> Agregar Usuarios </a></>
                     <?php endif; ?>
                    <?php endif ?>
                <a href="<?php echo site_url('admin/user/all_user_list') ?>" class="collapse-item"> Ver todos los usuarios</a>
			</div>
		</div>
	</li>

	<!-- Nav Item - Utilities Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-wrench"></i>
			<span>Actividades</span>
		</a>
		<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Actividades:</h6>
				<a class="collapse-item" href="<?php echo site_url('actividades/agregarActividad') ?>">Crear Actividades</a>
				<a class="collapse-item" href="<?php echo site_url('actividades') ?>">Ver Actividad</a>
			</div>
		</div>
	</li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVisita" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Visitas</span>
        </a>
        <div id="collapseVisita" class="collapse" aria-labelledby="headingVisita" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Visitas:</h6>
                <a class="collapse-item" href="<?php echo site_url('visita/agregarVisita') ?>">Crear Visita</a>
                <a class="collapse-item" href="<?php echo site_url('visita') ?>">Ver Visitas</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLogistica" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Logistica</span>
        </a>
        <div id="collapseLogistica" class="collapse" aria-labelledby="headingLogistica" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Logistica:</h6>
                <a class="collapse-item" href="<?php echo site_url('logistica/agregarLogistica') ?>">Crear Logistica</a>
                <a class="collapse-item" href="<?php echo site_url('logistica') ?>">Ver Logistica</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo site_url('asignarConductor') ?>" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Asignar Conductor</span>
        </a>
    </li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Addons
	</div>

	<!-- Nav Item - Pages Collapse Menu -->
<!--	<li class="nav-item active">-->
<!--		<a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">-->
<!--			<i class="fas fa-fw fa-folder"></i>-->
<!--			<span>Pages</span>-->
<!--		</a>-->
<!--		<div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">-->
<!--			<div class="bg-white py-2 collapse-inner rounded">-->
<!--				<h6 class="collapse-header">Login Screens:</h6>-->
<!--				<a class="collapse-item" href="login.html">Login</a>-->
<!--				<a class="collapse-item" href="register.html">Register</a>-->
<!--				<a class="collapse-item" href="forgot-password.html">Forgot Password</a>-->
<!--				<div class="collapse-divider"></div>-->
<!--				<h6 class="collapse-header">Other Pages:</h6>-->
<!--				<a class="collapse-item" href="404.html">404 Page</a>-->
<!--				<a class="collapse-item active" href="blank.html">Blank Page</a>-->
<!--			</div>-->
<!--		</div>-->
<!--	</li>-->

	<!-- Nav Item - Charts -->
	<li class="nav-item">
		<a class="nav-link" href="charts.html">
			<i class="fas fa-fw fa-chart-area"></i>
			<span>Charts</span></a>
	</li>

	<!-- Nav Item - Tables -->
	<li class="nav-item">
		<a class="nav-link" href="tables.html">
			<i class="fas fa-fw fa-table"></i>
			<span>Tables</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- End of Sidebar -->
