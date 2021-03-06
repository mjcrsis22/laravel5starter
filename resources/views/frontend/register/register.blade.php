
<div class="container-fluid">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">{{ trans('register.register_title') }}</div>
<div class="panel-body">

    @if (count($errors) > 0)
    <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
         @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
         @endforeach

</ul>
</div>

    @endif

<form class="form-horizontal" role="form" method="POST" action="register">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
<label class="col-md-4 control-label">{{ trans('register.first_name') }}</label>
<div class="col-md-6">
<input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">{{ trans('register.last_name') }}</label>
<div class="col-md-6">
<input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
</div>
</div>
        
<div class="form-control">{{ trans('register.email') }}</label>
<div class="col-md-6">
<input type="email" class="form-control" name="email" value="{{ old('email') }}">
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">{{ trans('register.password') }}</label>
<div class="col-md-6">
<input type="password" class="form-control" name="password">
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">{{ trans('register.confirm_password') }}</label>
<div class="col-md-6">
<input type="password" class="form-control" name="password_confirmation">
</div>
</div>

<div class="form-group">
<div class="col-md-6 col-md-offset-4">
<button type="submit" class="btn btn-primary">{{ trans('register.register_button') }}</button>                            
</div>
</div>
</form>

</div>
</div>
</div>
</div>
</div>