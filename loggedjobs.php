<!doctype html>
<html lang="en">
<?php require('common/header.php');
require_once("common/sqlconnect.php");?>
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Logged Jobs | SGC Logistics
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
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
              <a class="nav-link" href="#0">
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
          <li class="nav-item active">
              <a class="nav-link" href="#0">
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
          <li class="nav-item">
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
            <a class="navbar-brand" href="#pablo">SGC Logistics Logged Jobs</a>
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
                                    <h4 class="card-title ">SGC Logged Jobs</h4>
                                    <p class="card-category">Find all our users logged jobs</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                            <?php
                                            $connection = new Connection();
                                            $conn = $connection->getConnection();

                                            $sql = $conn->prepare("SELECT id, date, username, pickup_city, destination_city, cargo FROM user_jobs");
                                            $sql->execute();
                                            $result = $sql->fetchAll();

                                            if ($sql->rowCount() > 0) {
                                                echo "                                            <table class=\"table\">
                                            <thead class=\" text-primary\">
                                            <th>
                                                ID:
                                            </th>
                                            <th>
                                                Date: 
                                            </th>
                                            <th>
                                                User: 
                                            </th>
                                            <th>
                                                Pickup:
                                            </th>
                                            <th>
                                                Destination:
                                            </th>
                                            <th>
                                                Cargo:
                                            </th>
                                            <th>
                                                View Job:
                                            </th>
                                            <th>
                                                Delete:
                                            </th>
                                            </thead>
                                            <tbody>";
                                                // output data of each row
                                                foreach ($result as $row) {
                                                    echo "<tr><td>".$row["id"]."</td><td>".$row["date"]."</td><td>".$row["username"]."</td><td>".$row["pickup_city"]."</td><td>".$row["destination_city"]."</td><td>".$row["cargo"]."</td><td><a href='viewjob.php?id={$row['id']}'>View Job</a></td><td><a href='common/deletejob.php?id={$row['id']}'>Delete</a></td>";
                                                }
                                                echo "</tr>";
                                                echo "</table>";
                                                echo $_SERVER['HTTP_REFERER'];
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