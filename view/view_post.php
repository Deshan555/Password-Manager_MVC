<?php

function domain_Extractor($base_url)
{
  $parsedUrl = parse_url($base_url);

  // Get the host (domain)
  $host = $parsedUrl['host'];

  // Remove subdomains and get the main domain
  $parts = explode('.', $host);
  $mainDomain = $parts[count($parts) - 2] . '.' . $parts[count($parts) - 1];

  return $mainDomain;
}

function validatePassword($password)
{
  $length = strlen($password);
  $uppercase = preg_match('@[A-Z]@', $password);
  $lowercase = preg_match('@[a-z]@', $password);
  $number = preg_match('@[0-9]@', $password);
  $specialChars = preg_match('@[^\w]@', $password);

  if ($length >= 8 && $uppercase && $lowercase && $number && $specialChars) {
    return "Strong";
  } elseif ($length >= 6 && ($uppercase || $lowercase) && ($number || $specialChars)) {
    return "Medium";
  } else {
    return "Weak";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
</head>

<body class="container">

  <table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
      <tr>
        <th>Account Name</th>
        <th>User Name</th>
        <th>Password Status</th>
        <th>Last Update</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

      <?php

      foreach ($posts as $post) { ?>
        <tr>
          <td>
            <div class="d-flex align-items-center">
              <img src="https://mdbootstrap.com/img/new/avatars/7.jpg" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
              <div class="ms-3">
                <p class="fw-bold mb-1"><?php echo $post['AccountName'] ?></p>
                <p class="text-muted mb-0"><?php echo domain_Extractor($post['Host_Name']); ?></p>
              </div>
            </div>
          </td>
          <td>
            <p class="fw-normal mb-1"><?php echo $post['User_Name']; ?></p>
            <p class="text-muted mb-0"><?php echo domain_Extractor($post['Host_Name']); ?></p>
          </td>

          <?php
          if (validatePassword($post['Password']) == "Strong") {
            echo '<td>
            <span class="badge badge-success rounded-pill d-inline">' . validatePassword($post['Password']) . '</span>';
          } elseif (validatePassword($post['Password']) == "Medium") {
            echo '<td>
            <span class="badge badge-primary rounded-pill d-inline">' . validatePassword($post['Password']) . '</span>';
          } else {
            echo '<td>
            <span class="badge badge-warning rounded-pill d-inline">' . validatePassword($post['Password']) . '</span>';
          }
          ?>
          <td><?php echo $post['LastUpdate']; ?></td>
          <td>
            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
              Update
            </button>
            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
              Visit
            </button>
            <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
              Delete
            </button>
          </td>
        </tr>
      <?php } ?>

      ?>

    </tbody>
  </table>
</body>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>

</html>