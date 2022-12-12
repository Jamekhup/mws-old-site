<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<?php 
		$title = "Web Development,SEO & Facebook Marketing Service";
		$description = "";
		include('pages/header.php'); 
	?>
	<title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
	<link rel="stylesheet" href="https://www.myanmarwebshare.com/css/services.css">
	<script src="https://www.myanmarwebshare.com/js/service-process.js"></script>
</head>
<body>
	
	<!-- modal for website -->
	<div class="modal fade" id="website" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title text-center" id="exampleModalLabel">Web Development Service Inquiry Form</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form id="webservice">
	      	<div id="web_return" class="text-center"></div>

	      		<div class="form-group">
	      			<input type="text" id="name" placeholder="Your Name" class="form-control" autocomplete="off">
	      			<div class="error" id="nameErr"></div>
	      		</div>
	      		<div class="form-group">
	      			<input type="text" id="phone" placeholder="Your Phone Number" class="form-control" autocomplete="off">
	      			<div class="error" id="phoneErr"></div>
	      		</div>
	      		<div class="form-group">
	      			<input type="email" id="email" placeholder="Your Email" class="form-control" autocomplete="off">
	      			<div class="error" id="emailErr"></div>
	      		</div>
	      		<div class="form-group">
	      			<input type="text" id="company_name" placeholder="Your Company Name" class="form-control" autocomplete="off">
	      			<div class="error" id="company_nameErr"></div>
	      		</div>
	      		<div class="form-group">
	      			<select id="web_packages" class="form-control">
	      				<option value="">--Choose Web Package--</option>
	      				<option value="Web-Basic-Package">Basic Package</option>
	      				<option value="Web-Standard-Package">Standard Package</option>
	      				<option value="Web-Premium-Package">Premium Package</option>
	      				<option value="Web-E-Commerce-Package">E-Commerce Package</option>
	      			</select>
	      			<div class="error" id="web_packagesErr"></div>
	      		</div>
	      		<div class="form-group">
	      			<textarea id="web_sms" class="form-control" cols="30" rows="10" placeholder="Message(optional)"></textarea>
	      		</div>
	      		<button type="submit" class="btn btn-success">Send Inquiry</button>
	      	</form>
	      	<br/>
	      </div>
	    </div>
	  </div>
	</div>
<!-- end modal for website-->

<!-- modal for SEO -->
	<div class="modal fade" id="myseo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">SEO Service Inquiry Form</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form id="seo_form">
	        	<div id="seo_return" class="text-center"></div>
	        	<div class="form-group">
	        		<input type="text" id="sname" placeholder="Your Name" class="form-control">
	        		<div class="error" id="snameErr"></div>
	        	</div>
	        	<div class="form-group">
	        		<input type="text" id="sphone" placeholder="Your Phone Number" class="form-control">
	        		<div class="error" id="sphoneErr"></div>
	        	</div>
	        	<div class="form-group">
	        		<input type="email" id="semail" placeholder="Your Email Address" class="form-control">
	        		<div class="error" id="semailErr"></div>
	        	</div>
	        	<div class="form-group">
	        		<input type="url" id="web_address" placeholder="Website URL" class="form-control">
	        		<div class="error" id="web_addressErr"></div>
	        	</div>
	        	<div class="form-group">
	        		<select id="seo_packages" class="form-control">
	        			<option value="">--Choose Package--</option>
	        			<option value="plan_A">Plan A</option>
	        			<option value="plan_B">Plan B</option>
	        			<option value="plan_C">Plan C</option>
	        			<option value="plan_D">Plan D</option>
	        		</select>
	        		<div class="error" id="seo_packagesErr"></div>
	        	</div>
	        	<div class="form-group">
	        		<textarea id="seo_sms" class="form-control" placeholder="Message (Optional)" cols="30" rows="10"></textarea>
	        	</div>
	        	<button type="submit" class="btn btn-success">Send Inquiry</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
<!-- end modal for SEO -->

