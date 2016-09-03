<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>GENERO'16</title>		
		<meta name="description" content="Fullscreen Layout with Page Transitions" />
		<meta name="keywords" content="fullscreen layout, boxes, responsive, page transitions, css transitions, jquery, portfolio, template" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="speacialattraction/css/component.css" />
		<script src="speacialattraction/js/modernizr.custom.js"></script>
		<!-- <link rel="stylesheet" type="text/css" href="speacialattraction/component.css"> -->
		<link rel="stylesheet" type="text/css" href="speacialattraction/default.css">
		 <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Eagle+Lake" rel="stylesheet">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"> </script>
  <!-- <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> -->
  <script>
    $(document).ready(function(){
      $('nav').navResponsive();
    });
  </script>

	<style>
body {
    margin: 0;
    /*color: #333333;*/
  overflow-x: hidden;
  /*font-family: 'Eagle Lake', cursive;*/

}


/* buttons */

.s-button,
.s-button:hover{  
  -webkit-transition: all 150ms ease-in-out;
  -moz-transition: all 150ms ease-in-out;
  -ms-transition: all 150ms ease-in-out;
  -o-transition: all 150ms ease-in-out;
  transition: all 150ms ease-in-out;  
} 

.s-button{
  padding: 8px 12px;
  font-size: 1.5em;
  text-decoration: none;
  -webkit-border-radius: 3px; 
  -moz-border-radius: 3px; 
  -o-border-radius: 3px; 
  border-radius: 3px;
  font-weight: 1000px;
  background: #eee;
  text-shadow: 0px 1px 1px #fff; 
  border: 1px solid rgba(0, 0, 0, .2);
  color: rgba(1 ,1 , 1, .6);    
  -webkit-box-shadow: inset 0 2px  5px rgba( 0, 0, 0, .1), 0px 1px 1px rgba( 0, 0, 0, .1);
    -moz-box-shadow: inset 0 2px 5px rgba( 0, 0, 0, .1), 0px 1px 1px rgba( 0, 0, 0, .1);
    box-shadow: inset 0 2px 5px rgba( 0, 0, 0, .1), 0px 1px  1px rgba( 0, 0, 0, .1);  
}

.s-button:hover,
.s-button.default:hover{
  text-decoration: none;
  color: rgba(1 ,1 , 1, 1); 
  border-top: 1px solid rgba(0, 0, 0, .15);
  border-bottom: 1px solid rgba(0, 0, 0, .15);  
  -webkit-box-shadow: inset 0 2px  5px rgba( 0, 0, 0, .1), 0px 1px 1px rgba( 0, 0, 0, .7), 0px 0px 5px rgba( 0, 0, 0, .05);
    -moz-box-shadow: inset 0 2px 5px rgba( 0, 0, 0, .1), 0px 1px 1px rgba( 0, 0, 0, .7), 0px 0px 5px rgba( 0, 0, 0, .05);
    box-shadow: inset 0 2px 5px rgba( 0, 0, 0, .1), 0px 1px  1px rgba( 0, 0, 0, .7), 0px 0px 5px rgba( 0, 0, 0, .05);   
}

.s-button:active,
.s-button.active{
  color: rgba(1 ,1 , 1, .6);    
  border: 1px solid rgba(0, 0, 0, .2);
  border-top:  1px solid rgba(0, 0, 0, .3);
  border-bottom:  1px solid rgba(0, 0, 0, .3);  
  -webkit-transition: all 50ms ease-in-out;
  -moz-transition: all 50ms ease-in-out;
  -ms-transition: all 50ms ease-in-out;
  -o-transition: all 50ms ease-in-out;
  transition: all 50ms ease-in-out;   
  -webkit-box-shadow: inset 0 2px  5px rgba( 0, 0, 0, .3), inset 0px 0px  15px rgba( 0, 0, 0, .05);
    -moz-box-shadow: inset 0 2px 5px rgba( 0, 0, 0, .3), inset 0px 0px  15px rgba( 0, 0, 0, .05);
    box-shadow: inset 0 2px 5px rgba( 0, 0, 0, .3), inset 0px 0px  15px rgba( 0, 0, 0, .05);
}

/* Shadow below - levitating apearance */

.w-shadow{
  position: relative;
  /*margin-bottom: 50px;*/
}

.w-shadow:after{
  content: ' ';
  position: absolute;
  bottom: -20px;
  left: 0px;
  right: 0px;
  background: rgba(0, 0, 0, .1);
  z-index: -1;
  height: 7px;
  -webkit-box-shadow: 0px 0px  15px rgba( 0, 0, 0, .2);
    -moz-box-shadow: 0px 0px  15px rgba( 0, 0, 0, .2);
    box-shadow: 0px 0px  15px rgba( 0, 0, 0, .2); 
  -webkit-border-radius: 180px; 
  -moz-border-radius: 180px; 
  -o-border-radius: 180px; 
  border-radius: 180px; 
  
}


