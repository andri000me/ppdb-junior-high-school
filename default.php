<!DOCTYPE html>
<html>
<head>
	<title>REBORN | Login</title>
	<style type="text/css">
		div#content-inner-login {
			background-color: #FFF;
			display: inline-block;
			transition: all 1s ease;
		}

		table#main{
			box-shadow: 0px 3px 7px 1px #404142;
			border-radius: 5px;
		}

		.background2 {
    background-attachment: fixed;
                background-size: 120%;
                background-repeat: repeat;
                background-color: white
}

            .content {
                text-align: center;
            }


	</style>
</head>
<body class="content">
<center><div id="content-inner-login" class="flex-center position-ref">
<form action="login.php?op=in" method="POST">
<table cellpadding="0" cellspacing="10" bgcolor="#B0C4DE" id="main" class="background2" border="0">
<tr>
<th colspan="5" style="padding-top: 10px;" ><font style="font-size: 15px;">Login Your Authorization</font></th>
</tr>
<tr>
<td>
<table>
<tr>
<td width="50" height="20"><!-- <img src="image/user.png" width="50" height="30" style="padding-right: 15px; margin-bottom: 10px;" /> --></td>
<td style="vertical-align: middle;">
<!-- <font color="black">Username &nbsp;</font> -->
<input type="text" name="user" size="25" placeholder=" Username"/>
<br /><br />
<!-- <font color="black">Password &nbsp;&nbsp;</font>   -->
<input type="password" name="password" size="25" placeholder=" Password"/><br /><br />
</td>
<td colspan="2"><input style="float:right; padding-left: 10px; padding-top: 3px; padding-bottom: 20px; margin-right: 5px;" type="image" src="image/icon/login.png" width="30" height="30" /></td>
</tr>
</table>
</td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>