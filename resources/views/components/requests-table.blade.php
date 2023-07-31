<table class="table table-scriped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach (roleRequest as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <button class="btn btn-in text-white">Attiva {{$role}}</button>
            </td>
        </tr>          
        @endforeach
    </tbody>
</table>

    <td>
        @switch($role)
            @case('amministratore')
            <a href="{{route('admin.setAdmin', compact('user'))}}" class="btn btn-info text-white">Attiva {{$role}}</a>                
                @break
            @case('revisore')
            <a href="{{route('admin.setRevisore', compact('user'))}}" class="btn btn-info text-white">Attiva {{$role}}</a>  
                @break
                @case('redattore')
                <a href="{{route('admin.setRedattore', compact('user'))}}" class="btn btn-info text-white">Attiva {{$role}}</a>  
                    @break
        @endswitch
    </td>

