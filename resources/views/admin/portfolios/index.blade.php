@extends('layouts.admin')

    @section('content')
    <div class="container-fluid mt-4">
    	<div class="row justify-content-center">
            @foreach ($portfolios as $portfolio)
                <div class="col-md-4 py-2">
                    <div class="card">
                        <div class="card-header">
                            <h4>
                                {{ $portfolio->title }}
                            </h4>
                        </div>

                        <div class="card-body">
                            <h5 class="d-inline-block">Description:</h5>
                            <p>{{ $portfolio->description }}</p>

                            <h5 class="d-inline-block">Role:</h5>
                            <p>{{ $portfolio->role }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
    	</div>
    </div>
@endsection
