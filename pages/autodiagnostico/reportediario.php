<?php

include_once '../../includes/user.php';
include_once '../../includes/user_session.php';


$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());







?>
<!DOCTYPE html>
<html>


<!-- Mirrored from demos.creative-tim.com/argon-dashboard-pro/pages/forms/validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jun 2021 05:27:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>SECURAPP</title>
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
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Sidenav -->
 <?php require('../general/nav.php')?>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Reporte diario de sintomas</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="../dashboards/dashboard.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="reportediario.php">Sintomas</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Gestionar</li>
                </ol>
              </nav>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class="col-lg-4 card-wrapper">
          <!-- Alerts -->

          <!-- Modals -->
          <div class="card">
            <div class="card-header text-center">
              <h3 class="mb-0">Selecciona tu respuesta para identificar síntomas asociados al Gorroneavirus</h3>
            </div>
            <div class="card-body align-items-center ">
              <div class="row">
                <div class="col-md-12 col-center">

				<style>
				#av {
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




             <div class="card-body ">
              <!-- List group -->
              <ul class="list-group list-group-flush list my--3">

				  <div class="col-md-12">
                <li class="list-group-item px-0">

                  <div class="row align-items-center">


                    <div class="col-auto">
                      <!-- Avatar -->
                      <a href="#" id="av" class="avatar ">
                        <img alt="Image placeholder" src="/assets/img/icons/auto/status_1.png">
                      </a>
                    </div>
                    <div class="col">
                      <h5>Sigue Cuídandote</h5>
                      <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <a href="#" id="av" class="avatar ">
                         <img alt="Image placeholder" src="/assets/img/icons/auto/status_2.png">
                      </a>
                    </div>
                    <div class="col">
                      <h5>Qúedate en casa</h5>
                      <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <a href="#" id="av" class="avatar ">
                         <img alt="Image placeholder" src="/assets/img/icons/auto/status_3.png">
                      </a>
                    </div>
                    <div class="col">
                      <h5>Protocolo de emergencia</h5>
                      <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-red" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                      </div>
                    </div>
                  </div>
                </li>


              </ul>
            </div>
               </div>






			  <div class=" text-center">

				<p>De acuerdo a tu estado de salud se desplegarán las recomendaciones acordes a tu nivel de riesgo</p>
				</div>

                  <button type="button" class="btn btn-block btn-primary mb-3" data-toggle="modal" data-target="#modal-default">Inicia tu Autodiagnóstico</button>
                  <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h6 class="modal-title" id="modal-title-default">Privacidad de su información</h6>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <p class="text-justify pr-3">La información que a continuación suministrará
                    será de uso exclusivo y con carácter confidencial de
                    su empleador con fines informativos y de
                    prevención en Seguridad y Salud en el trabajo para
                    mitigar el riesgo de contagio por Coronavirus en el
                    desarrollo de sus actividades laborales, así mismo
                    podrá suministrarse esta información a su EPS y
                    ARL según lo establecido en la Resolución 0666 de
                    24 de abril de 2020 que puede consultar <a href="https://plataforma.securapp.co/autodiagnostico/reportes/download_resolution/file?file=RESOLUCION 666 DE 2020" target="_blank">aquí</a> para
                    mitigar los riesgos y cuidar la salud de todos los
                    trabajadores de la empresa.</p>
                        <p class="text-justify pr-3">Resolución 0666 de 2020 "4.1 Vigilancia de la salud
                    de los trabajadores en el contexto del Sistema de
                    Gestión de Seguridad y Salud en el trabajo SG-SST
                    ·Se debe desarrollar un proceso diario de monitoreo
                    de estado de salud y temperatura del personal
                    realizando la toma al ingreso y salida del turno por
                    trabajador con el debido registro nominal en
                    formato establecido por la empresa. Esta medida
                    también aplica para el personal en trabajo en casa
                    o en modalidad remota y será reportada a su jefe
                    inmediato o area de seguridad y salud en el trabajo
                    según estructura orgánica de la empresa
                    ·Establecer un protocolo de verificación del estado
                    de salud (reporte de síntomas respitatorios y toma
                    de temperatura cuando haya ingresado a las
                    instalaciones de proveedores y clientes)"</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" onclick="location.href='reportediario1.php'">Aceptar</button>
                          <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>
          <!-- Notifications -->

          <!-- Sweet alerts -->

        </div>
      </div>
      <!-- Footer -->
     <?php require('../general/footer.php');?>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../../assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
  <script src="../../assets/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>
  <!-- Argon JS -->
  <script src="../../assets/js/argon.min23cd.js?v=1.2.1"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="../../assets/js/demo.min.js"></script>
  <script>
    // Facebook Pixel Code Don't Delete
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window,
      document, 'script', '../../../../connect.facebook.net/en_US/fbevents.js');

    try {
      fbq('init', '111649226022273');
      fbq('track', "PageView");

    } catch (err) {
      console.log('Facebook Track Error:', err);
    }
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>
</body>


<!-- Mirrored from demos.creative-tim.com/argon-dashboard-pro/pages/components/notifications.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jun 2021 05:27:00 GMT -->
</html>



<?php

}else{
    //echo "login";

	?>
	<script>
	location.href = "../../index.php";
	</script>
	<?php
}

?>
