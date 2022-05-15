<form action="/user" method="post">
  {{method_field('PUT')}}
  @csrf
  <input type="text" name="user" placeholder="Enter username"> <br><br>
  <input type="password" name="pw" id="pw" placeholder="Enter password"> <br><br>
  <button type="submit">Login</button>
</form>