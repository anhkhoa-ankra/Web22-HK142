<textarea id="{{$id or 'ckeditor'}}" name="{{$id or 'ckeditor'}}">{{$content}}</textarea>
@section('script')
CKEDITOR.replace('{{$id or 'ckeditor'}}', {
  "removePlugins": 'font,forms,iframe,flash'
});
@append