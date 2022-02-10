<?php $title = "About"; 
    include "inc/header.php";
?>


<div id="preloader1" class="shadow bottom">
	 <div id="status1"><h1 style="font-size:70px;">about</div>
	</div>
	<div class="special-1 shadow bottom">
							<h2><i>...About...</i></h2>
						</div><br><br>
	<div class="container-5 shadow bottom">
			
			 <p>Fast food is a type of mass-produced food designed for commercial resale and with a strong priority placed on "speed of service" versus other relevant factors involved in culinary science.</p>
		<p>	 Fast food was created as a commercial strategy to accommodate the larger numbers of busy commuters, travelers and wage workers who often did not have the time to sit down at a public house or diner and wait for their meal.</p>
	 </div>
	 <script>
							$(window).on('load',function(){
							$('#status1').fadeOut();
							$('#preloader1').delay(350).fadeOut('slow');
							$('body').delay(350).css({'overflow':'visible'});
							})
							</script>
<?php  
    include "inc/footer.php";
?>