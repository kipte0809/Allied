<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>阿柱的店</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('/')}}plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/')}}dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('/')}}plugins/summernote/summernote-bs4.min.css">
  <!-- CodeMirror -->
  <link rel="stylesheet" href="{{asset('/')}}plugins/codemirror/codemirror.css">
  <link rel="stylesheet" href="{{asset('/')}}plugins/codemirror/theme/monokai.css">
</head>

<body class="hold-transition sidebar-mini">

  <form action="editor{{ isset($articleItem->id) ? '?id='.$articleItem->id : '' }}" method="post">
    <div class="card-header">
      <h3 class="card-title">
        文章抬頭:<input type="text" name="title" value="{{ isset($articleItem->title) ? $articleItem->title : '' }}">
      </h3>
    </div>
    <div class="card-body">
      <textarea id="summernote" name="description">
        {{ isset($articleItem->description) ? $articleItem->description : '' }}
      </textarea>
    </div>
    {{ csrf_field() }}
    <input type="submit" value="文章更新">
  </form>


  <!-- jQuery -->
  <script src="{{asset('/')}}plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('/')}}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('/')}}dist/js/adminlte.min.js"></script>
  <!-- Summernote -->
  <script src="{{asset('/')}}plugins/summernote/summernote-bs4.min.js"></script>
  <!-- CodeMirror -->
  <script src="{{asset('/')}}plugins/codemirror/codemirror.js"></script>
  <script src="{{asset('/')}}plugins/codemirror/mode/css/css.js"></script>
  <script src="{{asset('/')}}plugins/codemirror/mode/xml/xml.js"></script>
  <script src="{{asset('/')}}plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('/')}}dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      // Summernote
      $('#summernote').summernote()

      // CodeMirror
      /*CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });*/
    })
  </script>
</body>

</html>