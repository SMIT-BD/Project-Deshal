<?php include_once('application/controllers/admin/category_ctl.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head>
<title>DESHAL | ART and FASHION</title>
<base  />
<link href="<?=base_url();?>image/data/cart.png" rel="icon" />
<link rel="stylesheet" type="text/css" href="<?=base_url();?>catalog/view/theme/CartMania-Clean/stylesheet/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="<?=base_url();?>catalog/view/theme/CartMania-Clean/stylesheet/nivo-slider.css" />
<link rel="stylesheet" type="text/css" href="<?=base_url();?>catalog/view/theme/CartMania-Clean/stylesheet/newCSS.css" />
<!--[if lt IE 7]>
<script type="text/javascript" src="<?=base_url();?>catalog/view/javascript/DD_belatedPNG_0.0.8a-min.js"></script>
<script>
DD_belatedPNG.fix('img, #header .div3 a, #content .left, #content .right, .box .top');
</script>
<![endif]-->
<script type="text/javascript" src="<?=base_url();?>catalog/view/theme/CartMania-Clean/js/jquery.tools.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>catalog/view/theme/CartMania-Clean/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="<?=base_url();?>catalog/view/theme/CartMania-Clean/js/jquery.prettyPhoto.js"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>catalog/view/theme/CartMania-Clean/stylesheet/prettyPhoto.css" />
<script type="text/javascript" src="<?=base_url();?>catalog/view/theme/CartMania-Clean/js/custom_scripts.js"></script>
<script type="text/javascript" src="<?=base_url();?>catalog/view/theme/CartMania-Clean/js/jquery.cycle.lite.1.0.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('.featured .holder').cycle();
});
</script>
</head>

<body>
<!-- START MAIN WRAPPER -->
<div id="wrapper">

<!-- START HEADER -->
<div id="header">
  <div class="div2">
        <a href="<?=base_url();?>index.php/Home_ctl"><img src="<?=base_url();?>image/data/logodeshal.png" title="DESHAL" alt="DESHAL" /></a>
      </div>
  <div class="div4">
    <div class="div5"> <a id="tab_home" class="menu_link" href="<?=base_url();?>index.php/Home_ctl">Home</a> <a id="tab_special" class="menu_link" href="<?=base_url();?>index.php/home_un_con_ctl">Special Offers</a>
            <a id="tab_login" class="menu_link" href="<?=base_url();?>index.php/Account_login_ctl">Log In</a>
            <a id="tab_account" class="menu_link" href="<?=base_url();?>index.php/admin/dashboard_ctl">Account</a> <a id="tab_cart" class="menu_link" href="<?=base_url();?>index.php/home_un_con_ctl">Basket</a> <a id="tab_checkout" class="menu_link" href="<?=base_url();?>index.php/home_un_con_ctl">Checkout</a> <a id="tab_contacts" class="menu_link" href="<?=base_url();?>index.php/Contact_ctl">Contact</a>
      <p class="welcome">Welcome,
                <a href="<?=base_url();?>index.php/admin/dashboard_ctl">Guest</a>
                !</p>
    </div>
    <div class="div7">
            <form action="#" method="post" enctype="multipart/form-data" id="currency_form">
        <div class="switcher">
                              <div class="selected"><a>Bangladeshi Taka</a></div>
                                                                                          <div class="option">
                        <a onclick="$('input[name=\'currency_code\']').attr('value', 'BDT'); $('#currency_form').submit();">Bangladeshi Taka</a>
                        <a onclick="$('input[name=\'currency_code\']').attr('value', 'EUR'); $('#currency_form').submit();">Euro</a>
                        <a onclick="$('input[name=\'currency_code\']').attr('value', 'GBP'); $('#currency_form').submit();">Pound Sterling</a>
                        <a onclick="$('input[name=\'currency_code\']').attr('value', 'USD'); $('#currency_form').submit();">US Dollar</a>
                      </div>
        </div>
        <div style="display: inline;">
          <input type="hidden" name="currency_code" value="" />
          <input type="hidden" name="redirect" value="index9328.html?route=common/home" />
        </div>
      </form>
                  <form action="#" method="post" enctype="multipart/form-data" id="language_form">
        <div class="switcher">
                              <div class="selected"><a><img src="<?=base_url();?>image/flags/gb.png" alt="English" />&nbsp;&nbsp;English</a></div>
                              <div class="option">
                        <a onclick="$('input[name=\'language_code\']').attr('value', 'en'); $('#language_form').submit();"><img src="<?=base_url();?>image/flags/gb.png" alt="English" />&nbsp;&nbsp;English</a>
                      </div>
        </div>
        <div>
          <input type="hidden" name="language_code" value="" />
          <input type="hidden" name="redirect" value="index9328.html?route=common/home" />
        </div>
      </form>
          </div>
    <div id="search">
          <div class="div9">
                        <input type="text" value="Keywords" id="filter_keyword" onclick="this.value = '';" onkeydown="this.style.color = '#000000'" style="color: #999;" />
                        <select id="filter_category_id">
              <option value="0">All Categories</option>
                                          <option value="36">&nbsp;&nbsp;&nbsp;&nbsp;Womens</option>
                                                        <option value="38">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Three Pieces</option>
                                                        <option value="40">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tops</option>
                                                        <option value="42">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sharee</option>
                                                        <option value="48">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tee Shirt</option>
                                                        <option value="43">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scarf</option>
                                                        <option value="41">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Panjabi</option>
                                                        <option value="35">&nbsp;&nbsp;&nbsp;&nbsp;Mens</option>
                                                        <option value="44">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Panjabi</option>
                                                        <option value="49">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tee Shirt</option>
                                                        <option value="39">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fotua</option>
                                                        <option value="37">&nbsp;&nbsp;&nbsp;&nbsp;Kids</option>
                                                        <option value="46">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fotua</option>
                                                        <option value="45">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Frock</option>
                                                        <option value="47">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Three Pieces</option>
                                        </select>
          </div>
      <div class="div10"><a onclick="moduleSearch();" class="search_button">Go</a></div>
    </div>
  </div>
  
        
  <script type="text/javascript"><!-- 
