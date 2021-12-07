<!-- Copyright section customizer -->
<?php
function intern_footer_copyright($wp_customize) {
	$wp_customize->add_section('intern-footer-copyright-section', array(
		'title' => 'Footer Copyright'
	));


	$wp_customize->add_setting('intern-footer-copyright-frontline', array(
		'default' => 'Copyright © 2021 - All Rights Reserved -'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'intern-footer-copyright-frontline-control', array(
			'label' => 'Copyright Text',
			'section' => 'intern-footer-copyright-section',
			'settings' => 'intern-footer-copyright-frontline'
		)));

	$wp_customize->add_setting('intern-footer-copyright-domain', array(
		'default' => 'Domain Name'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'intern-footer-copyright-domain-control', array(
			'label' => 'Domain',
			'section' => 'intern-footer-copyright-section',
			'settings' => 'intern-footer-copyright-domain'
		)));

}

add_action('customize_register', 'intern_footer_copyright');

?>