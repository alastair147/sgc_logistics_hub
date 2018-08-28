<!doctype html>
<html lang="en">
<?php require('common/header.php');
require_once("common/sqlconnect.php");
require_once("common/jobselector.php");?>
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    View Job <?php echo $id; ?> | SGC Logistics
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
            <a class="navbar-brand" href="#pablo">View Job <?php echo $id; ?></a>
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
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Viewing Job <?php echo $id; ?></h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Username</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"><?php echo $username; ?></label>
                                            <input type="text" class="form-control" name="username" title="Username Goes Here" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Date</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"><?php echo $d; ?></label>
                                            <input type="text" class="form-control" name="date" title="Date you completed the job" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Pickup City</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"><?php echo $pcity; ?></label>
                                            <input type="text" class="form-control" name="pickupcity" title="Location of the pickup" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Destination City</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"><?php echo $dcity; ?></label>
                                            <input type="text" class="form-control" name="destinationcity" title="Location of the Destination" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Pickup Company</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"><?php echo $pcompany; ?></label>
                                            <input type="text" class="form-control" name="pickupcompany" title="Company you picked up the load from" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Desination Company</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"><?php echo $dcompany; ?></label>
                                            <input type="text" class="form-control" name="destinationcompany" title="Company you dropped off the load to" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Distance Driven</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"><?php echo $distance; ?></label>
                                            <input type="text" class="form-control" name="distance" title="How far did you drive" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Convoying</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"><?php echo $convoy; ?></label>
                                            <input type="text" class="form-control" name="convoy" title="Did you drive with other users/SGC Drivers" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Cargo</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"><?php echo $cargo; ?></label>
                                            <input type="text" class="form-control" name="cargo" title="What was your cargo" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Weight</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"><?php echo $weight; ?></label>
                                            <input type="text" class="form-control" name="weight" title="How heavy was the load" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Potential Income</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"><?php echo $pincome; ?></label>
                                            <input type="text" class="form-control" name="potentialincome" title="How much were you expecting to make" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Total Income</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"><?php echo $tincome; ?></label>
                                            <input type="text" class="form-control" name="totalincome" title="The amount you made final" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Damage Taken</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"><?php echo $tdamage; ?></label>
                                            <input type="text" class="form-control" name="totaldamage" title="How much damage did you take" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title"></h4>
                                <p class="card-category">Extra Detail</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Notes</label>
                                            <div class="form-group">
                                                <label class="bmd-label-floating"><?php echo $notes; ?></label>
                                                <textarea class="form-control" rows="5" name="notes"  disabled></textarea>
                                            </div>
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