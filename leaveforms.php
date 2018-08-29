<!doctype html>
<html lang="en">
<?php require('common/header.php');
require_once("common/sqlconnect.php");
$url = "http://localhost/sgc/leaveforms.php";

if ($_SERVER['HTTP_REFERER'] == $url) {
    $message = "Leave Form Deleted";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
else{
    echo "test";
}

?>
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    LOA Forms | SGC Logistics
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="white">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
            <img src="assets/img/logoasdfasdf.png" width="200px">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="downloads.php">
                  <i class="material-icons">get_app</i>
                  <p>Downloads</p>
                </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="submit.php">
                  <i class="material-icons">label</i>
                  <p>Submit a Job</p>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="loggedjobs.php">
                  <i class="material-icons">view_headline</i>
                  <p>Logged Jobs</p>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="loa.php">
                  <i class="material-icons">weekend</i>
                  <p>Holiday / Leave Form</p>
              </a>
          </li>
            <!-- ADMIN ONLY SECTION -->
          <li class="nav-item">
              <a class="nav-link" href="users.php">
                  <i class="material-icons">people</i>
                  <p>Users</p>
              </a>
          </li>
          <li class="nav-item active-pro active">
              <a class="nav-link" href="leaveforms.php">
                  <i class="material-icons">directions_walk</i>
                  <p>Leave Forms</p>
              </a>
          </li>

        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">SGC Submitted Leave Forms </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">notifications</i> Notifications
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title ">Leave Forms</h4>
                                        <p class="card-category">User leave Forms / Request to go on Holiday</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                                <?php
                                                $connection = new Connection();
                                                $conn = $connection->getConnection();

                                                $sql = $conn->prepare("SELECT id, username, date, leaving, reason FROM loa");
                                                $sql->execute();
                                                $result = $sql->fetchAll();

                                                if ($sql->rowCount() > 0) {
                                                    echo "<table class=\"table\">
                                                <thead class=\" text-primary\">
                                                <th>
                                                    Name:
                                                </th>
                                                <th>
                                                    Date
                                                </th>
                                                <th>
                                                    Leaving SGC
                                                </th>
                                                <th>
                                                    Reason
                                                </th>
                                                <th>
                                                    Remove
                                                </th>
                                                </thead>
                                                <tbody>";
                                                    // output data of each row
                                                    foreach ($result as $row) {
                                                        echo "<tr><td>".$row["username"]."</td><td>".$row["date"]."</td><td>".$row["leaving"]."</td><td>".$row["reason"]."</td><td><a href='common/deleteloaform.php?id={$row['id']}'>Delete</a></td>";
                                                    }
                                                    echo "</tr></table>";
                                                } else {
                                                    echo "0 results";
                                                }
                                                return null;
                                                ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
      </div>
        <?php
            echo $footer;
        ?>
    </div>
  </div>
</body>

</html>