<?php
/**
* Changelog
*/
?>
<div class="featured-section changelog">
<?php
WP_Filesystem();
global $wp_filesystem;
$zigcy_cosmetics_changelog     = $wp_filesystem->get_contents( get_stylesheet_directory() . '/readme.txt' );
$changelog_start 			= strpos($zigcy_cosmetics_changelog,'== Changelog ==');
$zigcy_cosmetics_changelog_before = substr($zigcy_cosmetics_changelog,0,($changelog_start));
$zigcy_cosmetics_changelog = str_replace($zigcy_cosmetics_changelog_before,'',$zigcy_cosmetics_changelog);
$zigcy_cosmetics_changelog = str_replace('== Changelog ==','<h2>== Changelog ==</h2>',$zigcy_cosmetics_changelog);
$zigcy_cosmetics_changelog = str_replace('*','<br/>*',$zigcy_cosmetics_changelog);
$zigcy_cosmetics_changelog = str_replace('== 1.0','<br/><br/>== 1.0',$zigcy_cosmetics_changelog);
echo ''.wp_kses_post($zigcy_cosmetics_changelog);
echo '<hr />';
?>
</div>