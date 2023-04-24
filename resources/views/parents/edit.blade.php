Editar todo
<br>

<form action="{{ url('/parents/'.$parents->id) }}" method="post">
@csrf
{{method_field('PATCH') }}

@include('parents.form')

</form>