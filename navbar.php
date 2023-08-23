
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-light">

    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
        <a class="navbar-brand" href="#" class="p-0px 30px">
            <img src="images/final-logo.png" alt="Logo" style="margin-right:60px;height:60px;width:215px;">
            <!-- <img src="images/jungle-lodges.jpg" style="height: 80px;width:80px;margin-right:10px;"> -->

            
        </a>


  
    <!-- <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" >-->
    <!--  <span class="navbar-toggler-icon"></span>-->
    <!--</button>-->
    
      <style>
       /* Styles for mobile view */
    @media (max-width: 767px) {
        .navbar-toggler {
            margin-left: 50px;
            margin-bottom: -30px;
        }
    }
    

      @media (min-width: 768px) {
        .navbar-toggler {
          position: relative;
          margin: 0;
        }
      }

      /* Styles for iPad View */
@media (max-width: 1024px) {
  #padding{
      padding-top:100px;
  }
}
       
    </style>
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
   
  </div>
  <button class="navbar-toggler ms-auto " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="margin-top:-110px;margin-left:30px;">
      <span class="navbar-toggler-icon"></span>
    </button>

   

   
<div class="collapse navbar-collapse" id="navbarNav" style="padding: 32px 0;">
  <ul class="navbar-nav ml-auto" style="font-size: 16px;">
    <li class="nav-item">
      <a class="nav-link text-center <?php echo ($page == 'index') ? 'active' : ''; ?>" style="<?php echo ($page == 'index') ? 'background-color:#600060;color:white' : ''; ?>" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-center <?php echo ($page == 'about') ? 'active' : ''; ?>" style="<?php echo ($page == 'about') ? 'background-color:#600060;color:white' : ''; ?>" href="about.php">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-center <?php echo ($page == 'services') ? 'active' : ''; ?>" style="<?php echo ($page == 'services') ? 'background-color:#600060;color:white' : ''; ?>" href="services.php">Services</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-center <?php echo ($page == 'contact') ? 'active' : ''; ?>" style="<?php echo ($page == 'contact') ? 'background-color:#600060;color:white' : ''; ?>" href="contact.php">Contact us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-center <?php echo ($page == 'numbers') ? 'active' : ''; ?>" style="<?php echo ($page == 'numbers') ? 'background-color:#600060;color:white' : ''; ?>" href="numbers.php">Numbers</a>
    </li>
   
  </ul>
</div>


  </div>
</nav>



