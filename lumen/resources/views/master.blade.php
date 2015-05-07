<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link rel="stylesheet" type="text/css" href="" >
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!--webfonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>
<style>
/*
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
*/
/* reset */
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0px;padding:0px;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/* start editing from here */
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*end reset*/
/****-----start-body----****/
body{
	background: #035671;
	font-family: 'Open Sans', sans-serif;

}
body a,form li,.submit input[type="submit"]{
	transition: 0.1s all;
	-webkit-transition: 0.1s all;
	-moz-transition: 0.1s all;
	-o-transition: 0.1s all;
}
body  h1{
	text-align: center;
	font-size: 2.7em;
	  color: #fff;
	padding: 1em 0;
}

/*---login-form1--------*/
.login {
  margin:5% auto 7%;
  width:30%;
  background: #fff;
  border-radius: 0.5em;
  -webkit-border-radius: 0.5em;
  -o-border-radius: 0.5em;
  -moz- border-radius: 0.5em;
}
form {
	  padding: 10% 4% 0% 4%;
}
form li {
  list-style: none;
  width: 100%;
  font-weight: 500;
  border: 1px solid #ccc;
  background: #fff;
  margin: 1em 0;
  outline: none;
}

input[type="text"], input[type="password"] {
  width: 83%;
  padding:1em 0em 1em 2.7em;
  color: #858282;
  font-size: 15px;
  outline: none;
  background: none;
  font-weight: 500;
  border: none;
}

.submit{

}
.submit input[type="submit"]{
	font-size:20px;
	font-weight: 400;
	color: #fff;
	cursor: pointer;
	outline: none;
	padding:21px 20px;
	width: 100%;
	margin-bottom: 5%;
	border: none;
	transition: 0.1s all;
	-webkit-transition: 0.1s all;
	-moz-transition: 0.1s all;
	-o-transition: 0.1s all;
	background: #00bffe; 
	border-bottom-right-radius: 0.44em;
  -webkit-border-bottom-right-radius: 0.4em;
  -o-border-bottom-right-radius: 0.4em;
  -moz-border-bottom-right-radius: 0.4em;
   border-bottom-left-radius: 0.4em;
  -webkit-border-bottom-left-radius: 0.4em;
  -o-border-bottom-left-radius: 0.4em;
  -moz-border-bottom-left-radius: 0.4em;
}
input[type="submit"]:hover{
	background:#ffa300;
}

/* user detail */
.detail{
  margin-left: 10%;
  margin-top: 10%;
  padding-bottom: 10%;
}

.detail h3 {
  color: #000F2E;
  font-size: 1.2em;
  padding: 7px 9px 5px 27px;
  font-weight: 300;
}

/* button */
.btn-list{
	display : block;
	margin-left: 32%;
	margin-top : 3%;
}
.btn{
	display: inline-block;
	background: #00bffe;
	padding-top: 15px;
	line-height:20px;
	border: none;
	outline:none;
	width: 20%;
	height: 50px;
	margin: 0% 0% 0% 5%;
	text-align: center;
	text-decoration: bold;
	font-size: 20pt;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
	
	border-bottom-right-radius: 0.44em;
    border-bottom-left-radius: 0.4em;
    border-top-right-radius: 0.4em;
    border-top-left-radius: 0.4em;
}
.btn:hover{
	background: #ffa300;
}

.btn-active{
	display: inline-block;
	background: #00bffe;
	padding-top: 15px;
	line-height:20px;
	border: none;
	outline:none;
	width: 20%;
	height: 50px;
	margin: 0% 0% 0% 5%;
	text-align: center;
	text-decoration: bold;
	font-size: 20pt;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;	
	border-bottom-right-radius: 0.44em;
    border-bottom-left-radius: 0.4em;
    border-top-right-radius: 0.4em;
    border-top-left-radius: 0.4em;
}

.btn-list a{
	color : white;
}

.btn-register{
	text-align: center;
	font-size:20px;
	font-weight: 400;
	color: #fff;
	cursor: pointer;
	outline: none;
	padding:21px 20px;
	width: 91%;
	margin-bottom: 5%;
	border: none;
	transition: 0.1s all;
	-webkit-transition: 0.1s all;
	-moz-transition: 0.1s all;
	-o-transition: 0.1s all;
	background: #00bffe; 
	border-bottom-right-radius: 0.44em;
    border-bottom-left-radius: 0.4em;
    border-top-right-radius: 0.4em;
    border-top-left-radius: 0.4em;
}

