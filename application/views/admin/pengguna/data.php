<?php $this->load->view('admin/header'); ?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Pengguna</h1>
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
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><button class="btn btn-warning " data-toggle="modal" data-target="#contact-modal">Tambah Data</button></strong>

                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Nama Lengkap</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">No. Telp</th>
                                            <th scope="col">Akses</th>
                                            <th scope="col">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $i = 1;
                                            foreach ($result as $user ) {
                                         ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><img src="<?= base_url('images/pengguna/'.$user->gambar)?>" width="50px" height="50px" style="border-radius: 100%">
                                            </td>
                                            <td><?=$user->nama ?></td>
                                            <td><?=$user->email ?></td>
                                            <td><?=$user->no ?></td>
                                            <td><?=$user->akses ?></td>
                                            <td>
                                                <a class="btn btn-success" href="<?=site_url('Pengguna/edit/'.$user->id)?>">Edit</a>
                                                <a class="btn btn-danger" href="<?=site_url('Pengguna/delete/'.$user->id)?>" onclick="return confirm('Are U Sure?')">Delete</a>
                                            </td>
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
    <div id="contact-modal" class="modal fade" role="dialog" style="margin-top: 200px">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="close" data-dismiss="modal">×</a>
                    
                </div>
                    <form action="<?=site_url('Pengguna/do_upload')?>" method="post" enctype="multipart/form-data" novalidate="novalidate">
                        <div id="pay-invoice">
                            <div class="card-body">
                                <hr>
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Nama Lengkap</label>
                                    <input id="cc-name"  name="nama" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Email</label>
                                    <input id="cc-number" name="email" type="tel" class="form-control" >
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="cc-exp" class="control-label mb-1">No. Telp</label>
                                            <input id="cc-exp" name="no" type="tel" class="form-control "  >
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="cc-j" class="control-label mb-1">Hak Akses</label>
                                            <select id="cc-j" name="akses" class="form-control">
                                                <option>Admin</option>
                                                <option>User</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <label for="x_card_code" class="control-label mb-1">Foto</label>
                                        <div class="input-group">
                                            <input id="x_card_code" name="gambar" type="file" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <input name="simpan" id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" value="Simpan">
                                </div>
                                    
                        </div>
                    </div>
                </form>
            </div>
        </div>
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
        // function to handle form submit
        function submitForm(){
             $.ajax({
                type: "POST",
                url: "save_kontak.php",
                cache:false,
                data: $('form#contactForm').serialize(),
                success: function(response){
                    $("#contact").html(response)
                    $("#contact-modal").modal('hide');
                },
                error: function(){
                    alert("Error");
                }
            });
        }
    </script>
</body>
</html>