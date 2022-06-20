<table class="row row-4" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
	<tbody>
		<tr>
			<td>
				<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 625px;" width="625">
					<tbody>
						<tr>
							<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
								<div class="spacer_block" style="height:20px;line-height:20px;font-size:1px;">&#8202;</div>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
<table class="row row-5" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
	<tbody>
		<tr>
			<td>
				<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f7f7f7; color: #000000; width: 625px;" width="625">
					<tbody>
						<tr>
							<td class="column column-1" width="33.333333333333336%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
								<table class="image_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
									<tr>
										<td style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:20px;width:100%;">
											<div align="center" style="line-height:10px"><img src="<?php echo $barcodeURL; ?>" style="display: block; height: auto; border: 0; width: 159px; max-width: 100%;" width="159"></div>
										</td>
									</tr>
								</table>
								<!-- Apple Wallet Button -->
								<table class="button_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
									<tr>
										<td style="padding-bottom:20px;padding-left:10px;padding-right:10px;padding-top:10px;text-align:center;">
											<a href="https://puppy.cologne/ticket/ticket.php?eventname=<?php echo $ticket['name'] ?>&ticketid=<?php echo $ticket['WooCommerceEventsTicketID']; ?>&name=<?php echo $ticket['WooCommerceEventsAttendeeName']; ?> <?php echo $ticket['WooCommerceEventsAttendeeLastName']; ?>&eventid=<?php echo $ticket['WooCommerceEventsProductID']; ?>&ort=<?php echo $ticket['WooCommerceEventsLocation']; ?>&start=<?php echo $ticket['WooCommerceEventsDate']; ?>&startt=<?php echo $ticket['WooCommerceEventsDateTimestamp']; ?>&endet=<?php echo $ticket['WooCommerceEventsEndDateTimestamp']; ?>&bild=<?php echo $ticket['WooCommerceEventsTicketHeaderImage']; ?>"><img src="https://puppy.cologne/wp-content/uploads/Apple_Wallet.svg" width="175"/></a>
										</td>
									</tr>
								</table>
							</td>
							<td class="column column-2" width="66.6666666%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-left: 20px; padding-right: 15px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
								<table class="heading_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
									
									<!-- TICKETNUMMER -->
									<tr>
										<td style="text-align:center;width:50%;padding-top:25px;">
											<h3 style="margin: 0; color: #909090; direction: ltr; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 13px; font-weight: 700; letter-spacing: normal; line-height: 200%; text-align: left; margin-top: 0; margin-bottom: 0;"><span class="tinyMce-placeholder">Ticketnummer</span></h3>
										</td>
										<td style="text-align:center;width:50%;padding-top:25px;">
											<div style="color:#0a0a0e;direction:ltr;font-family:Helvetica Neue, Helvetica, Arial, sans-serif;font-size:13px;font-weight:400;letter-spacing:0px;line-height:200%;text-align:left;">
												<p style="margin: 0;"><?php echo $ticket['WooCommerceEventsTicketID']; ?></p>
											</div>
										</td>
									</tr>
									
									<!-- TICKETINHABER -->
									<tr>
										<td style="text-align:center;">
											<h3 style="margin: 0; color: #909090; direction: ltr; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 13px; font-weight: 700; letter-spacing: normal; line-height: 200%; text-align: left; margin-top: 0; margin-bottom: 0;"><span class="tinyMce-placeholder">Ticketinhaber</span></h3>
										</td>
										<td>
											<div style="color:#0a0a0e;direction:ltr;font-family:Helvetica Neue, Helvetica, Arial, sans-serif;font-size:13px;font-weight:400;letter-spacing:0px;line-height:200%;text-align:left;">
												<p style="margin: 0;"><?php echo $ticket['WooCommerceEventsAttendeeName']; ?> <?php echo $ticket['WooCommerceEventsAttendeeLastName']; ?></p>
											</div>
										</td>
									</tr>
									
									<!-- PREIS -->
									<tr>
										<td style="text-align:center;">
											<h3 style="margin: 0; color: #909090; direction: ltr; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 13px; font-weight: 700; letter-spacing: normal; line-height: 200%; text-align: left; margin-top: 0; margin-bottom: 0;"><span class="tinyMce-placeholder">Preis</span></h3>
										</td>
										<td style="text-align:center;">
											<div style="color:#0a0a0e;direction:ltr;font-family:Helvetica Neue, Helvetica, Arial, sans-serif;font-size:13px;font-weight:400;letter-spacing:0px;line-height:200%;text-align:left;">
												<p style="margin: 0;"><?php echo $ticket['WooCommerceEventsPrice']; ?></p>
											</div>
										</td>
									</tr>
									
									<!-- TICKETVARIATION -->
									<?php if ( ! empty( $ticket['WooCommerceEventsVariations'] ) ) : ?>
										<?php foreach ( $ticket['WooCommerceEventsVariations'] as $variationName => $variationValue ) : ?>
											<?php if ( $variationName != 'Ticket Type' ) : ?>
											<tr>
												<td style="text-align:center;">
													<h3 style="margin: 0; color: #909090; direction: ltr; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 13px; font-weight: 700; letter-spacing: normal; line-height: 200%; text-align: left; margin-top: 0; margin-bottom: 0;"><span class="tinyMce-placeholder"><?php echo $variationName; ?></span></h3>
												</td>
												<td style="text-align:center;">
													<div style="color:#0a0a0e;direction:ltr;font-family:Helvetica Neue, Helvetica, Arial, sans-serif;font-size:13px;font-weight:400;letter-spacing:0px;line-height:200%;text-align:left;">
													<p style="margin: 0;"><?php echo $variationValue; ?></p>
													</div>
												</td>
											</tr>
											<?php endif; ?>
										<?php endforeach; ?>        
									<?php endif; ?>		
									
									<!-- TICKETTYP -->
									<?php if ( ! empty( $ticket['WooCommerceEventsTicketType'] ) ) : ?>
											<tr>
												<td style="text-align:center;">
													<h3 style="margin: 0; color: #909090; direction: ltr; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 13px; font-weight: 700; letter-spacing: normal; line-height: 200%; text-align: left; margin-top: 0; margin-bottom: 0;"><span class="tinyMce-placeholder"><?php _e( 'Ticket Type:', 'woocommerce-events' ); ?></span></h3>
												</td>
												<td style="text-align:center;">
													<div style="color:#0a0a0e;direction:ltr;font-family:Helvetica Neue, Helvetica, Arial, sans-serif;font-size:13px;font-weight:400;letter-spacing:0px;line-height:200%;text-align:left;">
													<p style="margin: 0;"><?php echo $ticket['WooCommerceEventsTicketType']; ?></p>
													</div>
												</td>
											</tr>     
									<?php endif; ?>										
									
									<!-- CUSTOM ATTENDEE FIELDS -->
									<?php if ( ! empty( $ticket['fooevents_custom_attendee_fields_options_array'] ) && ( isset( $ticket['WooCommerceEventsIncludeCustomAttendeeDetails'] ) && $ticket['WooCommerceEventsIncludeCustomAttendeeDetails'] != 'off' ) ) : ?>
										<?php foreach ( $ticket['fooevents_custom_attendee_fields_options_array'] as $custom_attendee_fields ) : ?>
											<tr>
												<td style="text-align:center;">
													<h3 style="margin: 0; color: #909090; direction: ltr; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 13px; font-weight: 700; letter-spacing: normal; line-height: 200%; text-align: left; margin-top: 0; margin-bottom: 0;"><span class="tinyMce-placeholder"><?php echo $custom_attendee_fields['label']; ?></span></h3>
												</td>
												<td style="text-align:center;">
													<div style="color:#0a0a0e;direction:ltr;font-family:Helvetica Neue, Helvetica, Arial, sans-serif;font-size:13px;font-weight:400;letter-spacing:0px;line-height:200%;text-align:left;">
													<p style="margin: 0;"><?php echo $custom_attendee_fields['value']; ?></p>
													</div>
												</td>
											</tr>
										<?php endforeach; ?>
									<?php endif; ?> 

									<!-- MULTI-DAY DETAILS -->
									
									<?php if ( $ticket['WooCommerceEventsTicketDisplayMultiDay'] == 'on' ) : ?>
										<?php $x = 1; ?>
										<?php $y = 0; ?>    
										<?php foreach ( $ticket['WooCommerceEventsSelectDate'] as $date ) : ?>
											<tr>
												<td valign="top" width="160px" style="font-family:<?php echo $font_family; ?>">
													<?php printf( __( '%1$s %2$d: ', 'woocommerce-events' ), $ticket['dayTerm'], $x ); ?>
												</td>
												<td valign="top" style="color:#222; font-family:<?php echo $font_family; ?>">
													<?php echo esc_attr( $date ); ?><br /> 
													<?php if ( ! empty( $ticket['WooCommerceEventsSelectDateHour'][ $y ] ) && ! empty( $ticket['WooCommerceEventsSelectDateMinutes'][ $y ] ) ) : ?>
														<?php echo $ticket['WooCommerceEventsSelectDateHour'][ $y ] . ':' . $ticket['WooCommerceEventsSelectDateMinutes'][ $y ]; ?><?php echo( isset( $ticket['WooCommerceEventsSelectDatePeriod'][ $y ] ) ) ? ' ' . $ticket['WooCommerceEventsSelectDatePeriod'][ $y ] : ''; ?>
													<?php endif; ?>
													<?php if ( ! empty( $ticket['WooCommerceEventsSelectDateHourEnd'][ $y ] ) && ! empty( $ticket['WooCommerceEventsSelectDateMinutesEnd'][ $y ] ) ) : ?>
														<?php echo ' - ' . $ticket['WooCommerceEventsSelectDateHourEnd'][ $y ] . ':' . $ticket['WooCommerceEventsSelectDateMinutesEnd'][ $y ]; ?><?php echo( isset( $ticket['WooCommerceEventsSelectDatePeriodEnd'][ $y ] ) ) ? ' ' . $ticket['WooCommerceEventsSelectDatePeriodEnd'][ $y ] : ''; ?>
													<?php endif; ?>
												</td>
											</tr>												
											<?php $x++; ?>
											<?php $y++; ?>
										<?php endforeach; ?>
									<?php endif; ?>
									
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>