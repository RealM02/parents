Crear nuevos
<form action="{{ url('/parents') }}" method="post" enctype="multipart/form-data">
@csrf

<label for="Name">Name</label>
<input type="text" name="Name" id="Name">
<br>
<label for="Gender">Gender</label>
<input type="text" name="Gender" id="Gender">
<br>
<input type="submit" name="Enviar" id="Enviar">
<br>
</form>