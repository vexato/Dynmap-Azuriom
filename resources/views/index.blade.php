@extends('layouts.app')

@section('title', 'Dynmap')

@section('content')
    @if($url)
        <div class="mt-3">
            <iframe src="{{ $url }}" width="100%" height="600px" frameborder="0"></iframe>
        </div>
    @else
        <div class="alert alert-danger mt-3" role="alert">
            {{ trans('dynmap::messages.no_map') }}
        </div>
    @endif
@endsection
