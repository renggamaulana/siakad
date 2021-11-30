@extends('layouts.main')


@section('container')

<h1>Students Page</h1>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Grade</th>
        <th scope="col">Student Number</th>
      </tr>
    </thead>
    <tbody>
    @foreach ( $students as $student )
     
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $student->name }}</td>
        <td>{{ $student->grade }}</td>
        <td>{{ $student->nim }}</td>
      </tr>
    </tbody>
    @endforeach
  </table>

@endsection