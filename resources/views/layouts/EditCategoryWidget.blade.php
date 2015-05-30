<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{isset($category)? 'Edit category' : 'New category'}}</h4>
      </div>
      <div class="modal-body">
        <form action="/admin/category">
          <div class="form-group">
            <label for="cat-name">Name</label>
            <input id="cat-name" name="cat-name" class="form-control" type="text">
          </div>
          <div class="form-group">
            <label for="cat-parent">Parent</label>
            <select name="cat-parent" id="cat-parent" class="form-control">
              <option value="0">None</option>
<?php
use App\Category;
$categories = Category::all();
?>
@foreach ($categories as $cat)
              <option value="{{$cat->id}}"@if (isset($category) && $category->parent_id == $cat->id) {{'selected'}}@endif>{{$cat->name}}</option>
@endforeach
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
