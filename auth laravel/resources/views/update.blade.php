<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Title</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS (if any) -->
    <link href="{{ asset('css/bootstrap5.css') }}" rel="stylesheet">
</head>
<body>
    @foreach ($tt as $tts)
   
@endforeach
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Update Your Data</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('oop',$tts->id)}}">
                        @csrf
                        <div class="table-responsive">
                            <table class="table table-bordered">
                          
                                <thead>
                                    <tr>
                                        <th>Field</th>
                                        <th>Input</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><label for="ssn">SSN</label></td>
                                        <td><input type="text" id="ssn" name="ssn" class="form-control" placeholder="Enter SSN" value=" {{$tts->id}}"></td>
                                    </tr>
                                  
                                    <tr>
                                        <td><label for="fname">First Name</label></td>
                                        <td><input type="text" id="fname" name="fname" class="form-control" placeholder="Enter First Name" value=" {{$tts->fname}}"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="lname">Last Name</label></td>
                                        <td><input type="text" id="lname" name="lname" class="form-control" placeholder="Enter Last Name" value="{{$tts->lname}}" ></td>
                                    </tr>
                                    <tr>
                                        <td><label for="email">Email</label></td>
                                        <td><input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" value=" {{$tts->email}}"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="dp_id">Department ID</label></td>
                                        <td><input type="number" id="dp_id" name="dp_id" class="form-control" placeholder="Enter Department ID" value="{{$tts->dp_id}}"></td>
                                    </tr>
                                  
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-success btn-block">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min
