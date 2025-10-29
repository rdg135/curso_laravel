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

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li class="text-red-500"> {{$error}}</li>
        @endforeach
    </ul>
@endif
