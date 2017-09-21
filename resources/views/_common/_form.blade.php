<form
        @if(isset($user))
        method="POST" action="/edit/{{$user->id}}"
        @else
        method="POST" action="/add"
        @endif
>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label>name</label>
        <input name="name" id="name" value="{{$user->name or ''}}">
    </div>

    <div class="form-group">
        <label>email</label>
        <input name="email" id="email" value="{{$user->email or ''}}">
    </div>

    <div class="form-group">
        <label>password</label>
        <input name="password" id="password" value="{{$user->password or ''}}">
    </div>
    @if(isset($user))
        <button>edit</button>
    @else
        <button>add</button>
    @endif

</form>

