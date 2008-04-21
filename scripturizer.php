<?php
/*
Plugin Name: The Holy Scripturizer
Version: 1.8b
Plugin URI: http://scripturizer.wordpress.com
Description: Automatically converts Bible references into hyperlinks pointed to major online Bible sites.
Author: Dean Peters, ported by Glen Davis, updated by Laurence O'Donnell & Peter V Cook (v1.8)
Author URI: http://www.healyourchurchwebsite.com/
*/



$scripturizer_translations = array(); ### Global arrary of Bible translations
	//abbrv - Abbreviation of the Bible translation name, using the Bible Gateway as the standard
	//name - Full name of Bible translation, using the Bible Gateway...
	//gateway_id - the ID for use with the Bible Gateway
$scripturizer_translations[0]['abbrv'] = 'ALAB';
$scripturizer_translations[0]['name'] = 'Arabic Life Application Bible';
$scripturizer_translations[0]['gateway_id'] = '28';

$scripturizer_translations[1]['abbrv'] = 'BULG';
$scripturizer_translations[1]['name'] = 'Bulgarian Bible';
$scripturizer_translations[1]['gateway_id'] = '21';

$scripturizer_translations[2]['abbrv'] = 'BG1940';
$scripturizer_translations[2]['name'] = '1940 Bulgarian Bible';
$scripturizer_translations[2]['gateway_id'] = '82';

$scripturizer_translations[3]['abbrv'] = 'HCV';
$scripturizer_translations[3]['name'] = 'Haitian Creole Version ';
$scripturizer_translations[3]['gateway_id'] = '23';

$scripturizer_translations[4]['abbrv'] = 'SNC';
$scripturizer_translations[4]['name'] = 'Slovo na cestu';
$scripturizer_translations[4]['gateway_id'] = '29';

$scripturizer_translations[5]['abbrv'] = 'DN1933';
$scripturizer_translations[5]['name'] = 'Dette er Biblen pÃ¥ dansk';
$scripturizer_translations[5]['gateway_id'] = '';

$scripturizer_translations[6]['abbrv'] = 'ELB';
$scripturizer_translations[6]['name'] = 'Elberfelder';
$scripturizer_translations[6]['gateway_id'] = '54';

$scripturizer_translations[7]['abbrv'] = 'HOF';
$scripturizer_translations[7]['name'] = 'Hoffnung für Alle';
$scripturizer_translations[7]['gateway_id'] = '33';

$scripturizer_translations[8]['abbrv'] = 'LUTH1545';
$scripturizer_translations[8]['name'] = 'Luther Bibel 1545';
$scripturizer_translations[8]['gateway_id'] = '10';

$scripturizer_translations[9]['abbrv'] = 'AMP';
$scripturizer_translations[9]['name'] = 'Amplified Bible';
$scripturizer_translations[9]['gateway_id'] = '45';

$scripturizer_translations[10]['abbrv'] = 'ASV';
$scripturizer_translations[10]['name'] = 'American Standard Version';
$scripturizer_translations[10]['gateway_id'] = '8';

$scripturizer_translations[11]['abbrv'] = 'CEV';
$scripturizer_translations[11]['name'] = 'Contemporary English Version';
$scripturizer_translations[11]['gateway_id'] = '46';

$scripturizer_translations[12]['abbrv'] = 'DARBY';
$scripturizer_translations[12]['name'] = 'Darby Translation';
$scripturizer_translations[12]['gateway_id'] = '16';

$scripturizer_translations[13]['abbrv'] = 'DRA';
$scripturizer_translations[13]['name'] = 'Douay-Rheims 1899 American Edition';
$scripturizer_translations[13]['gateway_id'] = '63';

$scripturizer_translations[14]['abbrv'] = 'ESV';
$scripturizer_translations[14]['name'] = 'English Standard Version';
$scripturizer_translations[14]['gateway_id'] = '47';

$scripturizer_translations[15]['abbrv'] = 'HCSB';
$scripturizer_translations[15]['name'] = 'Holman Christian Standard Bible';
$scripturizer_translations[15]['gateway_id'] = '77';

$scripturizer_translations[16]['abbrv'] = 'KJ21';
$scripturizer_translations[16]['name'] = '21st Century King James Version';
$scripturizer_translations[16]['gateway_id'] = '48';

$scripturizer_translations[17]['abbrv'] = 'KJV';
$scripturizer_translations[17]['name'] = 'King James Version';
$scripturizer_translations[17]['gateway_id'] = '9';

$scripturizer_translations[18]['abbrv'] = 'MSG';
$scripturizer_translations[18]['name'] = 'The Message';
$scripturizer_translations[18]['gateway_id'] = '65';

$scripturizer_translations[19]['abbrv'] = 'NASB';
$scripturizer_translations[19]['name'] = 'New American Standard Bible';
$scripturizer_translations[19]['gateway_id'] = '49';

$scripturizer_translations[20]['abbrv'] = 'NIRV';
$scripturizer_translations[20]['name'] = 'New International Reader\'s Version';
$scripturizer_translations[20]['gateway_id'] = '76';

$scripturizer_translations[21]['abbrv'] = 'NIV';
$scripturizer_translations[21]['name'] = 'New International Version';
$scripturizer_translations[21]['gateway_id'] = '31';

