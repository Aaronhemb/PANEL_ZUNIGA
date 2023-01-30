<?php
//Control de la session , cuando un usuario intente ingresar con el link a una de las paginas , debera logearse primero
	if(!isset($_SESSION['usr_id'])) {
		header("Location:../login/login.php");
	}
	include_once '../login/dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/sidebar_drow.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <img src="https://img.icons8.com/external-icongeek26-outline-gradient-icongeek26/64/000000/external-flamingo-birds-icongeek26-outline-gradient-icongeek26.png"/>
      <span class="logo_name">Tienda Ale</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="index.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="index.php">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Productos</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Categoria</a></li>
          <li><a href="#">Niñas</a></li>
          <li><a href="#">Jovencitas</a></li>
          <li><a href="#">Mujeres</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
            <i class='bx bx-book-alt' ></i>
          <span class="link_name">Pedidos</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Pedidos</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class='bx bx-user-plus'></i>
            <span class="link_name">Usuario</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Usuarios</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
        <i class='bx bxs-user'></i>
            <span class="link_name">Admin</span>
          </a>

        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Staff</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Analytics</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Analisis</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Chart</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Graficas</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug' ></i>
            <span class="link_name">Promociones</span>
          </a>

        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Promociones</a></li>

        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-compass' ></i>
          <span class="link_name">trabajamos</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Trabajamos</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-history'></i>
          <span class="link_name">Quienes Somos</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Historia</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <!--<img src="image/profile.jpg" alt="profileImg">-->
      </div>
      <div class="name-job">
        <div class="profile_name">Empresa</div>
        <div class="job">Maquillaje</div>
      </div>
      <a href="../login/logout.php"><i class='bx bx-log-out' ></i></a>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
			<?php include "dashboard.php" ?>
    </div>
  </section>
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
</body>
</html>
