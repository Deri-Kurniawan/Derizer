<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <title>Users</title>
</head>

<body>

  <h1 class="text-center">User List</h1>

  <div class="container-fluid my-3 text-center overflow-x-scroll">
    <table class="table table-hover table-bordered" id="myTable">
      <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>IP Address</th>
        <th>Actions</th>
      </tr>
      <?php foreach ($users as $user) : ?>
      <tr>
        <td><?= $user->id; ?></td>
        <td><?= $user->firstname . ' ' . $user->lastname; ?></td>
        <td><?= $user->gender; ?></td>
        <td><a class="text-decoration-none" href="mailto:<?= $user->email; ?>"><?= $user->email; ?></a></td>
        <td><?= $user->ip_address; ?></td>
        <td><a class="text-decoration-none" href="<?= baseUrl('users/detail/' . $user->id); ?>">Detail</a></td>
      </tr>
      <?php endforeach ?>
    </table>
  </div>

  <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init({
    once: true,
    offset: -50
  });
  </script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</body>

</html>