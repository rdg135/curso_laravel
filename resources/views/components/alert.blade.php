@if(session()->has('success'))
    <div>
        {{ session('success') }}
    </div>
@endif

@if(session()->has('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

@if(session()->has('error'))
    <div>
        {{ session('error') }}
    </div>
@endif

@if ($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li> {{ $error }}</li>
        @endforeach
    </ul>
@endif

