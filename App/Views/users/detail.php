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


  <title>Users</title>
</head>

<h1 class="text-center" data-aos="fade-down">Detail User</h1>

<div class="container my-3">
  <table class="table table-bordered text-center" data-aos="flip-up">
    <tr>
      <th>ID</th>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Email</th>
      <th>Gender</th>
      <th>IP Address</th>
    </tr>
    <tr>
      <td><?= $user->id; ?></td>
      <td><?= $user->firstname; ?></td>
      <td><?= $user->lastname; ?></td>
      <td><?= $user->email; ?></td>
      <td><?= $user->gender; ?></td>
      <td><?= $user->ip_address; ?></td>
    </tr>
  </table>

  <a href="<?= baseUrl('users'); ?>">Go Back</a>
</div>

<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>