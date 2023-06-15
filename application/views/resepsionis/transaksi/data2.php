 <?php $this->load->view('resepsionis/transaksi/header'); ?> 


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Confirm</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="<?=site_url('Welcome/index')?>">Dashboard</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between p-3">
            
            <div class="form-floating mb-2 mt-3 ">
                
     
            </div> 
            <div class="form-floating mb-2 mt-3 ">
                 <label>Cari Nama Tamu</label>
                <form action="<?=site_url('Search/Search/');?>" method="get">
                <input type="text" class="form-control" name="query" placeholder="Cari Nama..." autocomplete="off" autofocus="">
                </form>
            </div>
            
            
        </div> 

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="toast">
                            <div class="toast-body">
                               <?=$this->session->flashdata('msg');?>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Check-in</th>
                                            <th scope="col">Check-out</th>
                                            <th scope="col">Jumlah Kamar</th>
                                            <th scope="col">Tipe Kamar</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">No. Telp</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $i = 1;
                                            foreach ($result as $trans ) {
                                         ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?=$trans->tgl_in ?></td>
                                            <td><?=$trans->tgl_out ?></td>
                                            <td><?=$trans->jumlah ?></td>
                                            <td><?=$trans->jenis ?></td>
                                            <td><?=$trans->nama ?></td>
                                            <td><?=$trans->email ?></td>
                                            <td><?=$trans->no ?></td>
                                            <td><?=$trans->status ?></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


              

    </div>
    <script src="<?= base_url('assets/vendors/jquery/dist/jquery.min.js');?>"></script>
    <script src="<?= base_url('assets/vendors/popper.js/dist/umd/popper.min.js');?>"></script>
    <script src="<?= base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('assets/main.js');?>"></script>
    
    
</body>
</html>