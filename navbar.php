<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Navigation Menu with Toggle</title>
<style>

  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
 
  #navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color:whitesmoke;
    padding: 10px 20px;
    color: white;
  }
  nav {
    height: 110px;
    /* position: fixed; */
    top: 0;
    left: 0;
    right: 0;
    background-color:black;
    transition: 1s;
  }

  nav.scrollNav {
    height: 60px;
   font-size:10px;

  }
  
  img {
    height: auto;
    max-width: 100%;
  }

  .content {
    text-align: center;
  }

  .nav-content {
    padding: 0 40px;
    
  }



  

  .menu {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
    font-family:Montserrat ;
  }

  .menu-item {
    margin-right: 20px;
  }

  .menu-item:last-child {
    margin-right: 0;
  }

  .menu-link {
    text-decoration: none;
    color: gray;
  }

  /* Toggle Button Styles */
  .toggle-btn {
    display: none;
    background: none;
    border: none;
    font-size: 50px;
    color: gray;
    cursor: pointer;
  }

  /* Media Queries for Tablet and Mobile */
  @media (max-width: 767px) {
    #navbarimg {
        /* margin-left: 10px;  */
        margin-right: 25px;  /* Reset right margin for phone view */
    }
}



  @media (max-width: 1180px) {
  #navbarimg{
    margin-left:25px;
  }
    .menu {
      display: none;
      margin-top:50px;
    }

    .toggle-btn {
      display: block;
      font-size: 40px; 
     margin-right:20px;
     cursor: pointer;
    }

    .menu.active {
      display: flex;
      flex-direction: column;
      position: absolute;
      top: 50px;
      left: 0;
      background-color: white;
      width: 100%;
      z-index: 1;
    }

    .menu-item {
      margin: 0;
      padding: 20px 30px;
      border-bottom: 1px solid black;

    }

    .menu-item:last-child {
      border-bottom: none;
    }
  }


</style>
<style>
        .menu {
            white-space: nowrap; /* Prevent line breaks */
        }

        .menu-item {
            margin-right: 20px; /* Adjust as needed to control spacing */
        }

        .menu-link {
            padding: 8px 16px; /* Add padding for better appearance */
        }
    </style>


<style>

 .menu-link:hover {
    color: #61156B !important;
    text-decoration: underline !important;
    text-underline-offset: 5px;
   
}
.menu-link.active {
    text-decoration: underline !important;
    color: #61156B !important;
    text-underline-offset: 5px;

}



  </style>
</head>
<body>

<nav id="navbar" class="navbar-expand-lg navbar-light navbar-light fixed-top" style="background-color: white;padding: 20px 0;">
<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between nav-content">
        <a class="navbar-brand p-0px 30px" href="#">
            <img src="images/final-logo 123.png" alt="Logo" style="height:50px; width: 215px ;"id="navbarimg">  
        </a>

       
      

    </div>
    <button class="toggle-btn" id="toggleBtn">
        &#9776;
    </button>
    <ul class="menu" id="menu" style="letter-spacing:2px;">
        <li style="padding-right:20px;"  class="menu-item "> <a class="menu-link text-center <?php echo ($page == 'index') ?  'active' : ''; ?>" href="index.php" style="color:black;">HOME</a></li>
        <li style="padding-right:20px;"  class="menu-item"> <a class="menu-link text-center <?php echo ($page == 'about') ? 'active' : ''; ?>" href="about.php"  style="color:black">ABOUT US</a></li>
        <li style="padding-right:20px;" class="menu-item"> <a class="menu-link text-center <?php echo ($page == 'services') ? 'active' : ''; ?>" href="services.php"  style="color:black">SERVICES</a></li>
        <li style="padding-right:20px;"  class="menu-item"> <a class="menu-link text-center <?php echo ($page == 'contact') ? 'active' : ''; ?>" href="contact.php"  style="color:black">CONTACT US</a></li>
        <li style="padding-right:20px;"  class="menu-item"> <a class="menu-link text-center <?php echo ($page == 'numbers') ? 'active' : ''; ?>" href="numbers.php"  style="color:black">NUMBERS</a></li>
    </ul>
</nav>




<script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
      integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
      crossorigin="anonymous"
    ></script>
    <script >
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $("#navbar").addClass("scrollNav");
                
            } else {
                $("#navbar").removeClass("scrollNav");
              
            }
        });

     
    </script>
    <script>
  const toggleBtn = document.getElementById('toggleBtn');
  const menu = document.getElementById('menu');

  toggleBtn.addEventListener('click', () => {
    menu.classList.toggle('active');
    menu.classList.toggle('show-menu'); // Add or remove 'show-menu' class to toggle menu visibility
    toggleBtn.classList.toggle('active'); // Change button icon by toggling 'active' class
    if (menu.classList.contains('show-menu')) {
        toggleBtn.innerHTML = '&#10005;'; // Unicode character for cross (close) symbol
    } else {
        toggleBtn.innerHTML = '&#9776;'; // Unicode character for menu symbol
    }
  
  });
</script>





</body>
</html>
