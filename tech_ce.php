
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
					TECH CE
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
					<button  class="ui teal  button animated slideInLeft" data-rel="#content-a" style="width:200px;font-family: 'Eagle Lake', cursive;">Bob The Builder</button><br><br>
					<button  class="ui teal  button animated slideInUp" data-rel="#content-b" style="width:200px;font-family: 'Eagle Lake', cursive;">Cadd-O-Mania</button><br><br>
					<button  class="ui teal  button animated slideInRight" data-rel="#content-c" style="width:200px;font-family: 'Eagle Lake', cursive;">Cartes De Palais</button><br><br>
					<button  class="ui teal  button animated slideInDown" data-rel="#content-d" style="width:200px;font-family: 'Eagle Lake', cursive;">Model Exhibition</button><br><br>
					<button  class="ui teal  button animated slideInLeft" data-rel="#content-e" style="width:200px;font-family: 'Eagle Lake', cursive;">Quiz-O-Logy</button><br><br><br>	<br>	<br>
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
		<br><br><br><br><br><img class="img-responsive animated slideInUp "  height="700px" width="550px" src="events/game of thrones/ce.png"></div>


		<div class="tab  containers"   id="content-a" >
			<div class=col-md-8 style="background-color:teal;height:800px;">
				<br><br>

				<div class="ui left aligned basic segment">
					<span style="color:white; font-size:30px;font-weight:lighter;" ><div class="animated zoomInRight">BOB THE BUILDER</div></span><br><br>	
					<div class="ui horizontal divider">
						..
					</div>
					<div class=" ui teal  label " align="left">
						<div class="animated shake">Event Description</div>
					</div>
					<br><br>
					<span style="color:white;" align="left" class="animated zoomIn">
						In this event participants have to construct a bridge from popsickle sticks (ice-cream sticks).The load bearing capacity and stability of the bridge will be checked
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
					............
 -->
				</div>

			</div>	

		</div>


		<div class="tab containers" id="content-b" >
			<div class=col-md-8 style="background-color:teal;height:800px;">
				<br><br>

				<div class="ui left aligned basic segment">
					<span style="color:white; font-size:30px;font-weight:lighter;" ><div class="animated zoomInRight">CADD-O-MANIA</div></span><br><br>	
					<div class="ui horizontal divider">
						..
					</div>
					<div class=" ui teal  label " align="left">
						<div class="animated shake">Event Description</div>
					</div>
					<br><br>
					<span style="color:white;" align="left" class="animated zoomIn">
						This is an On-The-Spot event which tests the perception and modelling abilities of participants.It is the 2-D Visualisation of a given 3-D structure using AUTOCAD software.
					</span>
					<br><br>
					<div class="animated zoomIn">
						<span class="ui yellow image label" style="font-size:20px;">
							Max Participant Per Team
							<div class="detail">1</div>
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
					............
 -->
				</div>

			</div>
		</div>
		<div class="tab containers"  id="content-c" >
			<div class=col-md-8 style="background-color:teal;height:800px;">
				<br><br>

				<div class="ui left aligned basic segment">
					<span style="color:white; font-size:30px;font-weight:lighter;" ><div class="animated zoomInRight">CARTES DE PALAIS</div></span><br><br>	
					<div class="ui horizontal divider">
						..
					</div>
					<div class=" ui teal  label " align="left">
						<div class="animated shake">Event Description</div>
					</div>
					<br><br>
					<span style="color:white;" align="left" class="animated zoomIn">
						This event is to check the imagination of the participants and their insight in to the field of Structure and design.In this participants have to make the Civil Structure with the help of 52 playing cards
					</span>
					<br><br>
					<div class="animated zoomIn">
						<span class="ui yellow image label" style="font-size:20px;">
							Max Participant Per Team
							<div class="detail">2</div>
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
					<span style="color:white; font-size:30px;font-weight:lighter;" ><div class="animated zoomInRight">MODEL EXHIBITION</div></span><br><br>	
					<div class="ui horizontal divider">
						..
					</div>
					<div class=" ui teal  label " align="left">
						<div class="animated shake">Event Description</div>
					</div>
					<br><br>
					<span style="color:white;" align="left" class="animated zoomIn">
						Participants are expected to build a model of any component/system which makes a
						city self-sustaining and bring it for exhibition at the time of the Genero.
					</span>
					<br><br>
					<div class="animated zoomIn">
						<span class="ui yellow image label" style="font-size:20px;">
							Max Participant Per Team
							<div class="detail">5</div>
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
		<div class="tab  containers"  id="content-e">
			<div class=col-md-8 style="background-color:teal;height:800px;">
				<br><br>

				<div class="ui left aligned basic segment">
					<span style="color:white; font-size:30px;font-weight:lighter;" ><div class="animated zoomInRight">QUIZ-O-LOGY</div></span><br><br>	
					<div class="ui horizontal divider">
						..
					</div>
					<div class=" ui teal  label " align="left">
						<div class="animated shake">Event Description</div>
					</div>
					<br><br>
					<span style="color:white;" align="left" class="animated zoomIn">
						It is a Civil Engineering related Quiz testing the Knowledge of partcipants in a wide range of fields namely Building Material Construction,Structural engineering and various subjects of Civil Department.
					</span>
					<br><br>
					<div class="animated zoomIn">
						<span class="ui yellow image label" style="font-size:20px;">
							Max Participant Per Team
							<div class="detail">1</div>
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