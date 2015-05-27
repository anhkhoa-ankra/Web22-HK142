<table id="{{$id or 'post_table'}}" class="table table-striped table-hover"></table>
@section('script')
var post_table = $('#{{$id or 'post_table'}}').DataTable({
  "ajax": "/admin/post",
  "columns": [
      {
        "title": "Title",
        "data": "title",
        "render": function (data, type, row) {
          return '<a href="' + row.url + '" target="_blank">' + data + '</a>';
        }
      }, {
        "title": "Author",
        "data": "author"
      }, {
        "title": "Category",
        "data": "category"
      }, {
        "title": "Date",
        "data": "date.date"
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
  "order": [3, "desc"],
  "createdRow": function(row, data, dataIndex) {
    $('a[title="Delete"]', row).click(function() {
      if (confirm('Are you sure you want to delete this item?')) {
        // Create delete ajax
        $.ajax({
          url: '/admin/post/' + $(this).data("post"),
          type: 'DELETE',
          complete: function (jqXHR, status) {
            console.log(jqXHR);
            console.log(status);
            if (jqXHR.status != 200) {
              alert("Something went wrong!");
            } else {
              alert("Post deleted!");
              post_table.ajax.reload(null, false);
            }
          }
        });
      }
    });
  }
});
@append