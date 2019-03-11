@extends('layouts.app')


@section('title', 'Project Detail')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-12">
            <div class="card">

                 <div class="card-body">
               

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="title">{{ $project->title }}</h1><hr>

                    <div class="content">{{ $project->description }} </div> 

                    <p>

                    <a href="/projects/{{ $project->id }}/edit">Edit</a>

                    </p>
                    <p>&nbsp;</p>

                    @if ($project->tasks->count())

                        <div class="box">


                            @foreach($project->tasks as $task)

                            <div>

                                <form method="POST" action="/tasks/{{ $task->id }}">

                              
                                   @method('PATCH')
 
                                    @csrf

                                    <label class="checkbox {{ $task->completed ? 'is-complete' : ''}}" for="completed">

                                        <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>

                                        {{ $task->description }}

                                    </label>

                                </form>

                            </div>

                            @endforeach

                            

                        </div>
                    @endif

                    <form method="POST" action="/projects/{{ $project->id }}/tasks" class="box">

                        @csrf

                        <div class="field">

                            <label class="label" for="description">New Task</label>

                                <div class="control">

                                    <input type="text" name="description" class="input {{ $errors->has('description') ? 'is-danger' : '' }}" value="{{ old('description') }}" required>

                                </div>

                        </div>

                        <div class="field">

                            <div class="control">

                                <button type="submit" class="button is-link">Add Task</button>

                            </div>
                            <br>

                        @include('errors')

                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection