@if(session()->has('success'))
    <div style="color: green">
        {{ session('success') }}
    </div>
@endif

@if(session()->has('message'))
    <div style="color: navy">
        {{ session('message') }}
    </div>
@endif

@if(session()->has('error'))
    <div style="color: darkred">
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

