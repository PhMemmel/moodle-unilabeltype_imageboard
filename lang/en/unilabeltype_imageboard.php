<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * unilabel type imageboard
 *
 * @package     unilabeltype_imageboard
 * @author      Andreas Grabs <info@grabs-edv.de>
 * @author      Andreas Schenkel
 * @copyright   2018 onwards Grabs EDV {@link https://www.grabs-edv.de}
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$string['addmoreimages'] = 'Add more images';

$string['autocanvaswidth'] = 'autocanvaswidth_todo';

$string['backgroundimage'] = 'Backgroundimage';
$string['default_bordercolor'] = 'Default bordercolor';
$string['default_bordercolor_desc'] = 'Default bordercolor of images';
$string['canvaswidth'] = 'Witdh of canvas';
$string['canvasheight'] = 'Height of canvas';
$string['default_canvaswidth'] = 'Default witdh of canvas';
$string['default_canvaswidth_help'] = 'This is the default width of canvas when adding an imageboard.';

$string['default_canvasheight'] = 'Default height of canvas';
$string['default_canvasheight_help'] = 'If NO backgroundimage is used, then this is the default height of canvas.';
$string['default_height'] = 'Default height';
$string['default_showintro'] = 'Default show unilabel text';

$string['height_help'] = 'If your pictures are of a different size, use the fixed height option. This scales all images to the same height. If your pictures have the same height, you can also use "auto height".';
$string['image'] = 'Image';
$string['imagenr'] = 'Image {$a}';
$string['images'] = 'Images';
$string['targetwidth'] = 'Target image width an image should be resized to';
$string['targetwidth_help'] = 'Values different from 0 will be used. If both are 0, then the original imagesize will be uses';

$string['targetheight'] = 'Target image height an image should be resized to';
$string['targetheight_help'] = 'Values different from 0 will be used. If both are 0, then the original imagesize will be uses';

$string['nocontent'] = 'No content';
$string['pluginname'] = 'imageboard';
$string['pluginname_help'] = 'This plugin type creates an imageboard consisting of a canvas where pictures can be placed at different positions. A click on the image brings the user to a defined url.';
$string['privacy:metadata'] = 'The unilabel type Imageboard does not store any personal data.';
$string['showunilabeltext'] = 'Show unilabel text';

$string['default_gridcolor'] = 'Default grid color';
$string['default_gridcolor_desc'] = 'Default color of a grid that is shown to teacher to help positioning the images.';
$string['default_showborders'] = 'Default show borders';
$string['default_showborders_desc'] = 'If activated then the added images have borders.';

$string['title'] = 'Title';
$string['url'] = 'Url';
$string['url_help'] = 'By defining a url the image becomes a clickable button linked to the defined url.';
$string['xposition'] = 'x-position of the upper left corner';
$string['yposition'] = 'y-position of the upper left corner';
