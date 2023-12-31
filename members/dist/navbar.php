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
</head>
<body>

    <div>
        
            
    <div class="nav-container">
        <button id="home" class="nav-tab" location="../../home/dist/index.php.html">HOME</button>
        <button class="nav-tab" id="event" location="../../eventsfinal/nw.php">EVENTS</button>
        <button id="member" class="nav-tab" location="../../members/dist/member.php">MEMBERS</button>
        <button id = "projects" class="nav-tab" location="../../projects/dist/navbar.php">PROJECTS</button>
        <span class="nav-tab-slider"></span></div>
          
          
          
          <!-- partial -->
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script><script  src="../dist/script2.js"></script>
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
</body>