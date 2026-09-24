<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://www.lovrohrust.com.hr
 * @since      1.0.0
 *
 * @package    Ntg_Cookie_Consent
 * @subpackage Ntg_Cookie_Consent/public/partials
 */
// <!-- This file should primarily consist of HTML with a little bit of PHP. -->

/**
 * Function to resolve language shortcodes from text loaded from option
 * @return [string]
 */
function extract_language_text($option) {
	$text = get_option($option);
	/**
	 * WP <5.0 compatibility
	 */
	if (function_exists('determine_locale'))
		$lang = determine_locale();
	else $lang = get_locale();
	return preg_match("/\[$lang\](.*)\[\/$lang\]/U", $text, $matches) ? $matches[1] : $text;
}

if ( !is_admin() ) : ?>
	<!--googleoff: index-->
		<div id="cookies-background" style="display:none;">
			<div id="cookies-box">
				<div class="infoText"><?php echo balanceTags( extract_language_text('ntgccTexttoshow') ); ?></div>
				<div class="btnsCookie">
					<button class="btnCookie" onclick="acceptFnHead();acceptFnFooter()"> <?php echo extract_language_text( 'ntgccBtnAcceptText' ); ?></button>
					<?php
					if (get_option( 'ntgccBtnDeclineText' )) :
					?>
					<button class="btnCookie decline" onclick="acceptCookies(false);"> <?php echo extract_language_text( 'ntgccBtnDeclineText' ); ?></button>
					<?php
					endif;
					if (get_option( 'ntgccLearnmoreId' )) :
					?>
					<a id="btnLearn-more" href="<?php echo get_permalink( extract_language_text('ntgccLearnmoreId') ); ?>"><?php echo extract_language_text( 'ntgccBtnLearnMore' ); ?></a>
					<?php
					endif;
					?>
				</div>
				 <div class="wrap-cookies-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-cookie cookies-icon" viewBox="0 0 16 16" >
				<path d="M6 7.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m4.5.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
				<path d="M8 0a7.96 7.96 0 0 0-4.075 1.114q-.245.102-.437.28A8 8 0 1 0 8 0m3.25 14.201a1.5 1.5 0 0 0-2.13.71A7 7 0 0 1 8 15a6.97 6.97 0 0 1-3.845-1.15 1.5 1.5 0 1 0-2.005-2.005A6.97 6.97 0 0 1 1 8c0-1.953.8-3.719 2.09-4.989a1.5 1.5 0 1 0 2.469-1.574A7 7 0 0 1 8 1c1.42 0 2.742.423 3.845 1.15a1.5 1.5 0 1 0 2.005 2.005A6.97 6.97 0 0 1 15 8c0 .596-.074 1.174-.214 1.727a1.5 1.5 0 1 0-1.025 2.25 7 7 0 0 1-2.51 2.224Z"/>
				</svg>
				</div>
			</div>
		</div>
	<!--googleon: index-->
<?php endif;
	echo get_option( 'ntgccFooterCode' ); ?>
	<script>function acceptFnFooter(){<?php echo get_option( 'ntgccExecuteFooterCode' ); ?>};
		if (ntgCookieAccepted===1) acceptFnFooter();</script>