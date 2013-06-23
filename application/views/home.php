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
  var i=1, jinish=-1, go=true;
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



<div class="middle" style="padding-top: 20px;">


<div id="latestPrd">
	<div id="glider" style="width: 2194px; position: relative;left: 0px;">

			<?php foreach ($query->result() as $row){?>
				<div class="sldPrd" id="">
						<p><?=$row->name?></p>
						<img src="<?=base_url();?>itemimages/<?=$row->mainImageUrl?>" />
						<div>
							<p><?=$row->price?></p>
						</div>
				</div>
			<?}?>
		
		
	</div>
		
	
</div>


</div>

</div>
    
  
    
</div>