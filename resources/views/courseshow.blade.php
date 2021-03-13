 @extends('layout.default')

@section('content')

<h1> Course Details </h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Course Name</th>
      <th scope="col">Branch Name</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($courses as $course)
    <tr>
    	<td> {{$course->cname}} </td>
      <td> {{$course->bfull}} </td>
      <td><a href="">Edit</a></td>
      <td><a href="">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection