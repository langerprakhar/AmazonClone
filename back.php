<?php
include 'connect.php'; // Include the connect.php file to establish database connection

// Query the clothes table
$sql_clothes = "SELECT * FROM clothes";
$result_clothes = $conn->query($sql_clothes);

// Query the health_personal_care table
$sql_health_personal_care = "SELECT * FROM health_personal_care";
$result_health_personal_care = $conn->query($sql_health_personal_care);

// Query the furniture table
$sql_furniture = "SELECT * FROM furniture";
$result_furniture = $conn->query($sql_furniture);

// Query the electronics table
$sql_electronics = "SELECT * FROM electronics";
$result_electronics = $conn->query($sql_electronics);

// Query the makeup table
$sql_makeup = "SELECT * FROM makeup";
$result_makeup = $conn->query($sql_makeup);

// Query the pet_care table
$sql_pet_care = "SELECT * FROM pet_care";
$result_pet_care = $conn->query($sql_pet_care);

//Query the New Arrival in toys table
$sql_new_arrival_in_toys="SELECT * from new_arrival_in_toys";
$result_new_arrival_in_toys= $conn->query($sql_new_arrival_in_toys);

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
</head>
<body>
    <h2>Clothes</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Size</th>
            <th>Color</th>
        </tr>
        <?php while($row = $result_clothes->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['size']; ?></td>
                <td><?php echo $row['color']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

    

    <!-- Health & Personal Care -->
    <h2>Health and Personal Care</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>brand</th>
        </tr>
        <?php while($row = $result_clothes->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['brand']; ?></td>
               
            </tr>
        <?php endwhile; ?>
    </table>
    <!-- Furniture -->
    <h2>Furniture</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>material</th>
            <th>color</th>
        </tr>
        <?php while($row = $result_clothes->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['material']; ?></td>
                <td><?php echo $row['color']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

    <!-- Electronics -->
    <h2>Electronics</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>material</th>
            <th>color</th>
        </tr>
        <?php while($row = $result_clothes->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['brand']; ?></td>
             
            </tr>
        <?php endwhile; ?>
    </table>
    <!-- Makeup -->
    <h2>Makeup</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>material</th>
            <th>color</th>
        </tr>
        <?php while($row = $result_clothes->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['brand']; ?></td>
             
            </tr>
        <?php endwhile; ?>
    </table>
    <!-- Pet Care -->
    <h2>Pet Care</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>pet_type</th>
        </tr>
        <?php while($row = $result_clothes->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['pet_type']; ?></td>
             
            </tr>
        <?php endwhile; ?>
    </table>
    <!-- New Arrival in Toys -->
    <h2>New Arrival in Toys</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>age_group</th>
        </tr>
        <?php while($row = $result_clothes->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['age_group']; ?></td>
             
            </tr>
        <?php endwhile; ?>
    </table>
    <!-- Fashion Trends -->
    <h2>Fashion Trends</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>age_group</th>
        </tr>
        <?php while($row = $result_clothes->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['item_name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['brand']; ?></td>
             
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
