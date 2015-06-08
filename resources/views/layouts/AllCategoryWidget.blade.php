<table id="{{$id or 'cat_table'}}" class="table table-striped table-hover"></table>
@section('script')
var {{$id or 'cat_table'}} = $('#{{$id or 'cat_table'}}').DataTable({
  "ajax": "/admin/category",
  "responsive": true,
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
          return '<a ' + ((row.url.length>0)?('href="' + row.url + '" target="_blank"'):('class="disabled"')) + ' title="View"><span class="glyphicon glyphicon-eye-' + (row.url.length>0?'open':'close') + '"></span></a>&nbsp;&nbsp;\
          <a href="#" data-id="' + row.id + '" data-name="' + row.name + '" data-parent="' + row.parent_id + '" data-toggle="modal" data-target="#{{$modal}}" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp;\
          <a href="#" data-category="' + row.id + '" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>'
        }
      }
  ],
  "order": [1, "desc"],
  "createdRow": function(row, data, dataIndex) {
    $('a[title="Delete"]', row).click(function() {
      if (confirm('Are you sure you want to delete this item?')) {
        // Create delete ajax
        $.ajax({
          url: '/admin/category/' + $(this).data("category"),
          type: 'DELETE',
          complete: function (jqXHR, status) {
            console.log(jqXHR);
            console.log(status);
            if (jqXHR.status != 200) {
              alert("Something went wrong!");
            } else {
              {{$id or 'cat_table'}}.ajax.reload(null, false);
              alert("Category deleted!");
            }
          }
        });
      }
    });
  }
});
@append