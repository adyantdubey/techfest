<?php
// database connection code
// $con = mysqli_connect('localhost', 'root', 'student','mydb');
$con = mysqli_connect('localhost', 'root', 'student', 'airclub');

// get the post records


$query = "SELECT * FROM member_details order by Member_rank desc";
$result = mysqli_query($con, $query);
?>

<table class="container" border ="2" cellspacing="5" cellpadding="5">
  <tr>
   // code

  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
    $sn = 1;
    while ($data = mysqli_fetch_assoc($result)) {
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


         <?php
         $sn++;
    }
} else { ?>
        <tr>
         <td colspan="8">No data found</td>
        </tr>
 <?php } ?>
 </table><button name="Sample"   class="fallback" style=" position: fixed;
    height: 80px;
    top: 90%;
    left: 0;
    width: 100%; "><b><a href="Dashboard.html" style="color: #FB667A;">Return Home</a><b></button>