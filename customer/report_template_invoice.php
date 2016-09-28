<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Report | Invoice</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php

session_start();

$p_vehicle_number="None";
$p_service_number="None";
$p_cus_name="None";
$p_amount_word="None";
$p_amount="0.00";
$p_due_amount="0.00";

$p_username=$_SESSION['user_username'];

?>


    </head>
    <body>
        <style>
            div.container {
                width: 100%;
                border: 1px solid gray;
            }

            header{
                padding: 2em;
                height:200px;
                color: black;
                padding-top: 0px;
                margin: 0px;
                clear: left;
                text-align: center;
            }
            footer {
                padding: 1px;
                color: black;
                /*background-color: #009688; */
                clear: left;
                text-align: center;
            }
            img{
                height: 100px;
                width: 100px;
                float: left;
            }
            article {
                margin-left: 170px;
                padding: 1em;
                overflow: hidden;
            }
            h1 {
                font-family: sans-serif,Tahoma, Verdana, Segoe;
                font-size: 24px;
                font-style: normal;
                font-variant: normal;
                font-weight: 500;
                line-height: 26.4px;
            }
            h3 {
                font-family: sans-serif,Tahoma, Verdana, Segoe;
                font-size: 14px;
                font-style: normal;
                font-variant: normal;
                font-weight: 500;
                line-height: 15.4px;
            }
            #address1 {
                font-family: sans-serif,Tahoma, Verdana, Segoe;
                font-size: 14px;
                font-style: normal;
                font-variant: normal;
                font-weight: 400;
                /*line-height: 20px;*/

            }
            #address2 {
                font-family: sans-serif,Tahoma, Verdana, Segoe;
                font-size: 14px;
                font-style: normal;
                font-variant: normal;
                font-weight: 400;
                /*line-height: 20px;*/

            }
            #address3 {
                font-family: sans-serif,Tahoma, Verdana, Segoe;
                font-size: 14px;
                font-style: normal;
                font-variant: normal;
                font-weight: 400;
                /*line-height: 20px;*/
                /*margin-bottom: 40px;*/   
            }
            p {
                font-family: sans-serif,Tahoma, Verdana, Segoe;
                font-size: 21px;
                font-style: normal;
                font-variant: normal;
                font-weight: 400;
                line-height: 30px;
            }
            footer {
                font-family: sans-serif,Tahoma, Verdana, Segoe;
                font-size: 13px;
                font-style: normal;
                font-variant: normal;
                font-weight: 400;
                line-height: 18.5714px;
            }
            tr{
                 font-family: sans-serif,Tahoma, Verdana, Segoe;
                font-size: 14px;
                padding-bottom: 5px;
                margin: 10px;

            }
        </style>

    </head>
    <body>

        <div class="container">

            <header>
                <img src="http://ayolaninvestments.com/system/assets/images/admin/ayolan_logo.png" alt="img" style="width: 180px;height: 190px;"/>


                <h1 style="font-family: sans-serif,Tahoma, Verdana, Segoe">CUSTOMER INVOICE | AYOLAN INVESTMENTS </h1>
                <hr/>
                <table style="float: left;margin-top: 10px">
                    <tr style="text-align: left">
                        <td>Hot Line:<br/> +94 77 27 77 770</td>
                    </tr>
                    <tr style="text-align: left">
                        <td>Main Branch:<br/> +94 034 22 65 107</td>
                    </tr>
                    <tr  style="text-align: left">
                        <td>Bulathsinhala Branch:<br/> +94 34 22 82 182</td>
                    </tr>

                </table>
                <table style="width: 300px;float:right;margin-top: 10px;font-family: sans-serif,Tahoma, Verdana, Segoe;">
                    <tr>
                        <td style="width:50px;text-align: right;">
                            <address id="address1">
                                Head Office<br/>
                                No: 141,<br/>
                                Rathnapura Rd,<br/>
                                Horana.
                            </address>
                        </td>
                        <td style="width:50px;text-align: right;">
                            <address id="address2">
                                Branch:<br/>
                                No: 18,<br/>
                                Horana Rd,<br/>
                                Bulathsinhale.
                            </address>
                        </td>
                        <td style="width:50px;text-align: right;">
                            <address id="address3">
                                Branch:<br/>
                                No: 53,<br/>
                                Horana Rd,<br/>
                                Piliyandala.
                            </address>
                        </td>
                    </tr>
                </table>
            </header>
            <hr style="padding-top: 0px;margin: 0px;"/>
            <article>
                <div style="float: right;">
                    
                     <table>
                    <tr>
                        <td>Date :<?php echo date("d-m-Y"); ?></td>
                    </tr>
                </table>
                    
                </div>
                <br/>
                <tr>
                    <td style="width:200px;">Vehicle No</td>
                    <td>:<?php echo "$p_vehicle_number"; ?></td>
                </tr>

                <tr>
                    <td style="width:200px;">Aargument No</td>
                    <td>:<?php echo "$p_service_number"; ?></td>
                </tr>

                <tr>
                    <td style="width:200px;">Customer Name</td>
                    <td>:<?php echo "$p_cus_name"; ?></td>
                </tr>

                <tr>
                    <td style="width:200px;">Sum Of Rupees</td>
                    <td>:<?php echo "$p_amount_word"; ?></td>
                </tr>
            </table>




            <div style="float: right;height: 50px;">

                <table style="background: #4CAF50">
                    <tr>
                        <td style="width:200px;"><strong>Amount</strong></td>
                        <td>:<strong><?php echo "$p_amount"; ?></strong></td>
                    </tr>
                    <hr/>
                    <tr>
                        <td style="width:200px;"><strong>Due Amount</strong></td>
                        <td>:<strong><?php echo "$p_due_amount"; ?></strong></td>
                    </tr>
                </table>
                
            </div>
            <br/>
            <br/>
            <br/>

            <hr/>
            <div style="width: 100%;">
                <p>Customer Signature:..................................<span><br/></span> Officer Signature:..................................(<?php echo "$p_username";  ?>)</p>
            </div>
            <hr/>

            <footer style="font-family: sans-serif,Tahoma, Verdana, Segoe">   
                <Center><p style="border: 1px;">If Contact Is Terminated Payment Is Accepted Without Prejudice To Our Legal Rights</p></center>

            </article>
            
            <hr/>
            <footer style="font-family: sans-serif,Tahoma, Verdana, Segoe">                
                <h4 style="font-family: sans-serif,Tahoma, Verdana, Segoe">Copyright © <?php echo date("Y"); ?> Ayolan Investments </h4></footer>
        </div>

    </body>
</html>
