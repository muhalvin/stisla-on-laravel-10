@extends('errors.layout.main')

@section('main-content')
    <section class="section">
        <div class="container mt-5">
            <div class="page-error">
                <div class="page-inner">
                    <h1>503</h1>
                    <div class="page-description">
                        Be right back.
                    </div>
                    <div class="page-search">
                        <form>
                            <div class="form-group floating-addon floating-addon-not-append">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary btn-lg">
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="mt-3">
                            <a href="{{ url('dashboard') }}">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Footer --}}
            @include('errors.layout.footer')
        </div>
    </section>
@endsection
