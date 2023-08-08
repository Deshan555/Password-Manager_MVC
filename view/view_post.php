<?php

var_dump($posts);

echo $posts[0]['Host_Name'];

foreach ($posts as $post) {
   echo $post['Host_Name'];
}

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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body class="container">

<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Name</th>
      <th>Title</th>
      <th>Status</th>
      <th>Position</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>

    <?php

    foreach ($posts as $post) { ?>
        <tr>
        <td>
          <div class="d-flex align-items-center">
            <img
                src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                class="rounded-circle"
                alt=""
                style="width: 45px; height: 45px"
                />
            <div class="ms-3">
              <p class="fw-bold mb-1"><?php echo $post['AccountName'] ?></p>
              <p class="text-muted mb-0"><?php echo domain_Extractor($post['Host_Name']); ?></p>
            </div>
          </div>
        </td>
        <td>
          <p class="fw-normal mb-1">Designer</p>
          <p class="text-muted mb-0">UI/UX</p>
        </td>
        <td>
          <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
        </td>
        <td>Senior</td>
        <td>
          <button
                  type="button"
                  class="btn btn-link btn-rounded btn-sm fw-bold"
                  data-mdb-ripple-color="dark"
                  >
            Edit
          </button>
        </td>
      </tr>
    <?php }?>

    ?> 

  </tbody>
</table>
</body>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
></script>

</html>