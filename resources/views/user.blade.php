<h1>Array from controller to view</h1>
<table border="1">
  <tr>
    <td>ID</td>
    <td>Email</td>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Image</td>
  </tr>
  @foreach ($users as $user)
  <tr>
    <td>{{$user['id']}}</td>
    <td>{{$user['email']}}</td>
    <td>{{$user['first_name']}}</td>
    <td>{{$user['last_name']}}</td>
    <td><img src="{{$user['avatar']}}" alt=""></td>
  </tr>
  @endforeach
</table>