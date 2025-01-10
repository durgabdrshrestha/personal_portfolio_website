<?php include 'includes/header.php'; ?>

<section class="container py-5">
    <h2 class="text-center mb-4">About Me</h2><hr>
    <div class="row align-items-center mb-4">
        <div class="col-md-12">
            <p>
                Hello! I’m <strong>Durga Bahadur Shrestha</strong>, a dedicated and experienced Full Stack Developer with a
                strong passion for creating robust, dynamic, and visually appealing websites. Over the years, I’ve honed my skills
                in <strong>frontend technologies</strong> like HTML, CSS, and JavaScript, and <strong>backend development</strong> using PHP and MySQL.
            </p>
            <p>
                My expertise includes designing scalable architectures, optimizing website performance, and ensuring seamless
                user experiences. I thrive in challenging environments and enjoy solving complex problems with innovative solutions.
            </p>
            <p>
                Beyond coding, I value collaboration, continuous learning, and staying updated with the latest web development trends.
                My ultimate goal is to build solutions that not only meet but exceed client expectations.
            </p>
        </div>
    </div>

    <!-- Counters Section -->
    <h3 class="text-center mt-5 mb-4">My Achievements</h3><hr>
    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="text-primary mt-2"><span id="projectsCompleted" data-target="5">0</span>+</h2>
                    <p class="text-center">Projects Completed</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="text-primary mt-2"><span id="yearsExperience" data-target="2">0</span>+</h2>
                    <p class="text-center">Years of Experience</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="text-primary mt-2"><span id="happyClients" data-target="50">0</span>+</h2>
                    <p class="text-center">Happy Clients</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Skills Progress Bar -->
    <h3 class="text-center mt-5 mb-4">My Technical Skills</h3><hr>
    <div class="progress-bar-container">
        <p><i class="fa-brands fa-php"></i> PHP</p>
        <div class="progress mb-3">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" aria-label="PHP skill level 90%">90%</div>
        </div>
        <p><i class="fa-solid fa-database"></i> MySQL</p>
        <div class="progress mb-3">
            <div class="progress-bar bg-success" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" aria-label="MySQL skill level 85%">85%</div>
        </div>
        <p><i class="fa-brands fa-js"></i> JavaScript</p>
        <div class="progress mb-3">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" aria-label="JavaScript skill level 80%">80%</div>
        </div>
        <p><i class="fa-brands fa-bootstrap"></i> Bootstrap</p>
        <div class="progress mb-3">
            <div class="progress-bar bg-info" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" aria-label="Bootstrap skill level 95%">95%</div>
        </div>
        <p><i class="fab fa-laravel"></i> Laravel</p>
        <div class="progress mb-3">
            <div class="progress-bar bg-secondary" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="Laravel skill level 75%">75%</div>
        </div>
    </div>

    <!-- CV Download -->
    <div class="text-center mt-5">
        <a href="assets/cv/mycv.pdf" target="_blank">
            <button class="btn btn-success">Download CV</button>
        </a>
    </div>
    <!-- social media links -->
    <div class="d-flex justify-content-center gap-4 mt-3  ">
            <a href="https://www.facebook.com/shrestha.durgabhawanii" class="text-primary fs-4" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.linkedin.com/in/yourprofile" class="text-black fs-4" target="_blank">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="https://twitter.com/yourprofile" class="text-primary fs-4" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/shrestha.durgabhawanii" class="text-success fs-4" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://github.com/durgastha" class="text-black fs-4" target="_blank">
                <i class="fab fa-github"></i>
            </a>
            <a href="https://www.youtube.com/@Delta__Vlogs" class="text-danger fs-4" target="_blank">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
</section>
<?php include 'includes/footer.php'; ?>
