@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
	
		
		
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        <form action="{{ route('certificates.store')}}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-6">:{{$certificates->id}}</div>
            </div>
			<div class="form-group">
                <label for="task" class="col-sm-3 control-label">certificateid</label>
                <div class="col-sm-6">:{{$certificates->id}}</div>
            </div>
			<div class="form-group">
                <label for="task" class="col-sm-3 control-label">location</label>
                <div class="col-sm-6">:{{$certificates->id}}</div>
            </div>
			<div class="form-group">
                <label for="task" class="col-sm-3 control-label">coursecode</label>
                <div class="col-sm-6">:{{$certificates->id}}</div>
            </div>
			<div class="form-group">
                <label for="task" class="col-sm-3 control-label">courseid</label>
                <div class="col-sm-6">:{{$certificates->id}}</div>
            </div>
			
			<div class="form-group">
                <label for="task" class="col-sm-3 control-label">coursename</label>
               <div class="col-sm-6">:{{$certificates->id}}</div>
            </div>
			
        </form>
    </div>

    <!-- TODO: Current Tasks -->
@endsection
