
<html>
<head>
<script src="jquery-3.2.1.min (1).js" type="text/javascript"></script>
<script src="jquery.bvalidator.js" type="text/javascript"></script>
<link href="bvalidator.css" type="text/css" rel="stylesheet" />


<script type="text/javascript"> 

    $(document).ready(function () {
	
        $('#myform').bValidator();
    });
</script> 
<script> 
// now fore direct validation from above file u take data-bvalidator="" from the file "jquery.bvalidator.js"

// allways take <form id=""  in jquery with #name
</script>


<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" id="myform">
<table align="center" border="2">
<caption>Registration Form</caption>
<tr>
<td>User Name</td>
<td><input type="text" name="unm" data-bValidator="required,alpha"Data></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="pass" id="pass" data-bValidator="required,maxlength[8],minlength[3]"Data ></td>
</tr>

<tr>
<td>Confirm Password</td>
<td><input type="password" name="cpass" data-bValidator="required,equalto[pass]"Data ></td>
</tr>

<tr>
<td>Email</td>
<td><input type="text" name="email" data-bValidator="required,email"Data ></td>
</tr>

<tr>
<td>Phone</td>
<td><input type="text" name="phone" data-bValidator="required,number"Data  ></td>
</tr>

<tr>
<td><input type="submit" name="submit" value="Register"></td>
</tr>


</table>
</form>
</body>
</html>