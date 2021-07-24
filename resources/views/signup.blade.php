@extends('nav')
@section('content')
<form class="form-horizontal" action="loging" method="post">
  @csrf
<fieldset>

<!-- Form Name -->
<legend> sign up</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">name</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="email@" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="set password">password</label>
  <div class="col-md-4">
    <input id="pass" name="pass" type="password" placeholder="pswd" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="gender">gender</label>
  <div class="col-md-4">
    <select id="gender" name="gender" class="form-control">
      <option value="1">male</option>
      <option value="2">female</option>
    </select>
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" type="submit" class="btn btn-primary">signup</button>
  </div>
</div>

</fieldset>
</form>
@endsection