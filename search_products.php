<?php
// Database connection
session_start();
include('config.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['q'])) {
    $search_query = '%' . $_GET['q'] . '%';
    $sql = "SELECT * FROM tbl_product WHERE product_name LIKE ? OR company_name LIKE ? OR main_cat LIKE ? OR sub_cat LIKE ?";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param('ssss', $search_query, $search_query, $search_query, $search_query);
        $stmt->execute();
        $result = $stmt->get_result();

        $products = [];
        while ($row = $result->fetch_assoc()) {
            $products[] = [
                'product_name' => $row['product_name'],
                'company_name' => $row['company_name'],
                'desc' => $row['desc'],
                'price' => $row['price'],
                'image' => $row['image'],
                'business_type' => $row['business_type'],
                'points' => $row['points'],
                'country' => $row['country'],
            ];
        }

        // Return the result as JSON
        echo json_encode($products);
    }

    $stmt->close();
}

$conn->close();
?>
