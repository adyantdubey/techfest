
<?php include 'navbar.php'; ?>

<?php

$con = mysqli_connect('localhost', 'root', '', 'airclub');




$query = "SELECT * FROM event_details";



?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Responsive Event Cards with Bootstrap 5</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css'>
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
      margin-top: 20px;
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
      cursor: pointer; /* Add cursor pointer to indicate image is clickable */
    }

    .card img {
      transition: transform 0.2s;
    }

    .card:hover img {
      transform: scale(1.05);
    }
  </style>
</head>
<body>
<div class="container py-5">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <!-- Card 1 -->
    <div class="col">
      <div class="card h-100" style="position: relative">
        <div class="bottom-right">17/08/2023</div>
        <div class="top-right">
          <div class="tags-list mb-2">
            <span class="tags-list-town text-uppercase">NEW YORK</span>
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
          <!-- Add an event description here -->
          <div class="image-overlay text-over text-center d-flex justify-content-center align-items-center text-uppercase">
            <a href="#" onclick="expandCard('Cheers and Grooves in the Heart of New York!', 'https://images.pexels.com/photos/1230397/pexels-photo-1230397.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); return false;">
              <div style="color: #fff;">
                Cheers and Grooves in the Heart of New York!
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Repeat for other cards -->

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

    // Set the text for the expanded card
    document.querySelector('.expanded-text p').innerText = text;
  }

  function closeCard() {
    const expandedCard = document.getElementById('expandedCard');
    expandedCard.style.opacity = '0';
    expandedCard.style.pointerEvents = 'none';
  }
</script>
</body>
</html>
