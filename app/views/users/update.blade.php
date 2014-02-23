<h1>Actualizar un Usuario</h1>

{{ Form::open() }}

 Real Name: {{ Form::text('real_name', $user->real_name) }}<br>
 Email: {{ Form::text('email', $user->email) }}<br>
 Change Password: {{ Form::password('password') }}<br>
 Change Dni: {{ Form::text('dni') }}<br>
{{ Form::submit('Actualizar Usuario') }}

{{ Form::close() }}