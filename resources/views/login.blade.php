<form action="/login" method="post">
  @csrf
  <input type="email" name="email">
  <input type="password" name="password">
  <input type="submit" value="Submit">
</form>