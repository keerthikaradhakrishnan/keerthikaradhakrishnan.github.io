<?php $title = "Dishes"; 
    include "inc/header.php";
?>
	<div id="preloader1">
	 <div id="status1"><h1 style="font-size:70px;">Dishes</div>
	</div>
<div id="dishes">
						<div class="special-1 shadow bottom">
							<h2><i>...Dishes...</i></h2>
						</div><br><br>
						<div class="container-1 shadow bottom">
							<div class="row">
								<div class="col-sm-4 img">
									<img src="pic5.jpg" alt="pizza" style="width:300px; height=100px;">
								</div>	
								<div class="col-sm-4 img">
									<img src="pic14.webp" alt="pizza" style="width:300px; height=100px;">
								</div>
								<div class="col-sm-4 img">
									<img src="pic7.jpg" alt="pizza" style="width:300px; height=100px;">
								</div>
							</div><br>
							<div class="row">
								<div class="col-sm-4 img">
									<img src="pic6.jpg" alt="pizza" style="width:300px; height=100px;">
								</div>	
								<div class="col-sm-4 img">
									<img src="pic16.jpg" alt="pizza" style="width:300px; height=100px;">
								</div>
								<div class="col-sm-4 img">
									<img src="pic11.jpg" alt="pizza" style="width:300px; height=100px;">
								</div>
							</div><br><br>
						</div>
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