/* navbar */


nav{
  display: block;
  width: 100%;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 20px;
  position: relative;
}

nav:not(.s-collapse) .nav-container{
  max-width: 900px;
  min-width: 350px;
  margin: 0px auto; 
}

nav .nav-container:before,
nav .nav-container:after {
  display: table;
  line-height: 0;
  content: "";
}

nav .nav-container:after {
  clear: both;
}


nav .nav-menu,
nav .nav-menu ul{
  float: left;
  list-style: none;
  margin: 0px;
  margin-left: 15px;  
  padding: 0px;
  z-index: 10;  
}

nav .nav-menu ul{
  font-size: 13px;
  margin: 0px;  
}

nav .nav-menu li{
  float: left;
  position: relative; 
}

nav .nav-menu.center{
  float: none;
  display: table;
  margin: 0px auto;
}
  
nav .nav-menu li a{
  display: block;
  -webkit-transition: all 140ms ease-in-out;
  -moz-transition: all 140ms ease-in-out;
  -ms-transition: all 140ms ease-in-out;
  -o-transition: all 140ms ease-in-out;
  transition: all 140ms ease-in-out;    
}

nav .nav-menu li a:hover{
  -webkit-transition: all 240ms ease-in-out;
  -moz-transition: all 240ms ease-in-out;
  -ms-transition: all 240ms ease-in-out;
  -o-transition: all 240ms ease-in-out;
  transition: all 240ms ease-in-out;      
}

nav .nav-menu li a:active{
  -webkit-transition: all 50ms ease-in-out;
  -moz-transition: all 50ms ease-in-out;
  -ms-transition: all 50ms ease-in-out;
  -o-transition: all 50ms ease-in-out;
  transition: all 50ms ease-in-out;     
}

nav .nav-menu li > ul{
  position: absolute;
  top: 100.999%;
  left: 0px;
  opacity: 0;
  z-index: 9;
  visibility: hidden; 
  -webkit-transition: all 240ms ease-in-out;
  -moz-transition: all 240ms ease-in-out;
  -ms-transition: all 240ms ease-in-out;
  -o-transition: all 240ms ease-in-out;
  transition: all 240ms ease-in-out;  
}

nav .nav-menu li:hover > ul{
  opacity: 1;
  visibility: visible;  
  display: block; 
  -webkit-transition: all 240ms ease-in-out;
  -moz-transition: all 240ms ease-in-out;
  -ms-transition: all 240ms ease-in-out;
  -o-transition: all 240ms ease-in-out;
  transition: all 240ms ease-in-out;  
}

nav .nav-menu li ul li > ul{
  left: 100%;
  top: 0px;
}

nav .nav-menu li ul li{
  display: block;
  white-space: nowrap;
  float: none;
} 

/*==========================================

  Nav Positions

============================================*/

nav.fixed-top{
  position: fixed;
  top: 0px;
  left: 0px;
  right: 0px;
  -webkit-border-radius: 0px; 
  -moz-border-radius: 0px; 
  -o-border-radius: 0px; 
  border-radius: 0px; 
  z-index: 9999;
}


/*==========================================

  Nav Sizes

============================================*/

/* default size */

nav .nav-menu li a{
  position: relative;
  padding: 13px;
}

nav .nav-menu .nav-dropdown ul li a{
  padding: 10px 25px;
  min-width: 90px;
}

/* nav large */

nav:not(.s-collapse).large .nav-menu li a{
  padding: 20px;
  font-weight: bold;
}

nav:not(.s-collapse).large .nav-menu .nav-dropdown ul li a{
  padding: 13px 25px;
  min-width: 90px;
}

/*============================================

  nav s-collapse trigger

=============================================*/

nav .s-collapse-trigger{
  float: right;
  text-align: center;
  margin-top: 5px;
  margin-right: 10px;
  height: 20px;
  width: 14px;
  position: absolute;
  right: 0px;
  top: 0px;
  font-weight: bold;
  font-size: 2em;
  display: none;  
}

nav .nav-menu li a > .s-collapse-trigger{
  font-size: 1.5em;
  margin-top: 6px;
  padding: 5px 8px; 
}

nav .nav-menu li ul li .s-collapse-trigger{
  font-size: 1.2em;
  margin-top: 6px;
  margin-right: 12px; 
  padding: 2px 6px; 
}


