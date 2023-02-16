<?php
include("../functions.php");
include("addmenu.php");
include("additem.php");
include("deletemenu.php");

if ((!isset($_SESSION['uid']) && !isset($_SESSION['username']) && isset($_SESSION['user_level'])))
	header("Location: login.php");

if ($_SESSION['user_level'] != "admin")
	header("Location: login.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Menu - Neubeheer Admin</title>

	<!-- Bootstrap core CSS-->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	<!-- Page level plugin CSS-->
	<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>

<body id="page-top">

	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

		<a class="navbar-brand mr-1" href="index.php">Restaurante | Neubeheer</a>

		<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
			<i class="fas fa-bars"></i>
		</button>

		<!-- Navbar -->
		<ul class="navbar-nav ml-auto ml-md-0">
			<li class="nav-item dropdown no-arrow">
				<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-user-circle fa-fw"></i>
				</a>
			</li>
		</ul>

	</nav>

	<div id="wrapper">

		<!------------------ Sidebar ------------------->
		<ul class="sidebar navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="index.php">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Painel de Controle</span>
				</a>
			</li>


			<li class="nav-item">
				<a class="nav-link" href="menu.php">
					<i class="fas fa-fw fa-utensils"></i>
					<span>Cardápio</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="produtos.php">
					<i class="fas fa-fw fa-utensils"></i>
					<span>Produtos</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="sales.php">
					<i class="fas fa-fw fa-chart-area"></i>
					<span>Vendas</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="staff.php">
					<i class="fas fa-fw fa-user-circle"></i>
					<span>Funcionários</span>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
					<i class="fas fa-fw fa-power-off"></i>
					<span>Fechar Sessão</span>
				</a>
			</li>

		</ul>


        <!-- CARDÁPIO -->
        <section class="cardapio section" id="cardapio">
            <h1 class="section-title">Cardápio</h1>
            <h2 class="section-subtitle">Menu da semana</h2>
            <div class="cardapio__container bd-container bd-grid">
                <div class="card">
                    <div class="card__img">
                        <img src="img-cardapio/salada-1.jpg" alt="Salada Primavera">
                    </div>
                    <div class="card__data">
                        <h3>Salada Primavera</h3>
                        <div class="card__descripition">
                            <small>Tomate Pão Azeitonas Manjericão</small>
                        </div>
                    </div>
                    <div class="card__preci">
                        <span>R$ 22,00</span>
                    </div>
                    <i class='bx bxs-cart card__cart'></i>
                </div>

                <div class="card">
                    <div class="card__img">
                        <img src="img-cardapio/salada-2.jpg" alt="Salada Green">
                    </div>
                    <div class="card__data">
                        <h3>Salada Green </h3>
                        <div class="card__descripition">
                            <small>Tomate Cebola Alface Manjericão</small>
                        </div>
                    </div>
                    <div class="card__preci">
                        <span>R$ 16,00</span>
                    </div>
                    <i class='bx bxs-cart card__cart'></i>
                </div>

                <div class="card">
                    <div class="card__img">
                        <img src="img-cardapio/salada-3.jpg" alt="Salada Green">
                    </div>
                    <div class="card__data">
                        <h3>Salada Hot</h3>
                        <div class="card__descripition">
                            <small>Alface De Cordeiro Rúcula</small>
                        </div>
                    </div>
                    <div class="card__preci">
                        <span>R$ 16,00</span>
                    </div>
                    <i class='bx bxs-cart card__cart'></i>
                </div>

                <div class="card">
                    <div class="card__img">
                        <img src="img-cardapio/salada-2.jpg" alt="Salada Fit">
                    </div>
                    <div class="card__data">
                        <h3>Salada Fit</h3>
                        <div class="card__descripition">
                            <small>Alface Tomate Cenoura Cebola</small>
                        </div>
                    </div>
                    <div class="card__preci">
                        <span>R$ 18,50</span>
                    </div>
                    <i class='bx bxs-cart card__cart'></i>
                </div>
                
                <div class="card">
                    <div class="card__img">
                        <img src="img-cardapio/Produtos/img0.jpg" alt="Bife">
                    </div>
                    <div class="card__data">
                        <h3>Bife</h3>
                        <div class="card__descripition">
                            <small>Arroz, feijão, bife, batata frita e salada.</small>
                        </div>
                    </div>
                    <div class="card__preci">
                        <span>R$ 18,50</span>
                    </div>
                    <i class='bx bxs-cart card__cart'></i>
                </div>

                <div class="card">
                    <div class="card__img">
                        <img src="img-cardapio/Doces/img10.jpg" alt="Bolo Negresco">
                    </div>
                    <div class="card__data">
                        <h3>Bolo Negresco</h3>
                        <div class="card__descripition">
                            <small>Bolo de chocolate, com cobertura cremosa.</small>
                        </div>
                    </div>
                    <div class="card__preci">
                        <span>R$ 18,50</span>
                    </div>
                    <i class='bx bxs-cart card__cart'></i>
                </div>

                <div class="card">
                    <div class="card__img">
                        <img src="img-cardapio/Lanches/img9.jfif" alt="Hamburguer Tradicional">
                    </div>
                    <div class="card__data">
                        <h3>Hamburguer Tradicional</h3>
                        <div class="card__descripition">
                            <small>Pão brioche, Hamburguer, cheddar, cebola caramelizada.</small>
                        </div>
                    </div>
                    <div class="card__preci">
                        <br>
                        <span>R$ 18,50</span>
                    </div>
                    <i class='bx bxs-cart card__cart'></i>
                </div>

                <div class="card">
                    <div class="card__img">
                        <img src="img-cardapio/Bebidas/Refrigerantes/img1.jpeg" alt="Sprite" width="150" height="25">
                    </div>
                    <div class="card__data">
                        <h3>Sprite</h3>
                        <div class="card__descripition">
                            <small>Refrigerante Sprite.</small>
                        </div>
                    </div>
                    <div class="card__preci">
                        <span>R$ 18,50</span>
                    </div>
                    <i class='bx bxs-cart card__cart'></i>
                </div>

                <div class="card">
                    <div class="card__img">
                        <img src="img-cardapio/Bebidas/Refrigerantes/img5.jpeg" alt="Coca Cola" width="150" height="25">
                    </div>
                    <div class="card__data">
                        <h3>Coca Cola</h3>
                        <div class="card__descripition">
                            <small>Refrigerante Coca Cola Zero.</small>
                        </div>
                    </div>
                    <div class="card__preci">
                        <span>R$ 18,50</span>
                    </div>
                    <i class='bx bxs-cart card__cart'></i>
                </div>

                <div class="card">
                    <div class="card__img">
                        <img src="img-cardapio/Doces/img8.jpg" alt="Panqueca">
                    </div>
                    <div class="card__data">
                        <h3>Panqueca</h3>
                        <div class="card__descripition">
                            <small>Panqueca de de morango com cobertura de chocolate</small>
                        </div>
                    </div>
                    <div class="card__preci">
                        <span>R$ 18,50</span>
                    </div>
                    <i class='bx bxs-cart card__cart'></i>
                </div>

                <div class="card">
                    <div class="card__img">
                        <img src="img-cardapio/Doces/img7.jpg" alt="Panqueca">
                    </div>
                    <div class="card__data">
                        <h3>Panqueca</h3>
                        <div class="card__descripition">
                            <small>Panqueca de banana com chocolate</small>
                        </div>
                    </div>
                    <div class="card__preci">
                        <br>
                        <span>R$ 18,50</span>
                    </div>
                    <i class='bx bxs-cart card__cart'></i>
                </div>

                <div class="card">
                    <div class="card__img">
                        <img src="img-cardapio/Lanches/img1.jpeg" alt="Hamburguer Frango">
                    </div>
                    <div class="card__data">
                        <h3>Hamburguer Frango</h3>
                        <div class="card__descripition">
                            <small>Pão brioche, frango empanado, alface, tomate, ketchup e batata frita.</small>
                        </div>
                    </div>
                    <div class="card__preci">
                        <br>
                        <span>R$ 18,50</span>
                    </div>
                    <i class='bx bxs-cart card__cart'></i>
                </div>
            </div>
        </section>
        <!-- END CARDÁPIO -->

       
    <script type="text/javascript" src="js/cardapio.js"></script>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deseja encerrar sua sessão?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecione "Logout" abaixo se estiver pronto para encerrar sua sessão atual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="logout.php">Fechar Sessão</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
</body>

</html>