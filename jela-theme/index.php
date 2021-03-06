<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jala Design</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dist/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"
    integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- PHP Code -->
<?php $header = get_field('header');?>
<?php $mid_content = get_field('mid_content');?>

  </head>

<body>
  <!-- NAV -->
  <div class="header-container">
    <nav class="nav-fixed">
      <div class="logo">
        <p><span> Jala </span>Design. </p>
      </div>
      <div class="openMenu"><i class="fa fa-bars"></i></div>
      <ul class="mainMenu">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact</a></li>

        <div class="closeMenu"><i class="fa fa-times"></i></div>

      </ul>
    </nav>
    <div class="homepage-content">
      <div class="inner-content">
        <h1><?php echo $header['welcome_text'];?></h1>
        <p><?php echo $header['welcome_detail'];?></p>
        <button>GET STARTED</button>
      </div>
    </div>
  </div>
  <!-- END NAV -->
  <!-- Content -->
  <div class="mid-content">
    <div class="mid-content-upper">
      <h1 class="text-1">Lorem Ipsum <span>dolor sit amet.</span> </h1>
      <p><?php echo $mid_content['mid_content_main_text'];?></p>
    </div>
    <div class="mid-content-lower">
      <div>
        <p class="mid-lower-h">Lorem Ipsum dolor</p>
        <p class="mid-lower-p"><?php echo $mid_content['mid_content_text_1'];?></p>
      </div>
      <div>
        <p class="mid-lower-h">Lorem Ipsum dolor</p>
        <p class="mid-lower-p"><?php echo $mid_content['mid_content_text_2'];?></p>
      </div>
      <div>
        <p class="mid-lower-h">Lorem Ipsum dolor</p>
        <p class="mid-lower-p"><?php echo $mid_content['mid_content_text_3'];?></p>
      </div>
    </div>
  </div>
  <!-- LOWER-CONTENT -->
  <div class="lower-content">
    <div id="lower-left"><img src="<?php echo get_template_directory_uri(); ?> /Assets/pexels-artem-podrez-5716053.jpg" alt=""></div>
    <div id="lower-right">
      <h2>Lorem Ipsum <span> dolor sit amet.</span></h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
        do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Iaculis eu non diam phasellus. Eu turpis egestas pretium aenean
        pharetra.</p>
      <button>GET STARTED</button>
    </div>
  </div>
  <!--END LOWER-CONTENT -->
 <!-- START FOOTER -->
 <footer>
    <p id="footer-logo"><span>Jala</span> Design.</p>
    <p>&#169;2021 Jala Design. All right reserved.</p>
    <div class="footer-icon">
      <svg width="30" height="30" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f"
        class="svg-inline--fa fa-facebook-f fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 320 512">
        <path fill="currentColor"
          d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
        </path>
      </svg>
      <svg width="30" height="30" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter"
        class="svg-inline--fa fa-twitter fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="currentColor"
          d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
        </path>
      </svg>
      <svg width="30" height="30" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in"
        class="svg-inline--fa fa-linkedin-in fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 448 512">
        <path fill="currentColor"
          d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
        </path>
      </svg>
    </div>
  </footer>
  <!-- END FOOTER -->
  <!-- End Content -->
  <style>
.header-container {
background-image: url(<?php bloginfo('template_url'); ?>/Assets/pexels-artem-podrez-5716053.jpg);
}
</style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
  </script>
 <script src="<?php echo get_template_directory_uri(); ?> /script.js"></script>
</body>

</html>