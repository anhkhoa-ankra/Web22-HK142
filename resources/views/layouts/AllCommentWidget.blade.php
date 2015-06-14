<table id="{{$id or 'comment_table'}}" class="table table-striped table-hover"></table>
@section('script')
var {{$id or 'comment_table'}} = $('#{{$id or 'comment_table'}}').DataTable({
  "ajax": "/admin/comment",
  "responsive": true,
  "columns": [
      {
        "title": "Author",
        "data": "name",
        "render": function (data, type, row) {
          return '<a href="' + row.url + '" target="_blank">' + data + '</a>';
        }
      }, {
        "title": "Post title",
        "data": "post"
      },{
        "title": "Content",
        "data": "content"
      }, {
        "title": "Date",
        "data": "date.date"
      }, {
        "title": "Appoved",
        "data": "approved",
        "render": function (data, type) {
          if(data == 1)
            return 'Yes'
          else
            return 'No'
        }
      }, {
        "title": "Actions",
        "orderable": false,
        "searchable": false,
        "class": "text-right no-highlight",
        "render": function (data, type, row) {
          return '<a href="' + row.url + '" target="_blank" title="View"><span class="glyphicon glyphicon-eye-open"></span></a>&nbsp;&nbsp;\
          <a href="#" data-put="' + row.id + '" title="Approved"><span class="glyphicon glyphicon-ok"></span></a>&nbsp;&nbsp;\
          <a href="#" data-post="' + row.id + '" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>'
        }
      }
  ],
  "order": [3, "desc"],
  "createdRow": function(row, data, dataIndex) {
    $('a[title="Approved"]', row).click(function() {
      alert($(this).data("put"));
      if (confirm('Are you sure you want to approved this item?')) {
        // Create delete ajax
        $.ajax({
          url: '/admin/comment/' + $(this).data("put"),
          type: 'PUT',
          complete: function (jqXHR, status) {
            console.log(jqXHR);
            console.log(status);
            if (jqXHR.status != 200) {
              alert("Something went wrong!");
            } else {
              {{$id or 'comment_table'}}.ajax.reload(null, false);
              alert("Comment approved!");
            }
          }
        });
      }
    });
    $('a[title="Delete"]', row).click(function() {
      if (confirm('Are you sure you want to delete this item?')) {
        // Create delete ajax
        $.ajax({
          url: '/admin/comment/' + $(this).data("comment"),
          type: 'DELETE',
          complete: function (jqXHR, status) {
            console.log(jqXHR);
            console.log(status);
            if (jqXHR.status != 200) {
              alert("Something went wrong!");
            } else {
              {{$id or 'comment_table'}}.ajax.reload(null, false);
              alert("Comment deleted!");
            }
          }
        });
      }
    });
  }
});
@append