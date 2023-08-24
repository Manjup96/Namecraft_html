<style>
  
  /*--------------------------------------------------------------
# Scroll to top button
--------------------------------------------------------------*/
.scroll-to-top {
    position: fixed;
    bottom: 50px;
    right: 20px;
    background-color: gray;
    color: white;
    border: none;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    padding: 0;
    
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    cursor: pointer;
    transform: scale(0); /* Set initial scale to 0 */
    animation-name: zoom-in;
    animation-duration: 0.5s;
    animation-timing-function: ease-in-out;
    animation-fill-mode: forwards; /* Maintain scale after animation */
}

@keyframes zoom-in {
    0% {
        transform: scale(0);
    }
    100% {
        transform: scale(1);
    }
}

.scroll-to-top:hover {
    background-color: black;
}

.scroll-to-top i {
    font-size: 20px; /* Adjust icon size as needed */
}


</style>
<button onclick="scrollToTop()" class="scroll-to-top" id="scrolltotop">
    <i class="fas fa-angle-up" ></i>
  </button>


  <script>
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
}


</script>
 <!-- scrollToTop end -->


 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
   document.getElementById('scrolltotop').style.display="none";
  $(window).scroll(function() {
		// code for scroll up icon 
    
    if ($(this).scrollTop() >= 500) {
       
       document.getElementById('scrolltotop').style.display="block";
   } else {
   
     document.getElementById('scrolltotop').style.display="none";
   }
	});

</script>

<!-- code for card animation -->
<script>
  $(document).ready(function() {
    var lastScrollTop = 0;
    $(window).scroll(function() {
      var windowBottom = $(this).scrollTop() + $(this).innerHeight();
      var elementTop = $('#myDiv').offset().top;
      var elementHeight = $('#myDiv').outerHeight();
      
      if (elementTop + elementHeight >= $(this).scrollTop() && elementTop <= windowBottom) {
        var st = $(this).scrollTop();
        if (st > lastScrollTop){
          // Scrolling down
          $('#myDiv').stop().animate({opacity: 1}, 500);
        } else {
          // Scrolling up
          $('#myDiv').stop().animate({opacity: 0}, 500);
        }
        lastScrollTop = st;
      }
    });
  });
</script>