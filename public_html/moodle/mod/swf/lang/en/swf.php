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
 * @package    mod_swf
 * @copyright  2013 Matt Bury
 * @author     Matt Bury <matt@matbury.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// Docs link
$swf_docs = '

Docs available at: <a href="https://github.com/matbury/SWF-Activity-Module2.5/wiki/_pages" target="_blank">SWF Activity Module Wiki | Github.com</a>';

//General values
$string['modulename'] = 'SWF';
$string['modulenameplural'] = 'SWFs';
$string['modulename_help'] = 'Flash apps are apps that run in web browsers and therefore do not require users to install them and all the security risks for users that that entails.
    
The <a href="https://github.com/matbury/SWF-Activity-Module2.5" target="_blank">SWF Activity Module</a> deploys Flash apps, games, media players, and animations in Moodle. 3rd party Flash apps can be installed and it supports XML, SMIL, AMF3, JSON, and other external data and media driven apps. Flash apps can also communicate with, exchange data with, push grades, and save media files on Moodle.

The free and open source <a href="http://sourceforge.net/projects/smp.adobe/" target="_blank">Strobe Media Player</a> comes preinstalled and supports video, audio, and Flash animation playback, Youtube.com playback, playlists, slideshows, RTMP streaming, etc. Other media players are also supported.
    
See the <a href="https://github.com/matbury/SWF-Activity-Module2.5" target="_blank">SWF Activity Module | Github.com</a> project site for details.

<a href="http://blog.matbury.com/call-software/ target="_blank">Multimedia Interactive Learning Apps</a> (MILAs) for second and foreign language learning (ESL/EFL/EAP/etc.) are available from matbury.com.
    
Developed by Matt Bury <a href="http://matbury.com/" target="_blank">matbury.com</a>';
$string['pluginadministration'] = 'SWF Administration';
$string['pluginname'] = 'SWF';
$string['swf'] = 'SWF';
$string['swf:view'] = 'View SWF';
$string['swf:submit'] = 'Submit SWF';
$string['swf:grade'] = 'Grade SWF';
$string['swf:addinstance'] = 'Add SWF';

/*   mod/swf/mod_form.php   */
//Learning App
$string['selectfile'] = 'Select...';
$string['swffile'] = 'App';
$string['swffile_help'] = 'Choose a Flash app from the drop down list. Adjust the Flash Player settings to control how the app is displayed. New apps must be installed by a system administrator with server access. Do not install standalone learning applications here. Upload them as learning content files and use the swfs/preloader.swf app to load them.
    
To play a video:

* Learning App: swfs/StrobeMediaPlayback.swf
* Name: file
* Value: http://download.ted.com/talks/PaoloCardini_2012G-480p.mp4
* You can also use Moodle\'s file manager to select a video.

To display and standalone Flash app:

* Learning App: swfs/preloader.swf
* Content URL/File: upload, select, or paste a link to the Flash app
* or name value pair:
* Name: xmlurl
* Value: http://example.com/learning/games/mygame.swf'.$swf_docs;
$string['plugin'] = 'Plugin';
$string['plugin_help'] = 'swfs/StrobeMediaPlayback.swf supports the following plugins...

* Strobe SMIL
* Strobe YouTube';
$string['width'] = 'Width';
$string['height']='Height';
$string['version']='Version';
$string['allowfullscreen'] = 'Allow Full Screen';
$string['scale']='Stage Scale Mode';
$string['salign']='Stage Align';
$string['pagecolor']='Page Background Color';
$string['bgcolor']='Flash Background Color';
$string['seamlesstabbing']='Seamless Tabbing';
$string['allowscriptaccess']='Allow Script Access';
$string['allownetworking']='Allow Networking';
//Learning Content Data
$string['header_swf']='Learning Content';
$string['xmlurl'] = 'Content';
$string['xmlurl_help'] = 'This setting enables a URL for the content file to be specified, rather than choosing a file via the Moodle file manager (below). Files are automatically listed from all directories in moodledata/repository/swfcontent/*/*/xml/* (* = wildcard). Files can only be uploaded here with FTP access.';
$string['xmlurlname'] = 'Content Name';
$string['xmlurlname_help'] = 'The FlashVars name of the link to the XML or SMIL file to be loaded. Default is xmlurl.  Consult the Flash apps\'s documentation for details.';
$string['fileurl'] = 'File Manager';
$string['fileurl_help'] = 'Pass in a file from Moodle\'s file manager.

