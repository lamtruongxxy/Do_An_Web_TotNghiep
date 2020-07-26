@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger alert-nofi-fail" role="alert">
    <i class="mdi mdi-block-helper mr-2"></i> <strong>{{ $error }}</strong>!
</div>
@endforeach
@endif

@if (session('msg'))
<div class="alert alert-info">{{session('msg')}}</div>
@endif
