<!DOCTYPE html>
<html lang="en">
@include('common/header')

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index" class="brand-link"><span class="brand-text font-weight-light">阿柱的店</span></a>
      @include('common/SidebarMenu')
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>文章清單</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- /.card-header -->
      <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>文章ID</th>
              <th>文章抬頭</th>
              <th>圖片</th>
              <th>說明</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>id</td>
              <td>title</td>
              <td>image</td>
              <td>description</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
  <!-- ./wrapper -->
  <!-- jQuery -->
  <script src="{{asset('/')}}plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('/')}}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="{{asset('/')}}plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="{{asset('/')}}plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{asset('/')}}plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="{{asset('/')}}plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="{{asset('/')}}plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="{{asset('/')}}plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="{{asset('/')}}plugins/jszip/jszip.min.js"></script>
  <script src="{{asset('/')}}plugins/pdfmake/pdfmake.min.js"></script>
  <script src="{{asset('/')}}plugins/pdfmake/vfs_fonts.js"></script>
  <script src="{{asset('/')}}plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="{{asset('/')}}plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="{{asset('/')}}plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('/')}}dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('/')}}dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      var myTable = $('#example2').DataTable({
        "ajax": {
          "url": "articlList",
          /*"dataSrc": function(json) {
            for (var i = 0, ien = json.length; i < ien; i++) {
              json[i][0] = '<a href="/message/' + json[i][0] + '>View message</a>';
            }
            return json;
          }*/
        },
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "autoWidth": false,
        "responsive": true,
        //是否開啟服務器模式
        "serverSide": true,
        "columns": [{
            "data": "id"
          },
          {
            "data": "title"
          },
          {
            "data": "image"
          },
          {
            "data": "description"
          },
        ]
      });


      $(document).on('click', '.delete_row', function(event) {
        //console.log($(this).attr("data-value"));
        $.ajax({
          type: 'Get',
          url: 'delete',
          data: {
            id: $(this).attr("data-value")
          },
          success: function(msg) {
              myTable.row( this )
              .remove()
              .draw();
            alert(msg);
          }
        });
      });

    });
  </script>
</body>

</html>