<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Card | PHP ECOMMENRCE</title>
  </head>
  <body>
    <h1>CARD</h1>
    <div class="container-fluid py-4">
<div class="row">
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
<div class="card">
<div class="card-header p-3 pt-2">
<div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
<i class="material-icons opacity-10">weekend</i>
</div>
<div class="text-end pt-1">
<p class="text-sm mb-0 text-capitalize">Today's Money</p>
<h4 class="mb-0">$53k</h4>
</div>
</div>
<hr class="dark horizontal my-0">
<div class="card-footer p-3">
<p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
<div class="card">
<div class="card-header p-3 pt-2">
<div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
<i class="material-icons opacity-10">person</i>
</div>
<div class="text-end pt-1">
<p class="text-sm mb-0 text-capitalize">Today's Users</p>
<h4 class="mb-0">2,300</h4>
</div>
</div>
<hr class="dark horizontal my-0">
<div class="card-footer p-3">
<p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
<div class="card">
<div class="card-header p-3 pt-2">
<div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
<i class="material-icons opacity-10">person</i>
</div>
<div class="text-end pt-1">
<p class="text-sm mb-0 text-capitalize">New Clients</p>
<h4 class="mb-0">3,462</h4>
</div>
</div>
<hr class="dark horizontal my-0">
<div class="card-footer p-3">
<p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday</p>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6">
<div class="card">
<div class="card-header p-3 pt-2">
<div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
<i class="material-icons opacity-10">weekend</i>
</div>
<div class="text-end pt-1">
<p class="text-sm mb-0 text-capitalize">Sales</p>
<h4 class="mb-0">$103,430</h4>
</div>
</div>
<hr class="dark horizontal my-0">
<div class="card-footer p-3">
<p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday</p>
</div>
</div>
</div>
</div>
<div class="row mt-4">
<div class="col-lg-4 col-md-6 mt-4 mb-4">
<div class="card z-index-2 ">
<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
<div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
<div class="chart">
<canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
</div>
</div>
</div>
<div class="card-body">
<h6 class="mb-0 ">Website Views</h6>
<p class="text-sm ">Last Campaign Performance</p>
<hr class="dark horizontal">
<div class="d-flex ">
<i class="material-icons text-sm my-auto me-1">schedule</i>
<p class="mb-0 text-sm"> campaign sent 2 days ago </p>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mt-4 mb-4">
<div class="card z-index-2  ">
<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
<div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
<div class="chart">
<canvas id="chart-line" class="chart-canvas" height="170"></canvas>
</div>
</div>
</div>
<div class="card-body">
<h6 class="mb-0 "> Daily Sales </h6>
<p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p>
<hr class="dark horizontal">
<div class="d-flex ">
<i class="material-icons text-sm my-auto me-1">schedule</i>
<p class="mb-0 text-sm"> updated 4 min ago </p>
</div>
</div>
</div>
</div>
<div class="col-lg-4 mt-4 mb-3">
<div class="card z-index-2 ">
<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
<div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
<div class="chart">
<canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
</div>
</div>
</div>
<div class="card-body">
<h6 class="mb-0 ">Completed Tasks</h6>
<p class="text-sm ">Last Campaign Performance</p>
<hr class="dark horizontal">
<div class="d-flex ">
<i class="material-icons text-sm my-auto me-1">schedule</i>
<p class="mb-0 text-sm">just updated</p>
</div>
</div>
</div>
</div>
</div>
<div class="row mb-4">
<div class="col-lg-8 col-md-6 mb-md-0 mb-4">
<div class="card">
<div class="card-header pb-0">
<div class="row">
<div class="col-lg-6 col-7">
<h6>Projects</h6>
<p class="text-sm mb-0">
<i class="fa fa-check text-info" aria-hidden="true"></i>
<span class="font-weight-bold ms-1">30 done</span> this month
</p>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../admin/assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="../admin/assets/js/bootstrap.bundle.min.jspopper.min.js"  crossorigin="anonymous"></script>
    <script src="../admin/assets/js/bootstrap.bundle.min.jsjs/bootstrap.min.js" crossorigin="anonymous"></script>
   
  </body>
</html>