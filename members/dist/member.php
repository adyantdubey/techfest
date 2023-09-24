
<?php include 'navbar.php'; ?>

<?php

$con = mysqli_connect('localhost', 'root', '', 'airclub');




$query = "SELECT * FROM member_details ";


$mname = "";

$mid = "";

$mfield = "";

$mdesignation = "";

$mrank = "";

$mmail = "";

$mcontact = "";

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Build a fancy hover animation - complete</title>
  <link rel='stylesheet' href='https://unpkg.com/modern-css-reset/dist/reset.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap'><link rel="stylesheet" href="./style.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap"rel="stylesheet'><link rel="stylesheet" href="./style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300;400;500&family=Raleway:wght@100;200;300;400;500&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
<!-- SGVsbG8hIE15IG5hbWUgaXMgU2FyYSBNYXphbC4gV2VsY29tZSB0byBteSBDb2RlUGVuOiBodHRwczovL2NvZGVwZW4uaW8vU2FyYW1hemFsICYgR2l0SHViOiBodHRwczovL2dpdGh1Yi5jb20vc2FyYW1hemFs -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js"></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<!-- <style>
        /* Add styles for the navbar here */
        .navbar {
            background-color: #333; /* Change the background color as needed */
            padding: 10px 0;
            color: #fff; /* Change the text color as needed */
        }

        .navbar a {
            color: #fff; /* Change the link text color as needed */
            text-decoration: none;
            margin: 0 20px; /* Adjust spacing between links */
        }

        .navbar a:hover {
            text-decoration: underline; /* Add an underline on hover if desired */
        }
    </style> -->




</head>
<body>
  
    <!-- <div class="navbar">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Team</a>
        <a href="#">Contact</a>
    </div> -->


<article class="flow">
  <br><br><br>
  <div>

  
  <h1>Our Team</h1>
  <div style = "padding: 20px; align-content:center;justify-content:center;align-items:center;">
  <div class="team" style="margin:0 auto;">
    <ul class="auto-grid" role="list">
      
      <?php
      $result = mysqli_query($con, $query);
      if ($result->num_rows > 0) {
        while ($data = $result->fetch_assoc()) {
          echo '
               <li>
        <a href="https://swop.link/cool" target="_blank" class="profile">
          <h2 class="profile__name">' . $data["Member_name"] . '</h2>
          <p>' . $data["Member_designation"] . '</p>
          <img alt="img" src="../../events/image/image1.jpeg" />
        </a>
      </li>
               ';
        }
      }







      ?>
    
      <!-- <li>
        <a href="https://swop.link/cool" target=_blank" class="profile">
          <h2 class="profile__name">Harshita Gupta</h2>
          <p>Co-Secretary</p>
          <img alt="Profile shot for Celina Harris" src="https://source.unsplash.com/j5KAuRrYX7g/800x800" />
        </a>
      </li>
      <li>
        <a href="https://swop.link/cool" target=_blank" class="profile">
          <h2 class="profile__name">Nirnimesh Bhati</h2>
          <p>Co-Secretary</p>
          <img alt="Profile shot for Ruby Morris" src="https://source.unsplash.com/pQyIutdScOY/800x800" />
        </a>
      </li>
      <li>
        <a href="https://swop.link/cool" target=_blank" class="profile">
          <h2 class="profile__name">Kashik</h2>
          <p>AI Lead</p>
          <img alt="Profile shot for Nicholas Castro" src="https://source.unsplash.com/55JRsxcAiWE/800x800" />
        </a>
      </li>
      <li>
        <a href="https://swop.link/cool" target=_blank" class="profile">
          <h2 class="profile__name">Vivek</h2>
          <p>Management Lead</p>
          <img alt="Profile shot for Marc Dixon" src="https://source.unsplash.com/5wn6DeAEcmE/800x800" />
        </a>
      </li>
      <li>
        <a href="https://swop.link/cool" target=_blank" class="profile">
          <h2 class="profile__name">Madhav Bhansali</h2>
          <p>Technical Lead</p>
          <img alt="Profile shot for Chad" src="https://source.unsplash.com/7jCYw6a2Wao/800x800" />
        </a>
      </li>
      <li>
        <a href="https://swop.link/cool" target=_blank" class="profile">
          <h2 class="profile__name">Abhilash</h2>
          <p>Sponsorship Lead</p>
          <img alt="Profile shot for Chad" src="https://source.unsplash.com/7jCYw6a2Wao/800x800" />
        </a>
      </li>
      <li>
        <a href="https://swop.link/cool" target=_blank" class="profile">
          <h2 class="profile__name">Jom George</h2>
          <p>ECE Lead</p>
          <img alt="Profile shot for Chad" src="https://source.unsplash.com/7jCYw6a2Wao/800x800" />
        </a>
      </li>
      <li>
        <a href="https://swop.link/cool" target=_blank" class="profile">
          <h2 class="profile__name">G Shweta</h2>
          <p>Mechanical Lead</p>
          <img alt="Profile shot for Chad" src="https://source.unsplash.com/7jCYw6a2Wao/800x800" />
        </a>
      </li> -->
      
    </ul>
  </div>
  </div>
</article>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script><script  src="../dist/script2.js"></script>

  
</body> 
