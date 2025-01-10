<?php
include 'includes/header.php';
include 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        $feedback = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        Message sent successfully!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
    } else {
        $feedback = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        Error: " . $stmt->error . "
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
    }
    $stmt->close();
}
?>

<section class="container  py-5 ">
    <h2 class="text-center">Contact Me</h2>
    <hr>
    <?php if (isset($feedback)) echo $feedback; ?>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <img src="assets/images/profile1.jpg " width="400" height="363" class="card-img-top  rounded-circle" alt="Blog Management System">
                <div class="card-body">
                    <h4>Name :-</h4>
                    <p>Durga Bahadur Shrestha</p>
                    <h4>Email Id :-</h4>
                    <p>dbshrestha2051@gmail.com</p>
                    <h4>Address :-</h4>
                    <p>Deurali-8 Bhojpur, Nepal</p>
                    <h4>Mobile Number :-</h4>
                    <p>+9779843341155, +9779809121458</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <img src="assets/images/contact-ai.jpg" width="550" height="363" class="card-img-top" alt="Blog Management System">
                <div class="card-body">
                    <form method="POST">
                        <div class="mb-3 mt-1">
                            <label for="name" class="form-label"> <i class="fa fa-user"></i>  User Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Full Name " required>
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label"><i class="fa fa-envelope"></i>  Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email Here" required>
                        </div>
                        <div class="mb-2">
                            <label for="message" class="form-label"> <i class="fa fa-message"></i>  Message</label>
                            <textarea class="form-control text-desable" id="message" name="message" rows="2" placeholder="Write Your Query Here" required></textarea>
                        </div>
                        <div class="text-center gar-3">
                            <button type="submit" class="btn btn-primary text-center ">Connect Me  <i class="fa fa-paper-plane "></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 text-center mb-0 mt-1">
        <a href="assets/cv/mycv.pdf" target="_blank"><button type="button" class="btn btn-success">Download CV</button></a>
    </div>
    <!-- social media links -->
    <div class="d-flex justify-content-center gap-4 mt-3  ">
            <a href="https://www.facebook.com/shrestha.durgabhawanii" class="text-primary fs-4" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.linkedin.com/in/durgashrestha" class="text-black fs-4" target="_blank">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="https://twitter.com/yourprofile" class="text-primary fs-4" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/shrestha.durgabhawanii" class="text-success fs-4" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://github.com/durgabdrshrestha" class="text-black fs-4" target="_blank">
                <i class="fab fa-github"></i>
            </a>
            <a href="https://www.youtube.com/@Delta__Vlogs" class="text-danger fs-4" target="_blank">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
</section>

<?php include 'includes/footer.php'; ?>
