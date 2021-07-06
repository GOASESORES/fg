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

<?php require('../general/nav.php');?>

 
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Eliminar area</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="../dashboards/dashboard.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="areas.php">Areas</a></li>
				 
                  <li class="breadcrumb-item active" aria-current="page">Eliminar</li>
                </ol>
              </nav>
            </div>
           
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card-wrapper">
           
            <!-- Default browser form validation -->
            <div class="card">
              <!-- Card header -->
             
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
              <!-- Card body -->
              <div class="card-body">
			  
			  
               <div class="row icon-examples">
                <div style="padding-top: 15px;" class="col-lg-4 col-md-6">
				<button  type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href=&quot;nuevoarea.php&quot;">
				
				  <div>
                      <i class="ni ni-fat-add "></i>
                      <span>Nueva area</span>
                    </div>
				
				
				
				</button>
                </div>
				
                <div style="padding-top: 15px;"class="col-lg-4 col-md-6">
                  <button type="button" class="btn btn-warning btn-lg btn-block" onclick="location.href=&quot;modificarareas.php&quot;">
				 <div>
                      <i class="ni ni-settings-gear-65 "></i>
                      <span>Modificar area</span>
                    </div>
				  </button>
                </div>
				
				   <div style="padding-top: 15px;"class="col-lg-4 col-md-6">
                  <button type="button" class="btn btn-success btn-lg btn-block" onclick="location.href=&quot;areas.php&quot;">
				 <div>
                      <i class="ni ni-single-02"></i>
                      <span>Ver area</span>
                    </div>
				  </button>
                </div>
				
				</div>
                
               
              </div>
            </div>
            <!-- Default browser form validation -->
           
		   
		   
		    
			  <div class="row ">
			  
			  
			  <?php
			  
	require('../bd/conexion.php');

 $empresa=$user->getempresa();
$quera="SELECT * FROM area WHERE state_fsc='activo' AND empresa='$empresa' ORDER BY `area`.`id_area` DESC";
$caa=$mysqli->query($quera);
while($rov=$caa->fetch_assoc()){
	$nombre=$rov['nombre'];
   






?>			  
			  
			  
			  
		  
			  
			  
			  <style>
			  .avatar {
    font-size: 1rem;
    display: inline-flex;
    width: 48px;
    height: 48px;
    color: #fff;
    border-radius: .375rem;
    background-color: #fcfdff;
    align-items: center;
    justify-content: center;
}
			  </style>
			  
			   <div class="col-md-4 ">
              <style>
#foto {
    font-size: 1rem;
    display: inline-flex;
    width: 40px;
    height: 40px;
    color: #fff;
    border-radius: .375rem;
    background-color: #fcfdff;
    align-items: center;
    justify-content: center;
}
				  </style>
<div class="card">
            <!-- Card body -->
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <!-- Avatar -->
                  <a href="#" id="foto" class="avatar avatar-xl  ">
                    <img src="../../assets/img/administracion.svg">
                  </a>
                </div>
                <div class="col ml--2">
                  <h4 class="mb-0">
                    <a href="#!"><?php echo $nombre;?></a>
                  </h4>
				       
                
                  <span class="text-success">●</span>
                  <small>Activo</small>
                </div>
                <div class="col-auto">
				 <style>
#qr {
    font-size: 1rem;
    display: inline-flex;
    width: 80px;
    height: 80px;
    color: #fff;
    border-radius: .375rem;
    background-color: #fcfdff;
    align-items: center;
    justify-content: center;
}
				  </style>
				  
                  <button type="button" onclick="location.href='deleteareas.php?valor=<?php echo $rov['id_area'] ?>'" class="btn btn-sm btn-danger">Eliminar</button>
                </div>
              </div>
            </div>
          </div>
          
		   </div>
		   		   
<?php  } ?>
		  
		    </div>
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
      <!-- Footer -->
     <?php require('../general/footer.php');?>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
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


<!-- Mirrored from demos.creative-tim.com/argon-dashboard-pro/pages/forms/validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jun 2021 05:27:04 GMT -->
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