<!-- modal for facebook -->
	<div class="modal fade" id="myfb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Facebook Marketing Service Inquiry Form</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form id="fb_form">
	        	<div id="fb_return" class="text-center"></div>
	        	<div class="form-group">
	        		<input type="text" id="fname" placeholder="Your Name" class="form-control">
	        		<div class="error" id="fnameErr"></div>
	        	</div>
	        	<div class="form-group">
	        		<input type="text" id="fphone" placeholder="Your Phone Number" class="form-control">
	        		<div class="error" id="fphoneErr"></div>
	        	</div>
	        	<div class="form-group">
	        		<input type="email" id="femail" placeholder="Your Email Address" class="form-control">
	        		<div class="error" id="femailErr"></div>
	        	</div>
	        	<div class="form-group">
	        		<input type="url" id="fb_url" placeholder="Facebook Page URL" class="form-control">
	        		<div class="error" id="fb_urlErr"></div>
	        	</div>
	        	<div class="form-group">
	        		<select id="fb_packages" class="form-control">
	        			<option value="">--Choose Plan--</option>
	        			<option value="one-week-plan">One Week Plan</option>
	        			<option value="two-week-plan">Two Weeks Plan</option>
	        			<option value="three-week-plan">Three Weeks Plan</option>
	        			<option value="one-month-plan">One month Plan</option>
	        		</select>
	        		<div class="error" id="fb_packagesErr"></div>
	        	</div>
	        	<div class="form-group">
	        		<textarea id="fb_sms" class="form-control" cols="30" rows="10" placeholder="Message(optional)"></textarea>
	        	</div>
	        	<button type="submit" class="btn btn-success">Send Inquiry</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>

