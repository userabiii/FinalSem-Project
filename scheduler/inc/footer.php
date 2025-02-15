<script>
  $(document).ready(function(){
    $('#p_use').click(function(){
      uni_modal("Privacy Policy","policy.php","mid-large")
    })
     window.viewer_modal = function($src = ''){
      start_loader()
      var t = $src.split('.')
      t = t[1]
      if(t =='mp4'){
        var view = $("<video src='"+$src+"' controls autoplay></video>")
      }else{
        var view = $("<img src='"+$src+"' />")
      }
      $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
      $('#viewer_modal .modal-content').append(view)
      $('#viewer_modal').modal({
              show:true,
              backdrop:'static',
              keyboard:false,
              focus:true
            })
            end_loader()  

  }
    window.uni_modal = function($title = '' , $url='',$size=""){
        start_loader()
        $.ajax({
            url:$url,
            error:err=>{
                console.log()
                alert("An error occured")
            },
            success:function(resp){
                if(resp){
                    $('#uni_modal .modal-title').html($title)
                    $('#uni_modal .modal-body').html(resp)
                    if($size != ''){
                        $('#uni_modal .modal-dialog').addClass($size+'  modal-dialog-centered')
                    }else{
                        $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md modal-dialog-centered")
                    }
                    $('#uni_modal').modal({
                      show:true,
                      backdrop:'static',
                      keyboard:false,
                      focus:true
                    })
                    end_loader()
                }
            }
        })
    }
    window._conf = function($msg='',$func='',$params = []){
       $('#confirm_modal #confirm').attr('onclick',$func+"("+$params.join(',')+")")
       $('#confirm_modal .modal-body').html($msg)
       $('#confirm_modal').modal('show')
    }
  })
</script>
<!-- Footer-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<footer style="background: #f2f2f2;
    width: 100%;
    position: relative;
    right: 0;
    left: 0;
    bottom: 0;
    color: #613b1d;
    padding: 30px 0 30px;
    font-size: 12px;
    line-height: 20px;">
        <div class="row" style="width: 85%;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: space-between;">
            <div class="col" style="flex-basis: 25%; padding: 10px;">
                <img src="../derm/Logo.png" class="footerlogo">
                <p>
                    <br/>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d304.1110955566738!2d77.61924677321315!3d12.934012425957118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae145ec0000001%3A0x729e898aac114f86!2sDr.%20Sachith%20Abraham%2C%20MD%20(Dermatology)%20at%20The%20Medical%20Skin%20Clinic!5e0!3m2!1sen!2sin!4v1712233797063!5m2!1sen!2sin" width="350" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </p>
            </div>
            <div class="col" style="flex-basis: 25%; padding: 10px;">
                <h3 style="text-align: left;">Location<div class="underline"></div></h3>
                <br/><p>474, 1st Floor,</p>
                <p>1st Cross Road, KHB Colony,</p>
                <p>5th Block, Koramangala,</p>
                <p>Bengaluru, Karnataka-560095</p>
                <p class="email-id" style=" width:fit-content; margin: 10px 0;"><a style="color: #613b1d;" href="mailto:sachith_abraham@yahoo.com">sachith_abraham@yahoo.com</a></p>
                <h4 style="text-align: left;"><p class="phn" style="text-align: left;">
                <a style="font-size: 12px; text-decoration: none; color: #613b1d;" href="tel:9845716926">+91 9845716926</a><br/>
                <a style="font-size: 12px; text-decoration: none; color: #613b1d;" href="tel:9148970822">+91 9148970822</a></p></h4>
            </div>
            <div class="col" style="flex-basis: 25%; padding: 10px;">
                <h3 style="text-align: left;">Navigate<div class="underline"></div></h3>
                <br/><ul>
                    <li style="list-style: none; margin-bottom: 5px;"><a style="text-decoration: none; color: #613b1d;" href="home.html">Home</a></li>
                    <li style="list-style: none; margin-bottom: 5px;"><a style="text-decoration: none; color: #613b1d;" href="about.html">About us</a></li>
                    <li style="list-style: none; margin-bottom: 5px;"><a style="text-decoration: none; color: #613b1d;" href="Procedures/laser.html">Services</a></li>
                    <li style="list-style: none; margin-bottom: 5px;"><a style="text-decoration: none; color: #613b1d;" href="contact.html">Contact us</a></li>
                </ul>
            </div>
        </div>
        <hr>
    <p class="copyright" style="text-align: center; font-size:20px;"><b>SOCIALS</b></p><br/>
    <div class="social-links" style="text-align: center;">
        <a style="display: inline-block; height: 40px; width: 40px; color: #613b1d;
        margin: 0 10px 10px 0; text-align: center; line-height: 40px; border: 1px solid #613b1d; border-radius: 50%; transition: all 0.3s ease;"
        href="https://www.facebook.com/drsachithabraham/"><i class="fab fa-facebook-f"></i></a>
        <a style="display: inline-block; height: 40px; width: 40px; color: #613b1d;
        margin: 0 10px 10px 0; text-align: center; line-height: 40px; border: 1px solid #613b1d; border-radius: 50%; transition: all 0.3s ease;"
        href="https://www.instagram.com/the_medical_skin_clinic/"><i class="fab fa-instagram"></i></a>
        <a style="display: inline-block; height: 40px; width: 40px; color: #613b1d;
        margin: 0 10px 10px 0; text-align: center; line-height: 40px; border: 1px solid #613b1d; border-radius: 50%; transition: all 0.3s ease;"
        href="https://www.linkedin.com/in/sachith-abraham-03a0041b/"><i class="fab fa-linkedin-in"></i></a>
        <a style="display: inline-block; height: 40px; width: 40px; color: #613b1d;
        margin: 0 10px 10px 0; text-align: center; line-height: 40px; border: 1px solid #613b1d; border-radius: 50%; transition: all 0.3s ease;"
        href="https://twitter.com/sachithabraham"><i class="fab fa-x-twitter"></i></a>
    </div>
    <div class="skinneeds"
    style="padding: 20px;
    margin-top: 10px;
    text-align: center;
    background-color: #a47c73;
    color: #fff;">
        <br/><p>Shop for selected skin and hair care products at</p><br/>
        <a href="https://skinneeds.in/" style="color: #fff; font-size: 14px;">skinneeds.in</a>
        <span style="font-size: 12px; color: #4b312c; font-weight: bolder;">&#10095</span>
    </div>
    <br/><p class="copyright" style="text-align: center;"> © Dr. Sachith's Skin Clinic- All Rights Reserved.</p>
