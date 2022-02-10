<?php $title = "Our Special"; 
    include "inc/header.php";
?>



	<div id="preloader1">
	 <div id="status1"><h1 style="font-size:70px;">Special</div>
	</div>

<div class="special shadow bottom" id="our Special">
				    <h2><i>...Our Special...</i></h2>
				</div><br><br>
			<div class="container1 shadow bottom">
				<div class="row">
					<div class="col-sm-4">
						<img src="pic3.jpg" alt="pizza" style="width:300px; height=100px;">
					    <h3>Chicken roll</h3>
						<p> when you are in hurry and you don't have time to eat your lunch or dinner and you cannot wait for a longer period of time up for eating junk food</p> 
						<p> the option for you to fill your stomach and to get somewhat satisfaction from the hunger </p>
					</div>	
					<div class="col-sm-4">
						<img src="pic2.jpg" alt="pizza" style="width:300px; height=100px;">
					    <h3>Shawarma</h3>
						<p> junk food is always having a low cost compared to lunch and dinner and in restaurants and hotels because it doesn't need to spend time and material to make</p>
						<p>that’s why they are having an affordable price for everyone.</P>
					</div>
					<div class="col-sm-4">
						<img src="pic4.jpg" alt="pizza" style="width:300px; height=100px;">
					    <h3>Pizza</h3>
						<p> junk food is so tasty that when you eat junk food you feel the taste and it can satisfy your taste because it has almost all kind of additives ingredients which impart a good and delicious taste and the chef makes such</P> 
						<p>a junk food so that they can attract more and more customers for their income.</p>
					</div>
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