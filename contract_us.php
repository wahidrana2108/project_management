<!-- navbar starting -->
<?php
    include("includes/header.php")
?>
<!-- navbar end -->

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Contact Us</h1>
            <p class="lead">We're here to help! Get in touch with us for any questions or inquiries.</p>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h2>Contact Information</h2>
                <p>
                    <i class="fas fa-map-marker-alt"></i> 123 Main Street, Anytown, CA 12345<br>
                    <i class="fas fa-phone"></i> (555) 555-5555<br>
                    <i class="fas fa-envelope"></i> info@example.com
                </p>

                <h2>Social Media</h2>
                <p>
                    <a href="#" class="btn btn-outline-primary"><i class="fab fa-facebook-f"></i> Facebook</a>
                    <a href="#" class="btn btn-outline-info"><i class="fab fa-twitter"></i> Twitter</a>
                    <a href="#" class="btn btn-outline-linkedin"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
                </p>
            </div>
            <div class="col-md-6">
                <h2>Contact Form</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

<!-- footer starting -->
<?php
    include("includes/footer.php")
?>
<!-- footer end -->