$scripturizer_translations[22]['abbrv'] = 'NIVUK';
$scripturizer_translations[22]['name'] = 'New International Version - UK';
$scripturizer_translations[22]['gateway_id'] = '64';

$scripturizer_translations[23]['abbrv'] = 'NKJV';
$scripturizer_translations[23]['name'] = 'New King James Version';
$scripturizer_translations[23]['gateway_id'] = '50';

$scripturizer_translations[24]['abbrv'] = 'NLT';
$scripturizer_translations[24]['name'] = 'New Living Translation';
$scripturizer_translations[24]['gateway_id'] = '51';

$scripturizer_translations[25]['abbrv'] = 'NLV';
$scripturizer_translations[25]['name'] = 'New Life Version';
$scripturizer_translations[25]['gateway_id'] = '74';

$scripturizer_translations[26]['abbrv'] = 'TNIV';
$scripturizer_translations[26]['name'] = 'Today\'s New International Version';
$scripturizer_translations[26]['gateway_id'] = '72';

$scripturizer_translations[27]['abbrv'] = 'WE';
$scripturizer_translations[27]['name'] = 'Worldwide English (New Testament)';
$scripturizer_translations[27]['gateway_id'] = '73';

$scripturizer_translations[28]['abbrv'] = 'WYC';
$scripturizer_translations[28]['name'] = 'Wycliffe New Testament';
$scripturizer_translations[28]['gateway_id'] = '53';

$scripturizer_translations[29]['abbrv'] = 'YLT';
$scripturizer_translations[29]['name'] = 'Young\'s Literal Translation';
$scripturizer_translations[29]['gateway_id'] = '15';

$scripturizer_translations[30]['abbrv'] = 'LXX';
$scripturizer_translations[30]['name'] = 'Septuigent';
$scripturizer_translations[30]['gateway_id'] = '';

$scripturizer_translations[31]['abbrv'] = 'NET';
$scripturizer_translations[31]['name'] = 'NET Bible';
$scripturizer_translations[31]['gateway_id'] = '';

$scripturizer_translations[32]['abbrv'] = 'NRSV';
$scripturizer_translations[32]['name'] = 'New Revised Standard Version';
$scripturizer_translations[32]['gateway_id'] = '';

// Sort the array alphabetically by translation name
foreach ($scripturizer_translations as $key => $row) {
   $n[$key] = $row['name'];
}
array_multisort($n, SORT_ASC, $scripturizer_translations);



##### ADMIN CONSOLE #

if (! function_exists('scripturizer_add_options')) {
  function scripturizer_add_options() {
    if (function_exists('add_options_page')) {
      add_options_page('Options', 'Scripturizer', 9, basename(__FILE__), 'scripturizer_options_subpanel');
    }
  }
}

