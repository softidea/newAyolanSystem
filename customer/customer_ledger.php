<!DOCTYPE html>
<?php
date_default_timezone_set('Asia/Colombo');
$current_date = date("Y-m-d");
$cus_seid=filter_input(INPUT_GET, 'ser_number');
session_start();
echo 'alert($cus_seid)';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Customer | Ledger Card</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Latest compiled and minified CSS -->

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Optional theme -->

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,700,600italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" type="text/css" href="../assets/css/installments.css"/>
        
    </head>
    <body>
        
        
        <?php include '../assets/include/navigation_bar.php'; ?>

        <!--Service View Main Panel-->
        <div class="container" style="margin-top: 80px;display: block;" id="one">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="panelheading">
                            <h3 class="panel-title">Customer - Ledger Card</h3>
                        </div>
                        <div class="panel-body" style="background-color: #FAFAFA;">
                            <div class="col-sm-6">
                                <fieldset id="account">
                                    <legend>Service Information</legend>
                                    <input type="hidden" name="sevis_id" id="sevis_id" value="<?php echo $cus_seid;?>" />
                                    <div class="form-group required">
                                        <label class="control-label">Customer NIC:</label>
                                        <div class="form-inline required">
                                            <input type="text"  name="cus_nic" id="cus_nic" placeholder="NIC" class="form-control" style="width:85%;text-transform: uppercase;" maxlength="10" required/>
                                            <input type="button" class="btn btn" id="custcontinue" value="Search" onclick="loadInstallmentCustomer();">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="form-group required">
                                            <label class="control-label">Customer Name:</label>
                                            <input type="text"  name="cus_name" id="cus_name" placeholder="Customer Name" class="form-control" required readonly/>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="form-group required">
                                            <label class="control-label">Customer TP:</label>
                                            <input type="text"  name="cus_tp" id="cus_tp" placeholder="Customer Telephone" class="form-control" required readonly/>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="form-group required">
                                            <label class="control-label">Customer Address:</label>
                                            <input type="text" name="cus_address" id="cus_address" placeholder="Customer Telephone" class="form-control" required readonly/>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="form-group required">
                                            <label class="control-label">Registered Date:</label>
                                            <input type="text"  name="cus_reg_date" id="cus_reg_date" placeholder="Registered Date" class="form-control" required readonly/>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-sm-6">
                                <div id="searchOptionPanel">
                                    <fieldset id="account">
                                        <legend>Customer Information</legend>
                                        <div class="form-group required" style="display: block;" id="service_combo_div">
                                            <label class="control-label">Select Service:</label>
                                            <select name="service_combo" id="service_combo" class="form-control" onchange="loadServiceDetails(this.value);">
                                                <option value='0'>~~Select Service~~</option>
                                            </select>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label">Service No:</label>
                                            <div class="form-inline required">
                                                <input type="text"  name="ser_number" id="ser_number_id" placeholder="Service No" class="form-control"  style="width:85%;" maxlength="10" required/>
                                                <input type="button" class="btn btn" id="custcontinue" value="Search" onclick="loadInstallmentService();">
                                                <input type="hidden" id="hidden_ser_number" value="NONE">
                                            </div>
                                        </div>
                                        <div class="form-group required" style="display: block;" id="service_text_div">
                                            <label class="control-label">Vehicle No:</label>
                                            <div class="form-group required">
                                                <input type="text" name="ser_no" id="ser_no" placeholder="Vehicle No" class="form-control" required/>
