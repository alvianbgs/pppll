<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/pelanggan/img/favicon.ico')?>" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('/assets/pelanggan/css/styles.css')?>" rel="stylesheet" />
    </head>
    <style>
    body {
    background-image: url('https://webstatic-sea.mihoyo.com/hk4e/upload/fb/common.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}


</style>
    <?php $this->load->view('layout/layoutpelanggan/temp_sidebar.php'); ?>
        <!-- Page Content-->
        <div class="container-fluid p-0">
        <h1>PROFILE</h1>
            <!-- About-->
            <section class="resume-section" id="profile">
            <form>
                <div class="form-group">
                <h3 style="color:blue;">Email</h3>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo $this->session->userdata('email_user');?>" disabled>
                </div>
                <div class="form-group">
                <h3 style="color:blue;">Role</h3>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="<?php echo $this->session->userdata('role_user');?>"disabled>
                </div>
                <div class="form-group">
                <h3 style="color:blue;">Nama</h3>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo $this->session->userdata('nama_user');?>"disabled>
                    
                </div>
                <div class="form-group">
                <h3 style="color:blue;">Alamat</h3>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo $this->session->userdata('alamat_user');?>"disabled>
                </div>
                <div class="form-group">
                <h3 style="color:blue;">Jenis Kelamin</h3>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo $this->session->userdata('jk_user');?>"disabled>
                </div>
                
                <br>
            <button type="submit" class="btn btn-primary">Edit</button>
            </form>
            </section>
            <hr class="m-0" />
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url('assets/pelanggan/js/scripts.js')?>"></script>
    </body>
</html>
