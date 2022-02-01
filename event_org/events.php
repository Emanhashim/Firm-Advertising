<?php include('bpms/db_connect.php') ?>
<body>
	<!--Header-->
	<?php include("header.php");?>
	<!--//header-->
	<!--/banner-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">Event</li>
	</ol>
	<!--//banner-->
	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
    <div class="section-title">
          <h2>Event</h2>
          <p>Check our Events</p>
        </div>
			<section id="features" class="features">			
      <div class="container">

	  <!DOCTYPE html>
	<html>
		<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		* {
		box-sizing: border-box;
		}

		body {
		font-family: Arial, Helvetica, sans-serif;
		}

		/* Float four columns side by side */
		.column {
		float: left;
		width: 25%;
		padding: 0 10px;
		}

		/* Remove extra left and right margins, due to padding */
		.row {margin: 0 -5px;}

		/* Clear floats after the columns */
		.row:after {
		content: "";
		display: table;
		clear: both;
		}

		/* Responsive columns */
		@media screen and (max-width: 600px) {
		.column {
			width: 100%;
			display: block;
			margin-bottom: 20px;
		}
		}

			/* Style the counter cards */
			.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			padding: 16px;
			text-align: center;
			background-color: #f1f1f1;
			}
			

			#portfolio .img-fluid{
				width: calc(100%);
				height: 30vh;
				z-index: -1;
				position: relative;
				padding: 1em;
			}
			.event-list{
			cursor: pointer;
			}
			span.hightlight{
				background: yellow;
			}
			.banner{
					display: flex;
					justify-content: center;
					align-items: center;
					min-height: 26vh;
					width: calc(30%);
				}
				.banner img{
					width: calc(100%);
					height: calc(100%);
					cursor :pointer;
				}
			.event-list{
			cursor: pointer;
			border: unset;
			flex-direction: inherit;
			}

			.event-list .banner {
				width: calc(40%)
			}
			.event-list .card-body {
				width: calc(60%)
			}
			.event-list .banner img {
				border-top-left-radius: 5px;
				border-bottom-left-radius: 5px;
				min-height: 50vh;
			}
			span.hightlight{
				background: yellow;
			}
			.banner{
			min-height: calc(100%)
			}
</style>
			</head>
			<body>

			<!-- <h2>Responsive Column Cards</h2>
			<p>Resize the browser window to see the effect.</p> -->

			<div class="row">
			<div class="container mt-3 pt-2">
                <!-- <h4 class="text-center text-white">Upcoming Events</h4> -->              
                <?php
				$query = "SELECT * FROM lada  ";
				$result = mysqli_query($conn, $query);
				$check_result = mysqli_num_rows($result) > 0;

				if($result){
					while($row = mysqli_fetch_assoc($result)){
						?>
				
            <div class="card mb-3" style="max-width: 540px;">
			<div class="row g-0">
				<div class="col-md-4">
				<img src="bpms/assets/uploads/ <?php echo $row['image']; ?>"alt="..." class="img-fluid rounded-start"/>
				
			</div>
				<div class="col-md-8">
				<div class = "card-body">	
				<h3 class ="card-title">  <?php echo $row['file_name'] ?></h3>
			    <h4 class ="card-title">  <?php echo $row['file_code'] ?></h4>
				 <p class ="card-text"><?php   echo $row['file_code']?></p>
				
				<button class ="btn btn-success"> View Detail</button>
					</div>
				</div>
					</div>
					</div>
				
				<?php
					}
				}
			else
			{
				echo "No Events ";
			}
				?>

            </div>

	
			<!-- <div class="column">
				<div class="card">
				<h3>Card 3</h3>
				<p>Some text</p>
				<p>Some text</p>
				</div>
			</div>
			
			<div class="column">
				<div class="card">
				<h3>Card 4</h3>
				<p>Some text</p>
				<p>Some text</p>
				</div>
			</div> -->
			</div>

				



			</body>
			</html>
			</div>
      </div>
    </section><!-- End Features Section -->


					<!--footer-->
					<?php include("footer.php");?>
					<!---->
					<!-- js -->
					<script src="js/jquery-2.2.3.min.js"></script>
					<!-- //js -->
					<!--/ start-smoth-scrolling -->
					<script src="js/move-top.js"></script>
					<script src="js/easing.js"></script>
					<script>
						jQuery(document).ready(function ($) {
							$(".scroll").click(function (event) {
								event.preventDefault();
								$('html,body').animate({
									scrollTop: $(this.hash).offset().top
								}, 900);
							});
						});
					</script>
					<!--// end-smoth-scrolling -->

					<script>
						$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
							 		*/

							 		$().UItoTop({
							 			easingType: 'easeOutQuart'
							 		});

							 	});
							 </script>
							 <a href="#home" class="scroll" id="toTop" style="display: block;">
							 	<span id="toTopHover" style="opacity: 1;"> </span>
							 </a>

							 <!-- //Custom-JavaScript-File-Links -->
							 <script src="js/bootstrap.js"></script>


							</body>

							</html>


<!-- <script>
     $('.read_more').click(function(){
         location.href = "index.php?page=view_event&id="+$(this).attr('data-id')
     })
     $('.banner img').click(function(){
        viewer_modal($(this).attr('src'))
    })
    $('#filter').keyup(function(e){
        var filter = $(this).val()

        $('.card.event-list .filter-txt').each(function(){
            var txto = $(this).html();
            txt = txto
            if((txt.toLowerCase()).includes((filter.toLowerCase())) == true){
                $(this).closest('.card').toggle(true)
            }else{
                $(this).closest('.card').toggle(false)
               
            }
        })
    })
</script> -->