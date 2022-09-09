@extends('layouts.app')
@section('content')
<div id="page-content-wrapper">
                <!-- Page content-->
    <div class="container-fluid">
        <h1 class="mt-4">Student</h1>
        <div class="row syncAll" >
            <div class="col-md-12">

            <form method="post" action="{{ route('manage') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">phone</label>
                    <input type="text" class="form-control" name="phone"  aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">address</label>
                    <input type="text" class="form-control" name="address" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">city</label>
                    <input type="text" class="form-control" name="city"  aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">state</label>
                    <input type="text" class="form-control" name="state"  aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Country</label>
                    <input type="text" class="form-control" name="country"  aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">status</label>
                    <input type="text" class="form-control" name="status"  aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <b>Subject</b>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="subject_name" aria-describedby="emailHelp" placeholder="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mark</label>
                    <input type="text" class="form-control" name="subject_mark"  aria-describedby="emailHelp" placeholder="mark">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Grade</label>
                    <input type="text" class="form-control" name="subject_grade" aria-describedby="emailHelp" placeholder="grade">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection