@extends('admin.layouts.admin')

@section('title', 'Dynmap admin')

@section('content')
    <div class="alert alert-warning" role="alert">
        <h3 class="mb-4">{{ trans('dynmap::admin.recommend_ssl') }}</h3>
        <p>{{ trans('dynmap::admin.ssl_recommendation') }}</p>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <ul class="list-group mb-3">
                <li class="list-group-item">
                    <strong>{{ trans('dynmap::admin.instruction') }}</strong> =>
                    <a href="{{ url('dynmap')}}" target="_blank">
                        {{ url('dynmap')}}
                    </a>
                </li>
            </ul>

            <h1 class="mb-4">{{ trans('dynmap::admin.update_url') }}</h1>
            <form action="{{ route('dynmap.admin.update') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="url" class="form-label">Dynmap URL :</label>
                    <input
                        type="url"
                        name="url"
                        id="url"
                        class="form-control"
                        value="{{ old('url', $currentUrl ?? '') }}"
                    >
                </div>
                <button type="submit" class="btn btn-primary">{{ trans('dynmap::admin.update') }}</button>
            </form>
            <form action="{{ route('dynmap.admin.reset') }}" method="POST" class="mt-3">
                @csrf
                <button type="submit" class="btn btn-danger">{{ trans('dynmap::admin.reset') }}</button>
            </form>
        </div>
    </div>
@endsection
