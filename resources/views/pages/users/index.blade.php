@extends ('index')
@section('content')
    <div class="users-list">
        @if(!$users->isEmpty())
            @foreach($users as $user)
                <div class="user">
                    <p>name : {{$user->name}}</p>
                    <p>email : {{$user->email}}</p>
                    <p>password : {{$user->password}}</p>
                    <p>
                        <a href="/edit/{{$user->id}}"><button>edit</button></a>
                    </p>
                </div>
                <hr/>
            @endforeach
        @endif
    </div>
    <a href="/add"><button>add</button></a>
@stop