// Show the admin page content
function scripturizer_options_subpanel() {
global $scripturizer_translations;
// to do -- add libronix link
// see http://www.logos.com/support/lbs/weblinking
    if (isset($_POST['info_update'])) { //Update/install options action
        update_option('scripturizer_default_translation', $_POST['scripturizer_default_translation']);
        update_option('scripturizer_link_window', $_POST['scripturizer_link_window']);
        update_option('scripturizer_xml_show_hide', $_POST['scripturizer_xml_show_hide']);
        update_option('scripturizer_xml_tooltip', $_POST['scripturizer_xml_tooltip']);
        update_option('scripturizer_esv_key', $_POST['scripturizer_esv_key']);
        update_option('scripturizer_esv_query_options', $_POST['scripturizer_esv_query_options']);
    ?>
        <div class="updated"><p><strong>
            <?php _e('Updates saved!', 'Scripturizer');?>
        </strong></p></div>
    <?php
    } elseif(isset($_POST['uninstall'])) { //Reset/uninstall action
		$s_options_list = "scripturizer_default_translation|scripturizer_link_window|scripturizer_xml_show_hide|scripturizer_xml_tooltip|scripturizer_esv_key|scripturizer_esv_query_options";
		$s_options = explode('|', $s_options_list);

		foreach($s_options as $x) {
			delete_option($x);
		}?>

		<div class="updated"><p><strong>
            <?php _e('Reset/Uninstall completed!', 'Scripturizer');?>
        </strong></p></div>
<?php
	}//end elseif ?>


<?php
if (!get_option('scripturizer_default_translation')) { //Show install instructions if no options are set ?>
	<div class="updated">
            <p><b><?php _e('IMPORTANT INSTALLATION INSTRUCTIONS!', 'Scripturizer'); ?></b></p>

            <ol>
                <li><?php _e('You must press the UPDATE OPTIONS button at least once to install the default settings.', 'Scripturizer'); ?></li>
                <li><?php _e('If you mess up one of the following inputs, then clear the field (make it blank), hit "update options," and then the default values will reappear. Then, you <b>must hit "update options" again</b> in order to save the new value.', 'Scripturizer'); ?></li>
            </ol>
    </div>
<?php
}//end if - show install instructions
?>


    <div class="wrap">
        <h2><?php _e('Scripturizer', 'Scripturizer'); ?></h2>
        <form method="post">
        <fieldset class="options">
            <legend><b><?php _e('General Options', 'Scripturizer'); ?></b></legend>

           <p>
            <label for="scripturizer_default_translation">
           <b><?php _e('Default Bible Translation', 'Scripturizer'); ?></b>
           <br /><?php _e('The Scripturizer supports any version from the <a href="http://www.biblegateway.com" title="Go to Bible Gateway">Bible Gateway</a> plus ESV, NET, NRSV, and LXX.', 'Scripturizer'); ?>


           <br /><select name="scripturizer_default_translation">
		   <?php
			if (get_option('scripturizer_default_translation') == ''){
                    $scripturizer_default_translation='ESV';
                }else {
                 $scripturizer_default_translation=get_option('scripturizer_default_translation');
            }

			foreach ($scripturizer_translations as $translation => $v) {
				if (strcmp($v['abbrv'], $scripturizer_default_translation)) {
					echo "<option value='{$v['abbrv']}'>".$v['name'].' ('. $v['abbrv'] .')</option>';
				} else {
					echo "<option value='{$v['abbrv']}' selected>".$v['name'].' ('. $v['abbrv'] .')</option>';
				}
			}
			?>
			</select>

           </label>
           </p>

            <p>
            <label for="scripturizer_link_window">
           <b><?php _e('New Window Icon', 'Scripturizer'); ?></b><br />
<?php _e('Would you like to give your viewers the option of opening the verse link in a new window? Set to 0 for "No" and 1 for "Yes." If you select "yes," a small icon will appear next to the Scripture reference that will open a new browser window when it is clicked.', 'Scripturizer'); ?>
           <br />
           <input name="scripturizer_link_window" type="checkbox" id="scripturizer_link_window" value="1" <?php checked('1', get_option('scripturizer_link_window')); ?> />
           </label>
            </p>

            <p>
            <b><?php _e('CSS For New Window Link', 'Scripturizer'); ?></b><br />
            <?php _e('You may modify the style of the "Open Passage in a New Window" link in your CSS by using <code>a.scripturizer_newwindow</code>', 'Scripturizer'); ?>
            </p>

        </fieldset>
<p>&nbsp;</p>
        <fieldset class="options">
            <legend><b><?php _e('ESV Show/Hide Verse Text Options', 'Scripturizer'); ?></b></legend>
            <p><b><?php _e('Overview', 'Scripturizer'); ?></b><br />
            <?php _e('This section allows you to take advantage of the ESV Bible Web Service in order to display the text of the Bible verses that you reference in your posts and pages. Turning this option on will activate a "[show/hide]" link that will display next to the verse reference. If the user clicks on the show/hide link, the text of the ESV Bible will display on the page.', 'Scripturizer'); ?>
            </p>

            <p><?php _e('Please note that the ESV Web Service does come with legal limitations as to how many verses you are allowed to display and how many queries are allowed per day. Please <a href="http://www.gnpcb.org/esv/share/services/" target="_new">familiarize yourself with these restrictions</a> <b>before</b> activating this option.', 'Scripturizer'); ?>
            </p>


            <p>
            <label for="scripturizer_xml_show_hide">
           <b><?php _e('Turn on the Show/Hide link to display the ESV text (in addition to the reference)', 'Scripturizer'); ?></b>
           <br /><?php _e('If yes, set to 1. If no, set to 0.', 'Scripturizer'); ?>
           <br />
		  <input name="scripturizer_xml_show_hide" type="checkbox" id="scripturizer_xml_show_hide" value="1" <?php checked('1', get_option('scripturizer_xml_show_hide')); ?> />
           </label>
           </p>
           
           <p>
           <label for="scripturizer_xml_tooltip">
           <b><?php _e('Turn on rollover Tool TIp to display the text from the ESV', 'Scripturizer'); ?></b>
           <br />
           <input name="scripturizer_xml_tooltip" type="checkbox" id="scripturizer_xml_tooltip" value="1" <?php checked('1', get_option('scripturizer_xml_tooltip')); ?> />
			<?php _e('Use rollover tool tip. Example: <a href="http://biblegateway.com/bible?version=31&amp;passage=John+3%3A16" class="scripturized" title="&quot;For God so loved the world, that he gave his only Son, 
that whoever believes in him should not perish but have eternal life. (ESV)">John 3:16</a>', 'Scripturizer'); ?>
           </label>
           </p>

            <p>
            <label for="scripturizer_esv_key">
            <b><?php _e('ESV Web Service Key', 'Scripturizer'); ?></b><br />
            <?php _e('The ESV Web Service now has a <a href="http://www.esv.org/blog/2005/10/web.service.keyless">keyless option</a>. Therefore, you no longer need your key to use the show/hide ESV text option. Instead, use <b><code>IP</code></b> as your key. However, if you are using shared-IP hosting (i.e. more than one site is hosted on your IP address) you will likely need your own key. To get your free key, follow the simple instructions at <a href="http://www.gnpcb.org/esv/share/services/">http://www.gnpcb.org/esv/share/services/</a>', 'Scripturizer' ); ?><br />
            <input type="text" name="scripturizer_esv_key" value="<?php
            if (!get_option('scripturizer_esv_key')){
                echo 'IP';
            }else {
             echo get_option('scripturizer_esv_key');
            } ?>" size="30" />
            </label>
            </p>
            <p>
            <label for="scripturizer_xml_css">
            <b><?php _e('CSS for ESV inline verse display', 'Scripturizer'); ?></b><br />
            <?php _e('You may modify the style of the verse text that is visible using the "[show/hide]" link in your CSS by using <code>span.scripturizer_showhide</code>.', 'Scripturizer'); ?>
            </p>

            <p>
            <label for="scripturizer_esv_query_options">
            <b><?php _e('ESV Web Service <a href="http://www.gnpcb.org/esv/share/services/api/">Query Options</a>', 'Scripturizer'); ?></b><br />
                <?php
                    if (get_option('scripturizer_esv_query_options') == ''){
                        $LO_esv_form_qo = 'action=doPassageQuery&include-passage-references=true&include-short-copyright=true&include-audio-link=false&output-format=plain-text&include-passage-horizontal-lines=false&include-heading-horizontal-lines=false&line-length=60&include-headings=false&include-subheadings=false&include-footnotes=false';
                } else {
                    $LO_esv_form_qo = get_option('scripturizer_esv_query_options');
                } ?>

            <textarea name="scripturizer_esv_query_options" cols="50" rows="6" wrap="VIRTUAL"><?php echo $LO_esv_form_qo; ?></textarea>
            </label>
            </p>
        </fieldset>

    <p class="submit">
    <input type="submit" name="info_update" value="<?php _e('Update Options', 'Scripturizer') ?>" />
    <input type="submit" name="uninstall" value="<?php _e('Reset/Uninstall Scripturizer', 'Scripturizer') ?>" />
    </p>
    </form>

    <fieldset class="options">
        <legend><b><?php _e('Usage Instructions', 'Scripturizer'); ?></b></legend>

<p><a href="http://scripturizer.wordpress.com/usage/">See instructions for how to make links</a> with your default Bible version and verse-specific versions.</p>

    </fieldset>



    <fieldset class="options">
        <legend><b><?php _e('Updates and Bug Tracking', 'Scripturizer'); ?></b></legend>

        <ul>
            <li><?php _e('Updates about the newest releases, features, and development dreams are located at <a href="http://scripturizer.wordpress.com">The Official Scripturizer HQ</a>.', 'Scripturizer'); ?></li>
            <li><?php _e('Report bugs and request new features via the <a href="http://code.google.com/p/scripturizer/issues/list" target="scripturizer">Scripturizer Google Code Project Site</a>.', 'Scripturizer'); ?></li>
        </ul>
    </fieldset>


    <fieldset class="options">
        <legend><b><?php _e('Credits', 'Scripturizer'); ?></b></legend>

        <p><?php _e('The original coding props go to <a href="http://www.healyourchurchwebsite.com/">Dean Peters</a> for his original Scripturizer code. After Dean\'s original work <a href="http://xastanford.org/archives/scripturizer-in-php/">Glen</a> turned Scripturizer into a Wordpress plugin. <a href="http://LaurenceO.com" title="Scripturizer info can be found in the Webmaster/Scripturizer category on LaurenceO.com">Laurence</a> maintained Scripturizer from WordPress 1.5 through WordPress 2.2. Peter has been adding enchancements since WordPress 2.3. The authors can be contacted through their respective web sites (but please see below for support options).', 'Scripturizer'); ?></p>
    </fieldset>

    </div>

<?php
} // close scripturizer_options_subpanel()
# END ADMIN CONSOLE #####

function scripturize($text = '',$bible = NULL) {

	if (!isset($bible)) {
		$bible = get_option('scripturizer_default_translation');
	}
    // skip everything within a hyperlink, a <pre> block, a <code> block, or a tag
    // we skip inside tags because something like <img src="nicodemus.jpg" alt="John 3:16"> should not be messed with
	$anchor_regex = '<a\s+href.*?<\/a>';
	$pre_regex = '<pre>.*<\/pre>';
	$code_regex = '<code>.*<\/code>';
	$other_plugin_regex= '\[bible\].*\[\/bible\]'; // for the ESV Wordpress plugin (out of courtesy)
	$other_plugin_block_regex='\[bibleblock\].*\[\/bibleblock\]'; // ditto
	$tag_regex = '<(?:[^<>\s]*)(?:\s[^<>]*){0,1}>'; // $tag_regex='<[^>]+>';
	$split_regex = "/((?:$anchor_regex)|(?:$pre_regex)|(?:$code_regex)|(?:$other_plugin_regex)|(?:$other_plugin_block_regex)|(?:$tag_regex))/i";
// $split_regex = "/((?:$anchor_regex)|(?:$pre_regex)|(?:$code_regex)|(?:$tag_regex))/i";
	$parsed_text = preg_split($split_regex,$text,-1,PREG_SPLIT_DELIM_CAPTURE);
	$linked_text = '';

  while (list($key,$value) = each($parsed_text)) {
      if (preg_match($split_regex,$value)) {
         $linked_text .= $value; // if it is an HTML element or within a link, just leave it as is
      } else {
        $linked_text .= scripturizeAddLinks($value,$bible); // if it's text, parse it for Bible references
      }
  }

  return $linked_text;
}

function getEsvText($volume, $book, $verse) {
    //Get passage text from ESV web site
    $esvPassage = htmlentities(urlencode(trim("$volume $book $verse")));
    $esvUrl = "http://www.gnpcb.org/esv/share/get/?key=". get_option('scripturizer_esv_key') ."&passage=$esvPassage&". get_option('scripturizer_esv_query_options');
    $esvCh = curl_init($esvUrl);
    curl_setopt($esvCh, CURLOPT_RETURNTRANSFER, 1);
    $esvResponse = curl_exec($esvCh);
    curl_close($esvCh);

// Get rid of double line breaks since WP turns them into <p>'s and thereby kills our <span>
    $esvResponse = str_replace("\n\n", "\n", $esvResponse);
    	$esvResponse = htmlentities($esvResponse);

//	echo 'ESV Response'.$esvResponse;
	return $esvResponse;

}

function scripturizeAddLinks($text = '',$bible = NULL) {
global $scripturizer_translations;

	if (!isset($bible)) {
		$bible=get_option('scripturizer_default_translation');
	}

    $volume_regex = '1|2|3|I|II|III|1st|2nd|3rd|First|Second|Third';

    $book_regex  = 'Genesis|Exodus|Leviticus|Numbers|Deuteronomy|Joshua|Judges|Ruth|Samuel|Kings|Chronicles|Ezra|Nehemiah|Esther';
    $book_regex .= '|Job|Psalms?|Proverbs?|Ecclesiastes|Songs? of Solomon|Song of Songs|Isaiah|Jeremiah|Lamentations|Ezekiel|Daniel|Hosea|Joel|Amos|Obadiah|Jonah|Micah|Nahum|Habakkuk|Zephaniah|Haggai|Zechariah|Malachi';
    $book_regex .= '|Mat+hew|Mark|Luke|John|Acts?|Acts of the Apostles|Romans|Corinthians|Galatians|Ephesians|Phil+ippians|Colossians|Thessalonians|Timothy|Titus|Philemon|Hebrews|James|Peter|Jude|Revelations?';

	// I split these into two different variables from Dean's original Perl code because I want to be able to have an optional period at the end of just the abbreviations

    $abbrev_regex  = 'Gen|Ex|Exo|Lev|Num|Nmb|Deut?|Josh?|Judg?|Jdg|Rut|Sam|Ki?n|Chr(?:on?)?|Ezr|Neh|Est';
    $abbrev_regex .= '|Jb|Psa?|Pr(?:ov?)?|Eccl?|Song?|Isa|Jer|Lam|Eze|Dan|Hos|Joe|Amo|Oba|Jon|Mic|Nah|Hab|Zeph?|Hag|Zech?|Mal';
    $abbrev_regex .= '|Mat+|Mr?k|Lu?k|Jh?n|Jo|Act|Rom|Cor|Gal|Eph|Col|Phil?|The?|Thess?|Tim|Tit|Phile|Heb|Ja?m|Pe?t|Ju?d|Rev';

    $book_regex='(?:'.$book_regex.')|(?:'.$abbrev_regex.')\.?';

    $verse_regex="\d{1,3}(?::\d{1,3})?(?:\s?(?:[-&,]\s?\d+))*";

	// non Bible Gateway translations are all together at the end to make it easier to maintain the list
	$translation_abbrv = array(); //Container array for abbreviations string
	foreach ($scripturizer_translations as $t => $v) { //Fill up the container
	   array_push($translation_abbrv, $v['abbrv']);
	}
	$translation_regex = implode('|',$translation_abbrv); // Empty the container into an abbreviations string that looks like 'NIV|KJV|ESV' etc


	// note that this will be executed as PHP code after substitution thanks to the /e at the end!
    $passage_regex = '/(?:('.$volume_regex.')\s)?('.$book_regex.')\s+('.$verse_regex.')(?:\s?[,-]?\s?((?:'.$translation_regex.')|\s?\((?:'.$translation_regex.')\)))?/e';

    $replacement_regex = "scripturizeLinkReference('\\0','\\1','\\2','\\3','\\4','$bible')";

    $text=preg_replace($passage_regex,$replacement_regex,$text);

    return $text;
}

function buildNewWindowLink($link, $volume, $book, $verse) {
    $new_window_link = sprintf('<a href="%s%s" class="scripturizer_newwindow" title="Open this passage in a new browser window" target="_new"><img src="' .get_settings('home') .'/wp-content/plugins/the-holy-scripturizer/new-window.gif" alt="Open Link in New Window" /></a>',$link,htmlentities(urlencode(trim("$volume $book $verse"))));

    return $new_window_link;
}

function buildBiblerefTitle($translation, $volume, $book, $verse){
	$book = str_replace('.','',$book);
	if (get_option('scripturizer_xml_tooltip')) { // Insert ToolTip and include ESV verse text
		 $output= getEsvText($volume, $book, $verse);
    } else {
		$output = $translation .' ' .$volume.$book. ' ' .$verse;
	}
	return $output;
}

function scripturizeLinkReference($reference='',$volume='',$book='',$verse='',$translation='',$user_translation='') {
global $scripturizer_translations;
    if ($volume) {
       $volume = str_replace('III','3',$volume);
	   $volume = str_replace('Third','3',$volume);
       $volume = str_replace('II','2',$volume);
	   $volume = str_replace('Second','2',$volume);
       $volume = str_replace('I','1',$volume);
	   $volume = str_replace('First','1',$volume);
       $volume = $volume{0}; // will remove st,nd,and rd (presupposes regex is correct)
    }

	//catch an obscure bug where a sentence like "The 3 of us went downtown" triggers a link to 1 Thess 3
	if (!strcmp(strtolower($book),"the") && $volume=='' ) {
		return $reference;
	}

   if(!$translation) {
         if (!$user_translation) {
             $translation = get_option('scripturizer_default_translation');
         } else {
             $translation = $user_translation;
         }
   } else {
       $translation = trim($translation,' ()'); // strip out any parentheses that might have made it this far
   }

   // if necessary, just choose part of the verse reference to pass to the web interfaces
   // they wouldn't know what to do with John 5:1-2, 5, 10-13 so I just give them John 5:1-2
   // this doesn't work quite right with something like 1:5,6 - it gets chopped to 1:5 instead of converted to 1:5-6
   if ($verse) {
       $verse = strtok($verse,',& ');
   }

	if (get_option('scripturizer_libronix')) {
		$libronix=sprintf('<a title="View %s in Logos Bible Software Series X" href="libronixdls:keylink|ref=[en]bible:%s"><img border="0" src="%s/wp-content/LibronixLink.gif"></a>',trim("$volume $book $verse"),htmlentities(trim("$volume $book $verse")),get_settings('siteurl'));
	}

   switch ($translation) {
        case 'ESV':
        // note: the ESV could actually support a mouseover reference
        // we could pull it directly from their site and include it in the $title text
        // http://www.gnpcb.org/esv/share/services/api/ for more info
             $link = 'http://www.gnpcb.org/esv/search/?go=Go&amp;q=';
             $title = buildBiblerefTitle($translation, $volume, $book, $verse); // title attribute now follows the bibleref semantic standards

                // If the user selects the "Open link in new window" option,
                // then build the link here.
            	if (get_option('scripturizer_link_window')) {
                    $scripturizer_new_window_link = buildNewWindowLink($link, $volume, $book, $verse);
            	}
             $link = sprintf('<a href="%s%s" title="%s" class="scripturized bibleref">%s</a>',$link,htmlentities(urlencode(trim("$volume $book $verse"))),$title,trim($reference));
             break;
        case 'NET':
		// example URL http://www.bible.org/netbible2/index.php?book=gen&chapter=1&verse=1&submit=Lookup+Verse
             $link = 'http://www.bible.org/netbible2/index.php';
             $title = buildBiblerefTitle($translation, $volume, $book, $verse); // title attribute now follows the bibleref semantic standards
             $chapter = trim(strtok($verse,':'));
             $verses = trim(strtok('-,'));
             $book = scripturizeNETBook($volume.' '.$book);
             $link = sprintf('<a href="%s?book=%s&amp;chapter=%s&amp;verse=%s&amp;submit=Lookup+Verse" title="%s" class="scripturized bibleref">%s</a>',$link,htmlentities(urlencode($book)),$chapter,$verses,$title,trim($reference));
             break;
	case 'NRSV':
	// example URL http://bible.oremus.org/?passage=John+1%3A1&vnum=yes&version=nrsv
	// there is a new interface being developed at http://bible.oremus.org/bible.cgi
             $link = 'http://bible.oremus.org/';
             $title = buildBiblerefTitle($translation, $volume, $book, $verse); // title attribute now follows the bibleref semantic standards
			 $options ='&amp;vnum=yes&amp;version=nrsv';
             $link = sprintf('<a href="%s?passage=%s%s" title="%s" class="scripturized bibleref">%s</a>',$link,htmlentities(urlencode(trim("$volume $book $verse"))),$options,$title,trim($reference));
             break;
	case 'LXX':
	// example URL http://www.zhubert.com/bible?book=Matthew&chapter=2&verse=3
	// there's also an XML interface to this content - could do a trick like I propose with the ESV
             $link = 'http://www.zhubert.com/bible';
             $title = buildBiblerefTitle($translation, $volume, $book, $verse); // title attribute now follows the bibleref semantic standards
			$chapter=zhubertize_chapter($verse);
			$verse=zhubertize_verse($verse);
			$book=zhubertize_book($volume.' '.$book);
             $link = sprintf('<a href="%s?book=%s&amp;chapter=%d&amp;verse=%d" title="%s" class="scripturized bibleref">%s</a>',$link,htmlentities(urlencode(trim($book))),$chapter,$verse,$title,trim($reference));
             break;
        default:
		// Bible Gateway has a ton of translations, so just make it the default instead of checking for each one
		// $translation_regex takes care of ensuring that only valid translations make it this far, anyway
		// api at http://biblegateway.com/usage/linking/

		// Due to recent API updates, I added the following code to convert tranlation names (i.e. NIV) to
		// the corresponding IDs per http://www.biblegateway.com/usage/linking/versionslist.php (LO; 3/10/07)

		foreach ($scripturizer_translations as $t => $v) { //Get the translation ID from the global array
		   	if ($v['abbrv'] === $translation)  {
		   		$translation_id = $v['gateway_id'];
			}
		}

        $link = "http://biblegateway.com/bible?version=$translation_id&amp;passage=";
	    $title = buildBiblerefTitle($translation, $volume, $book, $verse); // title attribute now follows the bibleref semantic standards
            // If the user selects the "Open link in new window" option,
            // then build the link here.
        if (get_option('scripturizer_link_window')) {
                $scripturizer_new_window_link = buildNewWindowLink($link, $volume, $book, $verse);
        	}
        $link = sprintf('<a href="%s%s" class="scripturized" title="%s">%s</a>',$link,htmlentities(urlencode(trim("$volume $book $verse"))),$title,trim($reference));
    	break;
    }

	if (get_option('scripturizer_libronix')) {
		$link.=$libronix;
	}
	# Insert Show/Hide link and include ESV verse text
	if (get_option('scripturizer_xml_show_hide')) {
	
		$esvResponse = getEsvText($volume, $book, $verse);

	    // Build the show/hide link
		$esvSpanId = 'scripturizer' .mt_rand(); //prefix the rand number with "id" to pass XHTML validation
		$output_dynamic = " <a href=\"javascript://\" onclick=\"showhide('"
        . $esvSpanId
        . "');\"><small>[show/hide]</small></a><span id=\"" . $esvSpanId . "\" class=\"scripturizer_showhide\">"
        . $esvResponse
        . "<br />"
        . "<a href=\"http://www.esv.org/\"><img src=\"http://www.esv.org/assets/buttons/small.7.png\" alt=\"This text is from the ESV Bible. Visit www.esv.org to learn about the ESV.\" title=\"Visit www.esv.org to learn about the ESV Bible\" width=\"80\" height=\"21\" /></a>"
        . "</span>";
	
		$link .= $output_dynamic;
	}
	if (get_option('scripturizer_link_window')) {
        $link.=$scripturizer_new_window_link;
    }

return $link;
}

function scripturizeNETBook($book='') {
// need this function because NET Bible needs rigid input
// it's not perfect, so someone who intends to link to the NET Bible must be cautious with their syntax
// Jn 5:1 won't work, for example (must be 'joh' or 'john').
    $book = strtolower(trim($book));
    if (!$book) return '';

    $book = preg_replace('/\s+/', '', $book); //strip whitespace

    switch ($book) {
           case 'judges':
                $book = 'jdg';
                break;
           case 'songofsongs':
           case 'songofsolomon':
           case 'song':
                $book = 'sos';
                break;
           case 'philemon':
                 $book = 'phm';
                 break;
           default:
                   $book = substr($book,0,3);
    }
    return $book;
}

function zhubertize_chapter($reference="") {
	$chapter=strtok($reference,':');
	return $chapter;
}

function zhubertize_verse($reference="") {
	$chapter=strtok($reference,':');
	$verse=strtok(' ,-;');
	if (!$verse) {
		$verse=1;
	}
	return $verse;
}

function zhubertize_book($rawbook) {
	// ultimately I need to restore all abbreviations to the full book.
	// perhaps take the first three letters and expand?
	$book = strtolower(trim($rawbook));
    $book = preg_replace('/\s+/', '', $book); //strip whitespace
	$book= substr($book,0,3);
	switch ($book) {
		case 'gen':
			$book='Genesis';
			break;
		case 'exo':
		case 'ex':
			$book='Exodus';
			break;
		case 'lev':
		case 'lv':
			$book='Leviticus';
			break;
		case 'num':
			$book='Numbers';
			break;
		case 'deu':
		case 'dt':
			$book='Deuteronomy';
			break;
		case 'jos':
			$book='Joshua';
			break;
		case 'jud':
		case 'jd':
			// could be either Judges or Jude
			// abbreviations for Judges should always have a g in them
			$judges=strpos($rawbook,'g');
			if ($judges===FALSE) {
				$book='Jude';
			} else {
				$book='Judges';
			}
			break;
		case 'rut':
		case 'rth':
			$book='Ruth';
			break;
		case '1sa':
			$book='1 Samuel';
			break;
		case '2sa':
			$book='2 Samuel';
			break;
		case '1ki':
			$book='1 Kings';
			break;
		case '2ki':
			$book='2 Kings';
			break;
		case '1ch':
			$book='1 Chronicles';
			break;
		case '2ch':
			$book='2 Chronicles';
			break;
		case 'ezr':
		case 'ez':
			$book='Ezra';
			break;
		case 'neh':
		case 'nh':
			$book='Nehemiah';
			break;
		case 'est':
			$book='Esther';
			break;
		case 'job':
		case 'jb':
			$book='Job';
			break;
		case 'psa':
		case 'ps':
			$book='Psalms';
			break;
		case 'pro':
		case 'pr':
			$book='Proverbs';
			break;
		case 'ecc':
			$book='Qoheleth';
			break;
		case 'son':
		case 'sos':
			$book='Canticle of Canticles';
			break;
		case 'isa':
		case 'is':
			$book='Isaiah';
			break;
		case 'jer':
			$book='Jeremiah';
			break;
		case 'eze':
		case 'ez':
			$book='Ezekiel';
			break;
		case 'dan':
		case 'dn':
			$book='Daniel';
			break;
		case 'hos':
			$book='Hosea';
			break;
		case 'joe':
			$book='Joel';
			break;
		case 'amo':
		case 'am':
			$book='Amos';
			break;
		case 'oba':
		case 'ob':
			$book='Obadiah';
			break;
		case 'jon':
			$book='Jonah';
			break;
		case 'mic':
			$book='Micah';
			break;
		case 'nah':
			$book='Nahum';
			break;
		case 'hab':
			$book='Habakkuk';
			break;
		case 'zep':
			$book='Zephaniah';
			break;
		case 'hag':
			$book='Haggai';
			break;
		case 'zec':
			$book='Zechariah';
			break;
		case 'mal':
			$book='Malachi';
			break;
		case 'mat':
		case 'mt':
			$book='Matthew';
			break;
		case 'mar':
		case 'mk':
			$book='Mark';
			break;
		case 'luk':
		case 'lk':
			$book='Luke';
			break;
		case 'joh':
		case 'jn':
			$book='John';
			break;
		case 'act':
			$book='Acts';
			break;
		case 'rom':
		case 'rm':
			$book='Romans';
			break;
		case '1co':
			$book='1 Corinthians';
			break;
		case '2co':
			$book='2 Corinthians';
			break;
		case 'gal':
			$book='Galatians';
			break;
		case 'eph':
			$book='Ephesians';
			break;
		case 'phi':
			$book='Philippians';
			break;
		case 'col':
			$book='Colossians';
			break;
		case '1th':
			$book='1 Thessalonians';
			break;
		case '2th':
			$book='2 Thessalonians';
			break;
		case '1ti':
			$book='1 Timothy';
			break;
		case '2ti':
			$book='2 Timothy';
			break;
		case 'tit':
		case 'ti':
			$book='Titus';
			break;
		case 'phi':
			$book='Philemon';
			break;
		case 'heb':
			$book='Hebrews';
			break;
		case 'jam':
			$book='James';
			break;
		case '1pe':
			$book='1 Peter';
			break;
		case '2pe':
			$book='2 Peter';
			break;
		case '1jo':
			$book='1 John';
			break;
		case '2jo':
			$book='2 John';
			break;
		case '3jo':
			$book='3 John';
			break;
		// jude is handled up by judges
		case 'rev':
			$book='Revelation';
			break;
		default:
			$book=$rawbook;
	}
	return $book;
}

function scripturizePost($post_ID) {
    global $wpdb;
    global $tableposts;

    if (!isset($tableposts)) {
        // detect variable change between versions - see http://wiki.wordpress.org/1.3/TableVariables
        $tableposts=$wpdb->posts;
    }

    $postdata=$wpdb->get_row("SELECT * FROM $tableposts WHERE ID = '$post_ID'");

    $content = scripturize($postdata->post_content);

    $wpdb->query("UPDATE $tableposts SET post_content = '$content' WHERE ID = '$post_ID'");

    return $post_ID;
}

function scripturizeComment($comment_ID) {
    global $wpdb;
    global $tablecomments;

    if (!isset($tablecomments)) {
        // detect variable change between versions - see http://wiki.wordpress.org/1.3/TableVariables
        $tablecomments=$wpdb->comments;
    }

    $postdata=$wpdb->get_row("SELECT * FROM $tablecomments WHERE ID = '$comment_ID'");

    $content = scripturize($postdata->comment_content);

    $wpdb->query("UPDATE $tablecomments SET comment_content = '$content' WHERE ID = '$comment_ID'");

    return $comment_ID;
}

if (! function_exists('scripturizerHeader')) {

    function scripturizerHeader() {
    	echo '<link rel="stylesheet" type="text/css" media="screen" href="'.get_settings('home') .'/wp-content/plugins/the-holy-scripturizer/scripturizer.css"/></style>';
    }
}

if (! function_exists('esvShowHideHeader')) {

    function esvShowHideHeader() {

        $content = "
            <script language=\"javascript\" type=\"text/javascript\">
            <!-- I modified this script: http://lists.evolt.org/archive/Week-of-Mon-20020624/116151.html to get the following
            var state = 'none';

            function showhide(layer_ref) {

            if (state == 'block') {
            state = 'none';
            }
            else {
            state = 'block';
            }
            if (document.all) { //IS IE 4 or 5 (or 6 beta)
            eval( \"document.all.\" + layer_ref + \".style.display = state\");
            }
            if (document.layers) { //IS NETSCAPE 4 or below
            document.layers[layer_ref].display = state;
            }
            if (document.getElementById && !document.all) {
            maxwell_smart = document.getElementById(layer_ref);
            maxwell_smart.style.display = state;
            }
            }
            //-->
            </script>
            ";
    echo $content;
    }
}

if (! function_exists('esvToolTipHeader')) {

    function esvToolTipHeader() {

        $content = "
            <script type=\"text/javascript\" src=\"".get_settings('home') ."/wp-includes/js/prototype.js\"></script>
            <script type=\"text/javascript\" src=\"".get_settings('home') ."/wp-content/plugins/the-holy-scripturizer/tooltip-v0.2.js\"></script>
            <script type=\"text/javascript\">
			Event.observe(window,\"load\",function() {
				   $$(\".scripturized\").findAll(function(node){
					 return node.getAttribute('title');
				   }).each(function(node){
					 new Tooltip(node,node.title);
					 node.removeAttribute(\"title\");
				   });
				 });
            </script>
		";
    echo $content;
    }
}

##### ADD ACTIONS AND FILTERS
add_action('wp_head', 'scripturizerHeader', 5);
add_action('admin_head', 'scripturizerHeader', 5);

if (get_option('scripturizer_xml_show_hide')) { // Load the javascript if the xml show/hide option is turned on
    add_action('wp_head', 'esvShowHideHeader', 5);
    add_action('admin_head', 'esvShowHideHeader', 5);
}
if (get_option('scripturizer_xml_tooltip')) { // Load the javascript if the tooltip option is turned on
    add_action('wp_head', 'esvToolTipHeader', 5);
    add_action('admin_head', 'esvToolTipHeader', 5);
}
add_filter('the_content','scripturize'); // Scripturize the content of posts and pages
add_filter('comment_text','scripturize'); // Scripturize the comments of posts and pages

add_action('admin_menu', 'scripturizer_add_options'); // Load the Admin Options page
?>