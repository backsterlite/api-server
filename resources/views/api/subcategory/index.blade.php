@extends('layouts.app')

@section('content')
    {{ Breadcrumbs::render('subCategory', $subCat) }}
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>title</th>
                        <th>body</th>
                        <th>category</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td><a href="{{$post->category.'/'.$post->id}}">{{$post->title}}</a></td>
                            <td  width="600">{{$post->body}}</td>
                            <td>{{$post->category}}</td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

@endsection()
