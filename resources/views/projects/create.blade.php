@extends('layouts.app')

@section('title', 'Create New Project')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-12">
            <div class="card">

                 <div class="card-body">

                    

                    <form method="POST" action="/projects">

                        {{ csrf_field() }}

                        <div class="field">

                            <label class="label" for="title">Project Title</label>
                        
                        <div>

                            <input type="text" name="title" value="{{ old('title') }}" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" required>
                        
                        </div>

                        <div class="field">

                            <label class="label" for="description">Project Description</label>

                        <div>
 
                            <textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" required>{{ old('description') }}</textarea>
                            
                        </div>
                        <p>&nbsp;</p>
                        <div>

                            <button type="submit" class="button btn-primary">Create Project</button>
                                
                        </div>
                        

                        @include('errors')

                    </form>                      
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection