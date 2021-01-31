<?php
    require('core.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CPUbay</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">CPUbay</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <br>
  <div class="container">
    <div class="alert alert-success" role="alert">
      Top CPU's by number of Ebay listings.
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Search:</span>
      </div>
      <input type="text" class="form-control" placeholder="Manufacturer/Model" aria-label="Username" aria-describedby="basic-addon1">
      <button type="button" class="btn btn-primary">Go</button>
    </div>
    <table id="order-example" class="table table-striped table-bordered table-sm" style="width:100%">
        <thead>  
            <tr>
                <th>#</th>
                <th>Manufacturer</th> 
                <th>Model</th>
                <th>Cores</th>
                <th>Threads</th>
                <th>Benchmark</th>
            </tr>
        </thead>
        <tbody>
        <?php
            GetCpu();
        ?>
        </tbody>
    </table>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script scr="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"></script>
  <script>
    $(document).ready(function() {
        $('#order-example').DataTable();
    } );
</script>
</body>

</html>
