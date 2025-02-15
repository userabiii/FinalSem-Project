<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5 ">
                <button class="navbar-toggler btn btn-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <a class="navbar-brand" href="./">
                <img src="<?php echo validate_image($_settings->info('logo')) ?>" width="150" height="auto" class="d-inline-block align-top" alt="" loading="lazy">
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="../derm/home.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="../derm/about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="../derm/contact.html">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="../scheduler/">Appointment</a></li>
                    </ul>
                    <div class="d-flex align-items-center">
                      
                    </div>
                </div>
            </div>
        </nav>

<!-- <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Dr.Sachith's Skin Clinic</title>
</head>
<input type="checkbox" id="menu">
    <nav class="navbar">
        <div class="logo">
            <a style="text-decoration: none;" href="home.html"><p><img src="../derm/Logo.png"></a>
        </div>

        <label for="menu">
            <div></div>
            <div></div>
            <div></div>
        </label>

        <nav>
          <ul>
              <li><a href="home.html">Home</a></li>
              <li><a href="about.html">About Us</a></li>
              <li class="dropdown">
                  <a href="#">Procedures</a>
                  <div class="dropdown-content">
                    <a href="Procedures/laser.html">Laser</a>
                    <a href="Procedures/microdermabrasion.html">Microdermabrasion</a>
                    <a href="Procedures/chem peel.html">Chemical Peel</a>
                    <a href="Procedures/hydrafacial.html">Hydrafacial</a>
                    <a href="Procedures/skinrejuv.html">Skin Rejuvenation</a>
                    <a href="Procedures/dermaroller.html">Dermaroller</a>
                  </div>
              </li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="../scheduler/"><div class="page">Appointment</div></a></li>
          </ul>
      </nav>
  </nav> -->
<script>
  $(function(){
    $('#login-btn').click(function(){
      uni_modal("","login.php")
    })
    $('#navbarResponsive').on('show.bs.collapse', function () {
        $('#mainNav').addClass('navbar-shrink')
    })
    $('#navbarResponsive').on('hidden.bs.collapse', function () {
        if($('body').offset.top == 0)
          $('#mainNav').removeClass('navbar-shrink')
    })
  })

  $('#search-form').submit(function(e){
    e.preventDefault()
     var sTxt = $('[name="search"]').val()
     if(sTxt != '')
      location.href = './?p=products&search='+sTxt;
  })
</script>