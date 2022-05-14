@if($name == 'Sunil')
<h1>Hello {{$name}}</h1>
@elseif($name == 'Anil')
<h1>Hello {{$name}}</h1>
@else
<h1>Unknown User</h1>
@endif

<h1>The Controller has passed below {{count($users)}} names</h1>
<ul>
  @foreach($users as $user)
  <li>{{$user}}</li>
  @endforeach
</ul>