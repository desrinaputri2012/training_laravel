<h1>Login Page</h1>

{{ session('status') }}

<form method="post" action="">
  @csrf

  <input type="text" name="email" placeholder="Email">
  <input type="password" name="password" placeholder="password">
  <button>login</button>

</form>