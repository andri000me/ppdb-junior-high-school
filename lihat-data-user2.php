<?php error_reporting(0) // tambahkan untuk menghilangkan notice... hehe ?>
<!doctype html>
<html>

    <head>
        <title>Paginasi - Harviacode.com</title>
        <link rel="stylesheet" href="bootstrap.min.css"/>
        <style>
            /*fix margin pagination*/
            .pagination1{
                margin-top: 0px;
            }
        </style>
    </head>
    <body>
        <?php 
//        includekan fungsi paginasi
        include 'pagination1.php';
//        koneksi ke database
        $koneksi = mysql_connect('localhost', 'root', '');
        $db = mysql_select_db('gudang');
        
//        mengatur variabel reload dan sql
        if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']<>""){

//        jika ada kata kunci pencarian (artinya form pencarian disubmit dan tidak kosong)
//        pakai ini
            $keyword=$_REQUEST['keyword'];
            $reload = "lihat-data-user.php?pagination=true&keyword=$keyword";
            $sql =  "SELECT * FROM login WHERE user LIKE '%$keyword%' or nama LIKE '%$keyword%' or level LIKE '%$keyword%'" ;
            $result = mysql_query($sql);
 
	    }else
		{
			
//            jika tidak ada pencarian pakai ini
            $reload = "lihat-data-user.php?pagination=true";
           $sql =  "SELECT * FROM login ORDER BY user";
            $result = mysql_query($sql);
        }
        
        //pagination config start
        $rpp = 10; // jumlah record per halaman
        $page = intval($_GET["page"]);
        if($page<=0) $page = 1;  
        $tcount = mysql_num_rows($result);
        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        $count = 0;
        $i = ($page-1)*$rpp;
        $no_urut = ($page-1)*$rpp;
        //pagination config end
        ?>
        <div class="container" style="margin-top: 100px">
            <div class="row">
                <div class="col-lg-8">
                    <!--muncul jika ada pencarian (tombol reset pencarian)-->
                    <?php
                    if($_REQUEST['keyword']<>""){
                    ?>
                        <a class="btn btn-default btn-outline" href="homeadmin.php?page=lihat-data-user"> Kembali</a>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-lg-4 text-right">
                    <form method="post" action="homeadmin.php?page=lihat-data-user">
                        <div class="form-group input-group">
                            <input type="text" name="keyword" class="form-control" placeholder="Search..." value="<?php echo $_REQUEST['keyword']; ?>">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">Cari
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
           <div class="table-responsive">
             <table class="table table-striped">
 <table class="table table-hover">
                <thead>
                   <tr bgcolor="orange">
					<th>NO</th>&nbsp;
                        <th>Username</th>&nbsp;
                        <th>Nama</th>&nbsp;
                        <th>Password</th>&nbsp;
                        <th>Level Hak Akses</th>&nbsp;
                        
						<th>Action</th>&nbsp;
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while(($count<$rpp) && ($i<$tcount)) {
                        mysql_data_seek($result,$i);
                        $data = mysql_fetch_array($result);
                    ?>
                    <tr>
                        <td width="50px">
                            <?php echo ++$no_urut;?> 
                        </td>

                        <td>
                            <?php echo $data ['user']; ?> 
                        </td>
                        <td>
                            <?php echo $data ['nama']; ?> 
                        </td>
                         <td>
                            <?php echo $data ['password']; ?> 
                        </td>
                        <td>
                            <?php echo $data ['level']; ?> 
                        </td>
                       
                        <td width="100px" class="text-center">
                            <a href="hapus-data-user.php?no_so=<?php echo $data ['no_so']?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                        $i++; 
                        $count++;
                    }
                    ?>
                    </tr>
                      <tr align="center" bgcolor="#DFE6EF">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
	 
    </tr>
      </tbody>
            </table>
            <div class="row">
                <div class="col-md-8">
                    <?php echo paginate_one($reload, $page, $tpages); ?>
                </div>
                <div class="col-md-4 text-right">
                    <!--form ini akan brfungsi untuk mengirimkan query sql yang sekarang aktif-->
                    <!--sql diambil dari baris 28 atau 33, tergantung ada atau tidaknya kata kunci pencarian-->
                    <form action="Lap-User.php" method="post">
                        <input type="hidden" name="sql" value="<?php echo $sql ?>" >
                        <input type="submit" value="PRINT" class="btn btn-default" >
                    </form>
        </div>
               </div>
               </div>
               
           </div>
           </div>
      
    </body>
   
</html>
