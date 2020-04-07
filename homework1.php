<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<style type="text/css">
figure{
    display:table;
    width:250px;
}
body{
    background-color: silver;
    color:grey;
    }
img{
  width: 250px; height: 250px;
  object-fit: cover;
}
.cp_iptxt {
	position: relative;
	width: 30%;
	margin: 40px 3%;
}
.cp_iptxt input[type=text] {
	font: 15px/24px sans-serif;
	box-sizing: border-box;
	width: 100%;
	margin: 8px 0;
	padding: 0.3em;
	transition: 0.3s;
	border: 1px solid #1b2538;
	border-radius: 4px;
	outline: none;
}
.cp_iptxt input[type=text]:focus {
	border-color: #da3c41;
}
.cp_iptxt input[type=text] {
	padding-left: 10px;
}
.cp_iptxt i {
	position: absolute;
	top: 8px;
	left: 0;
	padding: 9px 8px;
	transition: 0.3s;
	color: #aaaaaa;
}
.cp_iptxt input[type=text]:focus + i {
	color: #da3c41;
}
#site-box { 
  width : 300px ; }

</style>
</head>
<body>
</body>
</html>