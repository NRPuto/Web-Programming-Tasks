<?php 
include './connection.php';

$successMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the quick message was submitted
    if (isset($_POST['quick_message'])) {
        $quick_message = htmlspecialchars(trim($_POST['quick_message'])); // Sanitize user input
        
        // Prepare and execute the SQL statement for quick message
        $stmt = $conn->prepare("INSERT INTO quick_messages (message) VALUES (?)");
        $stmt->bind_param("s", $quick_message);

        if ($stmt->execute()) {
            echo "Quick message saved successfully!";
        } else {
            echo "Failed to save the quick message. Please try again.";
        }
        
        $stmt->close();
    }

    // Check if the full message was submitted
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $name = htmlspecialchars(trim($_POST['name']));     // Sanitize user input
        $email = htmlspecialchars(trim($_POST['email']));   // Sanitize user input
        $message = htmlspecialchars(trim($_POST['message'])); // Sanitize user input

        // Prepare and execute the SQL statement for full message
        $stmt = $conn->prepare("INSERT INTO full_message (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            echo "Full message saved successfully!";
        } else {
            echo "Failed to save the full message. Please try again.";
        }

        $stmt->close();
    }
}

$conn->close();

?>