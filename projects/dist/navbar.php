<?php
$con = mysqli_connect('localhost', 'root', '', 'airclub');

$query = "SELECT * FROM `project_details`";

?>



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Voyage Slider | GSAP</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap"rel="stylesheet'><link rel="stylesheet" href="./style2.css">
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

    <div class="projects-section">
      <div class="projects-section-header">
        <p>Projects</p>
        <p class="time">December, 12</p>
      </div>
      <div class="projects-section-line">
        <div class="projects-status">
          <div class="item-status">
            <span class="status-number">45</span>
            <span class="status-type">In Progress</span>
          </div>
          <div class="item-status">
            <span class="status-number">24</span>
            <span class="status-type">Upcoming</span>
          </div>
          <div class="item-status">
            <span class="status-number">62</span>
            <span class="status-type">Total Projects</span>
          </div>
        </div>
        <div class="project-boxes jsGridView">
        <div class="project-box-wrapper">
          <div class="project-box" style="background-color: #1e1f26; width:270px;">
            <div class="project-box-header">
              <span>December 10, 2020</span>
              <div class="more-wrapper">
                <button class="project-btn-more">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                    <circle cx="12" cy="12" r="1" />
                    <circle cx="12" cy="5" r="1" />
                    <circle cx="12" cy="19" r="1" /></svg>
                </button>
          </div>
        </div>
        <?php
        $result = mysqli_query($con, $query);
        if ($result->num_rows > 0) {
          while ($data = $result->fetch_assoc()) {
            echo '
            <div>
            <div class="project-box-content-header">
          <p class="box-content-header">' . $data["project_name"] . '</p>
          <p class="box-content-subheader">' . $data["project_info"] . '</p>
        </div>
        <div class="box-progress-wrapper">
          <p class="box-progress-header">Progress</p>
          <div class="box-progress-bar">
            <span class="box-progress" style="width: ' . $data["project_progress"] . '%; background-color: #03dac6"></span>
          </div>
          <p class="box-progress-percentage">' . $data["project_progress"] . '%</p>
        </div>
        <div class="project-box-footer">
          <div class="participants">
            
            <button class="add-participant" style="color: #03dac6;">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <path d="M12 5v14M5 12h14" />
              </svg>
            </button>
          </div>
          <div class="days-left" style="color: #03dac6;">
            DAYS LEFT:' . $data["days_left"] . '
          </div>
        </div>
        <div>
            
            ';
          }
        }




        ?>
        
      </div>
    </div>
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