<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Food Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
			background-image: url("../images/page-heading-bg.jpg");

        }
		
		
		h1{
			text-align: center;
			color:cornsilk;
			
		}
		
		

        h2 {
            text-align: center;
			color:cornsilk;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px 0;
            cursor: pointer;
            border-radius: 4px;
        }

        h4 {
            text-align: center;
            margin-top: 40px;
			color:cornsilk;

        }

        .item-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            justify-content: center;
        }

        .item {
            position: relative;
            text-align: center;
            background-color: #fff;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .item img {
            width: 100%;
            height: auto;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .item p {
            margin: 0;
        }

        .delete-button {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: #ff6868;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 4px;
        }
		
		footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
		
		
		
		
		
		
		
    </style>
</head>
<body>
    <?php
    include 'newconnection.php';

    // Function to fetch all items from the foodmenu table
    function getAllItems() {
        global $conn;
        $sql = "SELECT * FROM foodmenu";
        $result = $conn->query($sql);

        $items = [];
        while ($row = $result->fetch_assoc()) {
            $items[] = $row;
        }

        return $items;
    }

    // Process form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['delete_item'])) {
            // Handle item deletion
            $deleteItemId = $_POST['delete_item'];
            $deleteSql = "DELETE FROM foodmenu WHERE id = $deleteItemId";
            if ($conn->query($deleteSql) === TRUE) {
                echo "Item deleted successfully";
            } else {
                echo "Error deleting item: " . $conn->error;
            }
        } else {
            // Handle form submission for adding items
            $name = $_POST['name'];
            $price = $_POST['price'];
            $image = $_FILES['image']['name'];

            // Upload image to a directory
            $target_dir = "images/";
            $target_file = $target_dir . basename($_FILES['image']['name']);
            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

            // Insert data into the database
            $insertSql = "INSERT INTO foodmenu (image, name, price) VALUES ('$image', '$name', $price)";
            if ($conn->query($insertSql) === TRUE) {
                echo "Item added successfully";
            } else {
                echo "Error: " . $insertSql . "<br>" . $conn->error;
            }
        }
    }

    // Fetch all items from the database
    $items = getAllItems();
    ?>
<h1>Admin Food Management</h1>
<hr>
    <h2>Add Item to Food Menu</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="name">Item Name:</label>
        <input type="text" name="name" required>

        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" required>

        <label for="image">Image:</label>
        <input type="file" name="image" accept="image/*" required>

        <input type="submit" value="Add Item">
    </form>

    <h3>Added Items</h3>
    <div class="item-container">
        <?php
        if (!empty($items)) {
            foreach ($items as $item) {
                echo '<div class="item">';
                echo '<img src="images/' . $item['image'] . '" alt="' . $item['name'] . '">';
                echo '<p>Name: ' . $item['name'] . '</p>';
                echo '<p>Price: $' . $item['price'] . '</p>';
                // Add a delete button with the item ID as the value
                echo '<form method="POST"><button class="delete-button" type="submit" name="delete_item" value="' . $item['id'] . '">Delete</button></form>';
                echo '</div>';
            }
        } else {
            echo '<p>No items added yet.</p>';
        }
        ?>
    </div>
	 <footer>
        &copy;Induwara| 2023 The Outer Clove. All rights reserved.
    </footer>
	
	
</body>
</html>