<!--                                                <input type="button" class="btn btn" id="custcontinue" onclick="loadServices();" value="Search">-->
                                            </div>
                                        </div>
                                        <!--                                        <div class="form-group required">
                                                                                    <label class="control-label">Service Date:</label>
                                                                                    <input type="text" name="ser_date" id="ser_date" placeholder="Service Date" class="form-control" required readonly/>
                                                                                </div>-->
                                        <div class="form-group required">
                                            <div class="form-group required">
                                                <label class="control-label">Loan Payment:</label>
                                                <input type="text" name="ser_payment" id="ser_payment" placeholder="Loan Payment" class="form-control" required readonly/>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <div class="form-group required">
                                                <label class="control-label">Installment:</label>
                                                <input type="text" name="ser_installment" id="ser_installment" placeholder="Installment" class="form-control" required readonly/>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <!--Service View Main Panel-->

                            <!--Customer Service Loader-->
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="col-md-12" id="installment_result_panel">
                                            <table class="table table-bordered table-striped" id="installment_table">
                                                <thead>
                                                    <tr>
                                                        <th>Installment</th>
                                                        <th>Date</th>
                                                        <th>Paid Date</th>
                                                        <th>Payment</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbl_installment_body"></tbody>
                                            </table>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="container">
                                                <ul class="nav nav-tabs" style="width: 1000px;">
                                                    <li class="active"><a data-toggle="tab" href="#home">Add New</a></li>
                                                    <li><a data-toggle="tab" href="#menu3">Settlement</a></li>
                                                </ul>

                                                <div class="tab-content">
                                                    <div id="home" class="tab-pane fade in active">
                                                        <h3>Add New Installment Here</h3>
                                                        <p>New Installment available for the current service , Please add new installment</p>
                                                        <div class="col-sm-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label">Payable Installment:</label>
                                                                    <input type="text" readonly name="payble_installment" id="payble_installment" placeholder="Payable Installment" class="form-control" required/>
                                                                </div>
                                                                <div class="form-group required">
                                                                    <label class="control-label">Remaining Lease:</label>
                                                                    <input type="text" readonly name="remain_amount" id="remain_amount"  placeholder="Remaining Amount" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                            <button type="button"  class="btn btn" id="cservicebtn" onclick="saveInstallment();">Add Installment</button>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label">Payable Date:</label>
                                                                    <input type="text" readonly name="payable_date" id="payable_date" placeholder="Payable Date" class="form-control" required value="<?php echo $current_date;?>"/>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label">Payment:</label>
                                                                    <input type="text" name="payment_submit" id="payment_submit" placeholder="Payment" class="form-control" required onKeyPress="return numbersonly(this, event);"/>
                                                                </div>
                                                              
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-2">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label">Paid Date:</label>
                                                                    <input type="date" name="paid_date" id="paid_date" value="<?php echo $current_date; ?>" placeholder="Paid Date" class="form-control" required/>
                                                                </div>
<!--                                                                <div class="form-group required">
                                                                    <label class="control-label">Remaining Lease:</label>
                                                                    <input type="text" readonly name="remain_amount" id="remain_amount"  placeholder="Remaining Amount" class="form-control" required/>
                                                                </div>-->
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div id="menu3" class="tab-pane fade">
                                                        <h3>Settlement of the Loan Payment</h3>
                                                        <p>Service Settlement can be 6% Discount if more than 5 installments (months) available</p>
                                                        <div class="col-md-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="total_payable_installements">Total Payable Installments:</label>
                                                                    <input type="text" disabled name="fname" value="10" placeholder="Payment" id="total_payable_installements" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="total_payable_in_settlement">Total Payable:</label>
                                                                    <input type="text" disabled name="tot_payabale_in_settlment" value="35000.00" placeholder="Payment" id="total_payable_in_settlement" class="form-control" required/>
                                                                    <input type="hidden" value="NONE" id="requiredpayment" name="requiredpaymeny">
                                                                    <input type="hidden" value="NONE" id="maximumpayment" name="maximumpayment">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <label class="control-label" for="settlement_payment">Payment:</label>
                                                                    <input type="text" name="settlement_payment" placeholder="Payment" id="settlement_payment" class="form-control" required onKeyPress="return numbersonly(this, event);"/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group required">
                                                                <div class="form-group required">
                                                                    <button type="button"  class="btn btn" id="cservicebtn" onclick="saveLeaseSettlement();">Settle Loan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="button" class="btn btn" id="custcontinue_print" value="Print" onclick="PrintPreview();">
                                                <input type="button" class="btn btn" id="custcontinue_pdf" style="margin-right: 8px;" onclick="PrintDoc();" value="Save as PDF">
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
        <!--Customer Service Loader-->

        <?php include '../assets/include/footer.php'; ?>
    </body>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://bootsnipp.com/dist/scripts.min.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script type="text/javascript">
        function numbersonly(myfield, e, dec)
        {
            var key;
            var keychar;
            if (window.event)
                key = window.event.keyCode;
            else if (e)
                key = e.which;
            else
                return true;
            keychar = String.fromCharCode(key);
            if ((key == null) || (key == 0) || (key == 8) ||
                    (key == 9) || (key == 13) || (key == 27))
                return true;
            else if ((("0123456789").indexOf(keychar) > -1))
                return true;
            else if (dec && (keychar == ".")) {
                myfield.form.elements[dec].focus();
                return false;
            } else
                return false;
        }

    </script>
</html>
