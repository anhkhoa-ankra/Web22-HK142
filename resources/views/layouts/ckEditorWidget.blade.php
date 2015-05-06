<textarea id="{{$id or 'ckeditor'}}" name="{{$id or 'ckeditor'}}">{{$content}}</textarea>
<script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
<script type="text/javascript">
  CKEDITOR.replace('{{$id or 'ckeditor'}}', {
    "removePlugins": 'font,forms,iframe,flash'
  });
</script>