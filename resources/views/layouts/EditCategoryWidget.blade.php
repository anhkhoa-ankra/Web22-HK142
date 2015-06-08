<!-- Modal -->
<div class="modal fade" id="{{$id or 'myModal'}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{{isset($isEdit) && $isEdit? 'Edit category' : 'New category'}}</h4>
      </div>
      <div class="modal-body">
        <form action="/admin/category">
          <div class="form-group">
            <label for="{{$id or 'myModal'}}-cat-name">Name</label>
            <input id="{{$id or 'myModal'}}-cat-name" name="{{$id or 'myModal'}}-cat-name" class="form-control" type="text">
          </div>
          <div class="form-group">
            <label for="{{$id or 'myModal'}}-cat-parent">Parent</label>
            <div class="input-group">
              <span class="input-group-btn">
                <button id="{{$id or 'myModal'}}-refresh" class="btn btn-success" type="button"><span class="glyphicon glyphicon-refresh"></span></button>
              </span>
              <select name="{{$id or 'myModal'}}-cat-parent" id="{{$id or 'myModal'}}-cat-parent" class="form-control">
              </select>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="{{$id or 'myModal'}}-save">Save changes</button>
      </div>
    </div>
  </div>
</div>
@section('script')
$("#{{$id or 'myModal'}}-refresh").click(function() {
  $.ajax({
    "url": "/admin/category",
    "complete": function (jqXHR, status) {
      console.log(jqXHR);
      console.log(status);
      if (jqXHR.status != 200) {
        alert("Something went wrong!");
      } else {
        var html = '<option value="0">None</option>';
        var categories = jqXHR.responseJSON.data;
        for (var i in categories) {
          cat = categories[i];
          html += '<option value="' + cat.id + '">' + cat.name + '</option>';
        }
        $("#{{$id or 'myModal'}}-cat-parent").html(html);
@if (isset($isEdit) && $isEdit)
        $("#{{$id or 'myModal'}}-cat-parent").val($("#{{$id or 'myModal'}}-cat-parent").data("id"));
@endif
        // alert("Refreshed!");
      }
    }
  });
});
$('#{{$id or 'myModal'}}-save').click(function() {
@if (isset($isEdit) && $isEdit)
{{-- edit mode --}}
  if (!$(this).data("id")) {
    alert("Something went wrong!");
    $("#{{$id or 'myModal'}}").modal('hide');
    return;
  }
  $.ajax({
    "url": "/admin/category/" + $(this).data("id"),
    "method": "put",
    "data": {
      "name": $("#{{$id or 'myModal'}}-cat-name").val(),
      "parent": $("#{{$id or 'myModal'}}-cat-parent").val()
    }, "complete": function (jqXHR, status) {
      console.log(jqXHR);
      console.log(status);
      if (jqXHR.status != 200) {
        alert("Something went wrong!");
      } else {
@if (isset($datatable))
        {{$datatable}}.ajax.reload(null, false);
@endif
        alert("Category edit successfully!");
      }
      $("#{{$id or 'myModal'}}").modal('hide');
    }
  })
@else
{{-- new mode --}}
  $.ajax({
    "url": "/admin/category",
    "method": "post",
    "data": {
      "name": $("#{{$id or 'myModal'}}-cat-name").val(),
      "parent": $("#{{$id or 'myModal'}}-cat-parent").val()
    }, "complete": function (jqXHR, status) {
      console.log(jqXHR);
      console.log(status);
      if (jqXHR.status != 200) {
        alert("Something went wrong!");
      } else {
  @if (isset($datatable))
        {{$datatable}}.ajax.reload(null, false);
  @endif
        alert("Category add successfully!");
      }
      $("#{{$id or 'myModal'}}").modal('hide');
    }
  })
@endif
});
$('#{{$id or 'myModal'}}').on('show.bs.modal', function (event) {
  $("#{{$id or 'myModal'}}-cat-name").val("");
@if (isset($isEdit) && $isEdit)
{{-- edit mode --}}
  var button = $(event.relatedTarget);
  if (!button.data("id") || !button.data("name") || !button.data("parent")) {
    alert("Something went wrong!");
    return false;
  }

  $("#{{$id or 'myModal'}}-cat-name" ,this).val(button.data("name"));
  $("#{{$id or 'myModal'}}-cat-parent" ,this).data('id', button.data("parent"));
  $("#{{$id or 'myModal'}}-save" ,this).data('id', button.data("id"));
@endif
  $("#{{$id or 'myModal'}}-refresh").click();
});
@append