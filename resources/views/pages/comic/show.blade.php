@extends('layouts.app')
{{-- @section('title-page', 'La miglior Pasta - show') --}}
@section('title-page')
    I migliori fumetti - {{ $elem->title }}
@endsection

@section('main-content')
    <h1 class="text-center">{{ $elem->title }}</h1>
    <div>
        <p>
            {{ $elem->description }}
        </p>
    </div>
@endsection
