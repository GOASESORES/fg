  
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Dashboard</title>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-pro" />
  <!--  Social tags      -->
  <meta name="keywords" content="dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, argon, argon ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, argon dashboard">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim">
  <meta itemprop="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta itemprop="image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim">
  <meta name="twitter:description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://demos.creative-tim.com/argon-dashboard/index.html" />
  <meta property="og:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg" />
  <meta property="og:description" content="Start your development with a Dashboard for Bootstrap 4." />
  <meta property="og:site_name" content="Creative Tim" />
  <!-- Favicon -->
  <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../../assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../../assets/css/argon.min23cd.css?v=1.2.1" type="text/css">
  <!-- Google Tag Manager -->
  <script>
  
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>
  <!-- End Google Tag Manager -->
  
  
  <style>
  .avatar {
    font-size: 1rem;
    display: inline-flex;
    width: 48px;
    height: 48px;
    color: #fff;
    border-radius: .375rem;
    background-color: #ffffff;
    align-items: center;
    justify-content: center;
}
  </style>
  
</head>
  <body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Sidenav -->
  
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
	  <?php 	 $cliente=$user->getempresa();
require('../bd/conexion.php');
$quera="SELECT * FROM cliente WHERE id_cliente='$cliente'";
$caa=$mysqli->query($quera);
$rov=$caa->fetch_assoc();
$logo=$rov['logo'];

	  ?>
	  <style>
	  #ajuste{
		   background-image: url('../../uploads/clientes/<?php echo $logo;?>');
  background-size: cover;
  background-position: center;
	  }
	  </style>
	  
      <div id="ajuste" class="sidenav-header  d-flex  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          
        </a>
        <div class=" ml-auto ">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
		  
		  <?php 
$uri= $_SERVER['REQUEST_URI'];
if($uri=="/pages/dashboards/dashboard.php" ){
	$classdashboard="active";
}elseif($uri=="/pages/corporativa/areas.php"){
	$class="active";
}elseif($uri=="/pages/corporativa/nuevoarea.php"){
	$class="active";
}elseif($uri=="/pages/corporativa/modificarareas.php"){
	$class="active";
}elseif($uri=="/pages/corporativa/eliminarareas.php"){
	$class="active";
}elseif($uri=="/pages/corporativa/editarareas.php"){
	$class="active";
}elseif($uri=="/pages/corporativa/verareas.php"){
	$class="active";
}


