<?php
$connect = mysqli_connect("localhost","root","","db");
$output = "";
if(isset($_POST['search'])){
    $input=$_POST['input'];
    if(!empty($input)){
        $query = "SELECT * FROM bus WHERE BusName LIKE '%$input%'";
        $res = mysqli_query($connect,$query);
        $output .= "
        <table class='table table-bordered table-striped'>
        <tr>
        
        <th>BusName</th>
        <th>Seats</th>
        <th>TicketPrice</th>
        <th>Startingpoint</th>
        <th>Endingpoint</th>
        <tr>
        ";
        if(mysqli_num_rows($res) < 1) {
            $output .="
                <tr>
                    <td colspan='6' class='text-center> no data found </td>
                </tr>";     
        } 
        else{
            while ($row = mysqli_fetch_array($res)){
                $output .="
                    <tr>
                        <td>".$row['BusName']."</td>
                        <td>".$row['Seats']."</td>
                        <td>".$row['TicketPrice']."</td>
                        <td>".$row['Startingpoint']."</td>
                        <td>".$row['Endingpoint']."</td>
                    </tr>";
            }
        }

    }
}
?>
<?php
$connect = mysqli_connect("localhost","root","","db");
$output = "";
if(isset($_POST['search'])){
    $input=$_POST['input'];
    if(!empty($input)){
        $query = "SELECT * FROM bus WHERE Endingpoint LIKE '%$input%'";
        $res = mysqli_query($connect,$query);
        $output .= "
        <table class='table table-bordered table-striped'>
        <tr>
        
        <th>BusName</th>
        <th>Seats</th>
        <th>TicketPrice</th>
        <th>Startingpoint</th>
        <th>Endingpoint</th>
        <tr>
        ";
        if(mysqli_num_rows($res) < 1) {
            $output .="
                <tr>
                    <td colspan='6' class='text-center> no data found </td>
                </tr>";     
        } 
        else{
            while ($row = mysqli_fetch_array($res)){
                $output .="
                    <tr>
                        <td>".$row['BusName']."</td>
                        <td>".$row['Seats']."</td>
                        <td>".$row['TicketPrice']."</td>
                        <td>".$row['Startingpoint']."</td>
                        <td>".$row['Endingpoint']."</td>
                    </tr>";
            }
        }

    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


  </head>
  <body>
  <!-- Navbar -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <!-- Container wrapper -->
  <div class="container-fluid">
      <!-- Navbar brand -->
      <a class="navbar-brand" href="Php Task Travel1.php">Travel</a>

      <!-- Icons -->
      <ul class="navbar-nav d-flex flex-row me-1">
          <li class="nav-item me-3 me-lg-0">
              <a class="nav-link text-light" href="search bar flights.php"><i class="fa-solid fa-jet-fighter-up "></i> Flights</a>
          </li>
          <li class="nav-item me-3 me-lg-0">
              <a class="nav-link text-light" href="search bar bus.php"><i class="fas fa-bus mx-1"></i> Buses</a>
          </li>
          <li class="nav-item me-3 me-lg-0">
              <a class="nav-link  text-light" href="hotels.php"> <i class="fas fa-house mx-1"></i> Hotels </a>
              <!-- Dropdown menu -->
              
          </li>

            <div class="dropdown">
             <button type="button" class="btn btn-dark dropdown-toggle " data-bs-toggle="dropdown"style="background-color:black">
                Services
              </button> 
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="building equipments.html">About us</a></li>
                <li><a class="dropdown-item" href="nuclear power plants.html">details </a></li>
                <li><a class="dropdown-item" href="auto mobiles.html">contact us</a></li>
            </ul>
        </div>
      </ul> 
        
        </nav>
       <br><br>
     <center><div class="col-md-11">
        <form method="post">
            <div class="row">
                <div class="col-md-6 "style="margin-left:40px">
                <input class="form-control " type="text"name="input" placeholder="Search">
                </div>
                <div class="col-md-1">
                <input type="submit" name="search"class="btn btn-info" value="search">
                
                </div>
                </form>
                  <br>
                  <br>
                  
                  <?php 
              echo $output;
              ?>    
    </div>
    </div>    
    </div></center>
    <br> 
    <center><p class="h1 text-danger"><b>BUSES</b></h1></center>
    <div class="container-fluid">
      <div class="row">
        <!-- IndiGo -->

          
          <!-- Air India -->
          <div class="col-md-3">
            <div class="card"style="width:20rem;">
                <img src="https://www.volvobuses.com/content/dam/volvo-buses/markets/global/classic/news/2019/1860X1050-volvo-luxury-coaches.jpg" class="card-in=mg-top"alt="air india" style="width: 300px;">
                <div class="card-body">
                  <center><h5 class=" h2 card-title"style="color:blue">luxury</h5></center>
                    
                    <center><a href=""class="btn btn-primary">Tickets booking</a></center>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
          <div class="card"style="width:20rem;">
              <img src="https://www.apsrtc.ap.gov.in/images/Super%20Lux.gif" class="card-in=mg-top "alt="AirAsia" style="width: 300px;">
              <div class="card-body">
                <center><h5 class="h2 card-title"style="color:blue">super luxury</h5></center>
                  
                  <center> <a href="#"class="btn btn-primary">Tickets booking</a></center>
              </div>
          </div>
      </div>
      
          <div class="col-md-3">
            <div class="card"style="width:20rem;">
                <img src="https://s3-ap-southeast-1.amazonaws.com/rbplus/BusImage/Domestic/18491_1321_2.png" class="card-in=mg-top"alt="go first" style="width: 300px;">
                <div class="card-body">
                  <center> <h5 class="h2 card-title"style="color:blue">Rajadhani Express</h5></center>
                    
                    <center> <a href="#"class="btn btn-primary">Tickets booking</a></center>
                </div>
            </div>
        </div>
        
            <div class="col-md-3">
              <div class="card"style="width:20rem;">
                  <img src="https://www.apsrtc.ap.gov.in/images/Express.jpg" class="card-in=mg-top"alt="SpiceJet" style="width: 300px;">
                  <div class="card-body">
                    <center> <h5 class="h2 card-title"style="color:blue">Express</h5></center>
                      
                      <center> <a href="#"class="btn btn-primary">Tickets bookin</a></center>
                  </div>
              </div>
          </div>
          <br>
              <br>
             
            
      
    
    <!-- Container wrapper -->

<!-- Navbar -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>