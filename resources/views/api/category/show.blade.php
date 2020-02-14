@extends('layouts.app')

@section('content')
    @php /**@var \App\Models\Category $item */@endphp
    {{ Breadcrumbs::render('category', $category) }}
    <div class="container">
        <div class="row">
            <div class="col-md-10/offset-md-1">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>title</th>
                        <th>body</th>
                        <th>category</th>
                        <th>Base_category</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php /**@var \App\Models\Category $posts */@endphp
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td><a href="{{$post->subcategory->parent.'/'. $post->category.'/'.$post->id}}">{{$post->title}}</a></td>
                            <td width="600">{{$post->body}}</td>
                            <td>{{$post->category}}</td>
                            <td>{{$post->laravel_through_key}}</td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

@endsection()
