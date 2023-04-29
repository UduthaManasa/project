<?php
$connect = mysqli_connect("localhost","root","","db");
$output = "";
if(isset($_POST['search'])){
    $input=$_POST['input'];
    if(!empty($input)){
        $query = "SELECT * FROM hotels WHERE HotelAddress LIKE '%$input%'";
        $res = mysqli_query($connect,$query);
        $output .= "
        <table class='table table-bordered table-striped'>
        <tr>
        
        <th>HotelName</th>
        <th>Price per day</th>
        <th>HotelAddress</th>
        <th>Status</th>
        <th>AC or NON_AC</th>
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
                        <td>".$row['HotelName']."</td>
                        <td>".$row['Price per day']."</td>
                        <td>".$row['HotelAddress']."</td>
                        <td>".$row['Status']."</td>
                        <td>".$row['AC or NON_AC']."</td>
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
        $query = "SELECT * FROM hotels WHERE HotelName LIKE '%$input%'";
        $res = mysqli_query($connect,$query);
        $output .= "
        <table class='table table-bordered table-striped'>
        <tr>
        <th>HotelName</th>
        <th>Price per day</th>
        <th>HotelAddress</th>
        <th>Status</th>
        <th>AC or NON_AC</th>
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
                        <td>".$row['HotelName']."</td>
                        <td>".$row['Price per day']."</td>
                        <td>".$row['HotelAddress']."</td>
                        <td>".$row['Status']."</td>
                        <td>".$row['AC or NON_AC']."</td>
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
          </li>

            <div class="dropdown">
             <button type="button" class="btn btn-dark dropdown-toggle " data-bs-toggle="dropdown"style="background-color:black">
                Services
              </button> 
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="building equipments.html"></a>&nbsp &nbsp about us</li>
                <li><a class="dropdown-item" href="nuclear power plants.html"> </a>&nbsp &nbsp details</li>
                <li><a class="dropdown-item" href="auto mobiles.html"></a>&nbsp &nbsp contact us</li>
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
    </div>
    <br> </center>
    <center><p class="h1 text-danger"><b>Hotels</b></h1></center>
    <div class="container-fluid">
      <div class="row">
        <!-- IndiGo -->
          <div class="col-md-3">
              <div class="card"style="width:20rem;">
                  <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/17181467.jpg?k=73b25a9cb3b5e18877cf578c8d146a1ba4ff213a6bf3801f4480a0337bac1b1f&o=&hp=1" class="card-in=mg-top"alt="indigo" style="height:300px;">
                  <div class="card-body">
                    <center><h5 class="h2 card-title"style="color:blue">Taj Falaknuma palace</h5></center>
                  <center><a href=""class="btn btn-primary">Tickets booking</a></center>
                  </div>
              </div>
          </div>
          <br>
          <br>
          <!-- Air India -->
          <div class="col-md-3">
            <div class="card"style="width:20rem;">
                <img src="https://etimg.etb2bimg.com/photo/84848526.cms" class="card-in=mg-top"alt="air india" style="height: 300px;">
                <div class="card-body">
                  <center><h5 class=" h2 card-title"style="color:blue">Raffles udaipur</h5></center>
                    
                    <center><a href=""class="btn btn-primary">Tickets booking</a></center>
                </div>
            </div>
        </div>
        <br>
          <br>
        <div class="col-md-3">
          <div class="card"style="width:20rem;">
              <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/3a/4a/06/exterior.jpg?w=700&h=-1&s=1" class="card-in=mg-top"alt="AirAsia" style="height: 300px;">
              <div class="card-body">
                <center><h5 class="h2 card-title"style="color:blue">Taj lake palace udaipur</h5></center>
                  
                  <center> <a href=""class="btn btn-primary">Tickets booking</a></center>
              </div>
          </div>
      </div>
      <br>
          <br>
          <div class="col-md-3">
            <div class="card"style="width:20rem;">
                <img src="https://www.itchotels.com/content/dam/itchotels/in/umbrella/itc/hotels/itckohenur-hyderabad/images/overview/headmast-desktop/hotel-facade.png" class="card-in=mg-top"alt="go first" style="height: 300px;">
                <div class="card-body">
                  <center> <h5 class="h2 card-title"style="color:blue">ITC kohinoor</h5></center>
                    
                    <center> <a href=""class="btn btn-primary">Tickets booking</a></center>
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