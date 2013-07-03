
<script  src="<?=base_url();?>/jQuery.js"></script>
<div id="content">
  <div class="top">
    <div class="left"></div>
    <div class="right"></div>
	
    <div class="center">
	<?php if(isset($details)){?>
      <h1><?=$details['name'];?></h1>
    </div>
  </div>
  <div class="middle">
    <div style="width: 100%; margin-bottom: 10px;">
      <table style="width: 100%; border-collapse: collapse;">
        <tr>
          <td style="text-align: left; width: 500px; vertical-align: top;">
          <div id="image_wrap" style="width: 390px;border-right: 1px solid #DDDDDD;">
          <a href="<?=base_url();?>itemimages/<?=$details['mainImageUrl'];?>" title="<?=$details['name'];?>" rel="prettyPhoto[gallery]"><img src="<?=base_url();?>itemimages/<?=$details['mainImageUrl'];?>" title="<?=$details['name'];?>" alt="<?=$details['name'];?>" id="image" style="margin-bottom: 3px; width: 239px;" /></a><br />
            

		</div>       
            </td>
          <td style="width: 350px; vertical-align: top; padding: 35px 0 0 30px;">
          
          
                                           <span class="price_big">৳<?=$details['price'];?></span>
                                
                        
          <table id="prod_list">
             
              <tr>
                <td>Availability:</td>
                <td><?=$details['amount'];?></td>
              </tr>
              <tr>
                <td>Model:</td>
                <td>3pcs-007</td>
              </tr>
                            			  <tr>
                <td>Average Rating:</td>
                <td>                  Not Rated                  </td>
              </tr>
			              </table>
           
           
           <div id="small_images">
          <!-- <p class="small_images_p"><strong>Additional Images  (0)</strong></p>
            <div style="background: #F7F7F7; border: 1px solid #DDDDDD; padding: 10px; margin-bottom: 10px;">There are no additional images for this product.</div>
          </div> -->
           
            
                        <form action="http://www.deshal.com.bd/shop/index.php?route=checkout/cart" method="post" enctype="multipart/form-data" id="product">
                                                                      <div class="content cart_button_holder">
              <span class="qty">
                Qty:                <input type="text" name="quantity" size="3" value="1" style="padding:5px 2px; font-size:18px; font-weight:bold;" />
                </span>
                <a onclick="$('#product').submit();" id="add_to_cart">Add to Cart</a>
                              </div>
              <div>
                <input type="hidden" name="product_id" value="63" />
                <input type="hidden" name="redirect" value="" />                
              </div>
            </form>
                        
                		<br />			            
            </td>
        </tr>
      </table>
    </div>
    
        <div id="tab_review" class="tab_page divider_top">
     <h2 class="review_title">Reviews (<?echo $getreview->num_rows();?>)</h2>      <div id="review" class="clear"></div>
      
      <a id="trig" class="button" rel="#write" style="background: #DDD" onclick="toggle_visibility('wRvw')">Write Review</a>
	  
      
      <!--<div id="write">
      <div class="heading" id="review_title"></div>
      <div class="content"><b>Your Name:</b><br />
        <input type="text" name="name" value="" />
        <br />
        <br />
        <b>Your Review:</b>
        <textarea name="text" style="width: 98%;" rows="8"></textarea>
        <span style="font-size: 11px;"><span style="color: #FF0000;">Note:</span> HTML is not translated!</span><br />
        <br />
        <b>Rating:</b> <span>Bad</span>&nbsp;
        <input type="radio" name="rating" value="1" style="margin: 0;" />
        &nbsp;
        <input type="radio" name="rating" value="2" style="margin: 0;" />
        &nbsp;
        <input type="radio" name="rating" value="3" style="margin: 0;" />
        &nbsp;
        <input type="radio" name="rating" value="4" style="margin: 0;" />
        &nbsp;
        <input type="radio" name="rating" value="5" style="margin: 0;" />
        &nbsp; <span>Good</span><br />
        <br />
        <b>Enter the code in the box below:</b><br />
        <input type="text" name="captcha" value="" autocomplete="off" />
        <br />
        <img src="" id="captcha" /></div>
		-->
	<div  id="wRvw" style="display:none;">
		<?=form_open('Product_details_clt/insert_review')?>
		<!---<?//if($query->num_rows()>0) {?>
		<?//foreach($query->result() as $row){?>
			<table>
				<tr>
					<td>User Name :</td>
					<td></td>
				</tr>
				<tr>
					<td>Review :</td>
					<td><?//=$row->review;?></td>
				</tr>
				
				<tr>
					<td>Rate :</td>
					<td><?//=$row->rate;?></td>
				</tr>
			</table>--->
			<?//}?>
			<?//}?>
				<table>
					<tr>
						<td>User Name :</td>
						<td><input type="text" name="name" /></td>
					</tr>
					<tr>
						<td>Review :</td>
						<td><textarea name="review" rows="5" cols="18"></textarea></td>
					</tr>
					<tr>
						<td>Rate :</td>
						<td class="rating">
							
							<span id="r5"  >&#9734 </span>
							<span id="r4"  >&#9734 </span>
							<span id="r3"  > &#9734 </span>
							<span id="r2"  > &#9734 </span>
							<span id="r1"  > &#9734 </span>
							<input type="hidden" value="0" id="rate" name="rate">
							<input type="hidden" value="<?=$details['id'];?>" id="p_id" name="p_id">
							
							
						</td>
						
					</tr>
			
				</table>
	</div>

	 <div class="buttons">
        <table>
          <tr>
			<td align="right"><input type="submit" name="Submit" value="Continue" 
			style=" font-size: 13px;font-weight: bold;background :url('../image/cart_button.png') top left;font-weight: bold;
display: inline-block;margin-right: 5px;padding: 8px 15px;text-decoration: none;"/></td>
            <!--<td align="right"><a class="button" ><span>Continue</span></a></td>-->
          </tr>
        </table>
		
      </div>
	  
	  
      </div>
    
    
    </div>
     
    
    <div id="tab_description" class="tab_page divider_top">
    <h2 class="description_title">Description</h2>
    <div class="clear">  
    <p>
	<span class="Apple-style-span" style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; line-height: 18px; color: rgb(0, 0, 0); ">Saloar, kameez and Orna</span></p>
<div style="font-size: 12px; background-color: rgb(255, 255, 255); ">
	<div style="font-size: 12px; background-color: rgb(255, 255, 255); ">
		<p style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; color: rgb(102, 102, 102); margin-bottom: 15px; line-height: 18px; ">
			<span class="Apple-style-span" style="color: rgb(0, 0, 0); font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; ">Artist: Ishrat Jahan</span></p>
		<p style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; color: rgb(102, 102, 102); margin-bottom: 15px; line-height: 18px; ">
			<span class="Apple-style-span" style="color: rgb(0, 0, 0); font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; ">Fabric: 100% Cotton, Hand Loom</span></p>
		<p style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; color: rgb(102, 102, 102); margin-bottom: 15px; line-height: 18px; ">
			<span class="Apple-style-span" style="color: rgb(0, 0, 0); font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; ">Hand Embroidery, Block print, Silk Screen and Tiedye</span></p>
		<p style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; color: rgb(102, 102, 102); margin-bottom: 15px; line-height: 18px; ">
			<span class="Apple-style-span" style="color: rgb(0, 0, 0); font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; ">Colour: Light Green and Blue</span></p>
		<p style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; color: rgb(102, 102, 102); margin-bottom: 15px; line-height: 18px; ">
			<span class="Apple-style-span" style="color: rgb(0, 0, 0); font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; ">Size Available: 36, 38, 40, 42</span></p>
	</div>
</div>
    </div>
    </div>
    <?} else{?>
		<div class="middle">
    	    <div class="content">There are no products to list with this Prodoct code.</div>
              </div><?exit;}?>
