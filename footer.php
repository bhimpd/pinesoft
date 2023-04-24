<!-- main footer    -->
<div class="pg-footer">


    <footer class="footer">
        <svg class="footer-wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 100" preserveAspectRatio="none">
            <path class="footer-wave-path" d="M851.8,100c125,0,288.3-45,348.2-64V0H0v44c3.7-1,7.3-1.9,11-2.9C80.7,22,151.7,10.8,223.5,6.3C276.7,2.9,330,4,383,9.8 c52.2,5.7,103.3,16.2,153.4,32.8C623.9,71.3,726.8,100,851.8,100z"></path>
        </svg>
        <div class="footer-content">
            <div class="footer-content-column">
                <div class="footer-logo">
                    <a class="footer-logo-link" href="#" style="text-decoration: none;">
                        <span class="hidden-link-text">LOGO</span>
                        <h1 style="color:white;"><img src="img/saitlogo.jpg"style="height:50px; width:50px" alt=""></h1>
                    </a>
                </div>
                <div class="footer-menu">
                    <h2 class="footer-menu-name"> Get Started</h2>
                    <ul id="menu-get-started" class="footer-menu-list">
                        <li class="menu-item menu-item-type-post_type menu-item-object-product">
                            <a href="#">Start</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-product">
                            <a href="#">Documentation</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-product">
                            <a href="#">Installation</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-content-column">
                <div class="footer-menu">
                    <h2 class="footer-menu-name"> Company</h2>
                    <ul id="menu-company" class="footer-menu-list">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="#">Contact</a>
                        </li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category">
                            <a href="#">News</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="#">Careers</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-menu">
                    <h2 class="footer-menu-name"> Legal</h2>
                    <ul id="menu-legal" class="footer-menu-list">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-170434">
                            <a href="#">Privacy Notice</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-content-column">
                <div class="footer-menu">
                    <h2 class="footer-menu-name"> Quick Links</h2>
                    <ul id="menu-quick-links" class="footer-menu-list">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom">
                            <a target="_blank" rel="noopener noreferrer" href="#">Support Center</a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom">
                            <a target="_blank" rel="noopener noreferrer" href="#">Service Status</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="#">Security</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="#">Blog</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type_archive menu-item-object-customer">
                            <a href="#">Customers</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="#">Reviews</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-content-column">
                <div class="footer-call-to-action">
                    <h2 class="footer-call-to-action-title"> Let's Chat</h2>
                    <p class="footer-call-to-action-description"> Have a support question?</p>
                    <a class="footer-call-to-action-button button" href="#" target="_self"> Get in Touch </a>
                </div>
                <div class="footer-call-to-action">
                    <h2 class="footer-call-to-action-title"> You Call Us</h2>
                    <p class="footer-call-to-action-link-wrapper"> <a class="footer-call-to-action-link" href="tel:0124-64XXXX" target="_self"> +977 1234567890 </a></p>
                </div>
            </div>

        </div>
         <!-- social media icons sticky -->
         <div id="fixed-social">
            <div>
                <a href="#" class="fixed-facebook" target="_blank"><i class="fab fa-facebook"></i> </a>
            </div>
            <div>
                <a href="#" class="fixed-twitter" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
            <div>
                <a href="#" class="fixed-gplus" target="_blank"><i class="fab fa-google"></i> </a>
            </div>
            <div>
                <a href="#" class="fixed-linkedin" target="_blank"><i class="fab fa-linkedin"></i></a>
            </div>
            <div>
                <a href="#" class="fixed-instagrem" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>

        </div>
        <!-- social media icons sticky ends  -->
       <hr>

        <div class="footer-copyright">
            <div class="footer-copyright-wrapper">
                <p class="footer-copyright-text">
                    <a class="footer-copyright-link" href="#" target="_self"> ©2023. | Designed By: V!m V@!. | All rights reserved. </a>
                </p>
            </div>
        </div>
       
    </footer>

</div>
<!-- ending main footer    -->



<!-- back to top button -->
<button type="button" class="btn btn-secondary btn-floating btn-lg" id="btn-back-to-top">
    <i class="fas fa-arrow-up"></i>
</button>

<!-- ends back to top button -->


<!-- back to top js -->
<script>
    //Get the button
    let mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<!-- back to top ends here -->