<?php

$con = mysqli_connect('localhost', 'root', 'Adm1n1str@t0r','airclub');

// get the post records


$query = "SELECT * FROM member_details";
$result = mysqli_query($con, $query);

?>

<table class="container" border ="2" cellspacing="5" cellpadding="5">
    <tr>
      <th align="center">idpersonaldetails</th>
      <th align="center">Name</th>
     
      <th align="center">Email</th>
      <th align="center">Contact No</th>
      <th align="center">Country</th>
    
      <th align="center">Email</th>
      <th align="center">Contact No</th>
      <th align="center">Country</th>
  
    </tr>
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>

   <td align="center"><?php echo $data['Member_name']; ?> </td>
   <td align="center"><?php echo $data['Member_id']; ?> </td>
   <td align="center"><?php echo $data['Member_field']; ?> </td>
   <td align="center"><?php echo $data['Member_designation']; ?> </td>
   <td align="center"><?php echo $data['Member_rank']; ?> </td>
   <td align="center"><?php echo $data['Member_email']; ?> </td>

   <td align="center"><?php echo $data['Member_contact']; ?> </td>
   <td align="center"><?php echo $data['Member_photourl']; ?> </td>
</tr>

 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>

 </table>


<!-- 
<li>
<a href="https://swop.link/cool" target="_blank" class="profile">
  <h2 class="profile__name">'. $name .'</h2>
  <p>Secretary</p>
  <img alt="' . $name . '" src="'. $link .'" />
</a>
</li>';




?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Build a fancy hover animation - complete</title>
  <link rel='stylesheet' href='https://unpkg.com/modern-css-reset/dist/reset.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap'><link rel="stylesheet" href="./style.css">

</head>
<body>
<article class="flow">
  <h1>Our Team</h1>
  <p>Hover or focus over each card to see the person’s job title slide in and the colour treatment change.</p>
  <div class="team">
    <ul class="auto-grid" role="list">
      <?php $result = $conn->query($query);

      if ($result->num_rows > 0) {
         // Initialize a counter variable
        while ($row = $result->fetch_assoc()) {
          // Store image URLs in variables with a unique name (e.g., $imgurl1, $imgurl2, etc.)
          $name=$row["name"]
          $link =$row["link"]
          echo $large;
        }
      }
      ?>
      <li>
        <a href="https://swop.link/cool" target="_blank" class="profile">
          <h2 class="profile__name">Lakim Zakir Pronay</h2>
          <p>Secretary</p>
          <img alt="Lakim Zakir Pronay" src="" />
        </a>
      </li>
      <li>
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
      </li>
      
    </ul>
  </div>
</article>
partial
  
</body> -->

