@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($articles as $article)
                            <li class="list-group-item">
                                <h4>
                                    <p>
                                        {{$article->title}}
                                    </p>
                                    <p style="color:red">
                                        by {{$article->owner->name}}
                                    </p>
                                    <p>
                                        @foreach ($article->websites as $website)
                                            <a href="{{$website->url}}">{{$website->url}}</a>
                                            <br>
                                        @endforeach
                                    </p>
                                </h4>
                                <p>{{$article->body}}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