/*============================================

  dropdown transitions 
  
=============================================*/

/* slideUp */

nav .nav-menu li ul.slideUp,
nav .nav-menu.slideUp ul{
  margin-top: 80%;
  -webkit-transition: all 240ms ease-in-out;
  -moz-transition: all 240ms ease-in-out;
  -ms-transition: all 240ms ease-in-out;
  -o-transition: all 240ms ease-in-out;
  transition: all 240ms ease-in-out;    
}

nav .nav-menu li:hover >  ul.slideUp,
nav .nav-menu.slideUp li:hover > ul{
  margin-top: 0px;
  -webkit-transition: all 240ms ease-in-out;
  -moz-transition: all 240ms ease-in-out;
  -ms-transition: all 240ms ease-in-out;
  -o-transition: all 240ms ease-in-out;
  transition: all 240ms ease-in-out;    
}

/* slideDown */

nav:not(.s-collapse) .nav-menu li ul.slideDown > li,
nav:not(.s-collapse) .nav-menu.slideDown ul li{
  visibility: hidden;
  -webkit-transition: all 270ms ease-in-out;
  -moz-transition: all 270ms ease-in-out;
  -ms-transition: all 270ms ease-in-out;
  -o-transition: all 270ms ease-in-out;
  transition: all 270ms ease-in-out;  
}

nav:not(.s-collapse) .nav-menu li ul.slideDown,
nav:not(.s-collapse) .nav-menu.slideDown ul{
  height: 0px;
  margin-top: -100%;
  z-index: -1;
  -webkit-transition: all 100ms ease-in-out;
  -moz-transition: all 100ms ease-in-out;
  -ms-transition: all 100ms ease-in-out;
  -o-transition: all 100ms ease-in-out;
  transition: all 100ms ease-in-out;    
}

nav:not(.s-collapse) .nav-menu li:hover >  ul.slideDown,
nav:not(.s-collapse) .nav-menu.slideDown li:hover > ul{
  height: auto;
  margin-top: 0px;
  min-height: 100%; 
  z-index: 1; 
  -webkit-transition: all 240ms ease-in-out;
  -moz-transition: all 240ms ease-in-out;
  -ms-transition: all 240ms ease-in-out;
  -o-transition: all 240ms ease-in-out;
  transition: all 240ms ease-in-out;    
}

nav:not(.s-collapse) .nav-menu li:hover >  ul.slideDown li,
nav:not(.s-collapse) .nav-menu.slideDown li:hover > ul li{
  visibility: visible;
  -webkit-transition: all 270ms ease-in-out;
  -moz-transition: all 270ms ease-in-out;
  -ms-transition: all 270ms ease-in-out;
  -o-transition: all 270ms ease-in-out;
  transition: all 270ms ease-in-out;  
}

/* default skins */

