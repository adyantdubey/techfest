<?php 
$con = mysqli_connect('localhost', 'root', '','airclub');

$query = "SELECT * FROM events";


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
</head>
<body>

    <div>
        
            
            <div class="nav-container"><a class="nav-tab" href="../../home/dist/index.php.html">HOME</a><a class="nav-tab" href="../../events/dist/events.php">EVENTS</a><a class="nav-tab" href="../../members/dist/member.php">MEMBERS</a><a class="nav-tab" href="#tab-typescript">CONTACT US</a><a class="nav-tab" href="#tab-vite">VITE</a><span class="nav-tab-slider"></span></div>
          
          
          
          <!-- partial -->
    </div>
    <div style="display:flex;align-items:center; justify-content:center;">
    <div class="container py-5" style="margin-top: 5%;">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Card 1 -->
        <?php 
        $result = mysqli_query($con,$query);
        if($result->num_rows >0){
          while($data = $result->fetch_assoc()){
            $img1="../image/image1.jpeg";
            echo'
            <div class="col" style="padding: 20px;">
            <div class="card h-100" style="position: relative; max-width: 40%;">
                <div class="bottom-right">17/08/2023</div>
                <div class="top-right">
                    <div class="tags-list mb-2">
                        <span class="tags-list-town text-uppercase">NEW YORK</span>
                        <span style="background-color: #28a745; text-transform: uppercase; font-weight: 800;">
                            FREE
                        </span>
                    </div>
                </div>

                <!-- Other card content -->
                <div class="image-container" style="width: auto; height: auto; max-width: 100%; max-height: 100%;">
                    <div class="bottom-left">
                        <div class="thumbnail" style="background-color: #ffa5009e">
                            <div class="thumbnail-date">
                                <span class="thumbnail-date-day">17</span>
                                <span class="thumbnail-date-month">ago</span>
                            </div>
                        </div>
                    </div>

                    <img src="../image/image1.jpeg" class="card-img-top" alt="Image" style="width: 100%; height: 100%; object-fit: cover;" onclick="expandCard("Cheers and Grooves in the Heart of New York!", "../image/image1.jpeg"); return false;" />
                    
                    <div class="image-overlay text-over text-center d-flex justify-content-center align-items-center text-uppercase" style="color: #fff; position: absolute; display:flex; align-items:center;justify-content:center">
                        <a href="#" onclick="expandCard(\''.$data['event_description'].'\', \''.$img1.'\'); return false;">
                            <div style="color: #fff; margin-bottom: 25px;">
                                '.$data['event_name'].'
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
        
        <div class="col" style="padding: 20px;">
            <div class="card h-100" style="position: relative; max-width: 40%;">
                <div class="bottom-right">17/08/2023</div>
                <div class="top-right">
                    <div class="tags-list mb-2">
                        <span class="tags-list-town text-uppercase">NEW YORK</span>
                        <span style="background-color: #28a745; text-transform: uppercase; font-weight: 800;">
                            FREE
                        </span>
                    </div>
                </div>

                <!-- Other card content -->
                <div class="image-container" style="width: auto; height: auto; max-width: 100%; max-height: 100%;">
                    <div class="bottom-left">
                        <div class="thumbnail" style="background-color: #ffa5009e">
                            <div class="thumbnail-date">
                                <span class="thumbnail-date-day">17</span>
                                <span class="thumbnail-date-month">ago</span>
                            </div>
                        </div>
                    </div>

                    <img src="../image/image1.jpeg" class="card-img-top" alt="Image" style="width: 100%; height: 100%; object-fit: cover;" onclick="expandCard('Cheers and Grooves in the Heart of New York!', '../image/image1.jpeg'); return false;" />
                    
                    <div class="image-overlay text-over text-center d-flex justify-content-center align-items-center text-uppercase" style="color: #fff; position: absolute; display:flex; align-items:center;justify-content:center">
                        <a href="#" onclick="expandCard('hi this is kashik', '../image/image1.jpeg'); return false;">
                            <div style="color: #fff; margin-bottom: 25px;">
                                bht hrd-2023
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Repeat for other cards -->
    </div>
</div>
</div>

<div id="expandedCard" class="expanded-card">
    <div class="expanded-content">
        <img id="expandedImage" src="" alt="Expanded Image" onclick="closeCard()" />
        <div class="expanded-text">
            <p style="color: white;">hello i am adyant</p> <!-- This is where the description text will be inserted -->
        </div>
        <button class="close-button" onclick="closeCard()">Close</button>
    </div>
</div>
</div>

<script>
    // JavaScript functions to handle card expansion and closure
    function expandCard(text, imgUrl) {
        const expandedCard = document.getElementById('expandedCard');
        const expandedImage = document.getElementById('expandedImage');

        expandedImage.src = imgUrl;

        expandedCard.style.display = 'block';

        // Set the text for the expanded card
        document.querySelector('.expanded-text p').innerText = text;
    }

    function closeCard() {
        const expandedCard = document.getElementById('expandedCard');
        expandedCard.style.display = 'none';
    }
</script>
