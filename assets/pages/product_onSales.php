<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eQuinox - On Sales Product Overview</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="../images/logo1-removebg-preview.png" type="image/png">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<header class="py-1">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-3 text-center">
                    <a href="home.html"><img src="../images/logo1-removebg-preview.png" width="120" height="70"
                            alt="Logo"></a>
                </div>
                <div class="col-md-6 text-center">
                    <ul class="nav justify-content-center">
                        <li class="nav-item"><a class="nav-link large-font" href="home.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link large-font" href="products.php">Products</a></li>
                        <li class="nav-item"><a class="nav-link large-font" href="on_sales.php">On Sale</a></li>
                        <li class="nav-item"><a class="nav-link large-font" href="about_us.html">About Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3 text-center">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">
                                <i class="fas fa-user"></i>
                            </a>
                        </li>
                        <!-- Favorites icon -->
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#favoritesModal"><span
                                    style="color: red;"><i class="fas fa-heart"></i></span>
                            </a>
                        </li>
                        <!-- Cart icon -->
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#cartModal"><i
                                    class="fas fa-shopping-cart"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#notificationModal"><i
                                    class="fas fa-bell"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Favorites Modal -->
    <div class="modal fade" id="favoritesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="favoritesModalLabel">Favorites</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="favorites-container">
                        <div class="favorite-item row mb-3">
                            <div class="col-3">
                                <img src="../images/product1.png" alt="Product Image 1" class="img-fluid">
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <p class="mb-0">Mastering Digital Art: Techniques and Tools for Beginners</p>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-end">
                                <button type="button" class="btn btn-sm btn-danger delete-favorite">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                        <hr>
                        <div class="favorite-item row mb-3">
                            <div class="col-3">
                                <img src="../images/product2.png" alt="Product Image 2" class="img-fluid">
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <p class="mb-0">Abstract Emotions: Expressive Digital Artworks</p>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-end">
                                <button type="button" class="btn btn-sm btn-danger delete-favorite">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                        <hr>
                        <div class="favorite-item row mb-3">
                            <div class="col-3">
                                <img src="../images/product3.png" alt="Product Image 3" class="img-fluid">
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <p class="mb-0">Digital Painting Essentials: A Step-by-Step Guide</p>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-end">
                                <button type="button" class="btn btn-sm btn-danger delete-favorite">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart Modal -->
    <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="cartModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cartModalLabel">Shopping Cart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="cart-item row mb-3">
                        <div class="col-1">
                            <input type="checkbox" name="product1">
                        </div>
                        <div class="col-2">
                            <img src="../images/ebooks&guides.jpg" alt="Product Image 1" class="img-fluid">
                        </div>
                        <div class="col-6 d-flex align-items-center">
                            <p class="mb-0">Ebook: Introduction to Digital Marketing</p>
                        </div>
                        <div class="col-2 d-flex align-items-center justify-content-end">
                            <div class="cart-item-price">₱150.00</div>
                        </div>
                        <div class="col-1 d-flex align-items-center justify-content-end">
                            <button type="button" class="btn btn-sm btn-danger delete-product">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <hr>
                    <div class="cart-item row mb-3">
                        <div class="col-1">
                            <input type="checkbox" name="product2">
                        </div>
                        <div class="col-2">
                            <img src="../images/music.png" alt="Product Image 2" class="img-fluid">
                        </div>
                        <div class="col-6 d-flex align-items-center">
                            <p class="mb-0">Music Album: Summer Vibes </p>
                        </div>
                        <div class="col-2 d-flex align-items-center justify-content-end">
                            <div class="cart-item-price">₱50.00</div>
                        </div>
                        <div class="col-1 d-flex align-items-center justify-content-end">
                            <button type="button" class="btn btn-sm btn-danger delete-product">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <hr>
                    <div class="cart-item row mb-3">
                        <div class="col-1">
                            <input type="checkbox" name="product3">
                        </div>
                        <div class="col-2">
                            <img src="../images/templates.png" alt="Product Image 3" class="img-fluid">
                        </div>
                        <div class="col-6 d-flex align-items-center">
                            <p class="mb-0">Website Template: Creative Portfolio</p>
                        </div>
                        <div class="col-2 d-flex align-items-center justify-content-end">
                            <div class="cart-item-price">₱30.00</div>
                        </div>
                        <div class="col-1 d-flex align-items-center justify-content-end">
                            <button type="button" class="btn btn-sm btn-danger delete-product">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <div class="cart-item row mb-3">
                        <div class="col-1">
                            <input type="checkbox" name="product4">
                        </div>
                        <div class="col-2">
                            <img src="../images/sampleP.png" alt="Product Image 4" class="img-fluid">
                        </div>
                        <div class="col-6 d-flex align-items-center">
                            <p class="mb-0">Wordpress Theme: Tech Blog</p>
                        </div>
                        <div class="col-2 d-flex align-items-center justify-content-end">
                            <div class="cart-item-price">₱120.00</div>
                        </div>
                        <div class="col-1 d-flex align-items-center justify-content-end">
                            <button type="button" class="btn btn-sm btn-danger delete-product">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <form action="payment.html" method="get">
                        <button type="submit" class="btn btn-primary custom-btn">Checkout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Notification Modal -->
    <div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="notificationModalLabel">Notifications</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="notification-item row mb-3">
                        <div class="col-2 d-flex align-items-center">
                            <i class="fas fa-info-circle"></i>
                        </div>
                        <div class="col-8 d-flex align-items-center">
                            <p class="mb-0">Your order has been processed.</p>
                        </div>
                        <div class="col-2 d-flex align-items-center justify-content-end">
                            <span class="text-muted small">2 mins ago</span>
                        </div>
                    </div>
                    <hr>
                    <div class="notification-item row mb-3">
                        <div class="col-2 d-flex align-items-center">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="col-8 d-flex align-items-center">
                            <p class="mb-0">New ebook "Mastering Digital Art" is now available!</p>
                        </div>
                        <div class="col-2 d-flex align-items-center justify-content-end">
                            <span class="text-muted small">5 mins ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="loginEmail">Email address</label>
                            <input type="email" class="form-control" id="loginEmail" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="loginPassword">Password</label>
                            <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary custom-btn">Login</button>
                        </div>
                        <p class="mt-2 text-center">Don't have an account? <a href="#" data-toggle="modal"
                                data-target="#registerModal" style="text-decoration: none; color: #060a2c;">Register
                                here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="registerEmail">Email address</label>
                            <input type="email" class="form-control" id="registerEmail" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="registerPassword">Password</label>
                            <input type="password" class="form-control" id="registerPassword" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword"
                                placeholder="Confirm Password">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary custom-btn">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <section class="p-5 carousel-background">
        <div class="container">
            <div class="row">
                <?php
            // Include database connection
            include '../php/connect.php';

            // Check if product ID is set in the URL
            if(isset($_GET['id'])) {
                $product_id = $_GET['id'];
                $query = "SELECT * FROM products WHERE product_id = $product_id";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="col-md-12 mb-4 product-item text-center">';
                        echo '    <img src="' . $row['image'] . '" class="img-fluid" alt="' . $row['product_name'] . '">';
                        echo '</div>';
                    }
                } else {
                    // No product found
                    echo '<div class="col-md-12">';
                    echo '    <p>No product found with the provided ID.</p>';
                    echo '</div>';
                }
            } else {
                // No product ID provided
                echo '<div class="col-md-12">';
                echo '    <p>No product ID provided.</p>';
                echo '</div>';
            }
            ?>
            </div>
        </div>
    </section>





    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php
                include '../php/connect.php';

                // Fetching product details
                $product_id = $_GET['id']; // Getting the product ID from the URL
                $sql_product = "SELECT * FROM products WHERE product_id = $product_id";
                $result_product = $conn->query($sql_product);

                if ($result_product->num_rows > 0) {
                    $product = $result_product->fetch_assoc();
                    echo '<h2>' . $product['product_name'] . '</h2>';
                    echo '<p>' . $product['description'] . '</p>';

                    // Fetching comments for the specific product
                    $sql_comments = "SELECT * FROM user_comments WHERE product_id = $product_id";
                    $result_comments = $conn->query($sql_comments);

                    if ($result_comments->num_rows > 0) {
                        echo '<h4 class="mt-4 mb-3">Comments</h4>';
                        echo '<div id="comments" class="comment-section">';
                        while ($row = $result_comments->fetch_assoc()) {
                            $comment_time = date("F j, Y, g:i a", strtotime($row['created_at'])); // Format the time
                            echo '<div class="comment">';
                            echo '<div class="user-info">';
                            echo '<span class="user-name">Anonymous</span>';
                            echo '<span class="comment-time">' . $comment_time . '</span>';
                            echo '</div>';
                            echo '<p class="comment-text">' . $row['comment_text'] . '</p>';
                            echo '</div>';
                        }
                        echo '</div>';
                    } else {
                        echo "<p class='mt-4 mb-3'>No comments yet.</p>";
                    }

                    // Form to add comments
                    echo '<form id="commentForm" class="mt-4" method="post" action="../php/add_comment.php?id=' . $product_id . '">'; // Updated action URL
                    echo '<div class="form-group">';
                    echo '<label for="comment">Add Comment</label>';
                    echo '<textarea class="form-control" id="comment" name="comment" rows="3"></textarea>';
                    echo '</div>';
                    echo '<button type="submit" class="btn btn-primary custom-btn">Submit</button>';
                    echo '</form>';

                    // Closing the connection
                    $conn->close();
                } else {
                    echo "Product not found.";
                }
                ?>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <?php
            include '../php/connect.php';

            // Fetching sale details
            $sql_sale = "SELECT * FROM sales WHERE product_id = $product_id";
            $result_sale = $conn->query($sql_sale);

            if ($result_sale->num_rows > 0) {
                $sale_row = $result_sale->fetch_assoc();
                $new_price = $sale_row['total_price'];
                $old_price = $product['price'];

                echo '<h5 class="card-title">Price: <del>₱' . number_format($old_price, 2) . '</del> ₱' . number_format($new_price, 2) . '</h5>';
            } else {
                echo '<h5 class="card-title">Price: ₱' . number_format($product['price'], 2) . '</h5>';
            }
            ?>
                            <!-- Modify the button to be an anchor tag -->
                            <a href="#" class="btn btn-primary btn-block custom-btn" id="buyNowButton"
                                data-product-id="<?php echo $product['product_id']; ?>">Add to Cart</a>
                            <a href="#" class="btn btn-primary btn-block custom-btn" id="buyNowButton"
                                data-product-id="<?php echo $product['product_id']; ?>">Add to Favorites</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 style="font-weight: bolder;">About eQuinox</h5>
                    <p>eQuinox is your ultimate destination for digital products, providing a diverse selection of
                        ebooks, courses, art, and more.</p>
                    <h5 style="font-weight: bold;">We Accept</h5>
                    <div class="payment-methods">
                        <img src="../images/visa.jpg" alt="Visa" class="img-fluid me-2">
                        <img src="../images/master.jpg" alt="MasterCard" class="img-fluid me-2">
                        <img src="../images/american.jpg" alt="American Express" class="img-fluid me-2">
                        <img src="../images/globe-gcash_mastercard.png" alt="GCash" class="img-fluid me-2">
                        <!-- Add more payment method images as needed -->
                    </div>
                </div>
                <div class="col-md-4">
                    <h5 style="font-weight: bolder;">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="home.html" class="nav-link">Home</a></li>
                        <li><a href="products.php" class="nav-link">Products</a></li>
                        <li><a href="in_sales.php" class="nav-link">In Sale</a></li>
                        <li><a href="about_us.html" class="nav-link">About Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 style="font-weight: bolder;">Contact Us</h5>
                    <p>Email: support@equinox.com</p>
                    <p>Phone: +123 456 7890</p>
                    <p>Follow us on social media for updates and promotions.</p>
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="https://x.com/?lang=en&mx=2" target="_blank"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/login"
                                target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr style="background-color: #fff;">
        <div class="text-center py-2">
            &copy; 2024 eQuinox_gomo. All Rights Reserved.
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- Ensure jQuery is included -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>