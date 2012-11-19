<h2>PRICE CALCULATOR</h2>
       <h3>Select the your country:</h3>
					<div class="country_bar">
                    
       <?php   
		 
		   $destinations =0;
           $sub_query ="SELECT  * from country_rate";
           $sub_result = mysql_query($sub_query);
		   $destinations = mysql_num_rows($sub_result);
		?>
                  <select  class="input" id='ratelist' name='ratelist' >
		<?php while ($row = mysql_fetch_array($sub_result)) { ?>

		<option value="<?php echo $row['landline']; ?>;<?php echo $row['mobile']; ?>;<?php echo $row['sms']; ?>" <?php  if($row['id']==55){ echo 'selected="selected"'; } ?> ><?php echo $row['country']; ?></option>
		<?php }?>
	</select>
						</div>
			<table width="295px" border="0">			
			  <tr>
				<td class="price_left1">Price landline:</td>
				<td class="price_right1"><span id="ll-price">Comming Soon</span></td>
			  </tr>
			  <tr>
				<td class="price_left1">Price mobile:</td>
				<td class="price_right1"><span id="m-price">Comming Soon</span></td>
			  </tr>
			</table>
            <div class="read_more"><a href="#">Sign Up</a></div>