nav{
  border: 1px solid rgba( 0, 0, 0, .3);
  /*-webkit-border-radius: 5px; 
  -moz-border-radius: 5px; 
  -o-border-radius: 5px; 
  border-radius: 5px;*/
  background: #eee; /* Old browsers */
  background: -moz-linear-gradient(top,  #ffffff 0%, #e5f6f9 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#e5f6f9)); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  #ffffff 0%,#e5f6f9 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  #ffffff 0%,#e5f6f9 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  #ffffff 0%,#e5f6f9 100%); /* IE10+ */
  background: linear-gradient(to bottom,  #ffffff 0%,#e5f6f9 100%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e5f6f9',GradientType=0 ); /* IE6-9 */  
  -webkit-box-shadow: inset 2px 0px 15px rgba( 0, 0, 0, 0.05), 2px 5px 15px rgba( 0, 0, 0, 0.1),  0px 2px 2px rgba( 0, 0, 0, 0.1);
    -moz-box-shadow: inset 2px 0px 15px rgba( 0, 0, 0, 0.05), 2px 5px 15px rgba( 0, 0, 0, 0.1),  0px 2px 2px rgba( 0, 0, 0, 0.1);
    box-shadow: inset 2px 0px 15px rgba( 0, 0, 0, 0.05), 2px 5px 15px rgba( 0, 0, 0, 0.1),  0px 2px 2px rgba( 0, 0, 0, 0.1);  
}

nav .nav-menu li ul ul,
nav .nav-menu li ul{
  background: #eee; /* Old browsers */
  background: -moz-linear-gradient(top,  #ffffff 0%, #e5f6f9 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#e5f6f9)); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  #ffffff 0%,#e5f6f9 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  #ffffff 0%,#e5f6f9 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  #ffffff 0%,#e5f6f9 100%); /* IE10+ */
  background: linear-gradient(to bottom,  #ffffff 0%,#e5f6f9 100%); /* W3C */
  -webkit-box-shadow: inset 2px 0px 15px rgba( 0, 0, 0, 0.05), 2px 5px 15px rgba( 0, 0, 0, 0.1),  0px 2px 2px rgba( 0, 0, 0, 0.1);
    -moz-box-shadow: inset 2px 0px 15px rgba( 0, 0, 0, 0.05), 2px 5px 15px rgba( 0, 0, 0, 0.1),  0px 2px 2px rgba( 0, 0, 0, 0.1);
    box-shadow: inset 2px 0px 15px rgba( 0, 0, 0, 0.05), 2px 5px 15px rgba( 0, 0, 0, 0.1),  0px 2px 2px rgba( 0, 0, 0, 0.1);  
}

nav .nav-menu li a{
  color: rgba(5, 5, 5, .5);
  text-shadow: 0px 1px 1px rgba( 255, 255, 255, .8);
  text-decoration: none;
}

nav .nav-menu li a:hover{
  color: rgba(5, 5, 5, .8);
  -webkit-box-shadow: inset 0 2px  19px rgba( 5, 5, 5, 0.1);
    -moz-box-shadow: inset 0 2px 19px rgba( 5, 5, 5,  0.1);
    box-shadow: inset 0 2px 19px rgba( 5, 5, 5, 0.1);
}

nav .nav-menu li  ul li a:hover,
nav .nav-menu li  ul li:hover > a{
  background: #eee;
}

nav .nav-menu li a:active,
nav .nav-menu li.nav-dropdown:hover > a,
nav .nav-menu li.active > a,
nav .nav-menu li.nav-dropdown a:active{
  -webkit-box-shadow: inset 0 2px  25px rgba( 0, 0, 0, 0.2), inset -2px 0px  2px rgba( 0, 0, 0, .2);
    -moz-box-shadow: inset 0 2px 25px rgba( 0, 0, 0, 0.2), inset -2px 0px  2px rgba( 0, 0, 0, .2);
    box-shadow: inset 0 2px 25px rgba( 0, 0, 0, 0.2), inset -2px 0px  2px rgba( 0, 0, 0, .2); 
}

nav .nav-menu.w-divider > li a{
  border-left: 1px solid rgba(255, 255, 255, .5);
  border-right: 1px solid rgba(0, 0, 0, .2);  
}

nav .nav-menu.w-divider li ul li > a:after{
  content: ' ';
  position: absolute; 
  height: 0px;
  bottom: 0px;
  left: 5%;
  right: 5%;
  border-bottom:  1px solid rgba(255, 255, 255, .5);
  border-top: 1px solid rgba(0, 0, 0, .1); 
}

nav .nav-menu.w-divider li ul li:last-child > a:after,
nav .nav-menu li.nav-dropdown ul li a:hover:after{
  border: none;
}

nav .nav-menu.w-divider{
  border-right: 1px solid rgba(255, 255, 255, .5);
  border-left: 1px solid rgba(0, 0, 0, .2); 
}

nav .nav-menu.w-divider li a:active,
nav .nav-menu.w-divider li.active > a{
  border-left: 1px solid rgba(0, 0, 0, .2); 
}

nav .s-button{
  background: #eee;
}


nav.s-collapse .nav-menu > li > a:hover,
nav.s-collapse .nav-menu > li:hover > a,
nav.s-collapse .nav-menu > li.active > a,
nav.s-collapse .nav-menu li > a:active{
  background: #8abbd7; /* Old browsers */
  background: -moz-linear-gradient(top,  #8abbd7 0%, #066dab 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#8abbd7), color-stop(100%,#066dab)); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  #8abbd7 0%,#066dab 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  #8abbd7 0%,#066dab 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  #8abbd7 0%,#066dab 100%); /* IE10+ */
  background: linear-gradient(to bottom,  #8abbd7 0%,#066dab 100%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#8abbd7', endColorstr='#066dab',GradientType=0 ); /* IE6-9 */  
  -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none; 
  color: #fff;
  text-shadow: none;  
}

/* dark style */

nav.dark{
  background: #161b21; /* Old browsers */
  background: -moz-linear-gradient(top,  #161b21 0%, #0a0c0f 99%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#161b21), color-stop(99%,#0a0c0f)); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  #161b21 0%,#0a0c0f 99%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  #161b21 0%,#0a0c0f 99%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  #161b21 0%,#0a0c0f 99%); /* IE10+ */
  background: linear-gradient(to bottom,  #161b21 0%,#0a0c0f 99%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#161b21', endColorstr='#0a0c0f',GradientType=0 ); /* IE6-9 */
  -webkit-box-shadow: inset 2px 0px 15px rgba( 255, 255, 255, 0.2), 2px 5px 15px rgba( 0, 0, 0, 0.3),  0px 2px 2px rgba( 0, 0, 0, 0.2);
    -moz-box-shadow: inset 2px 0px 15px rgba( 255, 255, 255, 0.2), 2px 5px 15px rgba( 0, 0, 0, 0.3),  0px 2px 2px rgba( 0, 0, 0, 0.2);
    box-shadow: inset 2px 0px 15px rgba( 255, 255, 255, 0.2), 2px 5px 15px rgba( 0, 0, 0, 0.3),  0px 2px 2px rgba( 0, 0, 0, 0.2); 
  color: #fff;
  border: 1px solid rgba( 0, 0, 0, .6); 
}

nav.dark .nav-menu .nav-dropdown ul{
  background: #161b21; /* Old browsers */
  background: -moz-linear-gradient(top,  #161b21 0%, #0a0c0f 99%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#161b21), color-stop(99%,#0a0c0f)); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  #161b21 0%,#0a0c0f 99%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  #161b21 0%,#0a0c0f 99%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  #161b21 0%,#0a0c0f 99%); /* IE10+ */
  background: linear-gradient(to bottom,  #161b21 0%,#0a0c0f 99%); /* W3C */
  -webkit-box-shadow: inset 2px 0px 15px rgba( 255, 255, 255, 0.1), 2px 5px 15px rgba( 0, 0, 0, 0.3),  0px 2px 2px rgba( 0, 0, 0, 0.2);
    -moz-box-shadow: inset 2px 0px 15px rgba( 255, 255, 255, 0.1), 2px 5px 15px rgba( 0, 0, 0, 0.3),  0px 2px 2px rgba( 0, 0, 0, 0.2);
    box-shadow: inset 2px 0px 15px rgba( 255, 255, 255, 0.1), 2px 5px 15px rgba( 0, 0, 0, 0.3),  0px 2px 2px rgba( 0, 0, 0, 0.2); 
}

nav.dark .nav-menu.w-divider > li a{
  border-left: 1px solid rgba(255, 255, 255, .1);
  border-right: 1px solid rgba(0, 0, 0, .2);  
}

nav.dark .nav-menu.w-divider li ul li > a:after{
  content: ' ';
  position: absolute; 
  height: 0px;
  bottom: 0px;
  left: 5%;
  right: 5%;
  border-bottom:  1px solid rgba(255, 255, 255, .05);
  border-top: 1px solid rgba(0, 0, 0, .2);
}

nav.dark .nav-menu.w-divider li ul li:last-child > a:after,
nav.dark .nav-menu li.nav-dropdown ul li a:hover:after{
  border: none;
}

nav.dark .nav-menu.w-divider{
  border-right: 1px solid rgba(255, 255, 255, .1);
  border-left: 1px solid rgba(0, 0, 0, .2);
}

nav.dark .nav-menu li a{
  color: rgba(255, 255, 255, .6);
  text-shadow: 1px 0px 1px rgba( 0, 0, 0, .7);    
}

nav.dark .nav-menu li ul li a:hover,
nav.dark .nav-menu li ul li:hover > a{
  background: #222;
}

nav.dark .nav-menu li a:hover{
  color: rgba(255, 255, 255, .9);
  -webkit-box-shadow: inset 0 2px  15px rgba(255, 255, 255, 0.1);
    -moz-box-shadow: inset 0 2px 15px rgba(255, 255, 255, 0.1);
    box-shadow: inset 0 2px 15px rgba(255, 255, 255, 0.1);    
}

nav.dark .nav-menu li a:active,
nav.dark .nav-menu .nav-dropdown:hover > a,
nav.dark .nav-menu li.active > a,
nav.dark .nav-menu li.nav-dropdown a:active{
  -webkit-box-shadow: inset 0 2px  25px rgba( 0, 0, 0, 1);
    -moz-box-shadow: inset 0 2px 25px rgba( 0, 0, 0, 1);
    box-shadow: inset 0 2px 25px rgba( 0, 0, 0, 1); 
}

nav.dark .s-button{
  background: #161b21; /* Old browsers */
  background: -moz-linear-gradient(top,  #161b21 0%, #0a0c0f 99%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#161b21), color-stop(99%,#0a0c0f)); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  #161b21 0%,#0a0c0f 99%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  #161b21 0%,#0a0c0f 99%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  #161b21 0%,#0a0c0f 99%); /* IE10+ */
  background: linear-gradient(to bottom,  #161b21 0%,#0a0c0f 99%); /* W3C */
  color: rgba( 255, 255, 255, .6);
  text-shadow: none;
  border: 1px solid rgba(25, 255, 255, .15);
  -webkit-box-shadow: inset 0 2px  5px rgba( 255, 255, 255, .1), 0px 1px 1px rgba( 0, 0, 0, .1);
    -moz-box-shadow: inset 0 2px 5px rgba( 255, 255, 255, .1), 0px 1px 1px rgba( 0, 0, 0, .1);
    box-shadow: inset 0 2px 5px rgba( 255, 255, 255, .1), 0px 1px  1px rgba( 0, 0, 0, .1);  
}


nav.dark .s-button:hover{
  color: rgba( 255, 255, 255, 1);
  border: 1px solid rgba(255, 255, 255, .25); 
  -webkit-box-shadow: inset 0px 0px 7px rgba( 255, 255, 255, 0.2), 2px 5px 15px rgba( 0, 0, 0, 0.3),  0px 2px 2px rgba( 0, 0, 0, 0.2);
    -moz-box-shadow: inset 0px 0px 7px rgba( 255, 255, 255, 0.2), 2px 5px 15px rgba( 0, 0, 0, 0.3),  0px 2px 2px rgba( 0, 0, 0, 0.2);
    box-shadow: inset 0px 0px 7px rgba( 255, 255, 255, 0.2), 2px 5px 15px rgba( 0, 0, 0, 0.3),  0px 2px 2px rgba( 0, 0, 0, 0.2);    
}

nav.dark .s-button:active,
nav.dark .s-button.active{
  color: rgba( 255, 255, 255, .6);  
  border: 1px solid rgba(0, 0, 0, .2);
  border-top:  1px solid rgba(0, 0, 0, .3);
  border-bottom:  1px solid rgba(255, 255, 255, .1);    
  -webkit-box-shadow: inset 0 2px  5px rgba( 0, 0, 0, .3), inset 0px 0px  15px rgba( 0, 0, 0, .3), inset 0px 0px 7px rgba( 255, 255, 255, 0.1);
    -moz-box-shadow: inset 0 2px 5px rgba( 0, 0, 0, .3), inset 0px 0px  15px rgba( 0, 0, 0, .3), inset 0px 0px 7px rgba( 255, 255, 255, 0.1);
    box-shadow: inset 0 2px 5px rgba( 0, 0, 0, .3), inset 0px 0px  15px rgba( 0, 0, 0, .3), inset 0px 0px 7px rgba( 255, 255, 255, 0.1);
}

/* dark s-collapse menu styles */

nav.dark.s-collapse .nav-menu li ul, 
nav.dark.s-collapse .nav-menu li ul ul{
  border: none;
  -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none; 
  background: none; 
}

nav.dark.s-collapse .nav-menu > li > a:hover,
nav.dark.s-collapse .nav-menu > li > a:active,
nav.dark.s-collapse .nav-menu > li:hover > a,
nav.dark.s-collapse .nav-menu > li.active > a{
  background: #8abbd7; /* Old browsers */
  background: -moz-linear-gradient(top,  #8abbd7 0%, #066dab 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#8abbd7), color-stop(100%,#066dab)); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  #8abbd7 0%,#066dab 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  #8abbd7 0%,#066dab 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  #8abbd7 0%,#066dab 100%); /* IE10+ */
  background: linear-gradient(to bottom,  #8abbd7 0%,#066dab 100%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#8abbd7', endColorstr='#066dab',GradientType=0 ); /* IE6-9 */  
  -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none; 
  color: #fff;  
}

/*==========================================

  Responsive Nav s-collapse

===========================================*/

nav.s-collapse{
  min-height: 50px;
}

nav.s-collapse > .nav-menu{
  display: none;
}


nav.s-collapse .s-collapse-trigger{
  display: block;
}

nav.s-collapse:first-child .nav-menu{
  margin: 0px auto;
  margin-top: 50px;
}

nav.s-collapse .nav-menu,
nav.s-collapse .nav-menu ul{
  width: 100%;
  float: left;
}

nav.s-collapse .nav-menu.w-divider,
nav.s-collapse .nav-menu.w-divider li a{
  border: none; 
}

nav.s-collapse .nav-menu li,
nav.s-collapse .nav-menu ul li{
  width: 100%;
  float: none;
}

nav.s-collapse .nav-menu li a,
nav.s-collapse .nav-menu li a.active,
nav.s-collapse .nav-menu li.nav-dropdown a{
  margin-left: 20px;
  margin-right: 20px;
}

nav.s-collapse .nav-menu li a{
  font-weight: bold;
  float: none;
  margin-bottom: 5px;
  -webkit-border-radius: 5px; 
  -moz-border-radius: 5px; 
  -o-border-radius: 5px; 
  border-radius: 5px;
}

/* submenus */

nav.s-collapse .nav-menu li ul, 
nav.s-collapse .nav-menu li ul ul{
  border: none;
  -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none; 
  background: none; 
  position: relative;
  visibility: visible;
  opacity: 1;
  float: none;
  margin-top: 0px;
  margin-left: 0px;
  display: none;
}

nav.s-collapse .nav-menu li ul ul{
  position: static;
  margin-left: 5%;
  width: auto;
}

nav.s-collapse .nav-menu li ul:before,
nav.s-collapse .nav-menu li ul:after {
  display: table;
  line-height: 0;
  content: "";
}

nav.s-collapse .nav-menu li ul:after {
  clear: both;
}



</style>
	</head>
	<body>
	
<!-- <?php //include 'demo.html'; ?>   -->
		<!-- <div class="cbp-af-header">
        <div class="cbp-af-inner">
          <h1><a href="index.php">GENERO'16</a></h1>
          <nav>
            <a href="events.php">Events</a>
            <a href="about.php">About Us</a>
            <a href="team.php">Team</a>
            <a href="contact.php">Contact</a>
            <a href="gallery.php">Gallery</a>
          </nav>
        </div>
      </div> -->
    <header style="width: 100%; margin: 0px auto;">
    <nav class="dark w-shadow">
      <div class="nav-container">
        <ul class="nav-menu slideUp w-divider">
          <li> <a href="index.php" ><span style="font-family: 'Poiret One';font-size:19px;">Home</span></a> </li>
          <li class="nav-dropdown"> 
            <a href="about.php"><span style="font-family: 'Poiret One';font-size:19px;">About Us </span></a>    
          </li>
          <li> <a href="events.php"> <span style="font-family: 'Poiret One';font-size:19px;">Events</span></a> </li>
          <li> <a href="gallery.php"><span style="font-family: 'Poiret One';font-size:19px;">Gallery</span></a> </li>
          <li> <a href="team.php"><span style="font-family: 'Poiret One';font-size:19px;">Team</span></a></li>
          <li> <a href="contact.php"><span style="font-family: 'Poiret One';font-size:19px;">Contact</span></a></li>
          <li> <a href="special_attraction.php"><span style="font-family: 'Poiret One';font-size:19px;">Special Attraction</span></a></li>
                 
        </ul>   
        
        <a class="s-button s-collapse-trigger" href="#">+</a>
      </div>  
    </nav>
  </header> 
		<div class="container">	
	
			<div id="bl-main" class="bl-main">
	


				<section>
					
					<div class="bl-box">

						<h2 class="bl-icon"><img src="speacialattraction/css/1.png"><br><span style="color:white;font-family: 'Eagle Lake', cursive;">STAR NIGHT</span></h2>
					</div>
					<div class="bl-content">
					<br><br><br><br><br><br><br><br><br><br><br><br>
						<h2 align="center" style="color:white;font-family: 'Eagle Lake', cursive;">COMING SOON</h2>
						
							
						</p>
					</div>
					<span class="bl-icon bl-icon-close" ></span>
				</section>
				<section id="bl-work-section">
					<div class="bl-box">
						<h2 class="bl-icon"><img src="speacialattraction/css/2.png"><br><span style="color:white;font-family: 'Eagle Lake', cursive;">ASHMITA THEATRE</span></h2>
					</div>
					<div class="bl-content">
						<br><br><br><br><br><br><br><br><br><br><br><br>
						<h2 align="center" style="color:white;font-family: 'Eagle Lake', cursive;">COMING SOON</h2>
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<section>
					<div class="bl-box">
						<h2 class="bl-icon "><img src="speacialattraction/css/3.png"><br><span style="color:white;font-family: 'Eagle Lake', cursive;">DJ NIGHT</span></h2>
					</div>
					<div class="bl-content">
					<br><br><br><br><br><br><br><br><br><br><br><br>
						<h2 align="center" style="color:white;font-family: 'Eagle Lake', cursive;">COMING SOON</h2>
						
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<section>
					<div class="bl-box">
						<h2 class="bl-icon "><img src="speacialattraction/css/4.png"><br><span style="color:white;font-family: 'Eagle Lake', cursive;">SOCIAL FEST</span></h2>
					</div>
					<div class="bl-content">
						
<br><br><br><br><br><br><br><br><br><br><br><br>
						<h2 align="center" style="color:white;font-family: 'Eagle Lake', cursive;">COMING SOON</h2>
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<!-- Panel items for the works -->
				<div class="bl-panel-items" id="bl-panel-work-items">
					<div data-panel="panel-1">
						<div>
							<img src="images/1.jpg" />
							<h3>Fixie bespoke</h3>
							<p>Iphone artisan direct trade ethical Austin. Fixie bespoke banh mi ugh, deep v vinyl hashtag. Tumblr gentrify keffiyeh pop-up iphone twee biodiesel. Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
						</div>
					</div>
					<div data-panel="panel-2">
						<div>
							<img src="images/2.jpg" />
							<h3>Chillwave mustache</h3>
							<p>Squid vinyl scenester literally pug, hashtag tofu try-hard typewriter polaroid craft beer mlkshk cardigan photo booth PBR. Chillwave 90's gentrify american apparel carles disrupt. Pinterest semiotics single-origin coffee craft beer thundercats irony, tumblr bushwick intelligentsia pickled. Narwhal mustache godard master cleanse street art, occupy ugh selfies put a bird on it cray salvia four loko gluten-free shoreditch.</p>
						</div>
					</div>
					<div data-panel="panel-3">
						<div>
							<img src="images/3.jpg" />
							<h3>Austin hella</h3>
							<p>Ethical cray wayfarers leggings vice, seitan banksy small batch ethnic master cleanse. Pug chillwave etsy, scenester meh occupy blue bottle tousled blog tonx pinterest selvage mixtape swag cosby sweater. Synth tousled direct trade, hella Austin craft beer ugh chambray.</p>
						</div>
					</div>
					<div data-panel="panel-4">
						<div>
							<img src="images/4.jpg" />
							<h3>Brooklyn dreamcatcher</h3>
							<p>Fashion axe 90's pug fap. Blog wayfarers brooklyn dreamcatcher, bicycle rights retro YOLO. Wes anderson lomo 90's food truck 3 wolf moon, twee jean shorts. Iphone small batch twee wolf yr before they sold out. Brooklyn echo park cred, portland pug selvage flannel seitan tousled mcsweeney's.</p>
						</div>
					</div>
					<nav>
						<span class="bl-next-work">&gt; Next Project</span>
						<span class="bl-icon bl-icon-close"></span>
					</nav>
				</div>
			</div>
		</div><!-- /container -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="speacialattraction/js/boxlayout.js"></script>
		<script>
			$(function() {
				Boxlayout.init();
			});
		</script>

<script>
(function($){
 
    $.fn.extend({
    
        navResponsive: function() {
 
            return this.each(function() {
        var nav = $(this);
    
        // s-collapse menu items
    
        nav.find('.nav-menu').find('li a').on('click',function(e){
          var ul = $(this).siblings('ul');
          if(ul.length){ e.preventDefault(); }
          if($(this).closest('nav').hasClass('s-collapse'))
          {
            ul.find('ul').hide();
            ul.find('a .s-collapse-trigger').removeClass('active').text('+');
            if(ul.is(':hidden')){ $(this).find('.s-collapse-trigger').addClass('active').text('-'); }
            else{ $(this).find('.s-collapse-trigger').removeClass('active').text('+'); }
            ul.slideToggle(100);    
          } 
        });
        
        /* s-collapse entire menu */
        
        nav.find('.s-collapse-trigger').click(function(e){
          e.preventDefault();
          var nav = $(this).siblings('.nav-menu');
          if(nav.is(':hidden')){ $(this).addClass('active').text('-'); }
          else{ $(this).removeClass('active').text('+'); } 
          $(this).siblings('.nav-menu').slideToggle();
        });
        
        /* set s-collapse based on nav size */
        
        var defaultWidth = 0;
        nav.find('.nav-menu').each(function(){
          defaultWidth += $(this).outerWidth();
        }); 
        if(nav.innerWidth() < defaultWidth + 150){
          nav.addClass('s-collapse'); 
          nav.find('.nav-menu').slideUp(500);
        }
        
        $(window).resize(function(){
          var el = nav.find('.nav-menu');
          if(nav.innerWidth() < defaultWidth + 150)
          {
            if(!nav.hasClass('s-collapse'))
            {
              nav.addClass('s-collapse', 300);
              el.find('ul').hide();
              el.hide();
              nav.find('.s-collapse-trigger').removeClass('active').text('+');
            } 
          }
          else
          {
            if(nav.hasClass('s-collapse'))
            {
              nav.find('.s-collapse-trigger:last').addClass('active').text('-');    
              nav.removeClass('s-collapse', 300);     
              el.find('ul').show();
              el.fadeIn();          
            } 
          }
        });
      
            });
        }
    });
     
})(jQuery);

</script>

	</body>
</html>
