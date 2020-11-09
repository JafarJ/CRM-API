Wellcome: {{ Auth::user()->name }}
Your Role: {{ Auth::user()->role }}

@if (session('success'))
    {{ session('success') }}
@endif

@if ($prospects)
    @foreach ($prospects as $prospect) 
        ID: {{ $prospect->id }}
        Name: {{ $prospect->name }}
        Surname: {{ $prospect->surname }}
        Email: {{ $prospect->email }}
        Profile Image: <img src="storage/prospects/profiles/images/{{ $prospect->profile_image }}" alt="" style="width:50px;">
        Created by ID: {{ $prospect->created_by }}
        Last Modified by ID: {{ $prospect->modified_by }}
        ----------------------------------------------------------
    @endforeach
@endif