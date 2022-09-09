@extends('layouts.app')
@section('content')
<div id="page-content-wrapper">
                <!-- Page content-->
    <div class="container-fluid">
        <h1 class="mt-4">Student</h1>
        <div class="row syncAll" >
            <div class="col-md-12">
            <a href="{{ route('form') }}">Add New</a>
            <table id="" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th >ID</th>                  
                        <th>Name</th>
                        <th>Email</th>
                        <th>phone</th>
                        <th>address</th>
                        <th>city</th>
                        <th>state</th>
                        <th>Country</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($student as $res)
                <tr>
                    @csrf
                        <td style="text-align: center;">{{ $res->id }}</td>
                        <td style="text-align: center;">{{ $res->name }}</td>
                        <td style="text-align: center;">{{ $res->email }}</td>
                        <td style="text-align: center;">{{ $res->phone }}</td>
                        <td style="text-align: center;">{{ $res->address }}</td>
                        
                        <td style="text-align: center;">{{ $res->city }}</td>
                        <td style="text-align: center;">{{ $res->state }}</td>
                        <td style="text-align: center;">{{ $res->Country }}</td>
                        <td style="text-align: center;"><select data-id="{{ $res->id }}">
                            <option value="1"
                            @if($res->status == 1)
                                 Selected="Selected"
                            @endif
                            >Active
                            </option>
                            <option value="0"
                            @if($res->status == 0)
                                 Selected="Selected"
                            @endif
                            >Inactive</option>
                        </select></td>
                        @if($res->status == 1)
                              Active
                        @endif
                        <td style="text-align: center;"><a  data-id="{{ $res->id }}" href="{{  url('/student/edit') }}/{{ $res->id }}">Update<a>|<a class="delete" data-id="{{ $res->id }}">Delete</a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            </div>
        </div>
        
    </div>




</div>
@endsection