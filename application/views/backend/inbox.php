<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Pertanyaan Masuk
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Inbox</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 5px;">No</th>
                  <th>Nama</th>
                  <th>Subjek</th>
                  <th>Pertanyaan</th>
                  <th style="width: 50px;">Tanggal</th>
                  <th style="width: 40px;">Status</th>
                  <th style="width: 75px;">Aksi</th>
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
	            <input type="hidden" value="" name="id_inbox"/>
	            <div class="form-body">
	            	<div class="form-group">
	                    <label class="control-label col-md-2">Nama</label>
	                    <div class="col-md-10">
	                        <input type="text" name="nama" class="form-control" rows="3" readonly></textarea>
	                    </div>
	                </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">E-mail</label>
                        <div class="col-md-10">
                            <input type="text" name="email" class="form-control" rows="3" readonly></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">Subjek</label>
                        <div class="col-md-10">
                            <input type="text" name="subjek" class="form-control" rows="3" readonly></textarea>
                        </div>
                    </div>
	                <div class="form-group">
	                    <label class="control-label col-md-2">Pertanyaan</label>
	                    <div class="col-md-10">
	                        <textarea name="tanya" class="form-control" rows="3" readonly></textarea>
	                    </div>
	                </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">Jawaban</label>
                        <div class="col-md-10">
                            <textarea name="jawab" class="form-control" rows="3"></textarea>
                            <span class="help-block"></span>
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
<script src="<?= base_url()?>assets/backend/dist/js/adminlte.min.js"></script>
<script src="<?= base_url()?>assets/backend/dist/js/demo.js"></script>
<script type="text/javascript">
	var save_method; //for save method string
    var table;
    var base_url = '<?php echo base_url();?>';

    $(document).ready(function() {

        //datatables
        table = $('#table').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('inbox/ajax_list') ?>",
                "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [ -1 ], //last column
                    "orderable": false, //set not orderable
                },
            ],

        });

    });


    function reply_inbox(id)
    {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $.ajax({
            url : "<?php echo site_url('inbox/ajax_edit') ?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                $('[name="id_inbox"]').val(data.id_inbox);
                $('[name="nama"]').val(data.nama);
                $('[name="email"]').val(data.email);
                $('[name="subjek"]').val(data.subject);
                $('[name="tanya"]').val(data.tanya);
                $('[name="jawab"]').val(data.jawab);
                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Jawab Pertanyaan'); // Set title to Bootstrap modal title
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

        if(save_method == 'update') {
            url = "<?php echo site_url('inbox/ajax_update') ?>";
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
                        $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error');
                        $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]);
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

    function delete_inbox(id)
    {
        if(confirm('Are you sure delete this data?'))
        {
            // ajax delete data to database
            $.ajax({
                url : "<?php echo site_url('inbox/ajax_delete')?>/"+id,
                type: "POST",
                dataType: "JSON",
                success: function(data)
                {
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