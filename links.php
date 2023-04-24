<!-- bootstrap cdn link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



<!-- bootstrap icons cdn link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

<!--starting js for dropdown and popovers and tooltips -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<!--ending  js for dropdown and popovers and tooltips -->

<!-- starting fontawesome link -->
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<!-- ending fontawesome link -->

<!-- fontawesome links for fa icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!-- starting google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<!-- ending google font -->


<!-- typing effect to the text -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="typed.js"></script>

<!-- ending typing effect js -->



<!-- starting js for active class color to be red -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('.navbar-nav .nav-link').click(function() {
      $('.navbar-nav .nav-link').removeClass('active');
      $(this).addClass('active');
      $('this').css('border-bottom', '2px solid black');
    });
  });
</script>
<!-- ending js for active class to be red  -->





<!--  starting aos effect -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


<!-- ending aos effect -->


<!-- starting js code for the navbar to be collapse when clicked outside -->
<script>
  document.addEventListener('click', function(event) {
    var target = event.target;
    if (!target.closest('.navbar') && document.querySelector('.navbar-collapse.show')) {
      document.querySelector('.navbar-toggler').click();
    }
  });
</script>
<!-- ending  code for the navbar to be collapse when clicked outside -->

