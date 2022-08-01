<!DOCTYPE html>
<html>
<head>
<title>Save Integer</title>
<style>
body {
       background: linear-gradient(to left,#D8BFD8,#FAF0E6); }
  
h1 {
     font-size: 50px;
     background: -webkit-linear-gradient(#FDF5E6, #F0FFFF);
     -webkit-background-clip: text;
     -webkit-text-fill-color: transparent;
     text-align: center; }
  
.center-block {
     margin: auto;
     display: block;
}
.center-submit {
             display: block;
             margin : 0 auto;
			 padding:10px;
			 background-color:#D8BFD8;
			 color: #FFFFFF;
			 border: 0px;
			 cursor:pointer;
			 border-radius: 5px;
        }
</style>
</head>
<body>
<h1>Save Integer Value</h1>
<form action="save.php" method="get">
<input class="center-block" type="text" name="intvalue">
<input class="center-submit" type = "submit" value="Save">
</form> 
</body>
</html> 
