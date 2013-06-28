<div id="content">

  
<!-- SLIDER --------------------------------------------------------------------------------------------------------------------------------------->
 
<div id="slide_holder"> 
	
        <div id="slider">
		        <a href="<?=base_url();?>#">
          <img src="<?=base_url();?>image/data/eid2011/nivo_05.jpg" alt="" />
        </a>
              <a href="<?=base_url();?>#">
          <img src="<?=base_url();?>image/data/eid2011/nivo_01.jpg" alt="" />
        </a>
              <a href="<?=base_url();?>#">
          <img src="<?=base_url();?>image/data/eid2011/nivo_02.jpg" alt="" />
        </a>
              <a href="<?=base_url();?>#">
          <img src="<?=base_url();?>image/data/eid2011/nivo_03.jpg" alt="" />
        </a>
              <a href="<?=base_url();?>#">
          <img src="<?=base_url();?>image/data/eid2011/nivo_04.jpg" alt="" />
        </a>
      	</div>
		
  <script>
  var i=1, jinish=-1, go=true, global_left = 0;
$(document).ready(function () {
		
		// setInterval(function () {pokpoka()}, 10);
		
		// $(".sldPrd").mouseover	(function()	{ go = false; });
		// $(".sldPrd").mouseleave (function()	{ go =  true; });
		
		
		// function pokpoka()
		// {
			// if(i == -1264) jinish = +2;
			// if(i ==     0) jinish = -2;
			
			// if(go)
			// {
				// $('#glider').css('left', i);
				// i = i + jinish;
			// }
			
		// }
		
		/*
		function glideThem()
		{
			$("#glider").animate({
			left: '-1180'
			}, 15000, 'linear');
			
			jQuery.queue($("#glider")[0], "fx", function() {
				$("#glider").animate({
				left: '0'
				}, 15000, 'linear');
			jQuery.dequeue(this);
				
			});
			
			jQuery.queue($("#glider")[0], "fx", function() {
			jQuery.dequeue(this);
			});
			
		}
		
		
		
		// glideThem(); //For head start
		
		$(".sldPrd").mouseover(function() {
			jQuery.queue($("#glider")[0], "fx", []);
			$("#glider").stop();
		});
		
		$(".sldPrd").mouseleave(function() {
			jQuery.queue($("#glider")[0], "fx", []);
				glideThem();
		});
		
		*/
		
		
		//leftAr rightAr
		
		$("#leftAr").click(function() {
			$("#glider").animate({
				left: 0
				}, 500, 'linear');
		});
		
		$("#rightAr").click(function() {
			$("#glider").animate({
				left: global_left-912
				}, 500, 'linear');
		});
		
		
});



</script>
      
 	    
      <script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random', //Specify sets like: 'fold,fade,sliceDown'
		slices:9,
		animSpeed:800, //Slide transition speed
		pauseTime:4000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:true, //Next & Prev
		directionNavHide:true, //Only show on hover
		controlNav:true, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
      	controlNavThumbsFromRel:false, //Use image rel for thumbs
		controlNavThumbsSearch: '.jpg', //Replace this with...
		controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
		keyboardNav:true, //Use left & right arrows
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
	
	
});




</script>
</div>   
<!-- SLIDER --------------------------------------------------------------------------------------------------------------------------------------->



<!-----Deshi Slider :D ------>



<!-----Deshi Slider :D ------>


    
<div class="divider_top">

    <h2 class="latest_title">Latest Products</h2>



<div class="middle" style="padding-top: 20px;  position: relative;">


<div id="latestPrd">
	<div id="glider" style="width: 2194px; position: relative;left: 0px;">

			<?php foreach ($query->result() as $row){?>
				<div class="sldPrd" id="">
						<p><?=$row->name?></p>
						<a href="<?=base_url();?>index.php/Product_details_clt/product/<?=$row->code?>"><img src="<?=base_url();?>itemimages/<?=$row->mainImageUrl?>" /></a>
						<div>
							<p><?=$row->price?></p>
						</div>
				</div>
			<?}?>
		
		
	</div>
		
</div>
	<div class="sArrow" id="leftAr"></div>
	<div class="sArrow" id="rightAr"></div>


	
	
	
	
	
	
	
	
	
	
	
	