function getURLVar(urlVarName) {
	var urlHalves = String(document.location).toLowerCase().split('?');
	var urlVarValue = '';
	
	if (urlHalves[1]) {
		var urlVars = urlHalves[1].split('&');

		for (var i = 0; i <= (urlVars.length); i++) {
			if (urlVars[i]) {
				var urlVarPair = urlVars[i].split('=');
				
				if (urlVarPair[0] && urlVarPair[0] == urlVarName.toLowerCase()) {
					urlVarValue = urlVarPair[1];
				}
			}
		}
	}
	
	return urlVarValue;
} 

$(document).ready(function() {
	route = getURLVar('route');
	
	if (!route) {
		$('#tab_home').addClass('selected');
	} else {
		part = route.split('http://www.deshal.com.bd/');
		
		if (route == 'common/home') {
			$('#tab_home').addClass('selected');
		} else if (route == 'account/login') {
			$('#tab_login').addClass('selected');	
		} else if (part[0] == 'account') {
			$('#tab_account').addClass('selected');
		} else if (route == 'checkout/cart') {
			$('#tab_cart').addClass('selected');
		} else if (part[0] == 'checkout') {
			$('#tab_checkout').addClass('selected');
		} else if (route == 'information/contact') {
			$('#tab_contacts').addClass('selected');
			} else if (route == 'product/special') {
			$('#tab_special').addClass('selected');	
		} else {
			$('#tab_home').addClass('selected');
		}
	}
});
//--></script> 
  <script type="text/javascript"><!--
$('#search input').keydown(function(e) {
	if (e.keyCode == 13) {
		moduleSearch();
	}
});

function moduleSearch() {	
	pathArray = location.pathname.split( 'http://www.deshal.com.bd/' );
	
	url = location.protocol + "//" + location.host + "/" + pathArray[1] + '/';
		
	url += 'index64b3.html?route=product/search';
		
	var filter_keyword = $('#filter_keyword').attr('value')
	
	if (filter_keyword) {
		url += '&keyword=' + encodeURIComponent(filter_keyword);
	}
	
	var filter_category_id = $('#filter_category_id').attr('value');
	
	if (filter_category_id) {
		url += '&category_id=' + filter_category_id;
	}
	
	location = url;
}
//--></script> 
  <script type="text/javascript"><!--
$('.switcher').bind('click', function() {
	$(this).find('.option').slideToggle('fast');
});
$('.switcher').bind('mouseleave', function() {
	$(this).find('.option').slideUp('fast');
}); 
//--></script>
 
</div>

<!-- END HEADER --> 