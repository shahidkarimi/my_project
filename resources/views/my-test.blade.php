<h1>Hello from Blade</h1>

@foreach($users as $user)
    <h2>{{$user->firstname}} {{$user->lastname}}</h2>
@endforeach
{{ $users->links() }}