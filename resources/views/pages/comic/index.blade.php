@extends('layouts.app')
@section('title-page', 'I migliori fumetti - Home')
@section('main-content')
    <div class=" bg-primary">
        <h1 class="text-center text-white">Trova il migliore per te</h1>
        {{-- Tutti i record della tabella pasta --}}
        <div>
            <a class="text-white container" href="{{ route('comics.create') }}">Crea dei fumetti</a>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($comics as $elem)
                    <div class="col-3 mb-5 mt-5">

                        <div class="card h-100" style="width: 18rem;">
                            <img src="{{ $elem->thumb }}" class="card-img-top" alt="...">
                            <div class="card-body">

                                <h5 class="card-title">{{ $elem->title }}</h5>
                                {{-- <p class="card-text">{!! $elem->description !!}</p> --}}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{ $elem->price }}</li>
                                <li class="list-group-item">{{ $elem->series }}</li>
                                <li class="list-group-item">{{ $elem->sale_date }}</li>
                                <li class="list-group-item">{{ $elem->type }}</li>
                            </ul>
                            <div class="card-body">
                                <a href="{{ route('comics.show', $elem->id) }}" class="card-link">see info</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{ $comics->links() }}
    </div>






@endsection
