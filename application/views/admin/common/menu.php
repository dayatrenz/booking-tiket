<aside class="main-sidebar">
	<div class="user-panel">
		<div class="pull-left image">
			<img src="<?php echo base_url(); ?>gudang/admin/dist/img/user8-128x128.jpg" class="img-circle" alt="User Image">
		</div>
		<div class="pull-left info">
			<p>John Doe</p>
			<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		</div>
	</div>
	<section class="sidebar">
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header"> MENU NAVIGASI</li>
			<li><a href="<?php echo base_url(); ?>admin">
				<i class="fa fa-dashboard"></i> <span>Dasboard</span></a></li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-database"></i> <span>Manage Data</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo base_url(); ?>admin/transportation"><i class="fa fa-plane"></i> Transportation</a></li>
						<li><a><i class="fa fa-book"></i> Reservation</a></li>
						<li><a href="<?php echo base_url(); ?>admin/destinations"><i class="fa fa-building"></i> Destination</a></li>
						<li><a><i class="fa fa-building-o"></i> Airport</a></li>
						<li><a href="<?php echo base_url(); ?>admin/rute"><i class="fa fa-road"></i> Rute</a></li>
						<li><a href="<?php echo base_url(); ?>admin/members"><i class="fa fa-user"></i> User</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-plus"></i> <span>Create Data</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo base_url(); ?>admin/transportation/add"><i class="fa fa-plane"></i> Transportation</a></li>
						<li><a href="<?php echo base_url(); ?>admin/destinations/add"><i class="fa fa-building"></i> Destination</a></li>
						<li><a href="<?php echo base_url(); ?>admin/destinations/add"><i class="fa fa-building-o"></i> Airport</a></li>
						<li><a href="<?php echo base_url(); ?>admin/rute/add"><i class="fa fa-road"></i> Rute</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-check"></i> <span>Confirmation</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="#"><i class="fa fa-book"></i> Reservation</a></li>
					</ul>
				</li>
			</li>
			<li class="header"> AKUN</li>
			<li><a href="#"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
		</ul>
	</section>
</aside>