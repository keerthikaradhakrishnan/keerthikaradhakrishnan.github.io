<?php $title = "Contact Us"; 
    include "inc/header.php";
?>

<div id="preloader1" class="shadow bottom">
	 <div id="status1"><h1 style="font-size:70px;">contact</div>
	</div>
	<div class="special-1 shadow bottom">
							<h2><i>...Contact...</i></h2>
						</div><br><br>
<div class="container-fluid text-center shadow bottom" id="contact">
								<h3>Contact Us:</h3>
								<h6>Pizza Hunt</h6>
								<div class="icons">
									<i class="fas fa-map-marker-alt"> -144/2 anna nagar,madurai</i><br>
									<i class="fas fa-envelope"> -pizzahunt07@gmail.com</i><br>
									<i class="fas fa-id-badge"> -888-657-2178</i>
								</div>
							</div><br><br><br>
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