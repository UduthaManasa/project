<?php
$connect = mysqli_connect("localhost","root","","db");
$output = "";
if(isset($_POST['search'])){
    $input=$_POST['input'];
    if(!empty($input)){
        $query = "SELECT * FROM search WHERE ToPlace LIKE '%$input%'";
        $res = mysqli_query($connect,$query);
        $output .= "
        <table class='table table-bordered table-striped'>
        <tr>
        
        <th>FlightName</th>
        <th>TicketPrice</th>
        <th>tickets</th>
        <th>FromPlace</th>
        <th>ToPlace</th>
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
                        <td>".$row['FlightName']."</td>
                        <td>".$row['TicketPrice']."</td>
                        <td>".$row['tickets']."</td>
                        <td>".$row['FromPlace']."</td>
                        <td>".$row['ToPlace']."</td>
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
        $query = "SELECT * FROM search WHERE FromPlace LIKE '%$input%'";
        $res = mysqli_query($connect,$query);
        $output .= "
        <table class='table table-bordered table-striped'>
        <tr>
        
        <th>FlightName</th>
        <th>TicketPrice</th>
        <th>tickets</th>
        <th>FromPlace</th>
        <th>ToPlace</th>
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
                        <td>".$row['FlightName']."</td>
                        <td>".$row['TicketPrice']."</td>
                        <td>".$row['tickets']."</td>
                        <td>".$row['FromPlace']."</td>
                        <td>".$row['ToPlace']."</td>
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
                <li><a class="dropdown-item" href="building equipments.html"></a>&nbsp &nbsp About us</li>
                <li><a class="dropdown-item" href="nuclear power plants.html"> Details</a></li>
                <li><a class="dropdown-item" href="auto mobiles.html"></a>&nbsp &nbsp Contact us</li>
            </ul>
        </div>
      </ul> 
        
        </nav>
       <br><br>
     <div class="col-md-12">
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
    </div>
    <br> 
    <center><p class="h1 text-danger"><b>AirLines</b></h1></center>
    <div class="container-fluid">
      <div class="row">
        <!-- IndiGo -->
          <div class="col-md-2">
              <div class="card"style="width:15rem;">
                  <img src="https://images.cnbctv18.com/wp-content/uploads/2022/02/IndiGo.jpg?im=FitAndFill,width=1200,height=900" class="card-in=mg-top"alt="indigo" style="height:250px;">
                  <div class="card-body">
                    <center><h5 class="h2 card-title"style="color:blue">IndiGo</h5></center>
                  <center><a href="#"class="btn btn-primary">Tickets booking</a></center>
                  </div>
              </div>
          </div>
          <br>
          <br>
          <!-- Air India -->
          <div class="col-md-2">
            <div class="card"style="width:15rem;">
                <img src="https://img.etimg.com/thumb/msid-96867568,width-1070,height-580,imgsize-1223236,overlay-economictimes/photo.jpg" class="card-in=mg-top"alt="air india" style="height: 250px;">
                <div class="card-body">
                  <center><h5 class=" h2 card-title"style="color:blue">Air India</h5></center>
                    
                    <center><a href="#"class="btn btn-primary">Tickets booking</a></center>
                </div>
            </div>
        </div>
        <br>
          <br>
        <div class="col-md-2">
          <div class="card"style="width:15rem;">
              <img src="https://s28477.pcdn.co/wp-content/uploads/2020/06/AirAsia_India_3.jpg" class="card-in=mg-top"alt="AirAsia" style="height: 250px;">
              <div class="card-body">
                <center><h5 class="h2 card-title"style="color:blue">AirAsia</h5></center>
                  
                  <center> <a href="#"class="btn btn-primary">Tickets booking</a></center>
              </div>
          </div>
      </div>
      <br>
          <br>
          <div class="col-md-2">
            <div class="card"style="width:15rem;">
                <img src="https://www.deccanherald.com/sites/dh/files/articleimages/2023/01/09/screenshot-2023-01-09-212011-1179372-1673279756.jpg" class="card-in=mg-top"alt="go first" style="height: 250px;">
                <div class="card-body">
                  <center> <h5 class="h2 card-title"style="color:blue">Go First</h5></center>
                    
                    <center> <a href="#"class="btn btn-primary">Tickets booking</a></center>
                </div>
            </div>
        </div>
        <br>
            <br>
            <div class="col-md-2">
              <div class="card"style="width:15rem;">
                  <img src="https://static.theprint.in/wp-content/uploads/2019/03/maxresdefault.jpg?compress=true&quality=80&w=376&dpr=2.6" class="card-in=mg-top"alt="SpiceJet" style="height: 250px;">
                  <div class="card-body">
                    <center> <h5 class="h2 card-title"style="color:blue">SpiceJet</h5></center>
                      
                      <center> <a href="#"class="btn btn-primary">Tickets bookin</a></center>
                  </div>
              </div>
          </div>
          <br>
              <br>
              <div class="col-md-2">
                <div class="card"style="width:15rem;">
                    <img src="https://th-i.thgim.com/public/incoming/68qy1m/article66719758.ece/alternates/FREE_1200/80725_24_8_2022_13_57_57_1_MYSURUTOCHENNAIFLIGHT.JPG" class="card-in=mg-top"alt="Alliance Air" style="height: 250px;">
                    <div class="card-body">
                      <center> <h5 class="h2 card-title"style="color:blue">Alliance Air</h5></center>
                        
                        <center> <a href="#"class="btn btn-primary">Tickets booking</a></center>
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