<?php

    if (empty($ticket['WooCommerceEventsTicketButtonColor']) || $ticket['WooCommerceEventsTicketButtonColor'] == 1 || $ticket['name'] == __('Preview Event', 'woocommerce-events')) {
        $ticket['WooCommerceEventsTicketButtonColor'] = "#55AF71";
    }

    if (empty($ticket['WooCommerceEventsTicketBackgroundColor']) || $ticket['WooCommerceEventsTicketBackgroundColor'] == 1 || $ticket['name'] == __('Preview Event', 'woocommerce-events')) {
        $ticket['WooCommerceEventsTicketBackgroundColor'] = "#55AF71";
    }

    if (empty($ticket['WooCommerceEventsTicketTextColor']) || $ticket['WooCommerceEventsTicketTextColor'] == 1) {
        $ticket['WooCommerceEventsTicketTextColor'] = "#ffffff";
    }
    
?>

<?php if (!empty($ticket['ticketNumber']) && $ticket['ticketNumber'] % 4 == 0) : ?>
    <div style="page-break-before: always;"></div>
<?php endif; ?>

<?php if ((!empty($ticket['ticketNumber']) && ($ticket['ticketNumber'] % 4 == 0 || $ticket['ticketNumber'] == 1)) || $ticket['name'] == __('Preview Event', 'woocommerce-events')) : ?>
    <div style="font-family:<?php echo $font_family; ?>;font-size: 14px;line-height:18px;padding:20px 50px;font-size: 14px;line-height:18px;">
    <h1 style="font-weight: normal;padding:0;margin:0 0 10px;font-size: 20px;line-height: 24px;"><?php echo $ticket['name'];  ?></h1>
    <?php if(!empty($ticket['WooCommerceEventsTicketText']) || (!empty($ticket['WooCommerceEventsTicketDisplayZoom']) && $ticket['WooCommerceEventsTicketDisplayZoom'] != 'off' && !empty($ticket['WooCommerceEventsZoomText']))) : ?>
        <p style="font-size:12px;color:#777777;word-wrap:break-word">
            <?php if(!empty($ticket['WooCommerceEventsTicketText'])) : ?>
                <?php echo nl2br($ticket['WooCommerceEventsTicketText']); ?>
            <?php endif; ?>
            <?php if((!empty($ticket['WooCommerceEventsTicketDisplayZoom']) && $ticket['WooCommerceEventsTicketDisplayZoom'] != 'off' && !empty($ticket['WooCommerceEventsZoomText']))) : ?>
                <?php echo nl2br($ticket['WooCommerceEventsZoomText']); ?>
            <?php endif; ?>
        </p>
    <?php endif; ?> 
    <br />
    
    <?php if($ticket['WooCommerceEventsTicketDisplayDateTime'] != 'off') :?>

        <?php if(isset($ticket['WooCommerceEventsBookingSlot']) || isset($ticket['WooCommerceEventsBookingDate'])) : ?>

            <strong>
                <?php echo $ticket['WooCommerceEventsBookingDate']; ?>
            </strong>
            <br />
            <strong>
                <?php echo $ticket['WooCommerceEventsBookingSlot']; ?>
            </strong>

        <?php else : ?> 

            <strong>
                <?php echo $ticket['WooCommerceEventsDate']; if(!empty($ticket['WooCommerceEventsEndDate'])) : echo " - " . $ticket['WooCommerceEventsEndDate']; endif; ?>
            </strong>
            <strong>
                <?php echo $ticket['WooCommerceEventsHour']; ?>:<?php echo $ticket['WooCommerceEventsMinutes']; ?><?php echo (!empty($ticket['WooCommerceEventsPeriod']))? $ticket['WooCommerceEventsPeriod'] : '' ?>
                <?php echo (!empty($ticket['WooCommerceEventsTimeZone']))? " " . $ticket['WooCommerceEventsTimeZone'] : '' ?>
                <?php if($ticket['WooCommerceEventsHourEnd'] != '00') : ?>
                - <?php echo $ticket['WooCommerceEventsHourEnd']; ?>:<?php echo $ticket['WooCommerceEventsMinutesEnd']; ?><?php echo (!empty($ticket['WooCommerceEventsEndPeriod']))? $ticket['WooCommerceEventsEndPeriod'] : '' ?>
                <?php echo (!empty($ticket['WooCommerceEventsTimeZone']))? " " . $ticket['WooCommerceEventsTimeZone'] : '' ?>
                <?php endif; ?>
            </strong> 

        <?php endif; ?> 

    <?php endif; ?>  
    
              
    <?php if(!empty($ticket['WooCommerceEventsLocation'])) :?>
        <strong><?php _e('Location:','woocommerce-events') ?></strong> <?php echo $ticket['WooCommerceEventsLocation'] ?><br />
    <?php endif; ?>
    <?php if(!empty($ticket['WooCommerceEventsDirections'])) :?>
        <strong><?php _e('Directions:', 'woocommerce-events'); ?></strong> <?php echo $ticket['WooCommerceEventsDirections']; ?>
    <?php endif; ?>

    </div>
