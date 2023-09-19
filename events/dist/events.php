<?php include 'navbar.php'; ?>

<?php

$con = mysqli_connect('localhost', 'root', '', 'airclub');




$query = "SELECT * FROM event_details";




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CodePen - Responsive Event Cards with Bootstrap 5: Elevate Your Event Experience</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css'>
  <link rel="stylesheet" href="./style.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap'><link rel="stylesheet" href="./style.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap"rel="stylesheet'><link rel="stylesheet" href="./style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300;400;500&family=Raleway:wght@100;200;300;400;500&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
<!-- SGVsbG8hIE15IG5hbWUgaXMgU2FyYSBNYXphbC4gV2VsY29tZSB0byBteSBDb2RlUGVuOiBodHRwczovL2NvZGVwZW4uaW8vU2FyYW1hemFsICYgR2l0SHViOiBodHRwczovL2dpdGh1Yi5jb20vc2FyYW1hemFs -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js"></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <style>
    /* Add this CSS to handle the expanded image */
    .expanded-card {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.9);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      transition: opacity 0.3s;
      opacity: 0;
      pointer-events: none;
    }

    .expanded-content {
      max-width: 80%;
      max-height: 80%;
      overflow: auto;
      padding: 20px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      position: relative;
      text-align: center;
      color: #000;
    }

    .expanded-text {
      margin-top: 20px; /* Add margin to create space between image and text */
    }

    .expanded-close {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
    }

    /* Additional styles for cards */
    .card {
      background-color: #000;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
<div class="container py-5">
  <div class="row row-cols-1 row-cols-md-3 g-4">
  
    <!-- Card 1 -->
    <div class="col">
    <div class="card h-100" style="position: relative"><div class="card h-100" style="position: relative">
        <?php
        $result = mysqli_query($con, $query);
        if ($result->num_rows > 0) {
          while ($data = $result->fetch_assoc()) {
            echo '
                <div class="col">
      <div class="card h-100" style="position: relative">
        <div class="bottom-right">' . $data["event_date"] . '</div>
        <div class="top-right">
          <div class="tags-list mb-2">
            <span class="tags-list-town text-uppercase">' . $data["event_place"] . '</span>
            <span style="background-color: #28a745; text-transform: uppercase; font-weight: 800;">
              FREE
            </span>
          </div>
        </div>

        
        <div class="image-container">
          <div class="bottom-left">
            <div class="thumbnail" style="background-color: #ffa5009e">
              <div class="thumbnail-date">
                <span class="thumbnail-date-day">17</span>
                <span class="thumbnail-date-month">ago</span>
              </div>
            </div>
          </div>

          <img src="../image/colloquium.jpeg" class="card-img-top" alt="Image" />
          
          <div class="image-overlay text-over text-center d-flex justify-content-center align-items-center text-uppercase">
            <a href="#" onclick="expandCard(' . $data["event_name"] . '"," ' . $data["event_photo"] . '); return false;">
              <div style="color: #fff;">
                ' . $data["event_name"] . '
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
                
                ';
          }
        }






        ?>
      
        

        <!-- Other card content -->
        
    <!-- Repeat for other cards -->
  </div>
</div>

<!-- Expanded card content -->
<div class="expanded-card" id="expandedCard">
  <div class="expanded-content">
    <span class="expanded-close" onclick="closeCard()">&times;</span>
    <img src="" alt="Expanded Image" id="expandedImage" style="max-width: 100%; max-height: 70vh;">
    <div class="expanded-text">
      <p>This is some additional text that becomes visible when scrolling down.</p>
    </div>
  </div>
</div>

<script>
  // JavaScript functions to handle card expansion and closure
  function expandCard(text, imgUrl) {
    const expandedCard = document.getElementById('expandedCard');
    const expandedImage = document.getElementById('expandedImage');

    expandedImage.src = imgUrl;

    expandedCard.style.opacity = '1';
    expandedCard.style.pointerEvents = 'auto';
  }

  function closeCard() {
    const expandedCard = document.getElementById('expandedCard');
    expandedCard.style.opacity = '0';
    expandedCard.style.pointerEvents = 'none';
  }
</script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script><script  src="../dist/script2.js"></script>
</body>
</html>
