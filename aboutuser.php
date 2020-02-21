<style type="text/css">
		div#content{
			float: center;
			padding: 0px 0 15px 0;
			margin: 70px 50px 0 50px;
		}
		div#content-inner-login {
			display: inline-block;
			transition: all 1s ease;
		}
  			.flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative; 
                margin-top: 70px;
                margin-left: 70px;
                border-radius: 5px;
                box-shadow: 0px 3px 7px 1px #404142;
			border-radius: 5px;
			background-color: white;
            }
            .bg {
				background-attachment: fixed;
				background-size: 125%;
				background-repeat: repeat;
			}
	</style>
</head>
<div style=" padding:10px; overflow:auto; width:138%; height:375px;">
<center>
	<div id="content-inner-login">
		<form action="login.php?op=in" method="POST">
			<table cellpadding="0" cellspacing="15" class="flex-center position-ref bg">
				<tr>
					<th colspan="5"><font color="black">Data Anda</font><br><br>
						<table>
							<tr>
								<td>
									<img src="image/user.png" width="100" height="100" style="margin-right: 18px;">
								</td>
								<td style="vertical-align: top"><font color="black">
									Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_SESSION['user'];?><br>
									Nama Anda&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_SESSION['nama'];?><br>
									Akses &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_SESSION['level'];?><br>
								</td>
								</font>
							</tr>
							<tr height=5>
							</tr>
						</table>
					</th>
				</tr>
			</table>
		</form>
	</div>
</center>
</div>