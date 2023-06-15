<!DOCTYPE html>
<html>
<head>
    <title> Bukti Pemesanan </title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/core.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/shortcode/shortcodes.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/style.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css');?>">
    <link rel="icon" href="<?=base_url()?>/images/logo.png">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script language="javascript">
         $(document).ready(function () {
            $("#txtCheckin").datepicker({
                minDate:0,
                dateFormat: "dd-M-yy",
                onSelect: function (date) {
                    var date2 = $('#txtCheckin').datepicker('getDate');
                    date2.setDate(date2.getDate());
                    $('#txtCheckout').datepicker('setDate', date2);
                    //sets minDate to dateofbirth date + 1
                    $('#txtCheckout').datepicker('option', 'minDate', date2);
                }
            });
            $('#txtCheckout').datepicker({
                minDate:0,
                dateFormat: "dd-M-yy",
                onClose: function () {
                    var dt1 = $('#txtCheckin').datepicker('getDate');
                    console.log(dt1);
                    var dt2 = $('#txtCheckout').datepicker('getDate');
                    if (dt2 <= dt1) {
                        var minDate = $('#txtCheckout').datepicker('option', 'minDate');
                        $('#txtCheckout').datepicker('setDate', minDate);
                    }
                }
            });
        });

    </script>
</head>
<body>


  
    <div class="col-md-5 col-lg-4 order-md-last" >
        <h4 class="d-flex justify-content-between align-items-center mb-3" >
          <span class="text-primary">Bukti Pemesanan</span>
        </h4>
        <ul class="list-group mb-3">
          
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Nama Pemesan</h6>
              <small class="text-muted"><?=$trans->nama ?></small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Email</h6>
              <small class="text-muted"><?=$trans->email?></small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">No HP </h6>
              <small class="text-muted"><?=$trans->no ?> </small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Check In</h6>
              <small class="text-muted"><?=$trans->tgl_in ?></small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Check Out</h6>
              <small class="text-muted"><?=$trans->tgl_out ?></small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Jumlah Kamar</h6>
            </div>
            <span class="text-success"><?=$trans->jumlah?></span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
                <?php 
                    $tampil = $this->db->get_where('kamar',array('jenis' => $trans->jenis))->row(); 
                ?>
              <h6 class="my-0">Harga</h6>
            </div>
            <span class="text-success"><?=$tampil->harga ?></span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-primary">
            <h6 class="my-0">Total</h6>
            <span class="text-success"><?=$trans->jumlah * $tampil->harga ?></span>
          </li>
        </ul>
        <div class="text-right"><a href="<?= site_url('Welcome/print/'.$trans->id)?>" class="btn btn-success">Print</a></div>
        <div class="text-right"><a href="<?= site_url('Welcome/index')?>" class="btn btn-primary">Kembali ke Beranda</a></div><br><br>
    
      </div>
      
        
</body>
</html>


    
      