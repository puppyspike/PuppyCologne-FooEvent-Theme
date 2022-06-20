<?php if (!empty($ticket['ticketNumber']) && $ticket['ticketNumber'] % 3 != 0) : ?>  
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
</body>