elseif($uri=="/pages/corporativa/cargos.php"){
	$class="active";
}elseif($uri=="/pages/corporativa/centros.php"){
	$class="active";
}elseif($uri=="/pages/corporativa/arl.php"){
	$class="active";
}elseif($uri=="/pages/corporativa/eps.php"){
	$class="active";
}elseif($uri=="/pages/corporativa/afp.php"){
	$class="active";
}elseif($uri=="/pages/corporativa/usuarios.php"){
	$class="active";
}elseif($uri=="/pages/corporativa/index.php"){
	$class="active";
}elseif($uri=="/pages/corporativa/grupos.php"){
	$class="active";
}elseif($uri=="/pages/corporativa/cargos.php"){
	$class="active";
}elseif($uri=="/pages/corporativa/cargos.php"){
	$class="active";
}elseif($uri=="/pages/corporativa/cargos.php"){
	$class="active";
}elseif($uri=="/pages/corporativa/cargos.php"){
	$class="active";
}



		  ?>
		  
            <li class="nav-item">
              <a class="nav-link <?php echo $classdashboard  ?>" href="/pages/dashboards/dashboard.php" ">
                <i class="fas fa-tachometer-alt text-primary"></i>
                <span class="nav-link-text">Dashboards</span>
              </a>
              
            </li>
			
			<?php
			$rol=$user->getpermisos();
			if($rol== 'administrator'){
			$permisos=$user->getnum();
			$modulos= explode(",", $permisos);
			}else{
				$modulos=$array = array(
    "foo" => "bar",
    "bar" => "foo",
);
			}


 
	  	 if (($rol == 'administrator' OR in_array(1, $modulos)) && $rol != 'temporal') { 
	 
			?>
		
            <li class="nav-item">
              <a class="nav-link <?php echo $class  ?>" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="ni ni-building text-orange"></i>
                <span class="nav-link-text">Gestion corporativa</span>
              </a>
              <div class="collapse" id="navbar-examples">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="/pages/corporativa/areas.php" class="nav-link">
                      <span class="sidenav-mini-icon"> ARE </span>
                      <span class="sidenav-normal"> Gestion Areas</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/pages/corporativa/cargos.php" class="nav-link">
                     <span class="sidenav-mini-icon"> CAR </span>
                      <span class="sidenav-normal"> Gestion Cargos </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/pages/corporativa/centros.php" class="nav-link">
                     <span class="sidenav-mini-icon"> CEN </span>
                      <span class="sidenav-normal"> Gestion Centros </span>
                    </a>
                  </li>
				  <?php if ($rol == 'administrator') { ?>
                  <li class="nav-item">
                    <a href="/pages/corporativa/arl.php" class="nav-link">
                     <span class="sidenav-mini-icon"> ARL </span>
                      <span class="sidenav-normal"> Gestion ARL </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/pages/corporativa/eps.php" class="nav-link">
                     <span class="sidenav-mini-icon"> EPS </span>
                      <span class="sidenav-normal"> Gestion EPS </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/pages/corporativa/afp.php" class="nav-link">
                     <span class="sidenav-mini-icon"> AFP </span>
                      <span class="sidenav-normal"> Gestion AFP </span>
                    </a>
                  </li>
				  <?php } ?>
                  <li class="nav-item">
                    <a href="/pages/corporativa/usuarios.php" class="nav-link">
                     <span class="sidenav-mini-icon"> USU </span>
                      <span class="sidenav-normal"> Gestion Usuarios </span>
                    </a>
                  </li>
				   <?php if ($rol == 'administrator') { ?>
				  <li class="nav-item">
                    <a href="/pages/corporativa/index.php" class="nav-link">
                     <span class="sidenav-mini-icon"> CLI </span>
                      <span class="sidenav-normal"> Gestion Clientes </span>
                    </a>
                  </li>
				  
				 
				  <li class="nav-item">
                    <a href="/pages/corporativa/grupos.php" class="nav-link">
                     <span class="sidenav-mini-icon"> GRP </span>
                      <span class="sidenav-normal"> Gestion Grupos </span>
                    </a>
                  </li>
				  	<?php  } ?>			 
                 
                </ul>
              </div>
            </li>
			   <?php } ?>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                <i class="fas fa-heartbeat text-info"></i>
                <span class="nav-link-text">Autodiagnostico</span>
              </a>
              <div class="collapse" id="navbar-components">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="../components/buttons.html" class="nav-link">
                      <span class="sidenav-mini-icon"> RS </span>
                      <span class="sidenav-normal"> Reporte diario de síntomas </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../components/cards.html" class="nav-link">
                      <span class="sidenav-mini-icon"> RC </span>
                      <span class="sidenav-normal"> Reporte de otro colaborador</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../components/grid.html" class="nav-link">
                      <span class="sidenav-mini-icon">RR </span>
                      <span class="sidenav-normal"> Registro de Reportes</span>
                    </a>
                  </li>
				   <?php 
				    $lider_sst=$user->getlider_sst();
				   if (
				  
				   $rol == 'administrador' || $lider_sst == 1) { ?>
                  <li class="nav-item">
                    <a href="../components/notifications.html" class="nav-link">
                      <span class="sidenav-mini-icon"> R </span>
                      <span class="sidenav-normal"> Reportes </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../components/icons.html" class="nav-link">
                      <span class="sidenav-mini-icon"> RE </span>
                      <span class="sidenav-normal"> Reporte por empleados</span>
                    </a>
                  </li>
                    <?php } ?>
                
                </ul>
              </div>
            </li>
			 <?php if (($rol == 'administrator' OR in_array(8, $modulos)) && $rol != 'temporal') { ?>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-forms" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms">
                <i class="ni fas fa-spell-check text-pink"></i>
			
                <span class="nav-link-text">Secur evalua</span>
              </a>
              <div class="collapse" id="navbar-forms">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="../forms/elements.html" class="nav-link">
                      <span class="sidenav-mini-icon"> ED </span>
                      <span class="sidenav-normal"> Evaluaciones de desempeño </span>
                    </a>
                  </li>
                 
                  
                </ul>
              </div>
            </li>
            <?php } ?>
           
           
          
            
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Informacion</span>
            <span class="docs-mini">D</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="../../docs/getting-started/overview.html" target="_blank">
               <i class="fas fa-file-medical-alt"></i>
                <span class="nav-link-text">Normatividad SST</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../docs/foundation/colors.html" target="_blank">
               <i class="fab fa-facebook-f"></i>
                <span class="nav-link-text">Facebook</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../docs/components/alerts.html" target="_blank">
               <i class="fab fa-instagram"></i>
                <span class="nav-link-text">Instagram</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../docs/plugins/charts.html" target="_blank">
                <i class="fab fa-linkedin-in"></i>
                <span class="nav-link-text">Linkeden</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  
  
  
 <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../../assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  
                <div class="media align-items-center">
                  				 <style>
	  #fotoajus{
		   background-image: url('../../uploads/usuarios/<?php echo $user->getfoto(); ?>');
  background-size: cover;
  background-position: center;
	  }
	  </style>
                  <span id="fotoajus" class="avatar avatar-sm rounded-circle"> </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $user->getnombre();  ?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="../../includes/logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Cerrar seccion</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>