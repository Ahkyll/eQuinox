<?php
include '../php/connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve product ID from the URL parameter
    $product_id = isset($_GET['id']) ? $_GET['id'] : null;

    if ($product_id) {
        $comment = $_POST["comment"];
        
        if (!empty($comment)) {
            $sql = "INSERT INTO user_comments (product_id, comment_text) VALUES (?, ?)";

            if ($stmt = $conn->prepare($sql)) {
                $stmt->bind_param("is", $product_id, $comment);
                $stmt->execute();
                $stmt->close();

                header("Location: ../pages/product_overview.php?id=$product_id");
                exit;
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        } else {
            echo "Comment cannot be empty.";
        }
    } else {
        echo "Product ID is missing.";
    }
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
