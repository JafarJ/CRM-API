Wellcome: {{ Auth::user()->name }}
Your Role: {{ Auth::user()->role }}

@if (session('success'))
    {{ session('success') }}
@endif
@if (session('error'))
    {{ session('error') }}
@endif

@if ($users)
    @foreach ($users as $user) 
        ID: {{ $user->id }}
        Name: {{ $user->name }}
        Email: {{ $user->email }}
        Role: {{ $user->role }}
        passlol {{$user->password}}
        ----------------------------------------------------------
    @endforeach
@endif