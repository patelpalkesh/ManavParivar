@extends('voyager::bread.edit-add')
@section('submit-buttons')
    <button type="submit" class="btn btn-primary save">Save</button>
@endsection
@section('css')
<link href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" />
@stop
@section('javascript')


  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">

  $( function() {
    var availableTags = {!! \App\Models\Article::select('writer_name')->groupBy('writer_name')->get()->pluck('writer_name') !!};
    $( "input[name=writer_name]" ).autocomplete({
      source: availableTags
    });
  } );

$('input[name=published_on]').datepicker({
   dateFormat: 'dd/mm/yy',//check change
    changeMonth: true,
    changeYear: true
});

</script>
@stop
