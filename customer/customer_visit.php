<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Customer Visiting Registration</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,700,600italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../assets/css/customer_registration.css">

        <?php if (isset($_GET['bootstrap']) && $_GET['bootstrap'] == 1): ?>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <?php else: ?>
            <link rel="stylesheet" type="text/css" href="../assets/css/zebra_pagination.css">
        <?php endif ?>

        <link rel="icon" href="favicon.ico">
        <?php include '../controller/co_load_bike_rates.php'; ?>
    </head>
    <body>
        <?php include '../assets/include/navigation_bar.php'; ?>
        <div class="container" style="margin-top: 80px;display: block;">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="panelheading">
                            <h3 class="panel-title">Customer Visit Information</h3>
                        </div>
                        <div class="panel-body" style="background-color: #FAFAFA;">
                            <!--bike rate registration-->
                            <div class="new_vehicle" style="display: block;">
                                <div class="col-sm-6">
                                    <fieldset id="account">
                                        <legend>Customer Visit Registration</legend>
                                        <div class="form-group required">
                                            <label class="control-label">Service No:</label>
                                            <div class="form-inline required">
                                                <input type="text"  name="service_no" id="service_no" class="form-control" style="width:85%;text-transform: uppercase;" maxlength="10" required/>
                                                <input type="button" class="btn btn" id="custcontinue" value="Search">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label">Vehicle No:</label>
                                            <input type="text" name="cus_name" id="cus_name" placeholder="Vehicle No" class="form-control" />
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label">Customer NIC:</label>
                                            <input type="text" name="cus_nic" id="cus_nic" placeholder="Customer NIC" class="form-control" />
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label">Visit Cost:</label>
                                            <input type="text" name="visit_cost" id="visit_cost" placeholder="00.00" class="form-control" />
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label">Visit Date:</label>
                                            <input type="date" name="visit_date" id="visit_date" class="form-control" value="<?php echo date("Y-m-d"); ?>"/>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label">Visit Description:</label>
                                            <input type="text" name="visit_des" id="visit_des" placeholder="Visit Description" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn" id="cservicebtn">Save Visit</button>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <!--bike rate registration-->
                            <div class="new_vehicle" style="display: block;">
                                <div class="col-sm-6">
                                    <fieldset id="account">
                                        <legend>Visit Information</legend>
                                        <div class="form-group required">
                                            <label class="control-label">Service No:</label>
                                            <div class="form-inline required">
                                                <input type="text"  name="service_no" id="service_no" class="form-control" style="width:85%;text-transform: uppercase;" maxlength="10" required/>
                                                <input type="button" class="btn btn" id="custcontinue" value="Search">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label">Visit Date:</label>
                                            <div class="form-inline required">
                                                <input type="date" name="visit_date" id="visit_date" class="form-control" style="width:85%;" value="<?php echo date("Y-m-d"); ?>"/>
                                                <input type="button" class="btn btn" id="custcontinue" value="Search">
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-sm-6">
                                    <table class="table table-bordered table-striped table-hover">
                                        <tr>
                                            <th>Visit Date</th>
                                            <th>Service No</th>
                                            <th>Customer</th>
                                            <th>Cost</th>
                                            <th>Description</th>
                                        </tr>
                                        <tr>
                                            <td>2016-09-25</td>
                                            <td>HOR-555</td>
                                            <td>Dilru Perera</td>
                                            <td>Cost</td>
                                            <td>Visit Description</td>
                                        </tr>
                                        <tr>
                                            <td>2016-09-25</td>
                                            <td>HOR-555</td>
                                            <td>Dilru Perera</td>
                                            <td>Cost</td>
                                            <td>Visit Description</td>
                                        </tr>
                                        <tr>
                                            <td>2016-09-25</td>
                                            <td>HOR-555</td>
                                            <td>Dilru Perera</td>
                                            <td>Cost</td>
                                            <td>Visit Description</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-sm-6">
                                    <fieldset id="account">
                                        <legend>Update Visit</legend>
                                        <div class="form-group required">
                                            <label class="control-label">Service No:</label>
                                            <div class="form-inline required">
                                                <input type="text"  name="service_no" id="service_no" class="form-control" style="width:85%;text-transform: uppercase;" maxlength="10" required/>
                                                <input type="button" class="btn btn" id="custcontinue" value="Search">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label">Visit Date:</label>
                                            <input type="date" name="visit_date" id="visit_date" class="form-control" value="<?php echo date("Y-m-d"); ?>"/>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label">Visit Cost:</label>
                                            <div class="form-inline required">
                                                <input type="text" name="visit_cost" id="visit_cost" placeholder="00.00" style="width:80%;" class="form-control" />
                                                <input type="button" class="btn btn" id="custcontinue" value="Update Visit">
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include '../assets/include/footer.php'; ?>
    </body>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://bootsnipp.com/dist/scripts.min.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</html>
