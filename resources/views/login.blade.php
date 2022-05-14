<h1>User Login</h1>
@if($errors->any())
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
@endif

<form action="/login" method="post">
  @csrf
  <input type="text" name="username" placeholder="Enter username" value="{{old('username')}}"> <br>
  <span style="color:red;">@error('username'){{$message}}@enderror</span> <br>

  <input type="password" name="password" placeholder="Enter password" value="{{old('password')}}"> <br>
  <span style=" color:red;">@error('password'){{$message}}@enderror</span> <br>

  <button type="submit">Login</button>
</form>