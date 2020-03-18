@extends('template')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 header">
                    <h2><span>@yield('page-header')</span></h2>
                </div>
                <div class="col-md-12">
                    @yield('page-content')
                </div>
            </div>
        </div>
    </section>
@endsection
