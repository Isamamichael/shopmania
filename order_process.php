<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
		.popover
		{
		    width: 100%;
		    max-width: 800px;
		}
		.require
		{
			border:1px solid #FF0000;
			background-color: #cbd9ed;
		}
	</style>
</head>
<body>
    <div class="container">
		<br />
		<h3 align="center"><a href="#">BOOKING A LESSON SESSION</a></h3>
		<br />
		<span id="message"></span>
        <div class="panel panel-default">
            <div class="panel-heading">Order Process</div>
            <div class="panel-body">
                <form method="post" id="order_process_form" action="payment.php">
                    <div class="row">
                        <div class="col-md-8" style="border-right:1px solid #ddd;">
                            <h4 align="center">Customer Details</h4>
                            <div class="form-group">
                                <label><b>Card Holder Name <span class="text-danger">*</span></b></label>
                                <input type="text" name="customer_name" id="customer_name" class="form-control" value="" required/>
                                <span id="error_customer_name" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label><b>Email Address <span class="text-danger">*</span></b></label>
                                <input type="text" name="email_address" id="email_address" class="form-control" value="" required/>
                                <span id="error_email_address" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label><b>Address <span class="text-danger">*</span></b></label>
                                <textarea name="customer_address" id="customer_address" class="form-control" required></textarea>
                                <span id="error_customer_address" class="text-danger"></span>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><b>City <span class="text-danger">*</span></b></label>
                                        <input type="text" name="customer_city" id="customer_city" class="form-control" value="" required/>
                                        <span id="error_customer_city" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><b>Postal Code <span class="text-danger">*</span></b></label>
                                        <input type="text" name="customer_pin" id="customer_pin" class="form-control" value="" required/>
                                        <span id="error_customer_pin" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><b>State </b></label>
                                        <input type="text" name="customer_state" id="customer_state" class="form-control" value="" required/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><b>Country <span class="text-danger">*</span></b></label>
                                        <input type="text" name="customer_country" id="customer_country" class="form-control" required />
                                        <span id="error_customer_country" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <h4 align="center">Payment Details</h4>
                            <div class="form-group">
                                <label>Card Number <span class="text-danger">*</span></label>
                                <input type="text" name="card_holder_number" id="card_holder_number" class="form-control" placeholder="1234 5678 9012 3456" maxlength="20" onkeypress="" />
                                <span id="error_card_number" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Expiry Month</label>
                                        <input type="text" name="card_expiry_month" id="card_expiry_month" class="form-control" placeholder="MM" maxlength="2" onkeypress="return only_number(event);" />
                                        <span id="error_card_expiry_month" class="text-danger"></span>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Expiry Year</label>
                                        <input type="text" name="card_expiry_year" id="card_expiry_year" class="form-control" placeholder="YYYY" maxlength="4" onkeypress="return only_number(event);" />
                                        <span id="error_card_expiry_year" class="text-danger"></span>
                                    </div>
                                    <div class="col-md-4">
                                        <label>CVC</label>
                                        <input type="text" name="card_cvc" id="card_cvc" class="form-control" placeholder="123" maxlength="4" onkeypress="return only_number(event);" />
                                        <span id="error_card_cvc" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div align="center">
                                <input type="hidden" name="total_amount" value="<?php echo $total_price; ?>" />
                                <input type="hidden" name="currency_code" value="USD" />
                                <input type="hidden" name="item_details" value="<?php echo $item_details; ?>" />
                                <input type="button" name="button_action" id="button_action" class="btn btn-success btn-sm" onclick="stripePay(event)" value="Pay Now" />
                            </div>
                            <br />
                        </div>
                        <div class="col-md-4">
                            <h4 align="center">Order Details</h4>
                            <?php
                            echo $order_details;
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
	</div>
</body>
</html>