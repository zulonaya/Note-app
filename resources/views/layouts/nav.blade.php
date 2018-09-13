<nav class="navbar bg-light shadow bg-white">
	<div class="row nav-bar">
		<div class="col-10 col-md-3 logo-header">
			<button id="sidebarCollapse" class="menu-button sidebar-toggle"><i class="fa fa-bars "></i></button>
			<h4>To Do App</h4>
		</div>
		<div class="col-md-6 d-none d-md-block">
			<input class="search-form" type="text" name="search" placeholder="Find in notes">
			<button class="btn btn-secondary search-button"><i class="fa fa-search"></i></button>
		</div>
		<div class="col-2 col-md-3 d-flex justify-content-end">
			<button title="Add new note" class="add-new" data-toggle="modal" data-target="#newNote"><i class="fa fa-plus"></i></button>
			@include('todo.form')


		</div>
	</nav>

	<div class="side-bar-menu" id="sidebar"></div>


