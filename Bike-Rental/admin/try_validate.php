<html>
    <head>
<script src="jquery-2.1.3.min.js" type="text/javascript"></script>

<script src="jquery.bvalidator.js" type="text/javascript"></script>
<link href="bvalidator.css" type="text/css" rel="stylesheet" />

<script type="text/javascript"> 
    $(document).ready(function () {
	
        $('#form1').bValidator();
    });
	</script> 
</head>
<body>
<form action="" enctype="multipart/form-data" id="form1" method="post">
    <br>
    <br>
    <input type="text" name="name" data-bvalidator="required,alpha" >
    <input type="submit" name="submit" value="submit">
</from>
</body>
</html>