<html>
<head>
<style>
.card{
    border:3px solid grey;
    border-radius: 5px;
    width:200px;
    height:250px; 
    display: flex;
    justify-content: center;
    align-items: center;
    text-align:left;
    flex-direction: column;
}
.card img{
    height: 100px;
    width: 100px;
}
</style>
</head>
<body>

<?php
$con = mysqli_connect('localhost','root','');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"garage");
$sql="SELECT Model,Maker,Price,Year,URL FROM garage";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
    echo"<div class='card'>";
     echo "<img src=".$row['URL']." "."alt="." ".">";
    echo "<p>".$row['Maker']." ".$row['Model'] ."</p>";
    echo "<p>" . $row['Year'] . "</p>";
    echo "<p>" . $row['Price']."000$". "</p>";
    echo "</div>";
}
    mysqli_close($con);
    ?>
</body>
</html>
