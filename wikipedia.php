<?php

use Pronto\ShortcodeContainer;

ShortcodeContainer::add('wikipedia', function($attributes) {
	$wikipedia = array_shift($attributes);
	$defaults = array(
		'language' => 'en',
		'text' => $wikipedia
	);
	$options = array_merge($defaults, $attributes);
	$url = 'http://'.$options['language'].'.wikipedia.org/w/index.php?search='.urlencode($wikipedia);
	return '<a href="'.$url.'" class="wikipedia">'.html($options['text']).'</a>';
});

?>
