<?php
header('Content-Type: application/json');

// Example data (you can replace this with database results)
$allData = [
    ["name" => "Laptop", "category" => "products"],
    ["name" => "Smartphone", "category" => "products"],
    ["name" => "John Doe", "category" => "buyers"],
    ["name" => "ABC Corporation", "category" => "suppliers"],
    ["name" => "Sofa", "category" => "products"],
    ["name" => "Jane Smith", "category" => "buyers"],
    ["name" => "XYZ Ltd.", "category" => "suppliers"]
];

// Get the query and category from the request
$query = isset($_GET['query']) ? strtolower(trim($_GET['query'])) : "";
$category = isset($_GET['category']) ? strtolower(trim($_GET['category'])) : "";

// Filter the data based on query and category
$filteredResults = array_filter($allData, function ($item) use ($query, $category) {
    $matchesQuery = strpos(strtolower($item['name']), $query) !== false;
    $matchesCategory = $category === "" || strtolower($item['category']) === $category;
    return $matchesQuery && $matchesCategory;
});

// Return the results as JSON
echo json_encode(array_values($filteredResults));
?>