<!-- end all modals here -->

	<nav class="navbar navbar-expand-md navbar-dark sticky-top">
	    <?php include('pages/nav.php'); ?>
	</nav>
	<!-- end navbar -->
	<div class="contact-bg">
		<img src="img/service-bg.png" alt="Services Background Image">
		<div class="contact-p">
			<h5 class="animated bounceInLeft delay-2s contact-me">Web Development, SEO & Facebook Marketing Services</h5>
		</div>

	</div>

	<div class="container my-services">
		<h1 class="text-center">Myanmar Web Share မှ အောက်ပါ Services များကို ကောင်းမွန်ထိရောက်စွာ ဝန်ဆောင်မူ ပေးလျှက်ရှိပါတယ်။</h1>
		<hr>

		<h3 class="text-center">Website Development Service</h3>
		<div class="web">
			<p class="text-center">လူကြီးမင်းတို့၏ လုပ်ငန်းအတွက်ဖြစ်စေ၊ Personal အတွက် ဖြစ်စေ Website လိုအပ်ပါက Myanmar Web Share ကို ဆက်သွယ်လိုက်ပါ။ </p>
			<p class="text-center">Website ရေးသားတည်ဆောက်ရာတွင် Content တွေရေးထည့်၊ ပုံလေးတွေထည့်၊ data တွေ ထည့်ရေး ပြင်ဖျက် ရုံလောက်နဲ့ မပြီးပါဘူး။ Mobile Responsive, UX/UI, SEO, Site Speed ..etc  တွေလည်း လွန်စွာအရေးကြီးပါတယ်။ ထိုကဲ့သို့သော ဝန်ဆောင်မူများကို Myanmar Web Share မှ အကောင်းဆုံးနှင့် အထိရောက်ဆုံး ဝန်ဆောင်မူပေးနေပါတယ်။</p>
		</div>
		  <div class="card-deck mb-3 web-list">
		    <div class="card mb-4 shadow-sm">
		      <div class="card-header text-center">
		        <h5 class="my-0 font-weight-normal">Basic Package</h5>
		      </div>
		      <div class="card-body">
		       	<table class="table table-borderless">
				  <thead>
				  </thead>
				  <tbody>
				    <tr>
				      <td>Web Pages</td>
				      <td>5 Static</td>
				    </tr>
				    <tr>
				      <td>Server</td>
				      <td>1 Year</td>
				    </tr>
				    <tr>
				      <td>Domain</td>
				      <td>1 Year</td>
				    </tr>
				    <tr>
				      <td>Maintenance</td>
				      <td>1 Year</td>
				    </tr>
				    <tr>
				      <td>Email Account</td>
				      <td>3</td>
				    </tr>
				    <tr>
				      <td>SSL</td>
				      <td><i class="fas fa-times"></i></td>
				    </tr>
				    <tr>
				      <td>SEO Keywords</td>
				      <td><i class="fas fa-times"></i></td>
				    </tr>
				  </tbody>
				</table>
		        <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#website">
				  Enquire for more
				</button>
		      </div>
		    </div>
		    <div class="card mb-4 shadow-sm">
		      <div class="card-header text-center">
		        <h5 class="my-0 font-weight-normal">Standard Package</h5>
		      </div>
		      <div class="card-body">
		       <table class="table table-borderless">
				  <thead>
				  </thead>
				  <tbody>
				    <tr>
				      <td>Web Pages</td>
				      <td>10 Dynamic</td>
				    </tr>
				    <tr>
				      <td>Server</td>
				      <td>1 Year</td>
				    </tr>
				    <tr>
				      <td>Domain</td>
				      <td>1 Year</td>
				    </tr>
				    <tr>
				      <td>Maintenance</td>
				      <td>1 Year</td>
				    </tr>
				    <tr>
				      <td>Email Account</td>
				      <td>6</td>
				    </tr>
				    <tr>
				      <td>SSL</td>
				      <td><i class="fas fa-times"></i></td>
				    </tr>
				    <tr>
				      <td>SEO Keywords</td>
				      <td><i class="fas fa-times"></i></td>
				    </tr>
				  </tbody>
				</table>
		         <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#website">
				  Enquire for more
				</button>
		      </div>
		    </div>
		    <div class="card mb-4 shadow-sm">
		      <div class="card-header text-center">
		        <h5 class="my-0 font-weight-normal">Premium Package</h5>
		      </div>
		      <div class="card-body">
				<table class="table table-borderless">
				  <thead>
				  </thead>
				  <tbody>
				    <tr>
				      <td>Web Pages</td>
				      <td>20 Dynamic</td>
				    </tr>
				    <tr>
				      <td>Server</td>
				      <td>1 Year</td>
				    </tr>
				    <tr>
				      <td>Domain</td>
				      <td>1 Year</td>
				    </tr>
				    <tr>
				      <td>Maintenance</td>
				      <td>1 Year</td>
				    </tr>
				    <tr>
				      <td>Email Account</td>
				      <td>10</td>
				    </tr>
				    <tr>
				      <td>SSL</td>
				      <td>1 Year</td>
				    </tr>
				    <tr>
				      <td>SEO Keywords</td>
				      <td>Brand name</td>
				    </tr>
				  </tbody>
				</table>
		         <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#website">
				  Enquire for more
				</button>
		      </div>
		    </div>
		        <div class="card mb-4 shadow-sm">
		      <div class="card-header text-center">
		        <h5 class="my-0 font-weight-normal">E-Commerce Package</h5>
		      </div>
		      <div class="card-body">
		       <table class="table table-borderless">
				  <thead>
				  </thead>
				  <tbody>
				    <tr>
				      <td>Web Pages</td>
				      <td>40 Dynamic</td>
				    </tr>
				    <tr>
				      <td>Server</td>
				      <td>life-time</td>
				    </tr>
				    <tr>
				      <td>Domain</td>
				      <td>life-time</td>
				    </tr>
				    <tr>
				      <td>Maintenance</td>
				      <td>life-time</td>
				    </tr>
				    <tr>
				      <td>Email Account</td>
				      <td>unlimited</td>
				    </tr>
				    <tr>
				      <td>SSL</td>
				      <td>lift-time</td>
				    </tr>
				    <tr>
				      <td>SEO Keywords</td>
				      <td>3</td>
				    </tr>
				  </tbody>
				</table>
		         <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#website">
				 Enquire for more
				</button>
		      </div>
		    </div>
		   </div>

		<hr>
		   <!-- end web here -->
		<h3 class="text-center">Search Engine Optimization(SEO) Service</h3>
		<div class="seo">
			<p class="text-center">SEO (Search Engine Optimization) ဆိုတာ သင့် Business Website ကို သက်ဆိုင်ရာ Keyword လို့ခေါ်တဲ့ စကားလုံးစု တွေနဲ့ လူတွေက Search Engine လို့ခေါ်တဲ့ Google, Bing, Yahoo တွေမှာ ရှာတဲ့ချိန်မှာ ပထမဆုံး စာမျက်နှာမှာပေါ်အောင် Optimize လုပ်ခြင်းကို ခေါ်ပါတယ်။</p>
			<p class="text-center">လူကြီးမင်း၏ Business Website က Search Engine တွေရဲ့ ပထမဆုံးစာမျက်နှာမှာ သက်ဆိုင်ရာ စကားလုံးစုတွေနဲ့ နေရာယူထားခြင်းအားဖြင့် လူကြီးမင်း၏ Business Website ကို လူတွေ ပိုဝင်ကြည့်ကြမယ်၊ လူကြည့်များလာတာနဲ့အမျှ သင့် Business Service (or) Product က ရောင်းအားပိုကောင်းလာဖို့ Chance ပိုများလာမှာ ဖြစ်ပါတယ်။</p>
			<p class="text-center">Myanmar Web Share မှ SEO Service ကို အာမခံ ဖြင့် ဝန်ဆောင်မူပေးလျှက်ရှိပါတယ်။ </p>
		</div>

		  <div class="card-deck mb-3 seo-list">
		    <div class="card mb-4 shadow-sm">
		      <div class="card-header text-center">
		        <h5 class="my-0 font-weight-normal">Package One</h5>
		      </div>
		      <div class="card-body">
		       <table class="table table-borderless">
				  <thead>
				  </thead>
				  <tbody>
				    <tr>
				      <td>Keywords</td>
				      <td>5</td>
				    </tr>
				    <tr>
				      <td>Duration</td>
				      <td>6 or 12 Months</td>
				    </tr>
				  </tbody>
				</table>
		        <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#myseo">
				  Enquire for more
				</button>
		      </div>
		    </div>
		    <div class="card mb-4 shadow-sm">
		      <div class="card-header text-center">
		        <h5 class="my-0 font-weight-normal">Package Two</h5>
		      </div>
		      <div class="card-body">
		        <table class="table table-borderless">
				  <thead>
				  </thead>
				  <tbody>
				    <tr>
				      <td>Keywords</td>
				      <td>10</td>
				    </tr>
				    <tr>
				      <td>Duration</td>
				      <td>6 or 12 months</td>
				    </tr>
				  </tbody>
				</table>
		        <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#myseo">
				  Enquire for more
				</button>
		      </div>
		    </div>
		    <div class="card mb-4 shadow-sm">
		      <div class="card-header text-center">
		        <h5 class="my-0 font-weight-normal">Package Three</h5>
		      </div>
		      <div class="card-body">
		       <table class="table table-borderless">
				  <thead>
				  </thead>
				  <tbody>
				    <tr>
				      <td>Keywords</td>
				      <td>15</td>
				    </tr>
				    <tr>
				      <td>Duration</td>
				      <td>6 or 12 months</td>
				    </tr>
				  </tbody>
				</table>
		        <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#myseo">
				  Enquire for more
				</button>
		      </div>
		    </div>
		       <div class="card mb-4 shadow-sm">
		      <div class="card-header text-center">
		        <h5 class="my-0 font-weight-normal">Package Four</h5>
		      </div>
		      <div class="card-body">
		        <table class="table table-borderless">
				  <thead>
				  </thead>
				  <tbody>
				    <tr>
				      <td>Keywords</td>
				      <td>20</td>
				    </tr>
				    <tr>
				      <td>Duration</td>
				      <td>6 or 12 months</td>
				    </tr>
				  </tbody>
				</table>
		        <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#myseo">
				  Enquire for more
				</button>
		      </div>
		    </div>
		  </div>
		<hr>
		<h3 class="text-center">Facebook Marketing Service</h3>
		<div class="fb-marketing">
			<p class="text-center">
				ပြည်တွင်းလုပ်ငန်းတော်တော်များမျာ;ဟာ Facebook Marketing လုပ်ကြပါတယ်။ လုပ်ငန်းအများစုအတွက် Facebook Marketing သည်မရှိမဖြစ်လိုအပ်သော အရာတစ်ခုဖြစ်လာပါတယ်။
			</p>
			<p class="text-center">
				Facebook Marketing သည် လွယ်တယ်ထင်ရသော်လည်း ကျွမ်းကျင်စွာ မလုပ်တတ်လျှင် Budget သာကုန်သွားပြီး ထိရောက်မူရှိမည်မဟုတ်ပါ။ ပိုမိုထိရောက်သော ဝန်ဆောင်မူရရှိရန်အတွက် Myanmar Web Share ကို အခုဘဲဆက်သွယ်လိုက်ပါ။
			</p>
			<br/>
			<div class="text-center fb-list">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myfb">
				  Enquire Now
				</button>
			</div>
			
		</div>
		
	</div>


	<!-- start footer -->
	<br/>
	<br/>
	<?php include('pages/footer.php'); ?>
</body>
</html>