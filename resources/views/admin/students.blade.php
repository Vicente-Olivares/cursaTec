@extends('layouts.app')

@section('jumbotron')
    @include('partials.jumbotron', ['title' => 'Administrar estudiantes', 'icon' => 'unlock-alt'])
@endsection

@section('content')
    <div class="pl-5 pr-5">
        <students-list
            :labels="{{ json_encode([
                'title' => __("Nombre")
               
            ]) }}"
            
        >
        </students-list>
    </div>
@endsection