Please note that if you pass in a file from a File system repository, it will be copied to Moodle\'s main file storage area. Edits to the file in File system must be updated by deleting the copy in the file manager and redeploying it, i.e. 

* Edit file in File system (on your computer, then upload via FTP),
* Delete copy of file in File manager,
* Select edited file in File system again.'.$swf_docs;
$string['nofile'] = 'None';
$string['uploadedfile'] = 'Use File Manager File';
$string['exiturl'] = 'Exit URL';
$string['exiturl_help'] = 'Some Flash apps may use this setting to navigate to a new page when the activity has been completed/finished or to open a new browser page for further information, e.g. a help page.';
$string['exiturlname'] = 'Exit URL Name';
$string['exiturlname_help'] = 'The FlashVars name of the link that the app navigates to. Consult the Flash apps\'s documentation for details.';
$string['namepair'] = 'Name';
$string['valuepair'] = 'Value';
$string['namepair_help'] = 'Useful examples of name value pairs...

Provide word lists for Word search MILA:

* Learning App: swfs/smil_word_search.swf
* Name: words
* Value: dog,cat,chicken,horse,beaver,platypus,kangaroo,mouse,etc.

Enable learners to input paragraphs into C-Test MILA:

* Learning App: swfs/smil_c_test.swf
* Name: input
* Value: true

Set higher difficulty level for Quick typing MILA:

* Learning App: swfs/smil_quick_typing.swf
* Name: difficulty
* Value: 0.8

For StrobeMediaPlayback:

* Learning App: swfs/StrobeMediaPlayback.swf
* Name: src
* Value: http://download.ted.com/talks/PaoloCardini_2012G-480p.mp4

* Learning App: swfs/StrobeMediaPlayback.swf
* Plugin: Strobe YouTube
* Name: src
* Value: https://www.youtube.com/watch?v=ttYapXJRFF4

* Learning App: swfs/StrobeMediaPlayback.swf
* Plugin: Strobe SMIL
* Name: src
* Value: http://mediapm.edgesuite.net/osmf/content/test/smil/elephants_dream.smil

JW Player:

* Learning App: swfs/player.swf
* Name: file
* Value: http://download.ted.com/talks/PaoloCardini_2012G-480p.mp4'.$swf_docs;

$string['configxml'] = 'Config XML File';
$string['configxml_help'] = 'Some apps can load files to configure their appearance and behaviour. Files are automatically listed from all directories in moodledata/repository/swfcontent/*/config/*/* (* = wildcard). Files can only be uploaded here with FTP access.';
$string['configxmlname'] = 'Config XML Name';
$string['configxmlname_help'] = 'The name of the FlashVars that the app loads the config XML file from. Consult the Flash apps\'s documentation for details.';
$string['apikey'] = 'API Key';
$string['apikey_help'] = 'Some web services require apps to pass in a public API key.
    
* IMPORTANT SECURITY WARNING: Do not put private API keys here! Public keys only.';
$string['apikeyname'] = 'API Key Name';
$string['apikeyname_help'] = 'The name of the FlashVars that the app uses to send the API Key. Consult the Flash apps\'s documentation for details.';
// Grade
$string['gradeeditintro'] = 'Pass grade set to 0 by default';
$string['gradeedit1'] = 'Save and return to course';
$string['gradeedit2'] = 'Go to Course administration > Grades > Grader report';
$string['gradeedit3'] = 'Turn editing on';
$string['gradeedit4'] = 'Edit swf grade item (in "Controls" table row)';
$string['gradeedit5'] = 'Click "Show more..." to see all options';
$string['gradeedit6'] = 'You can edit grade settings in this way at any time.';

/*   mod/swf/view.php   */
//Navigation:
$string['report'] = 'SWF Activity Report';
$string['gradebook'] = 'Grades';
$string['gradebook_title'] = 'Go to grade book';
$string['swfhelp'] = 'Help';
$string['swfhelp_title'] = 'Moodle docs for this page (Opens new window)';
// Error message:
$string['broken1'] = 'There is a problem';
$string['broken2'] = 'This application has not displayed correctly for one or more of the following reasons:';
$string['broken3'] = 'The application requires Flash Player '; // $swf->version goes here
$string['broken31'] = ' to be installed in your browser,';
$string['broken4'] = 'the application requires Javascript to be enabled in your browser,';
$string['broken5'] = 'or the URL to this application is incorrect.';
$string['broken6'] = 'Which version of Flash do I have installed?';
$string['broken7'] = 'Click on the Flash Player logo below to check your browser\'s Flash Player version:';
$string['broken8'] = 'Find my Flash Player version';
$string['nohtml5'] = 'Your browser does not support the <code>video</code> element.';
$string['download'] = 'Download video/audio';
$string['downloadrightclick'] = 'Right click to download video/audio';

