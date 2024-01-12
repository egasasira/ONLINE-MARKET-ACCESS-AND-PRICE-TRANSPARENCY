<?php
require_once('datas.php');

if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
    
    // Fetch the farmer's details from the database using the ID
    $query = "SELECT * FROM farmers WHERE id = '$id'";
    $result = mysqli_query($con, $query);
    
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        
        // Display the farmer's details and provide an update form
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Update Farmers</title>
        </head>
        <body>
            <h2>Update Farmer</h2>
            <form action="update_process.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label for="firstname">First Name:</label>
                <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>"><br><br>
                <label for="lastname">Last Name:</label>
                <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>"><br><br>
                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
                <label for="phone">Phone:</label>
                <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br><br>
                <input type="submit" value="Update">
            </form>
        </body>
        </html>
        <?php
    } else {
        echo "Error fetching data: " . mysqli_error($con);
    }
}
?>