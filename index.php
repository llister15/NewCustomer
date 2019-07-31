<?php
/**
 * Index.php
 *
 * New Customer Registration Form
 *
 * @author     Louis Lister <llister@ZTelco.com>
 * @copyright  2019 ZTelco
 * @package    level-1
 * @version    1.0.0
 * @since      1.0.0
 */

?>
<!DOCTYPE html>
<html>
<head>
	<title>New Customer Registration Form</title>
	<meta charset="utf-8">
	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="Custom webform for ZTelco">
	<meta name="author" content="Louis Lister">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="page-wrap">
	<header class="top-header">
		<div class="logo">
			<img class="responsive-img" src="img/ztelco-logo.png" />
		</div>
		<div class="top-right-design">
			<img class="responsive-img" src="img/design.png" />
		</div>
		<div class="bottom-right-message">
			<header class="head-message"><h1>Pay as You Go, No Contracts!</h1></header>
			<div class="sub-message"><h3>Featuring Symmetrical Upload and Download Speeds.</h3></div>
		</div>
	</header>
	<address class="address-section">
		<div class="above-the-form">
			<h1 class="new-customer-header">New Customer Registration</h1>
		</div>
			<div class="customer-form-container">
				<form id="customer-register" class="form-horizontal">

				<!-- Text input-->
				<div class="inline-group col-2">
						
					<div class="form-group">
				  <label class="control-label" for="firstname">First Name</label>  
				  <div class="input-container">
				  <input id="firstname" name="firstname" type="text" placeholder="" class="form-control input-md" required="true" size="65">
				  </div>
					</div>
					<div class="form-group">
				  <label class="control-label" for="lastname">Last Name</label>  
				  <div class="input-container">
				  <input id="lastname" name="lastname" type="text" placeholder="" class="form-control input-md" required="true" size="65">
				  </div>
				</div>
				</div>

				<!-- Text input-->
				<div class="inline-group">
				  <label class="col-md-4 control-label" for="Phone">Phone</label>  
				  <div class="col-md-4">
				  <input id="Phone" name="Phone" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="inline-group">
				  <label class="col-md-4 control-label" for="Email">Email</label>  
				  <div class="col-md-4">
				  <input id="Email" name="Email" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="inline-group">
				  <label class="col-md-4 control-label" for="CompanyName">Company Name</label>  
				  <div class="col-md-4">
				  <input id="CompanyName" name="CompanyName" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="inline-group">
				  <label class="col-md-4 control-label" for="ServiceAddress">Service Address</label>  
				  <div class="col-md-4">
				  <input id="ServiceAddress" name="ServiceAddress" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="inline-group">
				  <label class="col-md-4 control-label" for="ServiceCity">City</label>  
				  <div class="col-md-4">
				  <input id="ServiceCity" name="ServiceCity" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="inline-group">
				  <label class="col-md-4 control-label" for="ServiceState">State</label>  
				  <div class="col-md-4">
				  <input id="ServiceState" name="ServiceState" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="inline-group">
				  <label class="col-md-4 control-label" for="ServiceZip">Zip</label>  
				  <div class="col-md-4">
				  <input id="ServiceZip" name="ServiceZip" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Multiple Checkboxes (inline) -->
				<div class="inline-group">
				  <label class="col-md-4 control-label" for="Same As Service Address">Same As Service Address</label>
				  <div class="col-md-4">
					<label class="checkbox-inline" for="Same As Service Address-0">
					  <input type="checkbox" name="Same As Service Address" id="Same As Service Address-0" value="">
					</label>
				  </div>
				</div>

				<!-- Text input-->
				<div class="inline-group">
				  <label class="col-md-4 control-label" for="BillingAddress">Billing Address</label>  
				  <div class="col-md-4">
				  <input id="BillingAddress" name="BillingAddress" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="inline-group">
				  <label class="col-md-4 control-label" for="BillingCity">City</label>  
				  <div class="col-md-4">
				  <input id="BillingCity" name="BillingCity" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="inline-group">
				  <label class="col-md-4 control-label" for="BillingState">State</label>  
				  <div class="col-md-4">
				  <input id="BillingState" name="BillingState" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="inline-group">
				  <label class="col-md-4 control-label" for="BillingZip">Zip</label>  
				  <div class="col-md-4">
				  <input id="BillingZip" name="BillingZip" type="text" placeholder="" class="form-control input-md" required="">
				  </div>
				</div>
				</form>
			</div>
	</address>
	<main class="main-content">
		<div class="product-table">
			
		</div>
		<div class="services-area">
			
		</div>
		<div class="add-ons-area">
			
		</div>
	</main>
	<footer class="page-footer">
		<div class="footer-ads">
			<span class="pricing-comment">Ask About Our Annual Pricing.</span>
		</div>
		<div class="footer-disclosure">
			<p>
				*   Available speeds may vary according to your location. Not all speeds are available in all locations. One-time installation of $99 which includes CAT5e/6 inside wiring from MPOE to customer suite. Promotional prices good for the first 6 months of services, after which prices will revert to regular pricing. This form may not reflect your total bill if additional services not listed here are included in your order. Prices do not include taxes, fees and additional hardware. Phone services delivered via Android or iPhone app for mobile phone if no hardware is purchased.
			</p>
		</div>
	</footer>
</div>

</body>
</html>
