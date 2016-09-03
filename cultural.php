
<!DOCTYPE html>
<html>
<head>
	<title>Event 1</title>
</head>

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
<!-- <link href="https://fonts.googleapis.com/css?family=Eagle+Lake" rel="stylesheet"> -->
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
					CULTURAL
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
					<button  class="ui teal  button animated slideInLeft" data-rel="#content-a" style="font-family: 'Eagle Lake', cursive;width:200px;">Solo Dance</button><br><br>
					<button  class="ui teal  button animated slideInUp" data-rel="#content-b" style="font-family: 'Eagle Lake', cursive;width:200px;">Solo Singing </button><br><br>
					<button  class="ui teal  button animated slideInRight" data-rel="#content-c" style="font-family: 'Eagle Lake', cursive;width:200px;">Group Dance</button><br><br>
					<button  class="ui teal  button animated slideInDown" data-rel="#content-d" style="font-family: 'Eagle Lake', cursive;width:200px;">Fashion Show</button><br><br>
					<button  class="ui teal  button animated slideInDown" data-rel="#content-e" style="font-family: 'Eagle Lake', cursive;width:200px;">Face Off</button><br><br>
					<button  class="ui teal  button animated slideInDown" data-rel="#content-f" style="font-family: 'Eagle Lake', cursive;width:200px;">Nukkad Natak</button><br><br>
					<button  class="ui teal  button animated slideInDown" data-rel="#content-g" style="font-family: 'Eagle Lake', cursive;width:200px;">Ad Mad Show</button><br><br>
					
					<!-- <button  class="ui teal  button animated slideInLeft" data-rel="#content-f" style="width:200px;">Auto Cad Design 3D</button><br><br><br>	<br>	<br> -->
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
		<br><br><br><br><br><img class="img-responsive animated slideInUp "  height="700px" width="450px" src="events/game of thrones/1.png"></div>


		<div class="tab  containers"   id="content-a" >
			<div class=col-md-8 style="background-color:teal;height:800px;	">
				<br><br>

				<div class="ui left aligned basic segment">
					<span style="color:white; font-size:30px;font-weight:lighter;" ><div class="animated zoomInRight">Solo Dance</div></span><br><br>	
					<div class="ui horizontal divider">
						..
					</div>
					<div class=" ui teal  label " align="left">
						<div class="animated shake">Event Description</div>
					</div>
					<br><br>
					<span style="color:white;" align="left" class="animated zoomIn">
						Solo dance performances on Bollywood/Hollywood songs.		</span>
					<br><br>
					<div class="animated zoomIn">
						<span class="ui yellow image label" style="font-size:20px;">
							No. Of Participants
							<div class="detail">25</div>
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
					<span style="color:white; font-size:30px;font-weight:lighter;" ><div class="animated zoomInRight">Solo Singing</div></span><br><br>	
					<div class="ui horizontal divider">
						..
					</div>
					<div class=" ui teal  label " align="left">
						<div class="animated shake">Event Description</div>
					</div>
					<br><br>
					<span style="color:white;" align="left" class="animated zoomIn">
						Any bollywood / Hollywood songs performed by the contestants
					</span>
					<br><br>
					<div class="animated zoomIn">
						<span class="ui yellow image label" style="font-size:20px;">
							No. of Participant 
							<div class="detail">35</div>
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
		<div class="tab containers"  id="content-c" >
			<div class=col-md-8 style="background-color:teal;height:800px;">
				<br><br>

				<div class="ui left aligned basic segment">
					<span style="color:white; font-size:30px;font-weight:lighter;" ><div class="animated zoomInRight">Group Dance </div></span><br><br>	
					<div class="ui horizontal divider">
						..
					</div>
					<div class=" ui teal  label " align="left">
						<div class="animated shake">Event Description</div>
					</div>
					<br><br>
					<span style="color:white;" align="left" class="animated zoomIn">
						Group of minimum 2 contestants will perform on bollywood/hollywood songs.
					</span>
					<br><br>
					<div class="animated zoomIn">
						<span class="ui yellow image label" style="font-size:20px;">
							No. of Participant 
														<div class="detail">15</div>
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
		<div class="tab  containers"   id="content-d">
			<div class=col-md-8 style="background-color:teal;height:800px;">
				<br><br>

				<div class="ui left aligned basic segment">
					<span style="color:white; font-size:30px;height:800px;font-weight:lighter;" ><div class="animated zoomInRight">Fashion Show</div></span><br><br>	
					<div class="ui horizontal divider">
						..
					</div>
					<div class=" ui teal  label " align="left">
						<div class="animated shake">Event Description</div>
					</div>
					<br><br>
					<span style="color:white;" align="left" class="animated zoomIn">
						Ethnic/Western wear competition seperately for girls and boys.
					</span>
					<br><br>
					<div class="animated zoomIn">
						<span class="ui yellow image label" style="font-size:20px;">
							No. of Participant
							<div class="detail">30</div>
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
					<span style="color:white; font-size:30px;height:800px;font-weight:lighter;" ><div class="animated zoomInRight">Face Off</div></span><br><br>	
					<div class="ui horizontal divider">
						..
					</div>
					<div class=" ui teal  label " align="left">
						<div class="animated shake">Event Description</div>
					</div>
					<br><br>
					<span style="color:white;" align="left" class="animated zoomIn">
						On the spot dance competition between 2 contestants on beats fusion.
										</span>
					<br><br>
					<div class="animated zoomIn">
						<span class="ui yellow image label" style="font-size:20px;">
							No. of Participant
							<div class="detail">20</div>
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




<div class="tab  containers"  id="content-f">
			<div class=col-md-8 style="background-color:teal;height:800px;">
				<br><br>

				<div class="ui left aligned basic segment">
					<span style="color:white; font-size:30px;height:800px;font-weight:lighter;" ><div class="animated zoomInRight">Nukkad Natak</div></span><br><br>	
					<div class="ui horizontal divider">
						..
					</div>
					<div class=" ui teal  label " align="left">
						<div class="animated shake">Event Description</div>
					</div>
					<br><br>
					<span style="color:white;" align="left" class="animated zoomIn">
						Any theme is selected by the group to perfom a short skit over it.
										</span>
					<br><br>
					<div class="animated zoomIn">
						<span class="ui yellow image label" style="font-size:20px;">
							No. of Participant
							<div class="detail">6</div>
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



		<div class="tab  containers"  id="content-g">
			<div class=col-md-8 style="background-color:teal;height:800px;">
				<br><br>

				<div class="ui left aligned basic segment">
					<span style="color:white; font-size:30px;height:800px;font-weight:lighter;" ><div class="animated zoomInRight">Ad Mad Show</div></span><br><br>	
					<div class="ui horizontal divider">
						..
					</div>
					<div class=" ui teal  label " align="left">
						<div class="animated shake">Event Description</div>
					</div>
					<br><br>
					<span style="color:white;" align="left" class="animated zoomIn">
						Product name is given to the participants on the spot and they have to perform an advertisement on that particular product for not more than 3 mins.
										</span>
					<br><br>
					<div class="animated zoomIn">
						<span class="ui yellow image label" style="font-size:20px;">
							No. of Participant
							<div class="detail">15</div>
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