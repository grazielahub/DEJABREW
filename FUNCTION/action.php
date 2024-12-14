<link rel="stylesheet" href="style.css">
<div class="background"></div>
<div class="ACTION">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $address = $_POST['address'] ?? '';
    $number = $_POST['number'] ?? '';
    $variety = $_POST['variety'] ?? '';
    $error = '';

    // Validation
    if (empty($name)) { 
        $error .= "Full Name is required.<br>";
    }
    if (empty($address)) {
        $error .= "Address is required.<br>";
    }
    if (empty($number)) {
        $error .= "Contact Number is required.<br>";
    } elseif (!preg_match('/^[0-9]+$/', $number)) { 
        $error .= "Contact Number must be numeric.<br>";
    }
    if (empty($variety)) {
        $error .= "Variety is required.<br>";
    } elseif (!is_numeric($variety)) {
        $error .= "Variety must be a number.<br>";
    }

    // Display errors or process order
    if (!empty($error)) {
        echo "<h3>There were errors in your submission:</h3>";
        echo "<p style='color: red;'>$error</p>";
    } else {
        echo "<h1>ORDERED SUCCESSFULLY!!</h1>"; 
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Address:</strong> $address</p>";
        echo "<p><strong>Contact Number:</strong> $number</p>";
        echo "<p><strong>Variety:</strong> $variety</p>";

        // Save order details to file
        $file = fopen("orders.txt", "a");
        fwrite($file, "Timestamp: " . date("Y-m-d H:i:s") . "\n");
        fwrite($file, "Name: $name\nAddress: $address\nContact Number: $number\nVariety: $variety\n\n");
        fclose($file);
    }
}
?>
</div>