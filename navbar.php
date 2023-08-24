<nav class="navbar navbar-expand-lg navbar-light navbar-light" style="background-color: white;">

    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
        <a class="navbar-brand" href="#" class="p-0px 30px">
            <img src="images/final-logo 123.png" alt="Logo" style="margin-right: 60px; height: 60px; width: 215px;">
        </a>

       
      

    </div>

    <!-- Add CSS for padding and spacing -->
    <style>
        .navbar-nav {
            white-space: nowrap; /* Prevent line breaks */
        }

        .nav-item {
            margin-right: 20px; /* Adjust as needed to control spacing */
        }

        .nav-link {
            padding: 8px 16px; /* Add padding for better appearance */
        }
    </style>


<style>
             .nav-link:hover {
    color: #61156B !important;
    text-decoration: underline !important;
}
            </style>

    <!-- Add the Navbar Toggle Button -->
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="margin-top: -70px; margin-left: 30px;">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="navbarNav" style="padding: 32px 0;">
        <ul class="navbar-nav ml-auto navbar-items" style="font-size: 16px ;letter-spacing:2px">
        <li class="nav-item">
    <a class="nav-link text-center <?php echo ($page == 'index') ? '' : 'active'; ?>" href="index.php" style="color:black">HOME</a>
</li>
            <li class="nav-item">
                <a class="nav-link text-center <?php echo ($page == 'about') ? 'active' : ''; ?>" href="about.php"  style="color:black">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-center <?php echo ($page == 'services') ? 'active' : ''; ?>" href="services.php"  style="color:black">SERVICES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-center <?php echo ($page == 'contact') ? 'active' : ''; ?>" href="contact.php"  style="color:black">CONTACT US</a>
            </li>

           
            <li class="nav-item">
                <a class="nav-link text-center <?php echo ($page == 'numbers') ? 'active' : ''; ?>" href="numbers.php"  style="color:black">NUMBERS</a>
            </li>
        </ul>
    </div>
</nav>
