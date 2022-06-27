<!DOCTYPE html>
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="de-DE">

<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
	<style>
		* {
			box-sizing: border-box;
		}

		h3 {
		  text-transform:uppercase;
		  }

		body {
			margin: 0;
			padding: 0;
		}

		a[x-apple-data-detectors] {
			color: inherit !important;
			text-decoration: inherit !important;
		}

		#MessageViewBody a {
			color: inherit;
			text-decoration: none;
		}

		p {
			line-height: inherit
		}

		.desktop_hide,
		.desktop_hide table {
			mso-hide: all;
			display: none;
			max-height: 0px;
			overflow: hidden;
		}

		@media (max-width:645px) {
			.desktop_hide table.icons-inner {
				display: inline-block !important;
			}

			.icons-inner {
				text-align: center;
			}

			.icons-inner td {
				margin: 0 auto;
			}

			.row-content {
				width: 100% !important;
			}

			.image_block img.big {
				width: auto !important;
			}

			.column .border,
			.mobile_hide {
				display: none;
			}
			
			table {
				table-layout: fixed !important;
			}

			.stack .column {
				width: 100%;
				display: block;
			}

			.mobile_hide {
				min-height: 0;
				max-height: 0;
				max-width: 0;
				overflow: hidden;
				font-size: 0px;
			}

			.desktop_hide,
			.desktop_hide table {
				display: table !important;
				max-height: none !important;
			}
		}
	</style>
</head>

<body style="background-color: #FFFFFF; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;"><div class="preheader" style="display:none;font-size:1px;color:#333333;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;">Dein Ticket für das Event: <?php echo $ticket['name'] ?></div>
	<table class="nl-container" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF;">
		<tbody>
			<tr>
				<td>
					<!-- TicketLogoBild -->
					<?php if (!empty($ticket['WooCommerceEventsTicketLogo'])): ?>
					<table class="row row-1" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
											<tbody>
												<tr>
													<td>
														<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f7f7f7; color: #000000; width: 625px;" width="625">
															<tbody>
																<tr>
																	<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-left: 20px; padding-right: 20px; padding-top: 15px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
																		<table class="image_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
																			<tr>
																				<td style="width:100%;padding-right:0px;padding-left:0px;">
																					<div align="center" style="line-height:10px"><img class="big" src="<?php echo $ticket['WooCommerceEventsTicketLogo']; ?>" style="display: block; height: auto; border: 0; width: 585px; max-width: 100%;" width="585"></div>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
											</tbody>
										</table><?php
