<h1>Registration Page</h1>

{{ session('status') }}

<form method="POST" enctype="multipart/form-data">
  @csrf

  <div>
    <label for="">Name</label>
    <input type="text" name="name" placeholder="Nama">
  </div>
  <div>
    <label for="">Email</label>
    <input type="email" name="email" placeholder="Email">
  </div>
  <div>
    <label for="">Password</label>
    <input type="password" name="password" placeholder="Password">
  </div>
  <div>
    <label for="">Foto</label>
    <input type="file" name="photo" placeholder="Foto" accept="image/*">
  </div>
  <button>Simpan</button>

  <div class="navbar-nav">
    <button><a href="{{url ('/') }}">Back</a></button>
  </div>
</form>

<?php

  if ($_POST) {

    $data[] = $_POST['name'];
    $data[] = $_POST['email'];
    $data[] = $_POST['password'];
    $data[] = $_FILES['photo']['name'];

    
    if (!file_exists('photos')) mkdir('photos');
    move_uploaded_file(
      $_FILES['photo']['tmp_name'],
      'photos/' . time() . $_FILES['photo']['name'],
    );
  }
?>