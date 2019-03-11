@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-12">
            <div class="card">
               

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Projects</h1>

                    
                    @foreach($projects as $project)

                         <p>

                        <a href="/projects/{{ $project->id }}">{{ $project->title }} </a>


                    @endforeach
                                              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
