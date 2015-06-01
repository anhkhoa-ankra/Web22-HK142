<table id="table_id" class="table table-striped table-hover"></table>
@section('script')
@parent
$('#table_id').DataTable({
  "ajax": "/admin/category",
  "columns": [
      {
        "title": "Name",
        "data": "name",
        "render": function (data, type, row) {
          return '<a href="' + row.url + '" target="_blank">' + data + '</a>';
        }
      }, {
        "title": "Parent",
        "data": "parent"
      }, {
        "title": "Actions",
        "orderable": false,
        "searchable": false,
        "class": "text-right no-highlight",
        "render": function (data, type, row) {
          return '<a href="' + row.url + '" target="_blank" title="View"><span class="glyphicon glyphicon-eye-open"></span></a>&nbsp;&nbsp;\
          <a href="/admin/post/' + row.id + '/edit" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp;\
          <a href="#" data-post="' + row.id + '" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>'
        }
      }
  ],
  "order": [1, "desc"],
  "createdRow": function(row, data, dataIndex) {
    $('a[title="Delete"]', row).click(function() {
      if (confirm('Are you sure you want to delete this item?')) {
        // Create delete ajax
        console.log($(this).data("post"));
      }
      return false;
    });
  }
});
@stop