<?php
require_once('localization.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 2.0//EN">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<html>
<head>
	<title>FrogFind!</title>
</head>
<body>

    <form action="/" method="get">  
    <a href="/"><font size=6 color="#008000">Frog</font><font size=6 color="#000000">Find!</font></a> Leap again: <input type="text" size="30" name="q" value="<?php echo isset($query) ? "" : urldecode($query) ?>">
    <input type="submit" value="Ribbbit!">
    </form>
    <hr>
    <br>
    <center>
    <h1><?php tr('about_what_is_t'); ?></h1>
    <small><?php tr('about_faq_short_description'); ?></small>
    </center>
    <br>
    <h3><?php tr('about_who_made_q'); ?></h3>
    <?php tr('about_who_made_a'); ?>
    <h3><?php tr('about_how_does_q'); ?></h3>
    <?php tr('about_how_does_a'); ?>
    <h3><?php tr('about_what_machines_do_you_test_q'); ?></h3>
    <?php tr('about_what_machines_do_you_test_a'); ?>
    <h3><?php tr('about_how_can_i_get_in_touch_q'); ?></h3>
    <?php tr('about_what_machines_do_you_test_q'); ?>
	<center>
	<h1><?php tr('about_what_is_frogfindplus_t'); ?></h1>
    </center>
    <br>
    <h3><?php tr('about_frogfindplus_whats_difference_q'); ?></h3>
    <?php tr('about_frogfindplus_whats_difference_a'); ?>
    <h3><?php tr('about_frogfindplus_who_translated_q'); ?></h3>
    <?php tr('about_frogfindplus_who_translated_a'); ?>
    <h3><?php tr('about_frogfindplus_does_have_source_q'); ?></h3>
    <?php tr('about_frogfindplus_does_have_source_a'); ?>
</body>
</html>
