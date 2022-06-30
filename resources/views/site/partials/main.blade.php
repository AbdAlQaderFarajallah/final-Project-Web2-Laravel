  <!-- main -->
  <main class="container">
  <h1 class="text-center">Welcome to aboodChat! <br><small>A simple Facebook clone.</small></h1>

    <div class="row">
      <div class="col-md-6">
        <h4>Login to start enjoying unlimited fun!</h4>




        
        <!-- login form -->
        <form method="POST" action="{{route('authenticate')}}">
          @csrf
          <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="User name">
          </div>

          <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password">
          </div>

          <div class="form-group">
          <input class="btn btn-primary" type="submit" name="login" value="login">
          </div>
        </form>
        <!-- ./login form -->


      </div>
      <div class="col-md-6">
        <h4>Don't have an account yet? Register!</h4>



        <!-- register form -->
        <form method="GET" action="{{route('store')}}">
          @csrf
          <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Username">
          </div>

          <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="email">
          </div>

          <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password">
          </div>

          <div class="form-group">
            <input class="btn btn-success" type="submit" name="register" value="Register">
          </div>
        </form>
        <!-- ./register form -->


      </div>
    </div>
  </main>
  <!-- ./main -->