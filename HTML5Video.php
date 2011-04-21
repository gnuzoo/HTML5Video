<?php if (!defined('PmWiki')) exit();
/*
This file is HTML5Video.php; you
can redistribute it and/or modify it under the
terms of the GNU General Public License as
published by the Free Software Foundation
http://www.fsf.org either version 2 of the 
License, or (at your option) any later version.

Copyright 2010 GNUZoo (guru@gnuzoo.org)

	http://www.pmwiki.org/wiki/Profiles/GNUZoo

Please donate to the author:

	http://gnuzoo.org/GNUZooPayPal/
*/

$RecipeInfo['HTML5Video']['Version'] = '1.1';

switch ($action) {
	case "edit"   :
	case "print"  :
	if (! @$_POST['preview']) break;
	case "browse" :
		Markup('HTML5Video', 'fulltext', '/\\(:(html5video)(\\s.*?)?:\\)/ie', "HTML5Video('$1',PSS('$2'))");
}
function HTML5Video($name, $args) {
	global $HTML5VideoDir;
	$args = ParseArgs($args);

	$filename = $args['filename'];
	$poster   = $args['poster'  ];
	$width    = $args['width'   ];
	$height   = $args['height'  ];

	SDV($HTML5VideoDir, '/uploads/');

	if ($width  == '') $width  = 480;
	if ($height == '') $height = 360;

return Keep('<video width="'.$width.'" height="'.$height.'" controls="controls" 
poster="http://gnuzoo.org/guitarstuff/uploads/'.$poster.'.jpg">
  <source src="'.$HTML5VideoDir.$filename.'.ogv"  type="video/ogg"  />
  <source src="'.$HTML5VideoDir.$filename.'.mp4"  type="video/mp4"  />
  <source src="'.$HTML5VideoDir.$filename.'.webm" type="video/webm" />
  <img    src="'.$HTML5VideoDir.$poster.  '.jpg"  width="'.$width.'" height="'.$height.'" />
  <br />Your browser does not allow HTML5 video.
</video>');
}
