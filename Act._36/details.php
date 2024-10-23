<?php
include_once "app/ProductController.php";
$productController = new ProducController();

if (!isset($_GET['slug']) || $_GET['slug'] == "") {
	header('Location: home.php');
}


if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != null) {


	$product = $productController->getBySlug($_GET['slug']);


} else {

	header('Location: index.php');
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Home
	</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
</head>

<body>

	<div class="">

		<div class="container-fluid">
			<div class="row">
				<div class="col-2 p-0 m-0 d-none d-md-block">
					<div class="d-flex sticky-top flex-column min-vh-100 flex-shrink-0 p-3 text-white bg-dark" style="">
						<a href="/"
							class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
							<svg class="bi me-2" width="40" height="32">
								<use xlink:href="#bootstrap"></use>
							</svg>
							<span class="fs-4">Sidebar</span>
						</a>
						<hr>
						<ul class="nav nav-pills  flex-column mb-auto">
							<li class="nav-item">
								<a href="#" class="nav-link active" aria-current="page">
									<svg class="bi me-2" width="16" height="16">
										<use xlink:href="#home"></use>
									</svg>
									Home
								</a>
							</li>
							<li>
								<a href="#" class="nav-link text-white">
									<svg class="bi me-2" width="16" height="16">
										<use xlink:href="#speedometer2"></use>
									</svg>
									Dashboard
								</a>
							</li>
							<li>
								<a href="#" class="nav-link text-white">
									<svg class="bi me-2" width="16" height="16">
										<use xlink:href="#table"></use>
									</svg>
									Orders
								</a>
							</li>
							<li>
								<a href="#" class="nav-link text-white">
									<svg class="bi me-2" width="16" height="16">
										<use xlink:href="#grid"></use>
									</svg>
									Products
								</a>
							</li>
							<li>
								<a href="#" class="nav-link text-white">
									<svg class="bi me-2" width="16" height="16">
										<use xlink:href="#people-circle"></use>
									</svg>
									Customers
								</a>
							</li>
						</ul>
						<hr>
						<div class="dropdown">
							<a href="#"
								class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
								id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
								<img src="https://github.com/mdo.png" alt="" width="32" height="32"
									class="rounded-circle me-2">
								<strong>mdo</strong>
							</a>
							<ul class="dropdown-menu dropdown-menu-dark text-small shadow"
								aria-labelledby="dropdownUser1">
								<li><a class="dropdown-item" href="#">New project...</a></li>
								<li><a class="dropdown-item" href="#">Settings</a></li>
								<li><a class="dropdown-item" href="#">Profile</a></li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="#">Sign out</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col p-0 m-0">
					<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dar" data-bs-theme="dark">
						<div class="container">
							<a class="navbar-brand" href="#">Navbar</a>
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
								data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
								aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>


							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link active" aria-current="page" href="#">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Features</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Pricing</a>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled" aria-disabled="true">Disabled</a>
									</li>
								</ul>
							</div>

							<form class="d-flex" role="search">
								<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
								<button class="btn btn-outline-success" type="submit">Search</button>
							</form>

							<div class="dropdown">
								<a href="#"
									class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
									id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="https://github.com/mdo.png" alt="" width="32" height="32"
										class="rounded-circle me-2">
									<strong>mdo</strong>
								</a>
								<ul class="dropdown-menu dropdown-menu-dark text-small shadow"
									aria-labelledby="dropdownUser1">
									<li><a class="dropdown-item" href="#">New project...</a></li>
									<li><a class="dropdown-item" href="#">Settings</a></li>
									<li><a class="dropdown-item" href="#">Profile</a></li>
									<li>
										<hr class="dropdown-divider">
									</li>
									<li><a class="dropdown-item" href="#">Sign out</a></li>
								</ul>
							</div>
						</div>
					</nav>


					<div id="main">

						<div class="container p-3">

							<h2>
								Detalle del producto
							</h2>

							<div class="card mb-3">
								<div class="card-header">
									<?= $product->name ?>
								</div>
								<div class="card-body">

									<div class="row">

										<div class="col-xs-12 col-md-4  mb-2">

											<div id="carouselExampleIndicators" class="carousel slide">
												<div class="carousel-indicators">
													<button type="button" data-bs-target="#carouselExampleIndicators"
														data-bs-slide-to="0" class="active" aria-current="true"
														aria-label="Slide 1"></button>
													<button type="button" data-bs-target="#carouselExampleIndicators"
														data-bs-slide-to="1" aria-label="Slide 2"></button>
													<button type="button" data-bs-target="#carouselExampleIndicators"
														data-bs-slide-to="2" aria-label="Slide 3"></button>
												</div>
												<div class="carousel-inner">
													<div class="carousel-item active">
														<img src="<?= $product->cover ?>" class="d-block w-100"
															alt="...">
													</div>
													<div class="carousel-item">
														<img src="<?= $product->cover ?>" class="d-block w-100"
															alt="...">
													</div>
													<div class="carousel-item">
														<img src="<?= $product->cover ?>" class="d-block w-100"
															alt="...">
													</div>
												</div>
												<button class="carousel-control-prev" type="button"
													data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
													<span class="carousel-control-prev-icon" aria-hidden="true"></span>
													<span class="visually-hidden">Previous</span>
												</button>
												<button class="carousel-control-next" type="button"
													data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
													<span class="carousel-control-next-icon" aria-hidden="true"></span>
													<span class="visually-hidden">Next</span>
												</button>
											</div>

										</div>

										<div class="col">

											<h5 class="card-title">

												<?= $product->name ?>

											</h5>
											<p class="card-text">

												<?= $product->description ?>
											</p>

											<h3>
												$100,00 MXN
											</h3>

											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
												veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit
												esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
												cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</p>

											<a href="#" class="btn btn-primary">Go somewhere</a>
											<button type="button" class="btn btn-danger">Cancelar</button>
											<button type="button" class="btn btn-warning" id="editButton"
												data-bs-toggle="modal" data-bs-target="#editModal">Editar</button>
										</div>

									</div>


								</div>
							</div>


							<div class="card">
								<div class="card-header">
									Featured
								</div>
								<div class="card-body">

									<table class="table">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">First</th>
												<th scope="col">Last</th>
												<th scope="col">Handle</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Mark</td>
												<td>Otto</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Jacob</td>
												<td>Thornton</td>
												<td>@fat</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td colspan="2">Larry the Bird</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>

								</div>
							</div>

						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Modal para editar el producto -->
	<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="editModalLabel">Editar Producto</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
				</div>
				<div class="modal-body">
					<form id="editProductForm">
						<div class="mb-3">
							<label for="productName" class="form-label">Nombre</label>
							<input type="text" class="form-control" id="productName"
								placeholder="<?= htmlspecialchars($product->name) ?>">
						</div>
						<div class="mb-3">
							<label for="productSlug" class="form-label">Slug</label>
							<input type="text" class="form-control" id="productSlug"
							placeholder="<?= htmlspecialchars($product->slug) ?>">
						</div>
						<div class="mb-3">
							<label for="productDescription" class="form-label">Descripción</label>
							<textarea class="form-control" id="productDescription"
								placeholder="<?= htmlspecialchars($product->description) ?>"></textarea>
						</div>
						<div class="mb-3">
							<label for="productFeatures" class="form-label">Características</label>
							<textarea type="text" class="form-control" id="productFeatures"
							placeholder="<?= htmlspecialchars($product->features) ?>"></textarea>
						</div>
					</form>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-primary" id="saveChangesButton">Guardar cambios</button>
				</div>
			</div>
		</div>
	</div>

	<script>
		// Función para abrir el modal y llenar los campos con los detalles del producto
		function openEditModal(product) {
			document.getElementById('productName').value = product.name;
			document.getElementById('productSlug').value = product.slug;
			document.getElementById('productDescription').value = product.description;
			document.getElementById('productFeatures').value = product.features;

			// Muestra el modal
			const editModal = new bootstrap.Modal(document.getElementById('editModal'));
			editModal.show();
		}


		// Añade un evento clic para ese botón, donde product es el objeto del producto a editar
		/*document.getElementById('editButton').addEventListener('click', function () {
			const product = {
				
				name: "Nombre del producto",
				slug: "slug-del-producto",
				description: "Descripción del producto",
				features: "Características del producto"
			};
			openEditModal(product);
		});*/
	</script>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

	<script>
		// Escucha el evento cuando se cierra el modal
		document.getElementById('editModal').addEventListener('hidden.bs.modal', function () {
			// Remueve manualmente el backdrop al cerrar el modal
			document.querySelectorAll('.modal-backdrop').forEach(function (backdrop) {
				backdrop.remove();
			});
			// Restablece el scroll del body si estaba bloqueado
			document.body.classList.remove('modal-open');
			document.body.style.removeProperty('overflow');
		});
	</script>


</body>

</html>