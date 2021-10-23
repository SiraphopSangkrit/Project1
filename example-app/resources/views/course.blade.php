@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="col-md-8">
            <div class="row">
                <div class="card">
                    @if(!$course->isEmpty())
                    <div class="d-flex justify-center">
                        Have one
                    </div>
                    @else
                    <div class="d-flex justify-center">
                        Nothing
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
