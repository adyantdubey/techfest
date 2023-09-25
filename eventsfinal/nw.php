<?php
$con = mysqli_connect('localhost', 'root', '', 'airclub');

$query = "SELECT * FROM event_details";


?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Voyage Slider | GSAP</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap"rel="stylesheet'><link rel="stylesheet" href="./style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300;400;500&family=Raleway:wght@100;200;300;400;500&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
<!-- SGVsbG8hIE15IG5hbWUgaXMgU2FyYSBNYXphbC4gV2VsY29tZSB0byBteSBDb2RlUGVuOiBodHRwczovL2NvZGVwZW4uaW8vU2FyYW1hemFsICYgR2l0SHViOiBodHRwczovL2dpdGh1Yi5jb20vc2FyYW1hemFs -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js"></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" >
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css'>



</head>
<body style="
  background: hsla(180, 58%, 27%, 1); 
  background: linear-gradient(
    45deg,
    hsla(180, 58%, 27%, 1) 0%,
    hsla(0, 1%, 14%, 1) 33%,
    hsla(0, 0%, 0%, 1) 66%,
    hsla(180, 64%, 31%, 1) 100%,
    hsla(180, 64%, 31%, 1) 100%
  ); 
  
  background: -moz-linear-gradient(
    45deg,
    hsla(180, 58%, 27%, 1) 0%,
    hsla(0, 1%, 14%, 1) 33%,
    hsla(0, 0%, 0%, 1) 66%,
    hsla(180, 64%, 31%, 1) 100%,
    hsla(180, 64%, 31%, 1) 100%
  );
  background: -webkit-linear-gradient(
    45deg,
    hsla(180, 58%, 27%, 1) 0%,
    hsla(0, 1%, 14%, 1) 33%,
    hsla(0, 0%, 0%, 1) 66%,
    hsla(180, 64%, 31%, 1) 100%,
    hsla(180, 64%, 31%, 1) 100%
  );
  filter: progid:DXImageTransform.Microsoft.gradient(
    startColorstr='#1d6c6c',
    endColorstr='#232222',
    GradientType=1
  );
">

    <div>
        
            
    <div class="nav-container">
        <button id="home" class="nav-tab" location="../../home/dist/index.php.html">HOME</button>
        <button class="nav-tab" id="event" location="../../eventsfinal/nw.php">EVENTS</button>
        <button id="member" class="nav-tab" location="../../members/dist/member.php">MEMBERS</button>
        <button id = "projects" class="nav-tab" location="../../projects/dist/navbar.php">PROJECTS</button>
        <span class="nav-tab-slider"></span></div>
            <div style="margin-top: 10%;">
            <div class="section-wrapper" data-scroll-section>  
              <div class="container">
                <div class="row">
                  <div class="col-12">
                  <h1 class="left-h1" data-scroll data-scroll-direction="horizontal" data-scroll-speed="-3" data-scroll-class="appear" data-scroll-repeat="true" style = "color:#fff">EVENTS</h1>
                    <div class="row posts-grid">
                      <?php
                      $result = mysqli_query($con, $query);
                      if ($result->num_rows > 0) {
                        while ($data = $result->fetch_assoc()) {
                          $count = 0;
                          echo '
                          <div class="col-md-4 grid-item" data-scroll data-scroll-speed="0.5">
                          <div class="post-box">
                            <figure class="image"><img src="https://themezinho.net/aventer/images/event01.jpg" alt="Image"></figure>
                            <div class="content-box"> <span><i class="fa fa-calendar"></i>' . $data["event_date"] . '</span>
                            <h3 style = "color:FFFF00"><a href="#" style = "color:yellow;">' . $data["event_name"] . '</a></h3>
                            <p style = "color:#fff">' . $data["event_description"] . '</p>
                            </div>
                           
                          </div>
                        
                          </div>';
                          $count++;
                          if ($count == 3) {
                            echo '<div class="row posts-grid"></div>';
                          }
                        }
                      }


                      ?>
                    </div>
                    
                    
                    </div>
                  </div>
                </div>
              </div>
            
            </div>
          </div>
        
        <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"></script>
        
          
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script><script  src="../dist/script.js"></script>
    <script>
  document.getElementById('home').addEventListener('click', function() {
    const location = document.getElementById('home').getAttribute('location');
    window.location.href = location;
  });
  document.getElementById('event').addEventListener('click', function() {
    const location = document.getElementById('event').getAttribute('location');
    window.location.href = location;
  });
  document.getElementById('member').addEventListener('click', function() {
    const location = document.getElementById('member').getAttribute('location');
    window.location.href = location;
  });
  document.getElementById('projects').addEventListener('click',function(){
    const location = document.getElementById('projects').getAttribute('location');
    window.location.href = location;
  })
  </script>
          <!-- partial -->
</body>
</html>