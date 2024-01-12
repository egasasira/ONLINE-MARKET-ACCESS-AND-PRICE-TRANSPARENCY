<?php
require_once('datas.php');

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $query = "DELETE FROM farmers WHERE phone = '$phone'";
    $result = mysqli_query($con, $query);
    
    if ($result) {
        // Redirect to dashboard.php after successful deletion
        header("Location: dashboard2.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}
?>