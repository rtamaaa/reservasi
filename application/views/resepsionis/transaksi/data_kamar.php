<?php $this->load->view('resepsionis/transaksi/header'); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Stok Kamar</h1>
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
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Jenis Kamar</th>
                                            <th scope="col">Fasilitas</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Stok</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $i = 1;
                                            foreach ($result as $kmr ) {
                                                 $tampil = $this->db->get_where('transaksi',array('jenis' => $kmr->jenis))->row(); 
                                         ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><img src="<?= base_url('images/kamar/'.$kmr->gambar)?>" width="150px" height="100px"></td>
                                            <td><?=$kmr->jenis ?></td>
                                            <td><?=$kmr->fasilitas ?></td>
                                            <td><?=$kmr->harga ?></td>
                                            <?php if ($tampil == true) {
                                               $tampil = $kmr->jumlah_kmr - $tampil->jumlah;
                                            }else{
                                                $tampil = $kmr->jumlah_kmr;
                                            } ?>
                                            <td><?=  $tampil ?></td>
                                            
                                            <!-- <td>
                                                <?php 
                                                    if($cat->sold_049==1){ 
                                                        ?>
                                                        <button class="btn btn-default">SOLD OUT</button>
                                                 <?php
                                                    }else{  ?>
                                                    <a class="btn btn-warning" href="<?=site_url('cats049/sale/'.$cat->id_049)?>">Sale</a>
                                                <?php } ?>
                                            </td> -->
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
    <script type="text/javascript">
        $(document).ready(function(){    
            $("#contactForm").submit(function(event){
                submitForm();
                return false;
            });
        });
    </script>
</body>
</html>