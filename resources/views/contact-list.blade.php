@extends('layout.app')
@section('content')
<div class="row">

    <div class="col-md-8 col-md-offset-2 m-auto">
        <div class="contact-form">
            <h3>Contact List</h1>
            <table class="table table-striped table-hover">
              <thead>
           <tbody>
               @foreach ($contacts as $contact )

                <tr>


                  <th scope="row">{{$contact->id}}1</th>
                  <td>{{$contact->fName}}</td>
                  <td>{{$contact->lName}}</td>
                  <td>{{$contact->email}}</td>
                  <td><button type="submit" class="btn btn-danger">Delete</button></td>
                  <td><button type="submit" class="btn btn-primary">Edit</button></td>

              </tbody>
            </table>
        </div>
    </div>
    @endsection
