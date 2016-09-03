
<!DOCTYPE html>
<html>
<head>
	<title>Event 1</title>


<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="events/css/genero_style.css">
<link rel="stylesheet" type="text/css" href="events/css/bootstrap/bootstrap.css">
<link rel="stylesheet" type="text/css" href="events/webandrioz/webandrioz.css">
<link rel="stylesheet" type="text/css" href="events/css/hover.css">
<link rel="stylesheet" type="text/css" href="events/css/animate.css">
<link href='https://fonts.googleapis.com/css?family=Rajdhani:400,300' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Eagle+Lake" rel="stylesheet">
<script type="text/javascript" src="event/webandrioz/webandrioz.js"></script>
<script type="text/javascript" src="events/js/jquery.js"></script>
<script type="text/javascript" src="events/js/bootstrap.min.js"></script>
<script>	
	$(document).ready(function() {
		$('.button').click(function(e) {
			e.preventDefault();
			$('.hello').hide();
			setContent($(this));
		});
		$('.hello').length && setContent();
		console.log($el);
		function setContent($el) {
			$('.containers').hide();
			$($el.data('rel')).show();
		}

});


</script>
<style>
body{
	font-family: 'Eagle Lake', cursive;	
}
</style>
</head>
<body>
<?php include 'demo.html';?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4" style="background-color: teal;
background-image: linear-gradient(335deg, #2C3E50 23px, transparent 23px),
linear-gradient(155deg, #2C3E50 23px, transparent 23px),
linear-gradient(335deg, #2C3E50 23px, transparent 23px),
linear-gradient(155deg, #2C3E50 23px, transparent 23px);
background-size: 58px 58px;	
background-position: 0px 2px, 4px 35px, 29px 31px, 34px 6px;height:800px;">
			<br>	<br>
			
			<br><br>	<br>
			<br>	
			<div class="col-md-2"></div>
			<div class="col-md-8" align="middle" >
				<div class="ui pointing below teal basic label animated zoomIn" style="font-size:20px;">
					TECH EE
				</div>
				<!-- <div class="ui two column grid">

					<div class="column animated jello ">
						<div class="ui fluid card">
							<div class="image">
								<img  src="images/nan.jpg">
							</div>
							<div class="content">
								<a class="header"></a>
							</div>
						</div>
					</div>
					<div class="column animated jello">
						<div class="ui fluid card">
							<div class="image">
								<img  src="images/tom.jpg">
							</div>
							<div class="content">
								<a class="header"></a>
							</div>
						</div>
					</div>
				</div> --><br>	<br>	
				<div class="menu">
					<button  class="ui teal  button animated slideInLeft" data-rel="#content-a" style="width:200px;font-family: 'Eagle Lake', cursive;	">ROBO RACE</button><br><br>
					<button  class="ui teal  button animated slideInUp" data-rel="#content-b" style="width:200px;font-family: 'Eagle Lake', cursive;	">ROBO WAR</button><br><br>
					<button  class="ui teal  button animated slideInRight" data-rel="#content-c" style="width:200px;font-family: 'Eagle Lake', cursive;	">ROBO SOCCER</button><br><br>
					<button  class="ui teal  button animated slideInDown" data-rel="#content-d" style="width:200px;font-family: 'Eagle Lake', cursive;	">LINE FOLLOWER</button><br><br>
					
					<button  class="ui teal  button animated slideInLeft" data-rel="#content-e" style="width:200px;font-family: 'Eagle Lake', cursive;	">MAZE SOLVING</button><br><br><br>	<br>	<br>
					<br><br><br><br>	
				</div>
			</div>
			<div class="col-md-2" ></div>	

		</div>

		<div class="hello col-md-8 "  style="background:
radial-gradient(black 15%, transparent 16%) 0 0,
radial-gradient(black 15%, transparent 16%) 8px 8px,
radial-gradient(rgba(255,255,255,.1) 15%, transparent 20%) 0 1px,
radial-gradient(rgba(255,255,255,.1) 15%, transparent 20%) 8px 9px;
background-color:orange;
background-size:16px 16px;position:relative;height:800px;" align="middle">
				<h2></h2>
		<br><br><br><br><br><img class="img-responsive animated slideInUp "  height="700px" width="550px" src="events/game of thrones/ee.png"></div>


		<div class="tab  containers"   id="content-a" >
			<div class=col-md-8 style="background-color:teal;height:800px;">
				<br><br>

				<div class="ui left aligned basic segment">
					<span style="color:white; font-size:30px;height:800px;font-weight:lighter;" ><div class="animated zoomInRight">ROBO RACE</div></span><br><br>	
					<div class="ui horizontal divider">
						..
					</div>
					<div class=" ui teal  label " align="left">
						<div class="animated shake">Event Description</div>
					</div>
					<br><br>
					<span style="color:white;" align="left" class="animated zoomIn">
						A robot will be designed which should be able to traverse a path full of complications and challenges,team doing this in minimum time will be declared as winner
					</span>
					<br><br>
					<div class="animated zoomIn">
						<span class="ui yellow image label" style="font-size:20px;">
							Max Participant Per Team
							<div class="detail">4</div>
						</span>
					</div><br><br><br>
					<!-- <div class="ui four column grid">

					<div class="column animated jello ">
						<div class="ui fluid card">
							<div class="image">
								<img  src="images/nan.jpg">
							</div>
							<div class="content">
								<a class="header"></a>
							</div>
						</div>
					</div>
					<div class="column animated jello ">
						<div class="ui fluid card">
							<div class="image">
								<img  src="images/nan.jpg">
							</div>
							<div class="content">
								<a class="header"></a>
							</div>
						</div>
					</div><div class="column animated jello ">
						<div class="ui fluid card">
							<div class="image">
								<img  src="images/nan.jpg">
							</div>
							<div class="content">
								<a class="header"></a>
							</div>
						</div>
					</div>
					<div class="column animated jello">
						<div class="ui fluid card">
							<div class="image">
								<img  src="images/tom.jpg">
							</div>
							<div class="content">
								<a class="header"></a>
							</div>
						</div>
					</div>
				</div>
					
					....................................<br>
					................................
					<br>
					............................<br>
					.....................
					<br>
					............
 -->
				</div>

			</div>	

		</div>


		<div class="tab containers" id="content-b" >
			<div class=col-md-8 style="background-color:teal;height:800px;">
				<br><br>

				<div class="ui left aligned basic segment">
					<span style="color:white; font-size:30px;font-weight:lighter;" ><div class="animated zoomInRight">ROBO WAR</div></span><br><br>	
					<div class="ui horizontal divider">
						..
					</div>
					<div class=" ui teal  label " align="left">
						<div class="animated shake">Event Description</div>
					</div>
					<br><br>
					<span style="color:white;" align="left" class="animated zoomIn">
						The objective is to make a manually controlled bot that can immobilise opponent's bot in a one on one competition.
					</span>
					<br><br>
					<div class="animated zoomIn">
						<span class="ui yellow image label" style="font-size:20px;">
							Max Participant Per Team
							<div class="detail">4</div>
						</span>
					</div><br><br><br>
				<!-- 	<div class="ui four column grid">

					<div class="column animated jello ">
						<div class="ui fluid card">
							<div class="image">
								<img  src="images/nan.jpg">
							</div>
							<div class="content">
								<a class="header"></a>
							</div>
						</div>
					</div>
					<div class="column animated jello ">
						<div class="ui fluid card">
							<div class="image">
								<img  src="images/nan.jpg">
							</div>
							<div class="content">
								<a class="header"></a>
							</div>
						</div>
					</div><div class="column animated jello ">
						<div class="ui fluid card">
							<div class="image">
								<img  src="images/nan.jpg">
							</div>
							<div class="content">
								<a class="header"></a>
							</div>
						</div>
					</div>
					<div class="column animated jello">
						<div class="ui fluid card">
							<div class="image">
								<img  src="images/tom.jpg">
							</div>
							<div class="content">
								<a class="header"></a>
							</div>
						</div>
					</div>
				</div>
					....................................<br>
					................................
					<br>
					............................<br>
					.....................
					<br>
					............ -->

				</div>

			</div>
		</div>
		<div class="tab containers"  id="content-c" >
			<div class=col-md-8 style="background-color:teal;height:800px;">
				<br><br>

				<div class="ui left aligned basic segment">
					<span style="color:white; font-size:30px;font-weight:lighter;" ><div class="animated zoomInRight">ROBO SOCCER</div></span><br><br>	
					<div class="ui horizontal divider">
						..
					</div>
					<div class=" ui teal  label " align="left">
						<div class="animated shake">Event Description</div>
					</div>
					<br><br>
					<span style="color:white;" align="left" class="animated zoomIn">
						The objective is to make a robot that can play soccer with an opponent bot.Teams which scores more goals will be the winner.
					</span>
					<br><br>
					<div class="animated zoomIn">
						<span class="ui yellow image label" style="font-size:20px;">
							Max Participant Per Team
							<div class="detail">4</div>
						</span>
					</div><br><br><br>
					<!-- <div class="ui four column grid">

					<div class="column animated jello ">
						<div class="ui fluid card">
							<div class="image">
								<img  src="images/nan.jpg">
							</div>
							<div class="content">
								<a class="header"></a>
							</div>
						</div>
					</div>
					<div class="column animated jello ">
						<div class="ui fluid card">
							<div class="image">
								<img  src="images/nan.jpg">
							</div>
							<div class="content">
								<a class="header"></a>
							</div>
						</div>
					</div><div class="column animated jello ">
						<div class="ui fluid card">
							<div class="image">
								<img  src="images/nan.jpg">
							</div>
							<div class="content">
								<a class="header"></a>
							</div>
						</div>
					</div>
					<div class="column animated jello">
						<div class="ui fluid card">
							<div class="image">
								<img  src="images/tom.jpg">
							</div>
							<div class="content">
								<a class="header"></a>
							</div>
						</div>
					</div>
				</div>
					....................................<br>
					................................
					<br>
					............................<br>
					.....................
					<br>
					............ -->

				</div>

			</div>
		</div>
		<div class="tab  containers"   id="content-d">
			<div class=col-md-8 style="background-color:teal;height:800px;">
				<br><br>

				<div class="ui left aligned basic segment">
					<span style="color:white; font-size:30px;height:800px;font-weight:lighter;" ><div class="animated zoomInRight">LINE FOLLOWER</div></span><br><br>	
					<div class="ui horizontal divider">
						..
					</div>
					<div class=" ui teal  label " align="left">
						<div class="animated shake">Event Description</div>
					</div>
					<br><br>
					<span style="color:white;" align="left" class="animated zoomIn">
						A robot should be designed such that it can follow a black line in minimum time.
					</span>
					<br><br>
					<div class="animated zoomIn">
						<span class="ui yellow image label" style="font-size:20px;">
							Max Participant Per Team
							<div class="detail">4</div>
						</span>
					</div><br><br><br>
					<!-- <div class="ui four column grid">

					<div class="column animated jello ">
						<div class="ui fluid card">
							<div class="image">
								<img  src="images/nan.jpg">
							</div>
							<div class="content">
								<a class="header"></a>
							</div>
						</div>
					</div>
					<div class="column animated jello ">
						<div class="ui fluid card">
							<div class="image">
								<img  src="images/nan.jpg">
							</div>
							<div class="content">
								<a class="header"></a>
							</div>
						</div>
					</div><div class="column animated jello ">
						<div class="ui fluid card">
							<div class="image">
								<img  src="images/nan.jpg">
							</div>
							<div class="content">
								<a class="header"></a>
							</div>
						</div>
					</div>
					<div class="column animated jello">
						<div class="ui fluid card">
							<div class="image">
								<img  src="images/tom.jpg">
							</div>
							<div class="content">
								<a class="header"></a>
							</div>
						</div>
					</div>
				</div>
					....................................<br>
					................................
					<br>
					............................<br>
					.....................
					<br>
					............ -->

				</div>

			</div>
		</div>
		<div class="tab  containers"  id="content-e">
			<div class=col-md-8 style="background-color:teal;height:800px;">
				<br><br>

				<div class="ui left aligned basic segment">
					<span style="color:white; font-size:30px;height:800px;font-weight:lighter;" ><div class="animated zoomInRight">MAZE SOLVING</div></span><br><br>	
					<div class="ui horizontal divider">
						..
					</div>
					<div class=" ui teal  label " align="left">
						<div class="animated shake">Event Description</div>
					</div>
					<br><br>
					<span style="color:white;" align="left" class="animated zoomIn">
						The objective is to make an autonomous bot that can traverse the given arena and return to its starting point through the shortest path possible.
					</span>
					<br><br>
					<div class="animated zoomIn">
						<span class="ui yellow image label" style="font-size:20px;">
							Max Participant Per Team
							<div class="detail">4</div>
						</span>
					</div><br><br><br>
<!-- 				<div class="ui four column grid">

					<div class="column animated jello ">
						<div class="ui fluid card">
							<div class="image">
								<img  src="images/nan.jpg">
							</div>
							<div class="content">
								<a class="header"></a>
							</div>
						</div>
					</div>
					<div class="column animated jello ">
						<div class="ui fluid card">
							<div class="image">
								<img  src="images/nan.jpg">
							</div>
							<div class="content">
								<a class="header"></a>
							</div>
						</div>
					</div><div class="column animated jello ">
						<div class="ui fluid card">
							<div class="image">
								<img  src="images/nan.jpg">
							</div>
							<div class="content">
								<a class="header"></a>
							</div>
						</div>
					</div>
					<div class="column animated jello">
						<div class="ui fluid card">
							<div class="image">
								<img  src="images/tom.jpg">
							</div>
							<div class="content">
								<a class="header"></a>
							</div>
						</div>
					</div>
				</div>
					....................................<br>
					................................
					<br>
					............................<br>
					.....................
					<br>
					............
 -->
				</div>

			</div>
		</div>




		




		
	</div>
</div>


<div class="strip" style="background-color:black;">
<br>
</div>
 <script language="javascript">
        function autoResizeDiv()
        {
            document.getElementById('main').style.height = window.innerHeight +'px';
        }
        window.onresize = autoResizeDiv;
        autoResizeDiv();
    </script>

</body>
</html>