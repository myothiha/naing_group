
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link  rel="shortcut icon" type="image/icon" href="img/logo.png" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ url('') }}/css/admin.css">
</head>
<body>

	<div class="container register-section">
		<div class="row">
			<div class="col-md-8 offset-md-2">
            <div class="panel panel-default pt-4">
                <nav aria-label="breadcrumb" >
				  <ol class="breadcrumb" class="pt-4">
				    <li class="breadcrumb-item register-active " aria-current="page">Login User</li>
				  </ol>
				</nav>
				@if(session('error'))
				    <div class="alert alert-success">
				        {{ session('error') }}
				    </div>
				@endif
				@include('errors.list')
                <form action="{{ action('LoginController@authenticated') }}" method="POST">
                {{ csrf_field() }}
				  <div class="form-row">				    
				    <div class="form-group col-md-12">
				      <label for="email">Email Address</label>
				      <input type="email" name="email" class="form-control" placeholder="Email">
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-12">
				      <label for="password">Password</label>
				      <input type="password" name="password" class="form-control" placeholder="password">
				    </div>				    
				  </div>
				  <div class="form-row">
				  <button type="submit" class="btn btn-primary form-control">Sign In</button>
				  </div>
				</form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


