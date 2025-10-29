<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Form Submit</title>
<style>
form {
  border-radius: 5px;
  padding: 20px;
  width: 400px;
  margin: 50px auto;
  background-color: #f9f9f9;
}
label {
  display: block;
  margin-top: 10px;
  font-weight: bold;
}
input[type=text],
input[type=email],
input[type=password],
select {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
.alert {
  width: 400px;
  margin: 10px auto;
  padding: 10px;
  border-radius: 4px;
}
.alert-success {
  background-color: #d4edda;
  color: #155724;
}

.error-message {
  color: #e74c3c;
  font-size: 0.9em;
  margin-top: -5px;
  margin-bottom: 10px;
}
</style>
</head>
<body>

<h2 style="text-align:center;">Form Submit</h2>

@if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

<form action="{{ route('register.submit') }}" method="POST">
  @csrf

  
  <label for="fname">Name</label>
  <input type="text" id="fname" name="name" placeholder="Your name.." value="{{ old('name') }}">
  @error('name')
    <div class="error-message">{{ $message }}</div>
  @enderror

  
  <label for="email">Email</label>
  <input type="email" id="email" name="email" placeholder="Your email.." value="{{ old('email') }}">
  @error('email')
    <div class="error-message">{{ $message }}</div>
  @enderror

  
  <label for="password">Password</label>
  <input type="password" id="password" name="password" placeholder="Your password..">
  @error('password')
    <div class="error-message">{{ $message }}</div>
  @enderror

  
  <label for="password_confirmation">Confirmer Password</label>
  <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password..">
  @error('password_confirmation')
    <div class="error-message">{{ $message }}</div>
  @enderror

  <input type="submit" value="Submit">
</form>

</body>
</html>
