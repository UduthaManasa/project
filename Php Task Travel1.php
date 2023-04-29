
<?php
$connect = mysqli_connect("localhost","root","","db");
$output = "";
if(isset($_POST['search'])){
    $input=$_POST['input'];
    if(!empty($input)){
        $query = "SELECT * FROM search WHERE FlightName LIKE '%$input%'";
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
?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>PHP Task Travel</title>
  </head>
  <body>
   <!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <!-- Container wrapper -->
  <div class="container-fluid">
      <!-- Navbar brand -->
      <a class="navbar-brand" href="#">Travel</a>

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
                Servises
              </button> 
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="building equipments.html"></a>&nbsp About us</li>
                <li><a class="dropdown-item" href="nuclear power plants.html">details </a></li>
                <li><a class="dropdown-item" href="auto mobiles.html">contact us</a></li>
            </ul>
        </div>
      </ul> 
        
        
    </div>
    </div>    
    </div>
           
          </form>
  
      </nav>
      </div>
      <br>
      <center><h1 style="color: brown;"><i>PHP Task Travel</h1></i> </center>
      <marquee style="color: red;"direction="left"><b><h3>“Live life with no excuses, travel with no regret.”</h3></b></marquee>
      <div class="container-fluid mt-3">
    </div>
    <!---carousel-->
<div id="manasa" class="carousel slide" data-bs-ride="carousel">
<!---indicators/dots-->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#manasa" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#manasa"data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#manasa" data-bs-slide-to="2"></button>
      <button type="button" data-bs-target="#manasa" data-bs-slide-to="3"></button>
    </div>
<!--the slideshow/carousel-->
<div class="carousel-inner">
<div class="carousel-item active">
    <img src="https://amadeus.com/images/en/people/tourists/traveler-vietnam-looking-beautiful-view-temples.png"alt="image1" class="d-block w-100" style="height:600px;">
  
</div>
<div class="carousel-item ">
    <img src="https://images.pexels.com/photos/2577274/pexels-photo-2577274.jpeg?cs=srgb&dl=pexels-pawan-yadav-2577274.jpg&fm=jpg"alt="image1" class="d-block w-100" style="height:600px;">  
</div>
<div class="carousel-item">
  <img src="https://www.the-vegan-travelers.com/en/wp-content/uploads/blogbild-dont-be-a-tourist-be-a-traveler.jpg"alt="image2" class="d-block w-100" style="height:600px;">
</div>
<div class="carousel-item">
    <img src="https://9to5mac.com/wp-content/uploads/sites/6/2023/02/the-reluctant-traveler-eugene-levy.jpg?quality=82&strip=all"alt="image2" class="d-block w-100" style="height:600px;">
</div>

<div class="carousel-item">
    <img src="https://webunwto.s3.eu-west-1.amazonaws.com/2020-04/restrction.jpg"alt="image3"class="d-block w-100" style="height:600px;">
</div>
    
  </div>
           <!--left and right controls/icons-->
      <button class="carousel-control-prev" type="button" data-bs-target="#manasa" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#manasa" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
    
  <br>
  <br>      
  <div class="container-fluid ">
    <div class="row">
        <div class="col-md-4">
            <div class="card"style="width:30rem;">
                <img src="https://media.istockphoto.com/id/135327019/photo/white-passenger-bus.jpg?s=612x612&w=0&k=20&c=sRU5BpOsY6fyYj9pMiAxz0dLML--uoNl7rIXelRbFnc=" class="card-in=mg-top"alt="buses" style="height:250px;">
                <div class="card-body">
                    <h5 class="card-title">buses</h5>
                    <p class="card-text"></p>
                    <a href="search bar bus.php"class="btn btn-primary">Search for buses</a>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="col-md-4">
          <div class="card"style="width:30rem;">
              <img src="https://images.moneycontrol.com/static-mcnews/2021/09/Air-India.jpg?impolicy=website&width=1600&height=900" class="card-in=mg-top"alt="flights" style="height: 250px;">
              <div class="card-body">
                  <h5 class="card-title">flights</h5>
                  <p class="card-text"></p>
                  <a href="search bar flights.php"class="btn btn-primary">Search for flights</a>
              </div>
              
          </div>
      </div>
      <br>
        <br>
      <div class="col-md-4">
        <div class="card"style="width:30rem;">
            <img src="https://www.gannett-cdn.com/-mm-/05b227ad5b8ad4e9dcb53af4f31d7fbdb7fa901b/c=0-64-2119-1259/local/-/media/USATODAY/USATODAY/2014/08/13/1407953244000-177513283.jpg" class="card-in=mg-top"alt="hotels" style="height: 250px;">
            <div class="card-body">
                <h5 class="card-title">hotels</h5>
                <p class="card-text"></p>
                <a href="hotels.php"class="btn btn-primary">Search for hotels</a>
            </div>
        </div>
    </div>
    <br>         
    
          
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