 <!-- Header-->
 <header class="bg-dark py-5" id="main-header">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-white">
            <h1 class="display-4"><?php echo $_settings->info('name') ?></h1><br/>
            <p class="lead fw-normal text-white-50 mb-0">
                <button class="btn btn-sm btn-primary" type="button" id="create_appointment">Click here to book appointment</button>
            </p>
        </div>
    </div>
</header>
<!-- Section-->
<?php 
$sched_arr = array();
$max = 0;
?>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        
    <?php include('about.html') ?>
        
    </div>
</section>
<script>
    $(function(){
        $('#create_appointment').click(function(){
			uni_modal("Appointment Form","admin/appointments/manage_appointment.php",'mid-large')
		})
    })
</script>