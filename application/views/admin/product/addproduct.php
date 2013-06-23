

<script type="text/javascript" src="<?=base_url();?>admin/js/plugins/jquery-1.7.min.js"></script>
        
<script type="text/javascript">

		function submitval()
		{
			
			var name = document.getElementById('productname').value;
			var price = document.getElementById('price').value;
			var amount = document.getElementById('amount').value;
			var productparts = document.getElementById('productparts').value;
			var artist = document.getElementById('artist').value;
			var ingredient = document.getElementById('ingredient').value;
			var color = document.getElementById('color').value;
			var size = document.getElementById('size').value;
			
			var data = "name="+name+"&price="+price+"&amount="+amount+"&productparts="+productparts+"&artist="+artist+"&ingredient="+ingredient+"&color="+color+"&size="+size;
			
			
			jQuery.ajax
						({ 
							type: "POST",
							url: '<?=base_url();?>index.php/admin/product_ctl/getAddForm',
							data: data,
							success: function(msg, status, xhr) 
							{
								msg = jQuery.parseJSON(msg)
								if(msg.status == 1)
								{
									jQuery('.msgsuccess p').text(msg.success);
									jQuery('.msgsuccess').show("slow");
									console.log(msg);
									console.log(msg.success);
								}
								else if(msg.status == 0)
								{
									jQuery('.msgerror p').text(msg.error);
									jQuery('.msgerror').show("slow");
									console.log('Error happened');
									console.log(msg);
								}
								
								jQuery("#view").html(msg);
							},
							error: function (xhr, ajaxOptions, thrownError)
											{
												jQuery('.msgerror p').text('Failed! Try again.');
												jQuery('.msgerror').show("slow");
											}
						});
					
			return false;
		} 

</script>
                
        <div class="maincontent noright">
        	<div class="maincontentinner">
            	
                <ul class="maintabmenu">
                	<li class="current"><a nohref="">Add Products</a></li>
                </ul><!--maintabmenu-->
                
                <div class="content">
                    
                    <div class="contenttitle">
                    	<h2 class="widgets"><span>#Basic Information</span></h2>
                    </div><!--contenttitle-->
                    
                    <br />
                    <!--123-->
					<div class="">
						<table class="zFormTbl" style="width: 70%;">
						<form method="post" action="#" id="addpro" onsubmit="return submitval()">
							<tr>
									<td colspan="2">
										<div class="notification msginfo">
											<a class="close"></a>
											<p>This is an information message.</p>
										</div><!-- notification msginfo -->
										
										<div class="notification msgsuccess">
											<a class="close"></a>
											<p>This is a success message.</p>
										</div><!-- notification msgsuccess -->
										
										<div class="notification msgalert">
											<a class="close"></a>
											<p>This is an alert message.</p>
										</div><!-- notification msgalert -->
										
										<div class="notification msgerror">
											<a class="close"></a>
											<p>This is an error message.</p>
										</div><!-- notification msgerror -->
									</td>
								</tr>
							<tr>
								<td class="zFormTd">
									<label class="zlable" >Product name:</label>
								</td>
								<td class="zFormTd">
									<input class="zinput" type="text" value="" name="productname" id="productname" required />
								</td>
							</tr>
							<tr>
								<td class="zFormTd">
									<label class="zlable" >Price:</label>
								</td>
								<td class="zFormTd">
									<input class="zinput" type="text" value="" name="price" id="price"  />
								</td>
							</tr>
							<!---->
							<tr>
								<td class="zFormTd">
									<label class="zlable" >Amount:</label>
								</td>
								<td class="zFormTd">
									<input class="zinput" type="text" value="" name="amount" id="amount"  />
								</td>
							</tr>
						</table>
					</div>
                    
							<!----><!----><!----><!---->
				</div><!--content-->
                
			<div class="content">
				
					 <div class="contenttitle">
                    	<h2 class="widgets"><span>#Product Description</span></h2>
                    </div><!--contenttitle-->
					
						<div class="">
						<table class="zFormTbl" style="width: 70%;">
						<tr><td></td><td></td></tr>
							<tr>
								<td class="zFormTd">
									<label class="zlable" >Product parts:</label>
								</td>
								<td class="zFormTd">
									<input class="zinput" type="text" value="" name="productparts" id="productparts"/>
								</td>
							</tr>
							<!---->
							<tr>
								<td class="zFormTd">
									<label class="zlable" >Artist</label>
								</td>
								<td class="zFormTd">
									<input class="zinput" type="text" value="" name="artist" id="artist" />
								</td>
							</tr>
							<tr>
								<td class="zFormTd">
									<label class="zlable" >Ingredient:</label>
								</td>
								<td class="zFormTd">
									<input class="zinput" type="text" value="" name="ingredient" id="ingredient"/>
								</td>
							</tr>
							<!---->
							<tr>
								<td class="zFormTd">
									<label class="zlable" >Color:</label>
								</td>
								<td class="zFormTd">
									<input class="zinput" type="text" value=""  name="color" id="color"  />
								</td>
							</tr>
							<!---->
							<tr>
								<td class="zFormTd">
									<label class="zlable" >Size:</label>
								</td>
								<td class="zFormTd">
									<input class="zinput" type="text" value="" name="size" id="size" />
								</td>
							</tr>
						</table>
					</div>
                    
							<!----><!----><!----><!---->
				</div><!--content-->
                
			<div class="content">
				
					 <div class="contenttitle">
                    	<h2 class="widgets"><span>#Product Image</span></h2>
                    </div><!--contenttitle-->
					
						<div class="">
						<table class="zFormTbl" style="width: 70%;">
						<tr><td></td><td></td></tr>
							<tr>
								<td class="zFormTd">
									<label class="zlable" >Upload image:</label>
								</td>
								<td class="zFormTd">
									<input class="zinput" type="file" value="" name="userfile"/>
								</td>
							</tr>
							<tr>
								<td>
								</td>
								<td class="zFormTd">
									<input class="zSubButton" type="submit" value="Submit" />
								</td>
							</tr>
						</table>
						</div>
                    
							<!----><!----><!----><!---->
						</form>
						
                </div><!--content-->
                
            </div><!--maincontentinner-->
            
            <div class="footer">
            	<p>Starlight Admin Template &copy; 2012. All Rights Reserved. Designed by: <a href="#">ThemePixels.com</a></p>
            </div><!--footer-->
            
        </div><!--maincontent-->


     	</div><!--mainwrapperinner-->
    </div><!--mainwrapper-->
	<!-- END OF MAIN CONTENT -->
    

</body>

</html>
