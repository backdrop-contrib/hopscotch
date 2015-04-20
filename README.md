Hopscotch
=======

Description
-----------

This module provides Backdrop integration with [Hopscotch by Linkedin](http://linkedin.github.io/hopscotch/).

Hopscotch is a framework to make it easy for developers to add product tours to 
their pages. Hopscotch accepts a tour JSON object as input and provides an API 
for the developer to control rendering the tour display and managing the tour 
progress.


Backdrop Installation
---------------------

1. Download the current, stable version from https://github.com/backdrop-contrib/hopscotch
2. Download the current of Hopscotch at https://github.com/linkedin/hopscotch.
3. Create a 'hopscotch' folder in ./libraries and copy `hopscotch.min.js` and 
   `hopscotch.min.css` into this folder.
4. Enable the Hopscotch module and Libraries module
5. Enable the Hopscotch UI module to view the demos and edit/add/delete tours 
if needed
6. Check that module is working by viewing the demo pages here: admin/config/user-interface/hopscotch/demo.

Usage
-----

A full description of Hopscotch Tour features can be found at: 
http://linkedin.github.io/hopscotch/
The Hopscotch module reads tours stored as Backdrop config files and loads the 
necessary JQuery and CSS needed to provide guided tours. See the included config
for an example to the storage format.

The main Hopscotch module will detect all existing tour config files if they are
named in the format `hopscotch.<module>.<any_id>`. 

- Tours with `auto_start = 1` set will start on navigating to the tour path.
- Otherwise tours can be launched by providing a link created in the format
`<?php print theme('hopscotch_start_link', array('tour_name' => 'manual_trigger')); ?>`

Tour config files may have the following settings:
- title: A human readable title.
- description: A description of the tour.
- path: The path at which the tour is active.
- module: The module providing the tour.
- machine_name: A unique machine name.
- editable: (values 0 or 1) Whether the tour is editable in Tour UI.
- auto_start: (values 0 or 1) Whether the tour will start automatically on 
navigating to the 
  tour path.
- play_once: (values 0 or 1) For auto_start tours, whether the tour plays once,
  or every time you navigate to the path.
- exported: (values 0 or 1) Whether this is a tour provided by tour module or
  by another contrib module.
- content: (An array of tour steps)

Tour content(steps) may have the following values:
- optional: An array of options as found in http://linkedin.github.io/hopscotch/#all-step-options
- target: The CSS ID target for the step.
- title: The header for the popup tip.
- content: The body of the popup tip. 
- placement: where the bubble should appear in relation to the target.
- weight: The weight of the tip. (Determines the step order.)

Tour UI
-------
- View all tours at admin/config/user-interface/hopscotch to edit or delete.
- New tours are saved in a tour.tour.<machine_name> file in the site config 
folder (in files//active).
- If providing a tour with your module, this config file should be copied to 
the /config folder of the providing module then renamed to 
tour.<your_module>.<machine_name> (also rename the "_config_name" key in the 
config file).
This is useful if your wish your module to provide a guided tour of its 
features. Joyride will automatically pick up your tour config.
- Exported tours can be set to be editable or not.
- Tours being created just for the use of the current site will be saved in 
Joyride module's config folder. Careful not to mark them as not editable. If 
this happens, the module should be disabled and the config file manually edited 
to set editable to "1".
- Tour UI is not required for having site tours. Tours can be also written 
manually following standard Backdrop config file rules.

LICENSE
---------------    

This project is GPL v2 software. See the LICENSE.txt file in this directory 
for complete text.

CURRENT MAINTAINERS
---------------    

- Andy Shillingford (https://github.com/docwilmot/)

CREDITS   
--------------- 

This module was based on Joyride module created for Drupal by Mark Koester 
("Drupal user markwk":http://drupal.org/user/1094790/) 
at "Int3c.com":http://int3c.com and 
sponsored by "MicroEntrepreneur.me":http://microentrepreneur.me 