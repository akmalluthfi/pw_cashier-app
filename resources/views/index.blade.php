@extends('layouts.main')

@section('content')
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h2>Welcome back, {{ Auth::user()->name }}</h2>
    </div>

    <div class="row">
        @foreach ($menus as $menu)
            <div class="mb-4 col-6 col-sm-4 col-md-3">
                <div class="card text-center">
                    <div class="card-header">
                        <span data-feather="monitor" class="align-text-bottom me-2"></span>{{ $menu['title'] }}
                    </div>
                    <div class="card-body">
                        <div class="display-5">{{ $menu['amount'] }}</div>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="{{ $menu['link']}}" class="text-primary nav-link">{{ $menu['link_name'] }}<span data-feather="arrow-right" class="align-text-bottom ms-2"></span></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection