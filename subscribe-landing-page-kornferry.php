<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>subscribe-landing-page-kornferry</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Christoph Potzinger">
	<!-- Date: 2013-01-29 -->
</head>
<body>

	          <style>
	      .iframetitle
	      {
	      	color: #2a4043;
	      	font-size: 1.125em;
	      	padding-bottom: 10px;
	      	background: url(/sites/all/themes/kornferry_theme/images/background_iframe_h3.png) bottom left no-repeat;
	      	font-family: "Ubuntu Condensed", Arial, sans-serif;
	      	font-weight: normal; 
	      }

	      .iframetext
	      {
	      	color: #fff;
			font-family: Arial, sans-serif;
			font-size: 0.75em;
			margin: 25px 0 30px 0;
	      }

	      p.premium-member
	      {
	      	margin-bottom: 50px;
	      }

	      ul.iframetext
	      {
	      	margin-left: 16px;
	      }

	      ul.iframetext li
	      {
	      	list-style-type: disc;
	      }

	      .fett
	      {
	      	font-weight: bold;
	      }

	      #wrapper
	      {
		      font-size: 0.75em;
	      }

			#popup
			{
			  height: 530px !important;
			}

			.big
			{
			  height: 506px !important;
			}

			.modal {
			    position: fixed;
			    top: 0;
			    left: 0;
			    right: 0;
			    bottom: 0;
			    background: rgba(0,0,0,0.4);
			    z-index: 1;
			}
	    </style>

	<script type="text/javascript">
	    	(function ($) {
	    	$(document).ready(function()
	    	{
	    		$("#subscribe1").unbind('click').click(function() {
						$("div#wrapper").load("/sites/all/themes/kornferry_theme/registration2.php?loggedin=<?php echo $_GET["loggedin"]; ?>&height='<?php echo $height; ?>'&subscribe=1");	
					});

					$("#subscribe2").unbind('click').click(function() {
						$("div#wrapper").load("/sites/all/themes/kornferry_theme/registration2.php?loggedin=<?php echo $_GET["loggedin"]; ?>&height='<?php echo $height; ?>'&subscribe=2");	
					});

					$("#subscribe3").unbind('click').click(function() {
						$("div#wrapper").load("/sites/all/themes/kornferry_theme/registration2.php?loggedin=<?php echo $_GET["loggedin"]; ?>&height='<?php echo $height; ?>'&subscribe=3");	
					});
				$("#promocodesubmit").unbind('click').click(function(){
					$("#price1").html("<strong>- $89.99</strong>");
					$("#price2").html("<strong>- $59.99</strong>");
					$("#price3").html("<strong>- $39.99</strong>");
					$.ajax({
	                	type: "GET",
	                	url: "/sites/all/themes/kornferry_theme/promocode.php?code="+$("#promocodeentry").val(),
	                	data: "name="+name,
	                	beforeSend: function() {
					      $('body').append('<div class="modal">'); 
					    },
					    complete: function() {
					       $('.modal').remove();
					    },
	                	success: function(data){
	                    	var json = $.parseJSON(data);
	                    	if (json.error)
	                    	{
	                    		$("#infocode").html("");
		                    	$("#errorcode").html(json.error);
	                    	}
	                    	else
							{
								$("#errorcode").html("");
								$("#infocode").html("");

								if (json.promotion1)
								{
									if (json.promotion1 == "Premium Subscription")
									{

										if (json.promotion1price == "89.99")
										{
											//$("#subscribe1").addClass("deactivated2");
											$("#subscribe1").unbind('click').click(function() {
						$("div#wrapper").load("/sites/all/themes/kornferry_theme/registration2.php?loggedin=<?php echo $_GET["loggedin"]; ?>&height='<?php echo $height; ?>'&subscribe=1");	
					});
										}
										else
										{
											$("#price1").html("<s>$89.99</s> <strong>-</strong> <span class='promotionprice'><strong>$"+json.promotion1price+"</strong></span>");
											$("#infocode").html("Promo code has been applied.");
											//$("#subscribe1").removeClass("deactivated2");
											$("#subscribe1").unbind('click').click(function() {
												$("div#wrapper").load("/sites/all/themes/kornferry_theme/registrationpromodb.php?subscribe=1&transcode="+json.promotion1qftrackingcode+"&price="+json.promotion1price+"&promocode="+json.code);	
										});
										}
									}
									else if (json.promotion1 == "Print Subscription")
									{

										if (json.promotion1price == "59.99")
										{
											//$("#subscribe2").addClass("deactivated2");
											$("#subscribe2").unbind('click').click(function() {
						$("div#wrapper").load("/sites/all/themes/kornferry_theme/registration2.php?loggedin=<?php echo $_GET["loggedin"]; ?>&height='<?php echo $height; ?>'&subscribe=2");	
					});
										}
										else
										{
											$("#price2").html("<s>$59.99</s> <strong>-</strong> <span class='promotionprice'><strong>$"+json.promotion1price+"</strong></span>");
											$("#infocode").html("Promo code has been applied.");
											//$("#subscribe2").removeClass("deactivated2");
											$("#subscribe2").unbind('click').click(function() {
											$("div#wrapper").load("/sites/all/themes/kornferry_theme/registrationpromodb.php?subscribe=2&transcode="+json.promotion1qftrackingcode+"&price="+json.promotion1price+"&promocode="+json.code);	
										});
										}
									}
									else if (json.promotion1 == "Digital Subscription")
									{

										if (json.promotion1price == "39.99")
										{
											//$("#subscribe3").addClass("deactivated2");
											$("#subscribe3").unbind('click').click(function() {
						$("div#wrapper").load("/sites/all/themes/kornferry_theme/registration2.php?loggedin=<?php echo $_GET["loggedin"]; ?>&height='<?php echo $height; ?>'&subscribe=3");	
					});
										}
										else
										{
											$("#price3").html("<s>$39.99</s> <strong>-</strong> <span class='promotionprice'><strong>$"+json.promotion1price+"</strong></span>");	
											$("#infocode").html("Promo code has been applied.");			
											//$("#subscribe3").removeClass("deactivated2");
											$("#subscribe3").unbind('click').click(function() {
											$("div#wrapper").load("/sites/all/themes/kornferry_theme/registrationpromodb.php?subscribe=3&transcode="+json.promotion1qftrackingcode+"&price="+json.promotion1price+"&promocode="+json.code);	
										});
										}
									}
								}

								if (json.promotion2)
								{
									if (json.promotion2 == "Premium Subscription")
									{

										if (json.promotion2price == "89.99")
										{
											//$("#subscribe1").addClass("deactivated2");
											$("#subscribe1").unbind('click').click(function() {
						$("div#wrapper").load("/sites/all/themes/kornferry_theme/registration2.php?loggedin=<?php echo $_GET["loggedin"]; ?>&height='<?php echo $height; ?>'&subscribe=1");	
					});
										}
										else
										{
											$("#price1").html("<s>$89.99</s> <strong>-</strong> <span class='promotionprice'><strong>$"+json.promotion2price+"</strong></span>");
											$("#infocode").html("Promo code has been applied.");
											//$("#subscribe1").removeClass("deactivated2");
											$("#subscribe1").unbind('click').click(function() {
											$("div#wrapper").load("/sites/all/themes/kornferry_theme/registrationpromodb.php?subscribe=1&transcode="+json.promotion2qftrackingcode+"&price="+json.promotion2price+"&promocode="+json.code);	
										});
										}
									}
									else if (json.promotion2 == "Print Subscription")
									{
										if (json.promotion2price == "59.99")
										{
											//$("#subscribe2").addClass("deactivated2");
											$("#subscribe2").unbind('click').click(function() {
						$("div#wrapper").load("/sites/all/themes/kornferry_theme/registration2.php?loggedin=<?php echo $_GET["loggedin"]; ?>&height='<?php echo $height; ?>'&subscribe=2");	
					});
										}
										else
										{
											$("#price2").html("<s>$59.99</s> <strong>-</strong> <span class='promotionprice'><strong>$"+json.promotion2price+"</strong></span>");
											$("#infocode").html("Promo code has been applied.");
											//$("#subscribe2").removeClass("deactivated2");
											$("#subscribe2").unbind('click').click(function() {
											$("div#wrapper").load("/sites/all/themes/kornferry_theme/registrationpromodb.php?subscribe=2&transcode="+json.promotion2qftrackingcode+"&price="+json.promotion2price+"&promocode="+json.code);	
										});
										}
									}
									else if (json.promotion2 == "Digital Subscription")
									{
										if (json.promotion2price == "39.99")
										{
											//$("#subscribe3").addClass("deactivated2");
											$("#subscribe3").unbind('click').click(function() {
						$("div#wrapper").load("/sites/all/themes/kornferry_theme/registration2.php?loggedin=<?php echo $_GET["loggedin"]; ?>&height='<?php echo $height; ?>'&subscribe=3");	
					});
										}
										else
										{
											$("#price3").html("<s>$39.99</s> <strong>-</strong> <span class='promotionprice'><strong>$"+json.promotion2price+"</strong></span>");	
											$("#infocode").html("Promo code has been applied.");			
											//$("#subscribe3").removeClass("deactivated2");
											$("#subscribe3").unbind('click').click(function() {
											$("div#wrapper").load("/sites/all/themes/kornferry_theme/registrationpromodb.php?subscribe=3&transcode="+json.promotion2qftrackingcode+"&price="+json.promotion2price+"&promocode="+json.code);	
										});
										}
									}
								}

								if (json.promotion3)
								{
									if (json.promotion3 == "Premium Subscription")
									{
										if (json.promotion3price == "89.99")
										{
											//$("#subscribe1").addClass("deactivated2");
											$("#subscribe1").unbind('click').click(function() {
						$("div#wrapper").load("/sites/all/themes/kornferry_theme/registration2.php?loggedin=<?php echo $_GET["loggedin"]; ?>&height='<?php echo $height; ?>'&subscribe=1");	
					});
										}
										else
										{
											$("#price1").html("<s>$89.99</s> <strong>-</strong> <span class='promotionprice'><strong>$"+json.promotion3price+"</strong></span>");
											$("#infocode").html("Promo code has been applied.");
											//$("#subscribe1").removeClass("deactivated2");
											$("#subscribe1").unbind('click').click(function() {
											$("div#wrapper").load("/sites/all/themes/kornferry_theme/registrationpromodb.php?subscribe=1&transcode="+json.promotion3qftrackingcode+"&price="+json.promotion3price+"&promocode="+json.code);	
										});
										}
									}
									else if (json.promotion3 == "Print Subscription")
									{
										if (json.promotion3price == "59.99")
										{
											//$("#subscribe2").addClass("deactivated2");
											$("#subscribe2").unbind('click').click(function() {
						$("div#wrapper").load("/sites/all/themes/kornferry_theme/registration2.php?loggedin=<?php echo $_GET["loggedin"]; ?>&height='<?php echo $height; ?>'&subscribe=2");	
					});
										}
										else
										{
											$("#price2").html("<s>$59.99</s> <strong>-</strong> <span class='promotionprice'><strong>$"+json.promotion3price+"</strong></span>");
											$("#infocode").html("Promo code has been applied.");
											//$("#subscribe2").removeClass("deactivated2");
											$("#subscribe2").unbind('click').click(function() {
											$("div#wrapper").load("/sites/all/themes/kornferry_theme/registrationpromodb.php?subscribe=2&transcode="+json.promotion3qftrackingcode+"&price="+json.promotion3price+"&promocode="+json.code);	
										});
										}
									}
									else if (json.promotion3 == "Digital Subscription")
									{

										if (json.promotion3price == "39.99")
										{
											//$("#subscribe3").addClass("deactivated2");
											$("#subscribe3").unbind('click').click(function() {
						$("div#wrapper").load("/sites/all/themes/kornferry_theme/registration2.php?loggedin=<?php echo $_GET["loggedin"]; ?>&height='<?php echo $height; ?>'&subscribe=3");	
					});
										}
										else
										{
											$("#price3").html("<s>$39.99</s> <strong>-</strong> <span class='promotionprice'><strong>$"+json.promotion3price+"</strong></span>");
											$("#infocode").html("Promo code has been applied.");				
											//$("#subscribe3").removeClass("deactivated2");
											$("#subscribe3").unbind('click').click(function() {
											$("div#wrapper").load("/sites/all/themes/kornferry_theme/registrationpromodb.php?subscribe=3&transcode="+json.promotion3qftrackingcode+"&price="+json.promotion3price+"&promocode="+json.code);	
										});
										}
									}
								}						
							}
	                    }
	                });
				});
			});
			})(jQuery);
	</script>

	<?PHP
	    if ($_GET["promotioncode"])
	    { ?>
		    <script type="text/javascript">
	    	(function ($) {
	    	$(document).ready(function()
	    	{
				$("#promocodesubmit").trigger("click");		
			});
			})(jQuery);
	    </script>
	    <?PHP
	    }
	    ?>

	 <script type="text/javascript">
	(function ($) {
	$(document).keypress(function(e) {
	    if(e.which == 13) {
	        $("#promocodesubmit").trigger("click");	
	    }
	});
	})(jQuery);
	</script>

	<div id="wrapper">
	            <div id="popup" class="large">
	                <div class="big">
	                    <h3>Become a Premium Member Today</h3>
	                    <p>With a Premium Membership to The Korn/Ferry Briefings on Talent &amp; Leadership, you’ll have exclusive access to insights from top thinkers and leaders on business strategies and the key talent management issues that executives are facing today.</p>
	                    <h2>Receive <em>Briefings</em> the way that suits you best. Now there are 3 ways to read the magazine:</h2>
	                    <div id="promocode">Enter promo code:&nbsp;&nbsp;&nbsp;
	 <input type="text" id="promocodeentry" name="promocodeentry" class="compact-form-field" value="<? echo $_GET['promotioncode']; ?>"> <input class="form-submit ajax-processed" id="promocodesubmit" name="Submit" value="" type="submit"><div id="errorcode"></div><div id="infocode"></div>
	         </div>
	                    <div id="subscription"><ul>
	                        <li>
	                            <a href="#" class="button subscribe" id="subscribe1"></a><br />
	                            <p>
	                                You’ll receive 4 print copies plus access<br>
	                                to all online content.<br>
	                                <span id="price1"><strong>- $89.99</strong></span>
	                            </p>
	                            <div class="picture">
	                                <img src="/sites/all/themes/kornferry_theme/design/images/pic1.png" alt="picture" />
	                            </div>
	                            <h4>Premium Subscription</h4>
	                        </li>
	                        <li>
	                        	<a href="#" class="button subscribe" id="subscribe2"></a><br />
	                        	<p>
	                                You’ll receive 4 copies delivered<br>
	                                to your office or home.<br>
	                                <span id="price2"><strong id="price2">- $59.99</strong></span>
	                            </p>
	                            <div class="picture">
	                                <img src="/sites/all/themes/kornferry_theme/design/images/pic2.png" alt="picture" />
	                            </div>
	                            <h4>Print Subscription</h4>
	                        </li>
	                        <li>
	                            <a href="#" class="button subscribe" id="subscribe3"></a><br />
	                            <p>
	                                You’ll have access to all online<br>
	                                content for 4 complete issues.<br>
	                                <span id="price3"><strong>- $39.99</strong></span>
	                            </p>
	                            <div class="picture">
	                                <img src="/sites/all/themes/kornferry_theme/design/images/pic3.png" alt="picture" />
	                            </div>
	                            <h4>Digital Subscription</h4>
	                        </li>
	                    </ul>
	</div>
	                </div>
	            </div>
	        </div>

</body>
</html>
