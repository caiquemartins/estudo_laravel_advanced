@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($websites as $website)
                            <li class="list-group-item">
                                <h4>
                                    <p>
                                        Os artigos abaixo são da url
                                        <a href="{{$website->url}}"> {{$website->url}} </a>
                                    </p>
                                </h4>

                                <p>
                                    @foreach ($website->articles as $article)
                                        <p>
                                            {{$article->title}}
                                        </p>
                                    @endforeach
                                </p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