<?php endif; ?>

<br /><br />
<div style="border-top:1px dashed #dddddd;width:100%">&nbsp;</div>
 <!--[if mso]>
<table border="0" width="600" align="center" style="max-width: 600px;margin:0 auto; border-collapse: collapse;"><tr><td width="300">
<![endif]-->
<div style="page-break-inside: avoid;float:left;text-align:center; width:50%;max-width:300px;font-family:<?php echo $font_family; ?>;font-size: 14px;line-height:18px; margin-top:10px;">
    <?php if(!empty($ticket['WooCommerceEventsTicketLogo'])) :?>
        <img src="<?php echo $ticket['WooCommerceEventsTicketLogo']; ?>" alt="" width="150px"/><br /><br /><br />
    <?php endif; ?>
    <?php if($ticket['WooCommerceEventsTicketDisplayBarcode'] != 'off') :?>
        <img src="<?php echo $barcodeURL; ?>" alt="Barcode: <?php echo $ticket['WooCommerceEventsTicketID']; ?>" width="150px" />
        <br /><br />
    <?php endif; ?>  
</div>
<!--[if mso]>
</td><td width="300">
<![endif]-->
<div style="page-break-inside: avoid;width:50%; vertical-align:middle;float:left;border-left: solid 2px <?php echo $ticket['WooCommerceEventsTicketBackgroundColor']; ?>;padding-left:20px;max-width:278px;font-family:<?php echo $font_family; ?>;font-size: 14px;line-height:18px;">

     <!-- BOOKING DETAILS -->

     <?php if((isset($ticket['WooCommerceEventsBookingSlot']) && !empty($ticket['WooCommerceEventsBookingSlot'])) || (isset($ticket['WooCommerceEventsBookingDate']) && !empty($ticket['WooCommerceEventsBookingDate']))) : ?>
                                   
        <?php if($ticket['WooCommerceEventsTicketDisplayBookings'] != 'off') :?>

            <strong><?php echo $ticket['WooCommerceEventsBookingsSlotTerm']; ?>:</strong> <?php echo $ticket['WooCommerceEventsBookingSlot']; ?><br />

            <strong><?php echo $ticket['WooCommerceEventsBookingsDateTerm']; ?>:</strong> <?php echo $ticket['WooCommerceEventsBookingDate']; ?><br />

        <?php endif; ?> 

    <?php endif; ?>

    <strong><?php _e('Ticket Number:','woocommerce-events') ?></strong> <?php echo $ticket['WooCommerceEventsTicketID']; ?><br />
    
    <?php if($ticket['WooCommerceEventsTicketPurchaserDetails'] != 'off') :?>
        <strong><?php _e('Ticket Holder:','woocommerce-events') ?></strong> <?php echo $ticket['WooCommerceEventsAttendeeName']; ?> <?php echo $ticket['WooCommerceEventsAttendeeLastName']; ?><br />
    
        <?php if(!empty($ticket['WooCommerceEventsAttendeeTelephone'])) :?>
            <strong><?php _e('Telephone Number:','woocommerce-events') ?></strong> <?php echo $ticket['WooCommerceEventsAttendeeTelephone']; ?><br />
        <?php endif; ?>
    
        <?php if(!empty($ticket['WooCommerceEventsAttendeeCompany'])) :?>
            <strong><?php _e('Company:','woocommerce-events') ?></strong> <?php echo $ticket['WooCommerceEventsAttendeeCompany']; ?><br />
        <?php endif; ?>
    
        <?php if(!empty($ticket['WooCommerceEventsAttendeeDesignation'])) :?>
            <strong><?php _e('Designation:','woocommerce-events') ?></strong> <?php echo $ticket['WooCommerceEventsAttendeeDesignation']; ?><br />
        <?php endif; ?>
    <?php endif; ?>

    <!-- SEATING --> 

    <?php if(!empty($ticket['fooevents_seating_options_array'])) :?>
        <?php echo '<strong>'.$ticket['fooevents_seating_options_array']['row_name_label'].':</strong> '.$ticket['fooevents_seating_options_array']['row_name']; ?><br />
        <?php echo '<strong>'.$ticket['fooevents_seating_options_array']['seat_number_label'].':</strong> '.$ticket['fooevents_seating_options_array']['seat_number']; ?><br />
    <?php endif; ?>
    
    <?php if(!empty($ticket['WooCommerceEventsVariations'])) :?>
        <?php foreach($ticket['WooCommerceEventsVariations'] as $variationName => $variationValue) :?>
            <?php echo '<strong>'.$variationName.':</strong> '.$variationValue; ?><br />
        <?php endforeach; ?>
    <?php endif; ?>
    
    <?php if($ticket['WooCommerceEventsTicketDisplayPrice'] != 'off') :?>
    <strong><?php _e('Price:','woocommerce-events') ?></strong> <?php echo $ticket['WooCommerceEventsPrice']; ?><br />
    <?php endif; ?>  
    
    <?php if(!empty($ticket['fooevents_custom_attendee_fields_options_array']) && (isset($ticket['WooCommerceEventsIncludeCustomAttendeeDetails']) && $ticket['WooCommerceEventsIncludeCustomAttendeeDetails'] != 'off')) :?>
        <?php foreach($ticket['fooevents_custom_attendee_fields_options_array'] as $custom_attendee_fields) :?>
            <?php echo '<strong>'.$custom_attendee_fields['label'].':</strong> '.$custom_attendee_fields['value']; ?><br />
        <?php endforeach; ?>
    <?php endif; ?> 
    <br />

</div>
<div style="clear:both"></div>
<!--[if mso]>
</td></tr></table>
<table border="0" align="center" width="600" style="border-collapse: collapse;"><tr><td cellpadding="50" >&nbsp;</td></tr></table>
<![endif]-->

<?php if (!empty($ticket['ticketNumber']) && $ticket['ticketNumber'] % 3 == 0) : ?>  
    <br />
    <div style="border-top:1px dashed #dddddd;width:100%">&nbsp;</div>
        <?php if(!empty($ticket['FooEventsTicketFooterText'])) :?>
        <!--[if mso]>
            <table border="0" align="center" width="600" style="border-collapse: collapse;"><tr><td cellpadding="50" >&nbsp;</td></tr></table>
        <![endif]-->
            <p style="text-align:center;font-size:12px;color:#777;margin:0;padding:20px 30px;line-height:15px;"><?php echo $ticket['FooEventsTicketFooterText'];?></p>
        <?php endif; ?>
    </div>
<?php endif; ?>