<table class="list" style="border: 1px solid black;padding: 15px 0 0 0;">
      <tr>
            <td style="width: 25%;">		
        <a class="wrap_link" href="#">
      	<div class="prod_name" style="height: 30px;">Laal Pahar</div>	
         <img src="<?=base_url();?>image/cache/data/eid2011/Laalpahar_1429-200x200.jpg" title="Laal Pahar (à¦²à¦¾à¦² à¦ªà¦¾à¦¹à¦¾à¦¡à¦¼)" alt="Laal Pahar (à¦²à¦¾à¦² à¦ªà¦¾à¦¹à¦¾à¦¡à¦¼)" /><br />
         
         
            
            
            <div class="label_small">
                                <span class="price_big">1,500</span>
           
		            </div>
            </a>
      
      </td>
      
            <td style="width: 25%;">		
        <a class="wrap_link" href="#">
      	<div class="prod_name" style="height: 30px;">Shila </div>	
         <img src="<?=base_url();?>image/cache/data/eid2011/Shila_1810-200x200.jpg" title="Shila (à¦¶à¦¿à¦²à¦¾)" alt="Shila (à¦¶à¦¿à¦²à¦¾)" /><br />
         
         
            
            
            <div class="label_small">
                                <span class="price_big">1,901</span>
           
		            </div>
            </a>
      
      </td>
      
            <td style="width: 25%;">		
        <a class="wrap_link" href="">
      	<div class="prod_name" style="height: 30px;">Rong aar Rong </div>	
         <img src="<?=base_url();?>image/cache/data/eid2011/rong-aar-rong_1810-200x200.jpg" title="Rong aar Rong (à¦°à¦™ à¦†à¦° à¦°à¦™)" alt="Rong aar Rong (à¦°à¦™ à¦†à¦° à¦°à¦™)" /><br />
         
         
            
            
            <div class="label_small">
                                <span class="price_big">1,901</span>
           
		            </div>
            </a>
      
      </td>
      
            <td style="width: 25%;">		
        <a class="wrap_link" href="#">
      	<div class="prod_name" style="height: 30px;">Nirod</div>	
         <img src="<?=base_url();?>image/cache/data/eid2011/Nirod_1524-200x200.jpg" title="Nirod (à¦¨à¦¿à¦°à¦¦)" alt="Nirod (à¦¨à¦¿à¦°à¦¦)" /><br />
         
         
            
            
            <div class="label_small">
                                <span class="price_big">1,600</span>
           
		            </div>
            </a>
      
      </td>
      
          </tr>
        <tr>
            <td style="width: 25%;">		
        <a class="wrap_link" href="#">
      	<div class="prod_name" style="height: 30px;">Dheeman</div>	
         <img src="<?=base_url();?>image/cache/data/eid2011/Dhiman_1524-200x200.jpg" title="Dheeman (à¦§à§€à¦®à¦¾à¦¨)" alt="Dheeman (à¦§à§€à¦®à¦¾à¦¨)" /><br />
         
         
            
            
            <div class="label_small">
                                <span class="price_big">1,600</span>
           
		            </div>
            </a>
      
      </td>
      
            <td style="width: 25%;">		
        <a class="wrap_link" href="#">
      	<div class="prod_name" style="height: 30px;">Bibhabori</div>	
         <img src="<?=base_url();?>image/cache/data/eid2011/bibhabori_2095-200x200.jpg" title="Bibhabori (à¦¬à¦¿à¦­à¦¾à¦¬à¦°à§€)" alt="Bibhabori (à¦¬à¦¿à¦­à¦¾à¦¬à¦°à§€)" /><br />
         
         
            
            
            <div class="label_small">
                                <span class="price_big">21,951</span>
           
		            </div>
            </a>
      
      </td>
      
            <td style="width: 25%;">		
        <a class="wrap_link" href="#">
      	<div class="prod_name" style="height: 30px;">Chakra</div>	
         <img src="<?=base_url();?>image/cache/data/eid2011/Chakra_1714-200x200.jpg" title="Chakra (à¦šà¦•à§à¦°)" alt="Chakra (à¦šà¦•à§à¦°)" /><br />
         
         
            
            
            <div class="label_small">
                                <span class="price_big">1,800</span>
           
		            </div>
            </a>
      
      </td>
      
            <td style="width: 25%;">		
        <a class="wrap_link" href="#">
      	<div class="prod_name" style="height: 30px;">Kothin Komol</div>	
         <img src="<?=base_url();?>image/cache/data/eid2011/kothin_komol_2380-200x200.jpg" title="Kothin Komol (à¦•à¦ à¦¿à¦¨ à¦•à§‹à¦®à¦²)" alt="Kothin Komol (à¦•à¦ à¦¿à¦¨ à¦•à§‹à¦®à¦²)" /><br />
         
         
            
            
            <div class="label_small">
                                <span class="price_big">2,499</span>
           
		            </div>
            </a>
      
      </td>
      
          </tr>
      </table>

</div>

</div>
    
  
    
</div>