<div class="clear"></div>   
    <div id="tab_related" class="tab_page up divider_top">
    <h2 class="related_title">Related Products (5)</h2>
      <div class="clear">
		
	<table class="list">
		<tr>
			
			<?php
			
			foreach ($products->result() as $prod)
			{?>
				<td style="width: 25%;">
					<a href="<?=base_url();?>index.php/product_details_clt/product/<?=$prod->id?>" style="text-decoration: none; color: #666">
					<div class="new" style="">
						<!--<p class="pname"><a href="<?=base_url();?>index.php/product_details_clt/product/<?=$prod->id?>"><?=$prod->name?></a></p>-->
						<p class="pname"><?=$prod->name?></p>
						<div class="pprice"><p style="">৳<?=$prod->price?></p><span style="text-align:left;">CODE: <?=$prod->code?></span></div>
						<img src="<?=base_url();?>itemimages/<?=$prod->mainImageUrl?>" />
					</div>
					</a>
				</td>
			<?}?>
      
		</tr>
      </table>
          </div>
  </div>
  </div>
  <div class="bottom">
    <div class="left"></div>
    <div class="right"></div>
    <div class="center"></div>
  </div>
  </div>
  
  <script type="text/javascript">
	function toggle_visibility(wRvw)
	{	
		var e = document.getElementById(wRvw);
		 if(e.style.display == 'none')
          e.style.display = 'block';
       else
          e.style.display = 'none';
	}
	$('.rating').click(function(event){
			
		var preTxt = $('#label').html();
		$('.rating span').html('&#x2606');
		$('#'+event.target.id+' ~ * ,'+'#'+event.target.id).html('&#x2605');
		$('#label').html(preTxt);
		$('#rate').val(event.target.id[1]);
		//console.log(event.target.id[1]);
		console.log($('#rate').val());
		
	});
  </script>
  
  <style>
	.rating > span:hover:before
	{
		content: "\2605";
		position: absolute;
	}	
	.rating
	{
	  unicode-bidi: bidi-override;
	  direction: rtl;
	}
	.rating > span:hover:before,
	.rating > span:hover ~ span:before 
	{
	   content: "\2605";
	   position: absolute;
	}
	.rating 
	{
	  unicode-bidi: bidi-override;
	  direction: rtl;
	}
	
	.rating > span 
	{
		display: inline-block;
		position: relative;
		width: 1.1em;
		color: rgba(255, 174, 0, 0.92);
	}

	
	.rating > span:hover:before,
	.rating > span:hover ~ span:before 
	{
	   content: "\2605";
	   position: absolute;
	}
</style>