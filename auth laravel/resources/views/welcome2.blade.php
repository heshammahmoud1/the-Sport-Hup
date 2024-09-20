@extends('style')
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">MyApp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li  class="nav-item">
                <a href="{{ route('insert') }}" class="nav-link">Added</a>
            </li>
            @if (Route::has('login'))
              @auth
                <li class="nav-item">
                  <a href="{{ url('/dashboard') }}" class="nav-link active">Dashboard</a>
                </li>
              @else
                <li class="nav-item">
                  <a href="{{ route('login') }}" class="nav-link">Login</a>
                </li>
                @if (Route::has('register'))
                  <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                  </li>
                @endif
              @endauth
            @endif

          </ul>
        </div>
      </div>
    </nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SportsZone</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Live Scores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Teams</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  {{-- section --}}
  <section class="bg-dark text-white text-center py-5">
    <div class="container">
      <h1 class="display-4">Welcome to SportsZone</h1>
      <p class="lead">Your ultimate destination for sports news, live scores, and exclusive interviews with top athletes.</p>
      <a href="#" class="btn btn-primary btn-lg">Get Latest Scores</a>
    </div>
  </section>
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="{{asset('images2/img.jpg')}}" class="card-img-top" alt="Event 1">
            <div class="card-body">
              <h5 class="card-title">Football Championship</h5>
              <p class="card-text">Catch all the action from the national football championship.</p>
              <a  href="" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{asset('images2/m.jpg')}}"class="card-img-top" alt="Event 2">
            <div class="card-body">
              <h5 class="card-title">Basketball Finals</h5>
              <p class="card-text">Follow the finals of the top basketball league.</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{asset('images2/u.jpg')}}" class="card-img-top" alt="Event 3">
            <div class="card-body">
              <h5 class="card-title">Tennis Grand Slam</h5>
              <p class="card-text">Don’t miss out on the intense competition in the tennis grand slam.</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-4">Upcoming Matches</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Team A</th>
            <th scope="col">Team B</th>
            <th scope="col">Venue</th>
            <th scope="col">Time</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2024-09-21</td>
            <td>Team A</td>
            <td>Team B</td>
            <td>Stadium 1</td>
            <td>18:00</td>
          </tr>
          <tr>
            <td>2024-09-22</td>
            <td>Team C</td>
            <td>Team D</td>
            <td>Stadium 2</td>
            <td>20:00</td>
          </tr>
          <tr>
            <td>2024-09-23</td>
            <td>Team E</td>
            <td>Team F</td>
            <td>Stadium 3</td>
            <td>19:00</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
     <!-- Footer -->
     <footer class="footer-custom">
        <div class="container">
          <div class="row">
            <!-- About Section -->
            <div class="col-md-4">
              <h5>About SportsZone</h5>
              <p>
                SportsZone brings you the latest sports news, live scores, and player statistics. Stay updated with your favorite teams and players right here.
              </p>
            </div>
            <!-- Quick Links -->
            <div class="col-md-4">
              <h5>Quick Links</h5>
              <ul class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">Live Scores</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Teams</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
            <!-- Contact Section -->
            <div class="col-md-4">
              <h5>Contact Us</h5>
              <p>
                <strong>Email:</strong> support@sportszone.com <br />
                <strong>Phone:</strong> +123 456 7890
              </p>
              <h5>Follow Us</h5>
              <div class="footer-social">
                <a href="#"><img src="https://img.icons8.com/fluent/24/000000/facebook-new.png" alt="Facebook" /></a>
                <a href="#"><img src="https://img.icons8.com/fluent/24/000000/twitter.png" alt="Twitter" /></a>
                <a href="#"><img src="https://img.icons8.com/fluent/24/000000/instagram-new.png" alt="Instagram" /></a>
              </div>
            </div>
          </div>
        </div>
        
      </footer>
  
  
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/custom.min.js"></script>

  </body>
</html>
