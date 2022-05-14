<h1>User Login</h1>
@if($errors->any())
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
@endif

<form action="/login" method="post">
  @csrf
  <input type="email" name="email" placeholder="Enter email"> <br>
  <span style="color:red;">@error('username'){{$message}}@enderror</span> <br>

  <input type="password" name="password" placeholder="Enter password"> <br>
  <span style="color:red;">@error('password'){{$message}}@enderror</span> <br>

  <button type="submit">Login</button>
</form>