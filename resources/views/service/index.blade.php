@extends('app')

@section('title', 'Services')

@section('content')
    <h1>Services</h1>

    <form method="post" action="/service">
        <input type="text" name="name" autocomplete="off" placeholder="Service Name"/>
        @csrf
        <button>Add Service</button>
    </form>

    <p style="color:red;">@error('name') {{ $message }} @enderror</p>

    <ul>
        {{-- @foreach($services as $service)
            <li>{{ $service }} </li>
        @endforeach --}}
        @forelse($services as $service)
            <li>{{ $service->name }}
            @empty
                <li>No Services available
        @endforelse
    </ul>

@endsection
