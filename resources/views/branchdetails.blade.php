 @extends('layout.default')

@section('content')

<h1> Student Details </h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Branch Full Name</th>
      <th scope="col">Branch Short Name</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($branches as $branche)
    <tr>
    	<td> {{$branche->bshort}} </td>
    	<td> {{$branche->bfull}} </td>
      <td><a href="{{route('branch.edit', ['id' => $branche->id])}}">Edit</a></td>
      <td><a href="{{route('branch.delete', ['id' => $branche->id])}}">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$branches->links()}}
@endsection