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
				<div class="inline-group col-2">
				<div class="form-group">
				  <label class="col-md-4 control-label" for="Phone">Phone</label>  
				  <div class="col-md-4">
				  <input id="Phone" name="Phone" type="text" placeholder="" class="form-control input-md" required="true" size="65">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="Email">Email</label>  
				  <div class="col-md-4">
				  <input id="Email" name="Email" type="text" placeholder="" class="form-control input-md" required="true" size="65">
					
				  </div>
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
			<table>
			  <tr>
				<th>Product Name</th>
				<th>Download x Upload*</th>
				<th>Regular Price</th>
				<th>Promotional Price**</th>
				<th></th>
				<th>Static IP Add-on Price (MRC)</th>
			  </tr>
			  <tr>
				<td>ZTelco FiberZ 100</td>
				<td>100Mb x 20Mb</td>
				<td>$90</td>
				<td>$60</td>
				<td><input type="checkbox" name="" value=""></td>
				<td rowspan="8"><input type="checkbox" name="" value=""> $10 per Static IP<br /><br />
					<input type="text" name="" size="4"><br />
					<hr>
					Number of IPs
				</td>
			  </tr>
			  <tr>
				<td>ZTelco FiberZ 100s</td>
				<td>100Mb x 100Mb</td>
				<td>$200</td>
				<td>$170</td>
				<td><input type="checkbox" name="" value=""></td>
			  </tr>
			  <tr>
				<td>ZTelco FiberZ 300</td>
				<td>300Mb x 75Mb</td>
				<td>$160</td>
				<td>$110</td>
				<td><input type="checkbox" name="" value=""></td>
			  </tr>
			  <tr>
				<td>ZTelco FiberZ 300s</td>
				<td>300Mb x 300Mb</td>
				<td>$320</td>
				<td>$270</td>
				<td><input type="checkbox" name="" value=""></td>
			  </tr>
			  <tr>
				<td>ZTelco FiberZ 500</td>
				<td>500Mb x 100Mb</td>
				<td>$250</td>
				<td>$200</td>
				<td><input type="checkbox" name="" value=""></td>
			  </tr>
			  <tr>
				<td>ZTelco FiberZ 500s</td>
				<td>500Mb x 500Mb</td>
				<td>$425</td>
				<td>$375</td>
				<td><input type="checkbox" name="" value=""></td>
			  </tr>
			  <tr>
				<td>ZTelco FiberZ 1000</td>
				<td>1 Gb  x 200Mb</td>
				<td>$350</td>
				<td>$300</td>
				<td><input type="checkbox" name="" value=""></td>
			  </tr>
			  <tr>
				<td>ZTelco FiberZ 1000s</td>
				<td>1 Gb x 1 Gb</td>
				<td>$700</td>
				<td>$650</td>
				<td><input type="checkbox" name="" value=""></td>
			  </tr>
			</table>
		</div>
		<div class="services-area">
			<table>
			  <tr>
				<th>Small Business</th>
				<th></th>
				<th>Enterprise</th>
				<th></th>
			  </tr>
			  <tr>
				<td>$27.95 monthly / user</td>
				<td><input type="checkbox" name="" value=""></td>
				<td>$35.95 monthly / user</td>
				<td><input type="checkbox" name="" value=""></td>
			  </tr>
			  <tr>
				<td>Total Number of Users</td>
				<td><input type="text" name="" size="2"></td>
				<td>Total Number of Users</td>
				<td><input type="text" name="" size="2"></td>
			  </tr>
			  <tr>
				<td>Auto Attendant</td>
				<td>&#10003;</td>
				<td>Auto Attendant</td>
				<td>&#10003;</td>
			  </tr>
			  <tr>
				<td>Voicemail</td>
				<td>&#10003;</td>
				<td>Voicemail</td>
				<td>&#10003;</td>
			  </tr>
			  <tr>
				<td>Unlimited Included Minutes</td>
				<td>&#10003;</td>
				<td>Unlimited Included Minutes</td>
				<td>&#10003;</td>
			  </tr>
			  <tr>
				<td>Caller ID</td>
				<td>&#10003;</td>
				<td>Caller ID</td>
				<td>&#10003;</td>
			  </tr>
			  <tr>
				<td>1000 Inbound Toll Free Minutes</td>
				<td>&#10003;</td>
				<td>5000 Inbound Toll Free Minutes</td>
				<td>&#10003;</td>
			  </tr>
			  <tr>
				<td>Call Recording</td>
				<td>&#10005;</td>
				<td>Call Recording</td>
				<td>&#10003;</td>
			  </tr>
			  <tr>
				<td>Multi Level Auto Attendant</td>
				<td>&#10005;</td>
				<td>Multi Level Auto Attendant</td>
				<td>&#10003;</td>
			  </tr>
			  <tr>
				<td>Time Based Routing</td>
				<td>&#10005;</td>
				<td>Time Based Routing</td>
				<td>&#10003;</td>
			  </tr>
			  <tr>
				<td>Call Monitoring</td>
				<td>&#10005;</td>
				<td>Call Monitoring</td>
				<td>&#10003;</td>
			  </tr>
			  <tr>
				<td>Voicemail Transcription</td>
				<td>&#10005;</td>
				<td>Voicemail Transcription</td>
				<td>&#10003;</td>
			  </tr>
			</table>
		</div>
		<div class="add-ons-area">
			<table>
			  <tr>
				<th></th>
				<th>Quantity</th>
				<th>Additional Add Ons</th>
			  </tr>
			  <tr>
				<td><input type="checkbox" name="" value=""></td>
				<td><input type="text" name="" size="2"></td>
				<td>Additional Charges Apply</td>
			  </tr>
			  <tr>
				<td><input type="checkbox" name="" value=""></td>
				<td><input type="text" name="" size="2"></td>
				<td>Yealink W60p Wireless Phone + Base $210</td>
			  </tr>
			  <tr>
				<td><input type="checkbox" name="" value=""></td>
				<td><input type="text" name="" size="2"></td>
				<td>Yealink Additional Handsets $130</td>
			  </tr>
			  <tr>
				<td><input type="checkbox" name="" value=""></td>
				<td><input type="text" name="" size="2"></td>
				<td>Polycom VVX411 Phone $196</td>
			  </tr>
			  <tr>
				<td><input type="checkbox" name="" value=""></td>
				<td><input type="text" name="" size="2"></td>
				<td>Polycom VVX311 Phone $158</td>
			  </tr>
			  <tr>
				<td><input type="checkbox" name="" value=""></td>
				<td><input type="text" name="" size="2"></td>
				<td>WiFi $25/month</td>
			  </tr>
			  <tr>
				<td><input type="checkbox" name="" value=""></td>
				<td><input type="text" name="" size="2"></td>
				<td>Fax to Email $25/month</td>
			  </tr>
			  <tr>
				<td><input type="checkbox" name="" value=""></td>
				<td><input type="text" name="" size="2"></td>
				<td>Marketing DID $3/month</td>
			  </tr>
			  <tr>
				<td><input type="checkbox" name="" value=""></td>
				<td><input type="text" name="" size="2"></td>
				<td>Additional Toll-Free Numbers $5/month</td>
			  </tr>
			  <tr>
				<td><input type="checkbox" name="" value=""></td>
				<td><input type="text" name="" size="2"></td>
				<td>Viking Paging Unit $49/month</td>
			  </tr>
			</table>
		</div>
	</main>
	<footer class="page-footer">
		<div class="footer-ads">
			<span class="pricing-comment">Ask About Our Annual Pricing.</span>
			<span class="pricing-comment">sales@ztelco.com<br />(858) 565-2155</span>
			<span><hr /></span>
			<span>Customer Signature</span>
			<span><hr /></span>
			<span>Date</span>
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