.btn-register:hover{
	background:#ffa300;
}

.btn-register a{
	color: white;
}
/* ribbon style */
.h2 h2 {
  color: white;
  font-size: 1.2em;
  padding: 7px 9px 5px 27px;
  font-weight: 300;
}
 .h2.ribbon-wrapper {
	position: relative;
}
 .h2 .ribbon-front {
	background-color: #ffa300;
	height: 43px;
	width: 145px;
	position: relative;
	left:-10px;
	z-index: 2;
	top: 22px;
}

 .h2 .ribbon-edge-topleft,
 .h2 .ribbon-edge-topright,
 .h2 .ribbon-edge-bottomleft,
 .h2 .ribbon-edge-bottomright {
	position: absolute;
	z-index: 1;
	border-style:solid;
	height:0px;
	width:0px;
}

 .h2 .ribbon-edge-topleft,
 .h2 .ribbon-edge-topright {
}

 .h2 .ribbon-edge-bottomleft,
 .h2 .ribbon-edge-bottomright {
	top:65px;
}

 .h2 .ribbon-edge-topleft,
 .h2 .ribbon-edge-bottomleft {
	left: -10px;
	border-color: transparent #e17e02 transparent transparent;
}

 .h2 .ribbon-edge-topleft {
	top: -0px;
	border-width: 0px 10px 0 0;
}
 .h2 .ribbon-edge-bottomleft {
	  border-width: 0 10px 15px 0;
}

 .h2 .ribbon-edge-topright,
 .h2 .ribbon-edge-bottomright {
	left: 180px;
	border-color: transparent transparent transparent #e17e02;
}

 .h2 .ribbon-edge-topright {
	top: -0px;
	border-width: 0px 0 0 0px;
}
 .h2 .ribbon-edge-bottomright {
	border-width: 0 0 0px 0px;
}
.ribbon-edge-topleft2 {
  position: absolute;
  z-index: 1;
  border-style: solid;
  height: 0px;
  width: 0px;
}
.ribbon-edge-topleft2 {
   left: 135px;
  border-color: transparent #ffa300 transparent transparent;
}
.ribbon-edge-topleft2 {
  top: 22px;
  border-width: 22px 20px 21px 37px;
  transform: rotate(-180deg);
  border-radius: 1px;
}
/****************/
.copy-right {
	text-align: center;
	background:url("../images/red.png")repeat;
	padding: 1em  1em;
}
.copy-right p {
	  color: #fff;
	font-size: 1em;
	font-weight:400;
	  margin-top: 0.5em;
}
.copy-right p a {
	  color: #fff;
}
.copy-right p a:hover {
	text-decoration: underline;
}
/*-----start-responsive-design------*/
@media (max-width:1440px){
}
@media (max-width:1366px){
	.login-01 {
	  margin: 0 auto;
  		width: 35%;
  
	}
	form {
	  padding: 12% 4% 6% 4%;
	}
	body  h1{
	font-size: 2.5em;
	}
}
@media (max-width:1280px){
	.login {
	   margin: 2% auto 6%;
	  width: 35%;
	}

}
@media (max-width:1024px){
	.login {
	  margin: 2% auto 6%;
	  width:40%;
	}
	body  h1{
	font-size: 2.3em;
	}

}
@media (max-width:768px){
	.login {
	    margin: 3% auto 8%;
	  width:55%;
	}
	body  h1{
	font-size: 2.1em;
	}
}
@media (max-width:640px){
	.login {
  margin:3% auto 8%;
  width: 66%;
}
.copy-right p {
  font-size: 0.9em;
  line-height: 1.6em;
}
body  h1{
	font-size: 2em;
	}
	
}
@media (max-width:480px){
	.login {
    margin: 4% auto 18%;
  width:87%;
}
body  h1{
	font-size: 1.8em;
	}

	
}
@media (max-width:320px){
	.login {
    margin: 4% auto 8%;
  width: 89%;
	}
	.submit input[type="submit"]{
	font-size:18px;
	padding:18px 18px;
	}
	.copy-right p {
  font-size: 0.85em;
  line-height: 1.6em;
	}
	input[type="text"], input[type="password"] {
	  font-size: 13px;
	}
	.icon {
  margin: 8px -29px 0px 0px;
  padding: 5px 14px 0 0;
}
	form li {
  width: 99%;
	}
	
}

</style>
<div class="btn-list">
		@yield('btn')
</div>
@yield('content')
</body>
</html>