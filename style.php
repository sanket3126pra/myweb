<?php
// Fetch products from a database
$products = [
    ['image' => 'product1.jpg', 'name' => 'Laptop', 'price' => '$1167.8', 'description' => 'High-performance laptop'],
    ['image' => 'product2.jpg', 'name' => 'Smart Watch', 'price' => '$58.39', 'description' => 'Elegant wristwatch'],
];

foreach ($products as $product) {
    echo "<div class='product'>
        <img src='{$product['image']}' alt='{$product['name']}'>
        <h3>{$product['name']} {$product['price']}</h3>
        <p>{$product['description']}</p>
        <button>Add to Cart</button>
    </div>";
}
?>
