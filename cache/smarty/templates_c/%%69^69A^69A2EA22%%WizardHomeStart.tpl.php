<?php /* Smarty version 2.6.29, created on 2017-01-12 12:30:36
         compiled from modules/Campaigns/tpls/WizardHomeStart.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getimagepath', 'modules/Campaigns/tpls/WizardHomeStart.tpl', 83, false),)), $this); ?>

<div id='wiz_stage'>
<form  id="wizform" name="wizform" method="POST" action="index.php">
	<input type="hidden" name="module" value="Campaigns">
	<input type="hidden" id='action' name="action" value='WizardNewsletter'>
	<input type="hidden" id="return_module" name="return_module" value="Campaigns">
	<input type="hidden" id="return_action" name="return_action" value="WizardHome">


	
<table class='other view' cellspacing="1">
<tr>


	<td  rowspan='2' width='100%' class='edit view'>
		<div id="wiz_message"></div>


		<div id=wizard>


			<div id='step1' >
				<table border="0" cellpadding="0" cellspacing="0" width="100%">

					<tr>
						<td colspan='2' >
							<fieldset>
								<legend><?php echo $this->_tpl_vars['MOD']['LBL_HOME_START_MESSAGE']; ?>
</legend>
								<p style="display: none;">
									<input type="radio"  id="wizardtype_nl" name="wizardtype" value='1'checked ><label for='wizardtype_nl'><?php echo $this->_tpl_vars['MOD']['LBL_NEWSLETTER']; ?>
</label><br>
									<input type="radio"  id="wizardtype_em" name="wizardtype" value='2'><label for='wizardtype_em'><?php echo $this->_tpl_vars['MOD']['LBL_EMAIL']; ?>
</label><br>
									<input type="radio"  id="wizardtype_ot" name='wizardtype' value='3'><label for='wizardtype_ot'><?php echo $this->_tpl_vars['MOD']['LBL_OTHER_TYPE_CAMPAIGN']; ?>
</label><br>
								</p>



								<ul class="icon-btn-lst">
									<li class="icon-btn">
										<a href="javascript:" onclick="$('#wizardtype_nl').click(); $(this).closest('form').submit();" title="<?php echo $this->_tpl_vars['MOD']['LBL_NEWSLETTER_TITLE']; ?>
">
											<img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "cmpwzrd/cmpwzrd-newsletter.png"), $this);?>
" />
											<br />
											<span><?php echo $this->_tpl_vars['MOD']['LBL_NEWSLETTER']; ?>
</span>
										</a>
									</li>

									<li class="icon-btn">
										<a href="javascript:" onclick="$('#wizardtype_em').click(); $(this).closest('form').submit();" title="<?php echo $this->_tpl_vars['MOD']['LBL_EMAIL_TITLE']; ?>
">
											<img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "cmpwzrd/cmpwzrd-email.png"), $this);?>
" />
											<br />
											<span><?php echo $this->_tpl_vars['MOD']['LBL_EMAIL']; ?>
</span>
										</a>
									</li>

									<li class="icon-btn">
										<a href="javascript:" onclick="$('#wizardtype_ot').click(); $(this).closest('form').submit();" title="<?php echo $this->_tpl_vars['MOD']['LBL_NON_EMAIL_TITLE']; ?>
">
											<img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "cmpwzrd/cmpwzrd-nonemail.png"), $this);?>
" />
											<br />
											<span><?php echo $this->_tpl_vars['MOD']['LBL_OTHER_TYPE_CAMPAIGN']; ?>
</span>
										</a>
									</li>
								</ul>

							</fieldset>
						</td>
					</tr>
				</table>
			</div>

		</div>


	
	</td>
</tr>
</table>



</form>



</div>


