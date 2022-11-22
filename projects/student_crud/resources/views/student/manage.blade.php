@section('title', 'All student information')
@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
               <div class="col-md-10">
                   <div class="card">
                       <div class="card-header">
                           <h3 class="text-center fw-bold">All Student Information</h3>
                       </div>
                       <div class="card-body">
                           <p class="text-center text-success">{{Session::get('message')}}</p>
                           <table class="table table-bordered table-striped table-hover">
                               <thead>
                                   <tr>
                                       <th>id</th>
                                       <th>Name</th>
                                       <th>City</th>
                                       <th>Subject</th>
                                       <th>CGPA</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   @foreach($students as $student)
                                       <tr>
                                           <td>{{$loop->iteration}}</td>
                                           <td>{{$student->name}}</td>
                                           <td>{{$student->city}}</td>
                                           <td>{{$student->subject}}</td>
                                           <td>{{$student->CGPA}}</td>
                                           <td class="d-flex justify-content-center align-items-center">
                                               <a href="{{route('student.details', ['id' => $student->id])}}" class="btn btn-outline-info">Details</a>
                                               <a href="{{route('student.edit', ['id' => $student->id])}}" class="btn btn-outline-success px-4 mx-2">Edit</a>
                                               <a href="{{route('student.delete', ['id' => $student->id])}}" class="btn btn-outline-danger">Delete</a>
                                           </td>
                                       </tr>
                                   @endforeach
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </section>
@endsection
