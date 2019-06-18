<?php require_once('include/config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Kriptografi RSA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Ngelu" name="description" />
    <meta content="Gilang Adi S" name="author" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/kalkulator.js"></script>
	<script>
</script>
</head>

<body>
    <div class="wrapper">
        <div class="left-side-menu">
            <div class="slimscroll-menu">
                <a href="index.html" class="logo text-center">
                    <span class="logo-lg">
                        <img src="assets/image/logo.png" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/image/logo.png" alt="" height="16">
                    </span>
                </a>
                <ul class="metismenu side-nav">
                    <li class="side-nav-item">
                        <a href="<?php echo $hostname; ?>" class="side-nav-link">
                            <i class="dripicons-meter"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>
					<li class="side-nav-item">
                        <a href="<?php echo $hostname; ?>kalkulator" class="side-nav-link">
                            <i class="dripicons-lock"></i>
                            <span> Kunci </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="<?php echo $hostname; ?>enkripsi" class="side-nav-link">
                            <i class="dripicons-lock"></i>
                            <span> Enkripsi </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="<?php echo $hostname; ?>dekripsi" class="side-nav-link">
                            <i class="dripicons-lock-open"></i>
                            <span> Dekripsi </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-page">
            <div class="content">
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-right-menu float-right mb-0">
                        <li class="dropdown notification-list">
                            <a class="nav-link nav-user arrow-none mr-0">
                                <span>
                                    <span class="account-user-name">Halo, Selamat Datang</span>
                                    <span class="account-position">cyi.me</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <button class="button-menu-mobile open-left disable-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </div>
				<?php
				if ($_GET['halaman']=='enkripsi'){
					if(isset($_POST['plaintext'])){
						$plaintext=$_POST['plaintext'];
						$chipertext=enk($plaintext);
						$enk_array_num=enk_array_num($_POST['plaintext']);
						$enk_array=enk_array($_POST['plaintext']);
					}
					include('include/enkripsi.php');
				}elseif($_GET['halaman']=='dekripsi'){
					if(isset($_POST['plaintext'])){
						$chipertext=$_POST['chipertext'];
						$plaintext=dek($chipertext);
						$chipertext_array=dek_array_num($_POST['chipertext']);
						$plaintext_array=dek_array($_POST['chipertext']);
					}
					include('include/dekripsi.php');
				}elseif($_GET['halaman']=='kalkulator'){
					if(isset($_POST['e']) && isset($_POST['d']) && isset($_POST['n'])){
						$_SESSION['e']=$_POST['e'];
						$_SESSION['d']=$_POST['d'];
						$_SESSION['n']=$_POST['n'];
					}
                    include('include/kalkulator.php');
                }elseif($_GET['halaman']=='reset'){
					if(isset($_SESSION['e']) && isset($_SESSION['d']) && isset($_SESSION['n'])){
                        session_destroy();
                        header("location:".$hostname);
					}else{
                        header("location:".$hostname);
                    }
				}else{
					$data = file_get_contents('assets/json/data.json');
					$data = json_decode($data, true);
					include('include/dashboard.php');
				}
				?> 
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6" id="copyright">
                            2019 © Simple RSA - CYI Media | Universitas Muria Kudus
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right footer-links d-none d-md-block">
                                <a href="https://cyine.id/">Cyine</a>
                                <a href="https://cyi.me/">CYI Media</a>
                                <a href="https://www.vlezo.com/">Vlezo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- bundle -->
    <script src="assets/js/style.js"></script>
</body>

</html>