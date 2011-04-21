Cookbook /
HTML5Video
Summary: Show HTML5 Video
Version: 1.1
Prerequisites: none
Status: working
Maintainer: GNUZoo
Users: (View / Edit)
Categories: Video Markup HTML5
Downloads: HTML5Video.php五伍务
Questions answered by this recipe

    * How to show HTML5 Video?
        * How to show OGG Video?
	    * How to show MP4 Video?
	        * How to show WebM Video? 

		This section is optional; use it to indicate the types of questions (if any) this recipe is intended to answer.
		Description

		Enter your recipe's description here. This recipe makes it easy to add HTML5 Video.

		It will first try to play ogg, then mp4 then webm. If the browser does not support HTML5 video it will display "Your browser does not HTML5 video.".

		Actual filenames should end with lowercase ".ogv" for ogg, ".mp4" for mp4, and ".webm" for webm.
		Example:

		(:html5video filename=gilligans2v1 poster=gilligan width=480 height=270:)
		Parameters

		    * filename - first part of file - so if the file was gilligans2v1.ogg it would be "gilligans2v1"
		        * poster - optional - an image to be displayed before the video begins
			    * width - optional - custom width
			        * height - optional - custom height 

				Installing

				Copy HTML5Video.php五伍务 to your cookbook directory

				In your config.php enter:
				include_once("cookbook/HTML5Video.php");

				or in your farmconfig.php enter:
				include_once("$FarmD/cookbook/HTML5Video.php");

				This program sets the default directory to contain videos in "\uploads\".

				To change the default directory set a variable in your config.php file like this:

				   $HTML5VideoDir = 'http://yourdomain.org/hot/videos/';

				   Notes

				   Release notes

				   This program is free software. You can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation http://www.fsf.org either version 2 of the License, or (at your option) any later version.

				   Copyright 2007 by GNUZoo email: guru@gnuzoo.org

				   Please donate to the author at url: http://gnuzoo.org/GNUZooPayPal

				       * Version: 1.1 - Change some text, remove extraneous line of code.
				           * Version: 1.0 - Initial release 

					   If the recipe has multiple releases, then release notes can be placed here. Note that it's often easier for people to work with "release dates" instead of "version numbers".

					   See also

					   HTML5Audio

					   Contributors

					       * GNUZoo 

					       Comments

					       Where does the poster need to be and in what format? Nova Ok, i see it in the code that it has to be in the same folder and it has to be .jpg, but for me it doesn't really work. Nova Ah, sorry, it's good to know, that the poster appears only if none of the videoformats get loaded. Is that true? Nova

					       There is - i think - an error in the script in such way, that it provides a (broken) link to some external site. If you look at the code, the poster is specified as
					       http://gnuzoo.org/guitarstuff/uploads/'.$poster.'.jpg

					       I don't think this is right. IMHO it should have at least been
					       $HTML5VideoDir.$poster.'.jpg

					       Otherwise, this seems a good recipe. Nova 
