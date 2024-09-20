<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link  href="assets/css/style.min.css" rel="stylesheet">
    <link
  rel="icon"
  type="image/png"
  sizes="16x16"
  href="{{asset('images2/m.jpg')}}"
/>
    <style>
        body {
            background: linear-gradient(
                rgba(3, 201, 241, 0.5), 
                rgba(214, 211, 206, 0.464)
            ), url('path-to-your-background-image.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 50%;
            margin: 5% auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        <style>
    .card {
        border-radius: 15px;
        overflow: hidden;
    }

    .card-body {
        padding: 2rem;
    }

    .form-control-lg {
        border-radius: 10px;
    }

    .btn-lg {
        padding: 0.75rem 1.25rem;
        font-size: 1.25rem;
    }

    .text-danger {
        font-size: 0.875rem;
    }
</style>
   
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-13">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Register</h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" class="form-control form-control-lg " type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                                @error('name')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
    
                            <!-- Email Address -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" class="form-control form-control-lg" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                                @error('email')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
    
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" class="form-control form-control-lg" type="password" name="password" required autocomplete="new-password">
                                @error('password')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
    
                            <!-- Confirm Password -->
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input id="password_confirmation" class="form-control form-control-lg" type="password" name="password_confirmation" required autocomplete="new-password">
                                @error('password_confirmation')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
    
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary btn-lg w-100">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
