@extends('layouts.app')

@section('content')
    {{ Breadcrumbs::render('post', $post) }}
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card bg-light mb-3">
                    <div class="card-header">POST</div>
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">{{$post->body}}</p>
                        <p class="card-text"><small class="text-muted">{{$post->category}}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection()
