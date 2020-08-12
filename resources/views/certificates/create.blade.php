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
                <div class="col-sm-6"><input type="text" name="name" id="task-name" class="form-control"></div>
            </div>
			<div class="form-group">
                <label for="task" class="col-sm-3 control-label">certificateid</label>
                <div class="col-sm-6"><input type="text" name="certificateid" id="task-certificateid" class="form-control"></div>
            </div>
			<div class="form-group">
                <label for="task" class="col-sm-3 control-label">location</label>
                <div class="col-sm-6"><input type="text" name="location" id="task-location" class="form-control"></div>
            </div>
			<div class="form-group">
                <label for="task" class="col-sm-3 control-label">coursecode</label>
                <div class="col-sm-6"><input type="text" name="coursecode" id="task-coursecode" class="form-control"></div>
            </div>
			<div class="form-group">
                <label for="task" class="col-sm-3 control-label">courseid</label>
                <div class="col-sm-6"><input type="text" name="courseid" id="task-courseid" class="form-control"></div>
            </div>
			
			<div class="form-group">
                <label for="task" class="col-sm-3 control-label">coursename</label>
                <div class="col-sm-6"><input type="text" name="coursename" id="task-coursename" class="form-control"></div>
            </div>
			
            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Certificate
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Tasks -->
@endsection
