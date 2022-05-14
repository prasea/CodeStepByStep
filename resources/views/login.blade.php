<h1>User Login</h1>
<form action="/login" method="post">
  @csrf
  <input type="email" name="email" placeholder="Enter email"> <br><br>
  <input type="password" name="password" placeholder="Enter password"> <br><br>
  <button type="submit">Login</button>
</form>