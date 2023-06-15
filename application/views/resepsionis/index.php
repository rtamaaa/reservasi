 <?php $this->load->view('resepsionis/transaksi/header'); ?> 


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    Selamat datang <b><?= $this->session->userdata('nama')?></b> anda berhasil login 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton3" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <div class="dropdown-menu-content">
                                   <a class="dropdown-item" href="<?=site_url('Transaksi/read')?>">Kelola</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <span class="count"><?=$this->db->count_all('transaksi');?></span>
                        </h4>
                        <p class="text-light">Transaksi Terkonfirmasi</p>

                    </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
            </div>
            <!--/.col-->

            
            <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-flat-color-4">
                                <div class="card-body pb-0">
                                    <div class="dropdown float-right">
                                        <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton4" data-toggle="dropdown">
                                            <i class="fa fa-cog"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                            <div class="dropdown-menu-content">
                                                <a class="dropdown-item" href="<?=site_url('Transaksi/read')?>">Kelola</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="mb-0">
                                        <span class="count"><?=$this->db->count_all('transaksi');?></span>
                                    </h4>
                                    <p class="text-light">Transaksi Pending</p>

                                    <div class="chart-wrapper px-3" style="height:70px;" height="70">
                                        <canvas id="widgetChart4"></canvas>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-flat-color-2">
                                <div class="card-body pb-0">
                                    <div class="dropdown float-right">
                                        <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton4" data-toggle="dropdown">
                                            <i class="fa fa-cog"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                            <div class="dropdown-menu-content">
                                                <a class="dropdown-item" href="<?=site_url('Transaksi/baca')?>">Kelola</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="mb-0">
                                        <span class="count"><?=$this->db->count_all('transaksi');?></span>
                                    </h4>
                                    <p class="text-light">Stok Kamar</p>

                                    <div class="chart-wrapper px-3" style="height:70px;" height="70">
                                        <canvas id="widgetChart4"></canvas>
                                    </div>

                                </div>
                            </div>
                        </div>

    </div>
    <script src="<?= base_url('assets/vendors/jquery/dist/jquery.min.js');?>"></script>
    <script src="<?= base_url('assets/vendors/popper.js/dist/umd/popper.min.js');?>"></script>
    <script src="<?= base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('assets/main.js');?>"></script>
    
</body>
</html>