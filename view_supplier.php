<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php     include "user_header.php";
?>
<div class="container">
    <?php
    include "connection.php";
    $s="select * from suppliers where user_email='".$_SESSION["username"]."'";
    $result=mysqli_query($conn, $s);
    ?><br>
    <?php
    $ans='<table class="table table-bordered">';
    $ans=$ans."<tr>";
    $ans=$ans."<th>Name</th>";
    $ans=$ans."<th>GST No</th>";
    $ans=$ans."<th>Address</th>";
    $ans=$ans."<th>PAN No.</th>";
    $ans=$ans."<th>Mobile No.</th>";
    $ans=$ans."<th>Email</th>";
    $ans=$ans."<th>Delete</th>";
    $ans=$ans."<th>Edit</th>";
    $ans=$ans."</tr>";
    while($row=mysqli_fetch_array($result)){
        $ans=$ans."<tr>";
        $ans=$ans."<td>".$row[1]."</td>";
        $ans=$ans."<td>".$row[2]."</td>";
        $ans=$ans."<td>".$row[3]."</td>";
        $ans=$ans."<td>".$row[4]."</td>";
        $ans=$ans."<td>".$row[5]."</td>";
        $ans=$ans."<td>".$row[6]."</td>";
        $ans = $ans . '<td><a href="delete_supplier.php?supp=' . $row[0] . '"><img style="height: 25px; width 20px;" src="remove.png"></a></td>';
        $ans = $ans . '<td><a href="edit_supplier.php?supp=' . $row[0] . '"><img style="height: 25px; width 25px;" src="edit.png"</a></td>';
        $ans=$ans."</tr>";
    }
    $ans=$ans."</table>";
    echo $ans;

    ?>
</div>
<?php
include 'footer.php';
?>
</body>
</html>