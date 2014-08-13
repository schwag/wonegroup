<div id="audit-request" class="modal fade" aria-labelledby="modal-label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title">Audit Request</h3>
			</div><!-- end modal header -->
			<div class="modal-body">
				<h2>New Accounts</h2>
				<p>If you wish to open a new Adwords account the audit will contain recommended campaign settings and structure, keyword research, budget and bid estimates,
					click estimates, targeting specifications, and landing page requirements.</p>
				<h2>Existing Accounts</h2>
				<p>If you wish to have us audit your existing account to increase performance the audit will generally contain a review 
					of campaign structure and settings, keyword review, ad copy optimizations, landing page recommendations, 
					bid optimization, targeting review, and other optimizations we find that are custom to your account.</p>
				<p><strong>Please submit the form below and one of our adwords analysts will contact you shortly</strong></p>
				
				<form id="contactForm" action="php/thankyou.php" method="post" role="form">
					<?php include "php/contact-form.php";?> 
                    
                    <input type="hidden" name="form_submitted" value="Audit Request Form">
                </form>
			</div><!-- end modal body -->
		</div><!-- end modal content -->
	</div><!-- end modal dialog -->
</div>