/*   mod/swf/index.php   */
$string['viewreport'] = 'View report for';
$string['sortby'] = 'Sort by';
$string['noswfs'] = 'There are no SWF activities';
$string['finalgrade'] = 'Final Grade';
$string['gradehistory'] = 'Grade History';
$string['disablegradehistory'] = 'Notice: Grade history has been disabled. Only final grades will be updated from now on.';
$string['feedback'] = 'Feedback';
$string['time'] = 'Time';
$string['heatmap'] = 'SWF Activity Heatmap';
$string['sunday'] = 'Sun';
$string['monday'] = 'Mon';
$string['tuesday'] = 'Tues';
$string['wednesday'] = 'Wed';
$string['thursday'] = 'Thur';
$string['friday'] = 'Fri';
$string['saturday'] = 'Sat';
$string['grade'] = 'Grade';
$string['nograde'] = 'No Grade';
$string['passed'] = 'Passed';
$string['notpassed'] = 'Not Passed';
$string['duration'] = 'Duration';
$string['total'] = 'Total';
$string['averagegrade'] = 'Average grade';
$string['averageduration'] = 'Average duration';
$string['attempts'] = 'Attempts';

/*   mod/swf/settings.php   */
$string['installed_apps_dir'] = 'Installed Apps Directory';
$string['installed_apps_dir_explain'] = 'A standard directory where Flash apps are stored.
    The SWF Activity Module searches this directory for any Flash files and lists them in swf/mod_form.php.
    If your Moodle installation is in a subdirectory or a subdomain, you will need to edit this: e.g. for http://example.com/moodle/ (or http://moodle.example.com/ where the subdomain is in /moodle/) change /home/sites/example.com/mod/swf/swfs/ to /home/sites/example.com/moodle/mod/swf/swfs/';
$string['content_dir'] = 'Multimedia Content Directory';
$string['content_dir_explain'] = 'A directory that must be set up in Site Administration > Plugins > Repositories > Manage repositories.
    Enable File system and add a directory, e.g. /moodledata/repository/swfcontent/.
    This will allow uploading files through Moodle\'s file manager, as well as FTP.
    These files can then be accessed by Flash apps through /moodle/mod/swf/file.php with the respective paths and filenames passed in through FlashVars, SMIL, and/or XML.
    This provides native support for XML driven multimedia learning interactions.
    The SWF Activity Module automatically searches for .xml and .smil files in /moodledata/repository/swfcontent/*/xml/*.xml and *.smil and lists them in swf/mod_form.php.';
$string['saved_files_dir'] = 'Saved Files Directory';
$string['saved_files_dir_explain'] = 'A subdirectory of the Multimedia Content Directory where users\' saved files are stored.'.$swf_docs;

/*   mod/swf/lib.php   */
$string['urledit'] = 'SWF Content File';

/*   mod/swf/index.php and mod/swf/view.php    */
$string['timecreated'] = 'Created';
$string['usermodified'] = 'Modified';

/*  mod/swf/content.php */
$string['404_error'] = '404 Error: File not found. SWF settings and/or path to file is/are not set correctly.';

/*  lib/amfphp/services/Access.php      */
$string['not_logged_in'] = 'You are not logged in.';
$string['invalid_module'] = 'You must specify a course_module ID or an instance ID.';

/*  lib/amfphp/services/Grades.php      */
$string['grade_no_permission'] = 'You do not have permission to access grades.';
$string['grade_no_item'] = 'Grade item does not exist.';
$string['grade_saved'] = 'Your grade has been sent to the grade book.';
$string['grade_accessed'] = 'Grade(s) successfully accessed.';

/*  lib/amfphp/services/Snapshot.php    */
$string['img_not_writeable'] = ' directory is not writeable.';
$string['img_saved'] = 'Your image was successfully saved.';
$string['img_not_saved'] = 'There was a problem. Your image was not saved.';
$string['img_no_permission'] = 'You do not have permission to save images.';
