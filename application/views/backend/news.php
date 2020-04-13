<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Berita
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Berita</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <button type="button" class="btn btn-success" onclick="add_news()"><i class="fa fa-plus"></i> Tambah Berita</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table_news" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 50px;">No</th>
                  <th>Gambar</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>                  
                  <th>Kategori</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="https://adminlte.io">Direktorat AP2SC</a>.</strong> All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
</div>

<div class="modal fade" id="modal_form">
  <div class="modal-dialog">
    <div class="modal-content">
	    <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h3 class="modal-title"></h3>
	    </div>
	    <div class="modal-body form">
	        <form action="#" id="form" class="form-horizontal">
	            <input type="hidden" value="" name="id_news"/>
	            <div class="form-body">
	            	<div class="form-group">
	                    <label class="control-label col-md-3">Judul</label>
	                    <div class="col-md-9">
	                        <input type="text" name="judul" placeholder="Judul Berita" class="form-control" rows="5"></textarea>
	                        <span class="help-block"></span>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="control-label col-md-3">Deskripsi</label>
	                    <div class="col-md-9">
	                        <textarea name="deskripsi" id="desc" placeholder="Deskripsi" class="form-control" rows="5"></textarea>
	                        <span class="help-block"></span>
	                    </div>
	                </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Kategori Berita</label>
                        <div class="col-md-9">
                            <select class="form-control" name="catb" id="catb">
                                <option value="">Pilih Kategori Berita</option>
                                <option value="1">Kegiatan</option>
                                <option value="2">Pengumuman</option>
                                <option value="3">Berita</option>
                            </select>
                        </div>
                    </div>
	                <div class="form-group" id="photo-preview">
	                    <label class="control-label col-md-3">Photo</label>
	                    <div class="col-md-9">
	                        (No photo)
	                        <span class="help-block"></span>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="control-label col-md-3" id="label-photo">Upload Photo </label>
	                    <div class="col-md-9">
	                        <input name="photo_news" type="file">
	                        <span class="help-block"></span>
	                    </div>
	                </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="label label-danger">NOTE!</label>
                            <span>Ukuran maximal Upload <b>2 MB</b> dengan resolusi <b>750 x 450 pixel</b>.</span>
                        </div>
                    </div>
	            </div>
	        </form>
	    </div>
	    <div class="modal-footer">
	        <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	    </div>
	</div><!-- /.modal-content -->
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url()?>assets/backend/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url()?>assets/backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/backend/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?= base_url()?>assets/backend/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?= base_url()?>assets/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?= base_url()?>assets/backend/dist/js/adminlte.min.js"></script>
<script src="<?= base_url()?>assets/backend/dist/js/demo.js"></script>
<script type="text/javascript">
    // $('#desc').wysihtml5();
	var save_method; //for save method string
    var table;
    var base_url = '<?php echo base_url();?>';

    $(document).ready(function() {

        //datatables
        table = $('#table_news').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('news/ajax_list') ?>",
                "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [ -1 ], //last column
                    "orderable": false, //set not orderable
                },
                {
                    "targets": [ -2 ], //2 last column (photo)
                    "orderable": false, //set not orderable
                },
            ],

        });

    });



    function add_news()
    {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#modal_form').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah Berita'); // Set Title to Bootstrap modal title

        $('#photo-preview').hide(); // hide photo preview modal

        $('#label-photo').text('Upload Photo'); // label photo upload
    }

    function edit_news(id)
    {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string


        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('news/ajax_edit') ?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {

                $('[name="id_news"]').val(data.id_news);
                $('[name="judul"]').val(data.judul);
                $('[name="deskripsi"]').html(data.desc);
                $('#catb').val(data.cat);
                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Berita'); // Set title to Bootstrap modal title

                $('#photo-preview').show(); // show photo preview modal

                if(data.photo_news)
                {
                    $('#label-photo').text('Change Photo'); // label photo upload
                    $('#photo-preview div').html('<img src="'+base_url+'./assets/img/news/'+data.photo_news+'" class="img-responsive">'); // show photo
                    $('#photo-preview div').append('<input type="checkbox" name="remove_photo" value="'+data.photo_news+'"/> Remove photo when saving'); // remove photo

                }
                else
                {
                    $('#label-photo').text('Upload Photo'); // label photo upload
                    $('#photo-preview div').text('(No photo)');
                }


            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function reload_table()
    {
        table.ajax.reload(null,false); //reload datatable ajax
    }

    function save()
    {
        $('#btnSave').text('saving...'); //change button text
        $('#btnSave').attr('disabled',true); //set button disable
        var url;

        if(save_method == 'add') {
            url = "<?php echo site_url('news/ajax_add') ?>";
        } else {
            url = "<?php echo site_url('news/ajax_update') ?>";
        }

        // ajax adding data to database

        var formData = new FormData($('#form')[0]);
        $.ajax({
            url : url,
            type: "post",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(data)
            {

                if(data.status) //if success close modal and reload ajax table
                {
                    $('#modal_form').modal('hide');
                    reload_table();
                }
                else
                {
                    for (var i = 0; i < data.inputerror.length; i++)
                    {
                        $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                        $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                    }
                }
                $('#btnSave').text('save'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable


            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert(jqXHR.responseText);
                $('#btnSave').text('save'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable

            }
        });
    }

    function delete_news(id)
    {
        if(confirm('Are you sure delete this data?'))
        {
            // ajax delete data to database
            $.ajax({
                url : "<?php echo site_url('news/ajax_delete')?>/"+id,
                type: "POST",
                dataType: "JSON",
                success: function(data)
                {
                    //if success reload ajax table
                    $('#modal_form').modal('hide');
                    reload_table();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });

        }
    }
</script>
</body>
</html>