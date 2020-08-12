@extends('layouts.app')

@section('content')

   <div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Contacts</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>certificateid</td>
          <td>location</td>
          <td>coursecode</td>
          <td>courseid</td>
          <td>coursename</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($certificates as $cer)
        <tr>
            <td>{{$cer->id}}</td>
            <td>{{$cer->name}}</td>
            <td>{{$cer->certificateid}}</td>
            <td>{{$cer->location}}</td>
            <td>{{$cer->coursecode}}</td>
            <td>{{$cer->courseid}}</td>
            <td>{{$cer->coursename}}</td>
            <td>
                <a href="{{ route('certificates.edit',$cer->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('certificates.destroy', $cer->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {{$certificates->links()}}
<div>
</div>
@endsection