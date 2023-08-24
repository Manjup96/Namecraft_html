<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scroll to Top Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .scroll-to-top {
            display: none;
            /* Initially hide the button */
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 15%;
            padding: 10px 15px;
            cursor: pointer;
            opacity: 0.7;
            transition: opacity 0.3s ease;
        }

        .scroll-to-top:hover {
            opacity: 1;
        }
    </style>
</head>

<body>
    

    <button onclick="scrollToTop()" class="scroll-to-top" id="scrolltotop">
        <i class="fas fa-angle-up"></i>
    </button>

    <!-- JavaScript to handle scrolling -->
    <script>
        // Get the button element
        const scrollToTopButton = document.getElementById('scrolltotop');

        // Function to scroll smoothly to the top of the page
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // Attach the scrollToTop function to the button's click event
        scrollToTopButton.addEventListener('click', scrollToTop);

        // Show/hide the button based on scroll position
        window.addEventListener('scroll', function() {
            if (window.scrollY >= 500) {
                scrollToTopButton.style.display = 'block';
            } else {
                scrollToTopButton.style.display = 'none';
            }
        });
    </script>
</body>

</html>