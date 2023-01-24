<!DOCTYPE html>
<html lang="en">

<head>
    <title>CureCo</title>
    <link rel="shortcut icon" href="app/Views/images/logo1.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/Views/css/bootstrap/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="app/Views/css/style2.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="app/Views/css/style.css">
  <script
    src="https://kit.fontawesome.com/9d1d9a82d2.js"
    crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav style="background-color:black; display:flex; justify-content:space-between; width:100%;" class="res navbar navbar-expand-lg bg-dark">
<div style="justify-content: space-between;" class="container-fluid">
<div style="display:flex; justify-content: space-between; width:95%;">
    <a style="color: white;" class="navbar-brand" href="home">CureCo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a style="color: white;" class="nav-link active" aria-current="page" href="dachBoard">Home</a>
        </li>
        <li class="nav-item">
          <a style="color: white;" class="nav-link mx-1" href="products">Products</a>
        </li>
        <li class="nav-item">
          <a class="disconnected btn btn-primary" style="width:120px;" href="disconnect" >Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="d-flex flex-direction-column">
<div style="width: 580px;" class="d-flex flex-wrap justify-content-start m-4">
<div class="d-flex flex-column">
  <label class="log" style="color:rgb(10 82 189); width: 17rem; "><h1>DachBoard</h1></label>
  <label class="log" style="color:rgb(10 82 189); width: 17rem;"><h3>1.General Stastics :</h3></label>
<?php
  $row1 = mysqli_fetch_assoc($resultat1);
?>
<div class="stat">
<div class="card border-primary m-2" style="width: 17rem;">
  <div class="card-header bg-transparent border-primary">Products</div>
  <div class="card-body text-primary">
    <h5 class="card-title">Number of Products:</h5>
    <h1 class="card-text"><?php echo $row1['COUNT(*)']?></h1>
  </div>
</div>
<?php
  $row2 = mysqli_fetch_assoc($resultat2);
?>
<div class="card border-success m-2" style="width: 17rem;">
  <div class="card-header bg-transparent border-success">users</div>
  <div class="card-body text-success">
    <h5 class="card-title">Number of users:</h5>
    <h1 class="card-text"><?php echo $row2['COUNT(*)']-1 ?></h1>
  </div>
</div>
</div>
</div>
</div>
<div style="width: 50%;">    
</div> 
</div>
<div>
  <h3 class="log pt-5 ml-4" style="color:rgb(10 82 189);">2.products Stastics :</h3>
  <br>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const data = {
  labels: [
    'January',
    'February',
    'March',
    'April'
  ],
  datasets: [{
    type: 'bar',
    label: 'Bar Dataset',
    data: [10, 20, 30, 40],
    borderColor: 'rgb(255, 99, 132)',
    backgroundColor: 'rgba(255, 99, 132, 0.2)'
  }, {
    type: 'line',
    label: 'Line Dataset',
    data: [50, 50, 40, 50],
    fill: false,
    borderColor: 'rgb(54, 162, 235)'
  }]
};

const config = {
  type: 'scatter',
  data: data,
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
};
  
  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
</body>
</html>