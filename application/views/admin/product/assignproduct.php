<script type="text/javascript" src="<?=base_url();?>admin/js/custom/tables.js"></script>
        <div class="maincontent noright">
        	<div class="maincontentinner">
            	
                <ul class="maintabmenu">
                	<li class="current"><a href="#">Products</a></li>
                </ul><!--maintabmenu-->
                
				<div class="content">
                
                <div class="contenttitle radiusbottom0">
                	<h2 class="table"><span>Standard Table</span></h2>
                </div><!--contenttitle-->	
                <table cellpadding="0" cellspacing="0" border="0" class="stdtable">
                    <colgroup>
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th class="head0">Product id</th>
                            <th class="head1">Name</th>
                            <th class="head0">Price:</th>
                            <th class="head0">Amount:</th>
                            <th class="head1">Added</th>
                            <th class="head1">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php foreach ($query->result() as $row){?>
                        <tr>
                            <td class="center"><?=$row->id?></td>
                            <td class="center"><?=$row->name?></td>
                            <td class="center"><?=$row->price?></td>
                            <td class="center"><?=$row->amount?></td>
                            <td class="center"><?=$row->created?></td>
                            <td class="center">X</td>
                        </tr>
					<?}?>
                    </tbody>
                </table>
                
                <br /><br />
                </div><!--content-->
                
				
                <div class="content">
                    
                    <div class="contenttitle">
                    	<h2 class="widgets"><span>Assign product to categories</span></h2>
                    </div><!--contenttitle-->
                    
                    <br />
                    <!--123-->
					
					
					
					<div class="" style="height:550px;">
					
					
						<style>
						.zFormTbl td
						{
							#border: 1px solid grey;
						}
						</style>
						<script>
								//console.log( "ready!" );
								
								function underSubCat(show_sub)
								{
									jQuery('#newSub').val('');
									jQuery('#desc').val('');
									
									if(show_sub)
									{
										jQuery('#subcatName').html('<option value="">Which Sub-category</option>');
										jQuery('#subcatTr').show("slow");
									}
									else
									{
										jQuery('#subcatTr').hide("fast");
									}
								}
								
								function catChosen(targetid) //Update SubCat options
								{
									//console.log(targetid); //subcatName //imSubcatName
									if(jQuery("input:checked").val() == 'under_cat') return;
									
									var catName = "";
									var catId = "";
									if(targetid == 'subcatName')
									{
										catName = jQuery('#catName option:selected').text();
										catId = jQuery('#catName option:selected').val();
									}
									else if(targetid == 'imSubcatName')
									{
										catName = jQuery('#subcatName option:selected').text();
										catId = jQuery('#subcatName option:selected').val();
									}
									
									
									if(catId != "")
									{
										jQuery.ajax({
											url: "<?php echo base_url();?>index.php/admin/category_ctl/getSubcatList",
											type: 'POST',
											data: {
													"catId" : catId
												  },

											success: function(response, status, xhr)
											{
												//console.log(response+" <- status");
												response = jQuery.parseJSON(response);
												
												if(response.status == 1)
												{
													// jQuery('.msgsuccess p').text('Successfully added!');
													// jQuery('.msgsuccess').show("slow");
													//console.log(response.result);
													
													var subcats = jQuery.parseJSON( response.result );	//console.log(subcats[0]['id']);
													var i = 0, options = "";
														options = '<option value="">Which sub-category</option>';
													while(i < subcats.length)
													{
														options += '<option value="'+subcats[i]['id']+'">'+subcats[i]['name']+'</option>';
														i++;
													}
													
													jQuery('#'+targetid).html(options);	//console.log(options);
												}
												else if(response.status == 0)
												{
													jQuery('.msgerror p').text("No sub-category found for '"+catName+"'!");
													jQuery('.msgerror').show("slow");
												}
												//console.log(response);
											},      
											error: function (xhr, ajaxOptions, thrownError)
											{
												jQuery('.msgerror p').text('Failed! Try again.');
												jQuery('.msgerror').show("slow");
											}
										});
									}
									else
									{
										jQuery('.msgalert p').text('Category name not selected!');
										jQuery('.msgalert').show("slow");
									}
								}
								
								function assignProd()  //Submit --------------------------------------------------------------------------
								{
									 //subcatName //imSubcatName
									// var ignoreSubcat = false;
									// var ignoreImSubcat = false;
									
									// if(jQuery("input:checked").val() == 'under_cat')
										// ignoreSubcat = true;
									
									// if(catId = jQuery('#catName option:selected').val() == "")
										// ignoreSubcat = true;
									// if(catId = jQuery('#catName option:selected').val() == "")
										// ignoreSubcat = true;
									// console.log(jQuery('#catName option:selected').val()+"<--catName");console.log(jQuery('#subcatName option:selected').val()+"<--subcatName");console.log(jQuery('#imSubcatName option:selected').val()+"<--imSubcatName");return;
									
									var catId = jQuery('#catName').val(); //value
									var catName = jQuery('#catName option:selected').text();
									
									var subcatId = jQuery('#subcatName').val(); //value
									var subcatName = jQuery('#subcatName option:selected').text();
									
									var imSubcatId = jQuery('#imSubcatName').val(); //value
									var imSubcatName = jQuery('#imSubcatName option:selected').text();
									
									var newSub = jQuery('#newSub').val();
									var desc = jQuery('#desc').val();
									
									// var postData = {};
									// if(ignoreSubcat)
									// {
										var postData = {
														"catId" : catId,
														"catName" : catName,
														"subcatId" : subcatId,
														"subcatName" : subcatName,
														"imSubcatId" : imSubcatId,
														"imSubcatName" : imSubcatName,
														"product" : newSub,
														"discription" : desc
													  };
									// }
									// else
									// {
										// var postData = {
														// "rootCategoryId" : subcatId,	//++++
														// "name" : newSub,
														// "discription" : desc
													  // };
									// }
									
									
									
									
									if(catId != "" && newSub != "")
									{
										jQuery.ajax({
											url: "<?php echo base_url();?>index.php/admin/category_ctl/assign_prod",
											type: 'POST',
											data: postData,

											success: function(response, status, xhr)
											{
												if(response == 1)
												{
													jQuery('.msgsuccess p').text('Successfully added!');
													jQuery('.msgsuccess').show("slow");
												}
												else
												{
													jQuery('.msgerror p').text('Failed! Try again.');
													jQuery('.msgerror').show("slow");
												}
												//console.log(response);
											},      
											error: function (xhr, ajaxOptions, thrownError)
											{
												jQuery('.msgerror p').text('Failed! Try again.');
												jQuery('.msgerror').show("slow");
											}
										});
									}
									else
									{
										jQuery('.msgalert p').text('Some importent fields are empty!');
										jQuery('.msgalert').show("slow");
									}
									
								}


							
						</script>
						<table class="zFormTbl" style="width:30%;margin: auto; "> 
							<tr>
								<td colspan="4">
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
							<!--
							<tr>
								<td class="zFormTd" colspan="2" style="text-align: left; padding-left: 15px;">
									<input class="zradio" type="radio" name="cat" value="under_cat" id="catRadio" onchange='underSubCat(false)' >Add under Category<br/>
									<input class="zradio" type="radio" name="cat" value="under_sub_cat" checked="checked" onchange='underSubCat(true)' style="margin-top: 10px;">Add under Sub-category
								</td>
								<td class="zFormTd" colspan="2" style="text-align: left;"></td>
							</tr>
							-->
							<tr>
								<td style="text-align: right"></td>
								<td class="zFormTd" style="text-align: left;">
									<select id="catName" name="catName" class="zSelect" style="width: 200px;" onchange="catChosen('subcatName')">
										<option value="">Which category</option>
										<?php
											if(isset($categoryList))
											{
												foreach($categoryList as $cat)
												{
													echo '<option value="'.$cat['id'].'">'.$cat['name'].'</option>';
												}
											}
											
										?>
										<!--
										<option value="0">Selection One</option>
										<option value="1">Selection Two</option>
										<option value="2">Selection Three</option>
										<option value="3">Selection Four</option>
										-->
									</select>
								</td>
							</tr>
							<tr id="subcatTr" >
								<td style="text-align: right"></td>
								<td class="zFormTd" style="text-align: left;">
									<select id="subcatName" name="subcatName" class="zSelect" style="width: 200px; border: 1px solid #A4C400;" onchange="catChosen('imSubcatName')">
										<option value="">Which sub-category</option>
										
									</select>
								</td>
							</tr>
							<tr id="imSubcatTr" >
								<td style="text-align: right"></td>
								<td class="zFormTd" style="text-align: left;">
									<select id="imSubcatName" name="imSubcatName" class="zSelect" style="width: 200px; border: 1px solid #A4C400;">
										<option value="">Immediate sub-category</option>
										
									</select>
								</td>
							</tr>
							<tr>
								<td style="text-align: right"></td>
								<td class="zFormTd" style="text-align: left;">
									<label class="zlable" >Product:</label><br/>
									<input id="newSub" class="zinput" type="text" value="" placeholder=""/>
								</td>
							</tr>
							<!--
							<tr>
								<td></td>
								<td class="zFormTd" >
									<label class="zlable" >Description:</label><br/>
									<textarea id="desc" class="zinput"  style="vertical-align: top;" rows="7" cols="25" value=""></textarea>
								</td>
							</tr>
							-->
							<tr>
								<td></td>
								<td class="zFormTd" style="text-align: left;">
									<input class="zSubButton" type="submit" value="Submit" onclick="assignProd()"/>
								</td>
							</tr>
						</table>
					</div>

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
