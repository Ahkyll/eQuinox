<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eQuinox - On Sales</title>
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
                        <li class="nav-item"><a class="nav-link large-font main" href="on_sales.php">On Sale</a></li>
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

    <!--Slideshow-->
    <section class="carousel-background">
        <div id="slideshow" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../images/3.png" class="d-block w-100" alt="First Slide">
                </div>
                <div class="carousel-item">
                    <img src="../images/1.png" class="d-block w-100" alt="Second Slide">
                </div>
                <div class="carousel-item">
                    <img src="../images/2.png" class="d-block w-100" alt="Third Slide">
                </div>
            </div>
        </div>
    </section>

    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <form class="form-inline justify-content-center">
                        <!-- Search Input -->
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-primary custom-btn" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <!-- End Search Input -->

                        <!-- Category Dropdown -->
                        <div class="input-group mt-3 mt-md-0">
                            <select class="custom-select">
                                <option selected>Select Category</option>
                                <option value="1">Ebooks and Guides</option>
                                <option value="2">Online Courses</option>
                                <option value="3">Digital Art and Design Assets</option>
                                <option value="4">Photography and Stock Images</option>
                                <option value="5">Music and Audio Files</option>
                                <option value="6">Templates and Themes</option>
                                <option value="7">Printables and Worksheets</option>
                                <option value="8">Membership or Subscription Service</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <!-- End Category Dropdown -->

                        <!-- Price Range Filter -->
                        <div class="input-group mt-3 mt-md-0">
                            <button class="btn btn-primary custom-btn" type="button" data-toggle="modal"
                                data-target="#priceRangeModal">
                                Price Range
                            </button>
                        </div>
                        <!-- End Price Range Filter -->
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Price Range Modal -->
    <div class="modal fade" id="priceRangeModal" tabindex="-1" role="dialog" aria-labelledby="priceRangeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="priceRangeModalLabel">Price Range Filter (in pesos)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="minPrice">Minimum Price:</label>
                        <input type="number" class="form-control" id="minPrice" placeholder="Enter minimum price">
                    </div>
                    <div class="form-group">
                        <label for="maxPrice">Maximum Price:</label>
                        <input type="number" class="form-control" id="maxPrice" placeholder="Enter maximum price">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary custom-btn">Apply Filters</button>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5 custom-bg2">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="head2">Products</h2>
            </div>
        </div>
        <div class="row">
            <?php
            // Include database connection
            include '../php/connect.php';

            // Fetch products that are on sale
            $query = "SELECT * FROM sales";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $product_id = $row['product_id'];
                    $sale_date = $row['sale_date'];
                    $total_price = $row['total_price'];

                    // Fetch product details based on product_id
                    $product_query = "SELECT * FROM products WHERE product_id = $product_id";
                    $product_result = $conn->query($product_query);

                    if ($product_result->num_rows > 0) {
                        $product_row = $product_result->fetch_assoc();

                        $old_price = $product_row['price'];
                        $new_price = $total_price;

                        echo '<div class="col-md-3 mb-4 product-item" data-category="' . $product_row['category_id'] . '" data-price="' . $total_price . '">';
                        echo '  <div class="product-item">';
                        echo '    <img src="' . $product_row['image'] . '" alt="' . $product_row['product_name'] . '" style="max-width: 100%; height: auto;">';
                        echo '    <h3><a href="product_onSales.php?id=' . $product_id . '">' . $product_row['product_name'] . '</a></h3>';
                        echo '    <p>₱<del>' . number_format($old_price, 2) . '</del> ₱' . number_format($new_price, 2) . '</p>';
                        echo '  </div>';
                        echo '</div>';
                    } else {
                        echo '<div class="col">Product details not found.</div>';
                    }
                }
            } else {
                echo '<div class="col">No products found.</div>';
            }
            ?>
        </div>
    </div>
</section>



    <!-- Pagination Navigation -->
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
    <!-- Pagination Navigation End -->


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
                        <li><a href="in_sales.php" class="nav-link">On Sale</a></li>
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
            &copy; 2024 eQuinox_ahkyll. All Rights Reserved.
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>

</html>