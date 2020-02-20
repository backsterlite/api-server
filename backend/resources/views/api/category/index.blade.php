@extends('layouts.app')

@section('content')
    {{ Breadcrumbs::render('index') }}
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <ul class="list-unstyled list-group">
                    @foreach($categories as $category)
                        <li class="list-group-item"><a href="{{ url('api/'.$category->alias )}}">{{$category->name}}</a></li>
                        {{--        <li>{{$category->alias}}</li>--}}
                        <li>
                            <ul class=" list-group-inline">
                                @foreach($category->subcategory as $sub)
                                    <li class="list-group-item"><a href="{{url('api/'.$category->alias .'/'. $sub->alias)}}">{{$sub->name}}</a></li>
                                    {{--                    <li>{{$sub->alias}}</li>--}}
                                    {{--                    <li>{{$sub->parent}}</li>--}}
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection()
