<?php include('check_session.php');
include('conn.php');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Divya Patel</title>
  <link rel="stylesheet" href="style.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css">

</head>

<body>

  <!-- //////////////home page/////// -->
  <header class="nav fixed-top  ">
    <nav class="navbar navbar-expand-lg navbar-dark p-3 container">
      <a class="navbar-brand" href="#home">Divya</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto text-uppercase">
          <li class="nav-item active ">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html#services">Services</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="index.html#work">Work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>


        </ul>

      </div>
    </nav>
  </header>
<section id="home" class="home text-white">
    <div class="page-table">
      <div class="table-cell ">
        <div class="hero">
          <img src="images/dp.jpg" alt="divya-patel">
        </div>
        <h1>Hi, I'm Divya Patel</h1>
        <h2 class="typer-title text-uppercase"></h2>
        <button type="button" class="btn btn-outline-light">Download CV</button>
      </div>
    </div>




  </section><!--end contact-->



  

  <section class="fetch-data">
    <div class="container">
      <div class="row">
        <div class="title">
          <div class="section-title">
            <h1>Contact Form Data</h1>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table_exampless display" style="width:100%">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Message</th>
                      <th>Date & Time</th>
                      <th> Delete </th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $sql = "SELECT * FROM `contact` ORDER BY id DESC";
                  $run = mysqli_query($conn,$sql);
                  $i=0;
                  while($row = mysqli_fetch_array($run))
                  {
                    $i++;
                  ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                    <td><?php echo $row['samay']; ?></td>
                    <td><a href = "delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                  </tr>
                  <?php } ?>
                </tbody>
                
          </table>
      </div>
    </div>
  </section>

<footer>
    <div class="container">
        <div class="row">
            <div class="logo">Divya</div>
            <div class="social">
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-instagram"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
                <a href=""><i class="fa fa-github"></i></a>
            </div>
        </div>
    </div>
</footer>
<!--end footer-->
<!--start copyrights-->
<section class="copyright">
    <div class="container">
        <p>&copy; 2020 copyright all right reserved</p>
    </div>
</section>
<!--end copyrights-->


<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox-plus-jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>
  <script src="https://kit.fontawesome.com/5882cd1d92.js" crossorigin="anonymous"></script>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" />

<script>
     $(document).ready(function(){$(".table_exampless").DataTable({dom:"Bfrtip",searching:!0,buttons:["excelHtml5","csvHtml5","pdfHtml5"],order:[[0,"asc"]]})});
</script>
</body>

</html>