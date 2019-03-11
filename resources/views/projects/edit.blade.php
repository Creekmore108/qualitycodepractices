@extends('layouts.app')

@section('title', 'Edit Project')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-12">
            <div class="card">

                 <div class="card-body">

                  

                    <form action="/projects/{{ $project->id }}" method="POST" style="margin-bottom:lem;">

                    	@method('PATCH')
                    	@csrf
                   	
                    	<div class="field">

                    		<label class="label" for="title">Edit Project</label>
                    		
                    	</div>

                    	<div class="control">

                    		<input type="text" class="input" name="title"  value="{{ $project->title }}">
                    		
                    	</div>

                    	<div class="field">

                    		<label class="label" for="description">Description</label>


                    		<div class="control">

                    			<textarea name="description" class="textarea">{{ $project->description }}</textarea>

                    		</di>

                    	</div>

                    	<p>&nbsp;</p>

                    	<div class="field">

                    		<div class="control">

                    			<button type="submit" class="button btn-primary">Update Project</button> 

                    		</div>

                    	</div>
                        
                     </form>
                     <p>

                     <form method="POST" action="/projects/{{ $project->id }}">

                     	@method('DELETE')

                     	@csrf

                     	<div class="field">

                     		<div class="control">
                     			
                     		</style>

                     			<button type="submit" class="button btn-danger">Delete Project</button>
                     		
                     		</div>
                     	
                     	</div>

                     </form>

               </div>  
            </div>
        </div>
    </div>
</div>
@endsection