</footer>
<div class="wabtn" style="position: fixed; bottom: 20px; right: 20px;">
    <a style="display: inline-block; height: 40px; width: 40px; color: #fff; text-align: center; line-height: 40px; background-color: #00ff00; border-radius: 50%; transition: all 0.3s ease; font-size: x-large;" href="https://api.whatsapp.com/send/?phone=919148970822&text&type=phone_number&app_absent=0"><i class="fab fa-whatsapp"></i></a>
</div>

<!-- <link rel="stylesheet" href="styles.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<footer>
  <div class="col">
    <img src="../derm/Logo.png" class="footerlogo">
      <p>
      <br/>
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d304.1110955566738!2d77.61924677321315!3d12.934012425957118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae145ec0000001%3A0x729e898aac114f86!2sDr.%20Sachith%20Abraham%2C%20MD%20(Dermatology)%20at%20The%20Medical%20Skin%20Clinic!5e0!3m2!1sen!2sin!4v1712233797063!5m2!1sen!2sin" width="350" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
      </p>
  </div>
  <div class="col">
    <h3>Location<div class="underline"></div></h3>
    <br/><p>474, 1st Floor,</p>
    <p>1st Cross Road, KHB Colony,</p>
    <p>5th Block, Koramangala,</p>
    <p>Bengaluru, Karnataka-560095</p>
    <p class="email-id"><a href="mailto:sachith_abraham@yahoo.com">sachith_abraham@yahoo.com</a></p>
    <h4><p class="phn">
    <a href="tel:9845716926">+91 9845716926</a><br/>
    <a href="tel:9148970822">+91 9148970822</a></p></h4>
  </div>
  <div class="col">
    <h3>Navigate<div class="underline"></div></h3>
    <br/>
    <ul>
      <li><a href="home.html">Home</a></li>
      <li><a href="about.html">About us</a></li>
      <li><a href="Procedures/laser.html">Services</a></li>
      <li><a href="contact.html">Contact us</a></li>
    </ul>
  </div>
<hr>
    <p class="copyright"><b>SOCIALS</b></p><br/>
    <div class="social-links">
        <a href="https://www.facebook.com/drsachithabraham/"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/the_medical_skin_clinic/"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/sachith-abraham-03a0041b/"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://twitter.com/sachithabraham"><i class="fab fa-x-twitter"></i></a>
    </div>
    <div class="skinneeds">
        <br/><p>Shop for selected skin and hair care products at</p><br/>
        <a href="https://skinneeds.in/">skinneeds.in</a>
        <span>&#10095</span>
    </div>
    <br/><p class="copyright"> © Dr. Sachith's Skin Clinic- All Rights Reserved.</p>
</footer> -->
   
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url ?>plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url ?>plugins/sparklines/sparkline.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url ?>plugins/select2/js/select2.full.min.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url ?>plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url ?>plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url ?>plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url ?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url ?>plugins/summernote/summernote-bs4.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- overlayScrollbars -->
    <!-- <script src="<?php echo base_url ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="<?php echo base_url ?>dist/js/adminlte.js"></script>
    <div class="daterangepicker ltr show-ranges opensright">
      <div class="ranges">
        <ul>
          <li data-range-key="Today">Today</li>
          <li data-range-key="Yesterday">Yesterday</li>
          <li data-range-key="Last 7 Days">Last 7 Days</li>
          <li data-range-key="Last 30 Days">Last 30 Days</li>
          <li data-range-key="This Month">This Month</li>
          <li data-range-key="Last Month">Last Month</li>
          <li data-range-key="Custom Range">Custom Range</li>
        </ul>
      </div>
      <div class="drp-calendar left">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
      </div>
      <div class="drp-calendar right">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
      </div>
      <div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div>
    </div>
    <div class="jqvmap-label" style="display: none; left: 1093.83px; top: 394.361px;">Idaho</div>