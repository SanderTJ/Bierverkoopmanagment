<?php
session_start();
$conn = mysqli_connect('localhost','root','','');
if(mysqli_connect_errno()){
    echo 'Failed to connect: '.mysqli_connect_error();
}

if(isset($_POST['delete'])){
    $DeleteQuery = "DELETE FROM orders WHERE id='$_POST[hidden]'";
    mysqli_query($conn,$DeleteQuery);
}
if(isset($_POST['view'])){
    header('Location: view_order.php');
}

$query = "SELECT * FROM orders ORDER BY id";
$results = mysqli_query($conn,$query);

echo '<table border="1">';
    echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>Firstame</th>';
        echo '<th>Lastname</th>';
        echo '<th>Email</th>';
        echo '<th>Order Name</th>';
        echo '<th>Order Code</th>';
        echo '<th>Order Qty</th>';
        echo '<th>Sub Total</th>';
    echo '</tr>';

    while($orderData = mysqli_fetch_array($results)){
   echo '<form action="order.php" method="POST">';
    echo '<tr>';
        echo '<td>'.$orderData['id'].'</td>';
        echo '<td>'.$orderData['firstname'].'</td>';
        echo '<td>'.$orderData['lastname'].'</td>';
        echo '<td>'.$orderData['email'].'</td>';
        echo '<td>'.$orderData['ordername'].'</td>';
        echo '<td>'.$orderData['ordercode'].'</td>';
        echo '<td>'.$orderData['orderqty'].'</td>';
        echo '<td>'.$orderData['subtotal'].'</td>';

       echo '<td><input type="hidden" name="hidden" value="'.$orderData['id'].'"></td>';
        echo '<td><input type="submit" name="delete" value="Delete"></td>';
    echo '</form>';
        echo "<td><a href='view_order.php?firstname=".$orderData['firstname']."&lastname=".$orderData['lastname']."'>View</a></td>";
    echo '</tr>';

}
echo '</table>';
mysqli_close($conn);
?>