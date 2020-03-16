@extends('app')

@section('title', 'Services')

@section('content')
    <h1>Services</h1>

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
