<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url('material_dashboard/assets/img/favicon.png')?>">
  <title>
    WEB GIS
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="<?= base_url('material_dashboard/assets/css/nucleo-icons.css')?>" rel="stylesheet" />
  <link href="<?= base_url('material_dashboard/assets/css/nucleo-svg.css')?>" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= base_url('material_dashboard/assets/css/material-dashboard.css?v=3.0.0')?>" rel="stylesheet" />

  <style>
    :root {
      --primary-color: #395B64 ;
      --secondary-color: #2C3333;
      --tertiary-color: #A5C9CA;
      --quaternary-color: #E7F6F2;
    }

    body.g-sidenav-show {
      background-color: var(--primary-color) !important;
    }

    #sidenav-main a.nav-link,
    #sidenav-main a.nav-link i,
    .title, .navbar-brand-img {
      color: #395B64 !important;
      font-weight: bolder;
    }
    </style>

  <?= $this->renderSection('head')?>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3  " id="sidenav-main" style="background-color: #E7F6F2;">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <span class="title ms-1 font-weight-bold text-center text-white">WEB GIS</span>
      </a>
      <hr>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="<?= site_url('/')?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('KodeWilayah/index')?>">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">bubble_chart</i>
              </div>
              <span class="nav-link-text ms-1">Kode Wilayah</span>
          </a>
            
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('Data/index')?>">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">bar_chart</i>
              </div>
              <span class="nav-link-text ms-1">Data</span>
          </a>
        </li>

        <!-- <li class="nav-item">
          <a class="nav-link text-white " href="../pages/tables.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Second Page</span>
          </a>
        </li> -->
      </ul>
    </div>
    <!-- <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
      </div>
    </div> -->
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row min-vh-80 h-100">
        <div class="col-12">
          <?= $this->renderSection('content')?>
        </div>
    </div>
  </div>
  </main>
  
  <!--   Core JS Files   -->
  <script src="<?= base_url('material_dashboard/assets/js/core/popper.min.js')?>"></script>
  <script src="<?= base_url('material_dashboard/assets/js/core/bootstrap.min.js')?>"></script>
  <script src="<?= base_url('material_dashboard/assets/js/plugins/perfect-scrollbar.min.js')?>"></script>
  <script src="<?= base_url('material_dashboard/assets/js/plugins/smooth-scrollbar.min.js')?>"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('material_dashboard/assets/js/material-dashboard.min.js?v=3.0.0')?>"></script>
  <?= $this->renderSection('script')?>
</body>

</html>