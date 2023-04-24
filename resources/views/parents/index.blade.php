Vista principal
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Actions</th>
        </tr>
    </thead>


    <tbody>
        @foreach( $parents as $parent )
        <tr>
            <td> {{ $parent->id }} </td>
            <td> {{ $parent->Name }} </td>
            <td> {{ $parent->Gender }} </td>
            <td>
                
            <a href="{{ url('/parents/'.$parent->id.'/edit') }}">
                Editar
            </a> 
            
            |
                
            <form action="{{ url('/parents/'.$parent->id) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('You want to delete it?')" value="Delete">
            
            </form>
        </td>
        </tr>
        @endforeach

    </tbody>
</table>