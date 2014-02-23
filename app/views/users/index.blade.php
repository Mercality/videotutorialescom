<h1>Users</h1>
@if($users)
<ul>
  @foreach($users as $user)
	<li>{{ $user->real_name }} - {{ $user->email }} {{ var_dump($user->dni) }} 
	    {{ HTML::link('UserController/delete/'.$user->id, 'Borrar') }} - 
	    {{ HTML::link('UserController/update/'.$user->id, 'Actualizar un Usuario') }}
	</li>
  @endforeach
</ul>
@else
 Todavia no hay ningun usuario registrado
@endif

{{ HTML::link('UserController/create', 'Crear un Usuario', array('class' => 'btn')) }}