endif; ?>
					<table class="row row-2" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f7f7f7; color: #000000; width: 625px;" width="625">
										<tbody>
											
											<!-- TICKET Logo -->
											<tr>
												<td class="column column-1" width="33.333333333333336%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-left: 20px; padding-right: 20px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
													<table class="image_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td style="width:100%;padding-right:0px;padding-left:0px;padding-top:10px;padding-bottom:15px;">
																<div align="center" style="line-height:10px"><img src="<?php echo get_the_post_thumbnail_url($ticket['WooCommerceEventsProductID']); ?>" style="display: block; height: auto; border: 0; width: 168px; max-width: 100%;" width="168"></div>
															</td>
														</tr>
													</table>
												</td>
												<td class="column column-2" width="66.66666666666667%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-right: 25px; padding-left: 25px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
													<!-- EVENT Name -->
													<table class="heading_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td style="padding-bottom:10px;padding-top:15px;text-align:center;width:100%;">
																<h2 style="margin: 0; color: #393d47; direction: ltr; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 28px; font-weight: 700; letter-spacing: normal; line-height: 120%; text-align: left; margin-top: 0; margin-bottom: 0;"><span class="tinyMce-placeholder"><?php echo $ticket['name'] ?><?php echo $ticket['WooCommerceEventsEndDateTimestamp'] ?></span></h2>
															</td>
														</tr>
													</table>
													<!-- Ticketdatum mit Kalenderlink -->
													<table class="heading_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td style="text-align:center;width:100%;">
																<h3 style="margin: 0; color: #393d47; direction: ltr; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 15px; font-weight: 700; letter-spacing: normal; line-height: 120%; text-align: left; margin-top: 0; margin-bottom: 0;"><a href="<?php echo site_url(); ?>/wp-admin/admin-ajax.php?action=fooevents_ics&event=<?php echo $ticket['WooCommerceEventsProductID']; ?>&ticket=<?php echo $ticket['ID']; ?><?php echo !empty($ticket['WooCommerceEventsAttendeeEmail']) ? '&email=' . urlencode($ticket['WooCommerceEventsAttendeeEmail']) : ''; ?>&ticket=<?php echo $ticket['ID']; ?>" style="text-decoration: underline; color: #393d47;">
																<?php
																if (!empty($ticket['WooCommerceEventsSelectDate']) && !empty($ticket['WooCommerceEventsSelectDate'][0]) && $ticket['WooCommerceEventsType'] == 'select'):
																	$x = 0;
																	foreach ($ticket['WooCommerceEventsSelectDate'] as $selectDate):
																		if ($selectDate != ''):
																			if ($x > 0)
																			{
																				echo ', ';
																			}
																			echo $selectDate;
																		endif;
																		$x++;
																	endforeach;
																
																else:

																if (!empty($ticket['WooCommerceEventsDate'])):
																	echo $ticket['WooCommerceEventsDate'];
																	if (!empty($ticket['WooCommerceEventsEndDate'])):
																		echo ' - ' . $ticket['WooCommerceEventsEndDate'];
																	endif;
																endif;
															
															endif;?>
																<br />
														<?php if ($ticket['WooCommerceEventsType'] !== 'select' || $ticket['WooCommerceEventsSelectGlobalTime'] == 'on'): ?>
															<?php echo $ticket['WooCommerceEventsHour']; ?>:<?php echo $ticket['WooCommerceEventsMinutes']; ?><?php echo (!empty($ticket['WooCommerceEventsPeriod'])) ? $ticket['WooCommerceEventsPeriod'] : ''; ?>
															<?php echo (!empty($ticket['WooCommerceEventsTimeZone'])) ? ' ' . $ticket['WooCommerceEventsTimeZone'] : ''; ?>
														<?php if ($ticket['WooCommerceEventsHourEnd'] != '00'): ?> 
															- <?php echo $ticket['WooCommerceEventsHourEnd']; ?>:<?php echo $ticket['WooCommerceEventsMinutesEnd']; ?><?php echo (!empty($ticket['WooCommerceEventsEndPeriod'])) ? $ticket['WooCommerceEventsEndPeriod'] : ''; ?><?php echo (!empty($ticket['WooCommerceEventsTimeZone'])) ? ' ' . $ticket['WooCommerceEventsTimeZone'] : ''; ?><?php
															endif; ?><?php
														endif; ?>
																</a></h3>
															</td>
														</tr>
													</table>
													<!-- Veranstaltungsort und Wegbeschreibung -->
													<table class="heading_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td style="padding-bottom:10px;padding-top:25px;text-align:center;width:100%;">
																<h3 style="margin: 0; color: #909090; direction: ltr; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 13px; font-weight: 700; letter-spacing: normal; line-height: 120%; text-align: left; margin-top: 0; margin-bottom: 0;"><span class="tinyMce-placeholder">Veranstaltungsort</span></h3>
															</td>
														</tr>
													</table>
													<table class="paragraph_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td style="padding-bottom:5px;">
																<div style="color:#0a0a0e;direction:ltr;font-family:Helvetica Neue, Helvetica, Arial, sans-serif;font-size:13px;font-weight:400;letter-spacing:0px;line-height:120%;text-align:left;">
																	<p style="margin: 0; margin-bottom: 16px;"><?php echo $ticket['WooCommerceEventsLocation']; ?><br />
																	<?php if (!empty($ticket['WooCommerceEventsDirections'])): ?>
																		<?php echo $ticket['WooCommerceEventsDirections']; ?></p>
																	<?php
endif; ?>
																</div>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					
					<!-- Sonstiger Tickettext -->
					<?php if (!empty($ticket['WooCommerceEventsTicketText'])): ?>
					<table class="row row-1" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f7f7f7; color: #000000; width: 625px;" width="625">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-left: 25px; padding-right: 25px; padding-top: 10px; padding-bottom: 15px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
													<table class="heading_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td style="padding-bottom:10px;text-align:center;width:100%;">
																<h3 style="margin: 0; color: #909090; direction: ltr; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 13px; font-weight: 700; letter-spacing: normal; line-height: 120%; text-align: left; margin-top: 0; margin-bottom: 0;"><span class="tinyMce-placeholder">Weitere Beschreibung</span></h3>
															</td>
														</tr>
													</table>
													<table class="paragraph_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td>
																<div style="color:#0a0a0e;direction:ltr;font-family:Helvetica Neue, Helvetica, Arial, sans-serif;font-size:13px;font-weight:400;letter-spacing:0px;line-height:120%;text-align:left;">
																	<p style="margin: 0; margin-bottom: 16px;"><?php echo $ticket['WooCommerceEventsTicketText']; ?>
																</div>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<?php
endif; ?>
