<table id="table_id" class="table table-striped table-hover"></table>
@section('script')
@parent
$('#table_id').DataTable({
  "ajax": "/admin/post",
  "columns": [
      { "title": "#" },
      { "title": "Title" },
      { "title": "Author" },
      { "title": "Category" },
      { "title": "Date"},
      { "title": "Action"}
  ]
});
@stop