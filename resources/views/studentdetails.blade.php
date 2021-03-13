@extends('layout.default')

@section('content')

<h1> Student Details </h1>

<div class="col-md-4 pull-right " >
  <form action="/search" method="get">
    @csrf
    <div class="input-group">
      <input type="search" name="search" class="form-control">
      <span class="input-group-prepend">
        <button type="submit" class="btn btn-primary">Search</button>
      </span>
    </div>
  </form>
</div>

<form action="<?= url('checkbox'); ?>" method="post">
  @csrf
  <input type="checkbox" class="parameter" id="parameter1" name="param[]" value="fname">
  Father Name
  <input type="checkbox" class="parameter" id="parameter2" name="param[]" value="class">
  Class
  <input type="checkbox" class="parameter" id="parameter3" name="param[]" value="phnum">
  Phone Number
  <input type="checkbox" class="parameter" id="parameter4" name="param[]" value="email">
  Email
  <input type="submit" name="checkbox">
</form>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Student Name</th>
      <th scope="col">Father's Name</th>
      <th scope="col">Class</th>
      <th scope="col">Phon Numbar</th>
      <th scope="col">Email</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($students as $student)
    <tr>
    	<td> {{$student->sname}} </td>
    	<td> {{$student->fname}} </td>
    	<td> {{$student->class}} </td>
    	<td> {{$student->phnum}} </td>
    	<td> {{$student->email}} </td>
      <td><a href="{{route('student.edit', ['id' => $student->id])}}">Edit</a></td>
      <td><a href="{{route('student.delete', ['id' => $student->id])}}">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$students->links()}}
@endsection