<?php
/*
Plugin Name: The Holy Scripturizer
Version: 1.8.3
Plugin URI: http://scripturizer.wordpress.com
Description: Automatically converts Bible references into hyperlinks pointed to major online Bible sites.
Author: Dean Peters, ported by Glen Davis, updated by Laurence O'Donnell (v1.5-1.7) & Peter V Cook (v1.8)
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
$scripturizer_translations[5]['name'] = 'Detta är Bibeln på danska';
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

$scripturizer_translations[21]['abbrv'] = 'NIVUK';
$scripturizer_translations[21]['name'] = 'New International Version - UK';
$scripturizer_translations[21]['gateway_id'] = '64';

$scripturizer_translations[22]['abbrv'] = 'NIV';
$scripturizer_translations[22]['name'] = 'New International Version';
$scripturizer_translations[22]['gateway_id'] = '31';

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

$scripturizer_translations[33]['abbrv'] = 'NRSVUK';
$scripturizer_translations[33]['name'] = 'New Revised Standard Version - Angicised edition';
$scripturizer_translations[33]['gateway_id'] = '';

// Sort the array alphabetically by translation name
foreach ($scripturizer_translations as $key => $row) {
   $n[$key] = $row['name'];
}
array_multisort($n, SORT_ASC, $scripturizer_translations);

/* Active Plugin */

register_activation_hook( __FILE__, 'scripturizer_activate' );

function scripturizer_activate() {
	
	if (!get_option('scripturizer_default_translation')) { 
		update_option('scripturizer_default_translation', 'ESV');
		update_option('scripturizer_link_window', '0');
	  update_option('scripturizer_xml_show_hide', '');
	  update_option('scripturizer_xml_tooltip', '1');
	  update_option('scripturizer_esv_key', 'IP');
	} //end if
	if (!get_option('scripturizer_esv_query_options')) {
			$LO_esv_form_qo = array(
				"output-format=plain-text", "include-passage-references=false", "include-first-verse-numbers=false", "include-verse-numbers=false", "include-footnotes=false", "include-short-copyright=true", "include-passage-horizontal-lines=false", "include-heading-horizontal-lines=false", "include-headings=false&include-subheadings=false", 
				"include-selahs=false", 
				"line-length=0");
	  update_option('scripturizer_esv_query_options', $LO_esv_form_qo);
	 }
	
}

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
		$s_options = array(
			"scripturizer_default_translation",
			"scripturizer_link_window", 
			"scripturizer_xml_show_hide",
			"scripturizer_xml_tooltip",
			"scripturizer_esv_key",
			"scripturizer_esv_query_options",
			"scripturizer_xml_css", // leftover from v1.7
			"scripturizer_link_window_css" // leftover from v1.7
		);
		foreach($s_options as $x) {
			delete_option($x);
		}
		?>

		<div class="updated"><p><strong>
            <?php _e('Reset/Uninstall completed!', 'Scripturizer');?>
        </strong></p></div>
<?php
	}//end elseif ?>

<div class="wrap">
	<h2><?php _e('Scripturizer', 'Scripturizer'); ?></h2>
   <form method="post">
   <?php wp_nonce_field('update-options'); ?>
   	<h3><?php _e('General Options', 'Scripturizer'); ?></h3>
            
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row">
						<label for="scripturizer_default_translation">
							<?php _e('Default Bible Translation', 'Scripturizer'); ?>
						</label>
           		</th>
           		<td>
						<select name="scripturizer_default_translation">
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
						<br /><?php _e('Scripturizer supports any version from the <a href="http://www.biblegateway.com" title="Go to Bible Gateway">Bible Gateway</a> plus ESV, NET, NRSV, LXX and NRSVUK.', 'Scripturizer'); ?>
				  </td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<?php _e('Open in New Window', 'Scripturizer'); ?>
					</th>
					<td>
						<?php _e('Would you like links to open in a new window?', 'Scripturizer'); ?>
						<br />
						<input name="scripturizer_link_window" type="radio" id="scripturizer_link_window" value="0" <?php checked('0', get_option('scripturizer_link_window')); ?> /> No</label>&emsp;
						<label><input name="scripturizer_link_window" type="radio" id="scripturizer_link_window" value="1" <?php checked('1', get_option('scripturizer_link_window')); ?> /> Via Icon <a href="http://biblegateway.com/bible?version=31&amp;passage=Romans+12%3A1-2" class="scripturizer_newwindow" title="Open this passage in a new browser window" target="_new"><img src="<?php get_settings('siteurl'); ?>/wp-content/plugins/the-holy-scripturizer/new-window.gif" alt="Open Link in New Window" /></a></label>&emsp;
					  <label><input name="scripturizer_link_window" type="radio" id="scripturizer_link_window" value="2" <?php checked('2', get_option('scripturizer_link_window')); ?> /> Always</label>
					  
					</td>
				</tr>
			</tbody>
		</table>
	<h3><?php _e('Additional Features', 'Scripturizer'); ?></h3>
	 <p>
		<?php _e('This section allows you to take advantage of the ESV Bible Web Service in order to display the text of the Bible verses that you reference in your posts and pages.', 'Scripturizer'); ?>
   </p>

	<p>
		<?php _e('Please note that using the ESV Web Service comes with some conditions. Please familiarize yourself with <a href="http://www.esvapi.org/#conditions" target="_new">these conditions</a> <b>before</b> activating the following options.', 'Scripturizer'); ?>
   </p>
            
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row">
           			<label for="scripturizer_esv_key"><?php _e('ESV Web Service Key', 'Scripturizer'); ?></label>
           		</th>
           		<td>
           		 <?php // information about keyless options at: http://www.esv.org/blog/2005/10/web.service.keyless             ?>
					 <input type="text" name="scripturizer_esv_key" value="<?php
					 if (!get_option('scripturizer_esv_key')){
                echo 'IP';
            		}else {
             		echo get_option('scripturizer_esv_key');
            		} ?>" size="30" />
            		<br />
						<?php _e('Use <b><code>IP</code></b> as your key. However, you may run into access limits if you make a lot of queries (over 5,000) or if your website shares an IP address with other websites (common). If that is the case apply for a unique key at <a href="http://www.esvapi.org/signup">http://www.esvapi.org/signup</a>', 'Scripturizer' ); ?>
           		</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<?php _e('Show/Hide link', 'Scripturizer'); ?>
					</th>
					<td>
					  <input name="scripturizer_xml_show_hide" type="checkbox" id="scripturizer_xml_show_hide" value="1" <?php checked('1', get_option('scripturizer_xml_show_hide')); ?> /><?php _e('<label for="scripturizer_xml_show_hide">Use [show]/[hide] link. </label>Exampe: <a href="http://biblegateway.com/bible?version=31&amp;passage=Romans+12%3A1-2" class="bibleref" >Romans 12:1-2</a> <a href="javascript://" id="showhide1995956029" onclick="showhide(\'1995956029\');"><small>[show]</small></a><span id="scripturizer1995956029" class="scripturizer_showhide">I appeal to you therefore, brothers, by the mercies of God, to present your bodies as a living sacrifice, holy and acceptable to God,	which is your spiritual worship. Do not be conformed to this world, 
						but be transformed by the renewal of your mind, that by testing you may discern what is the will of God, what is good and acceptable and perfect. (ESV)
						<br /><a href="http://www.esv.org/"><img src="http://www.esv.org/assets/buttons/small.7.png" alt="This text is from the ESV Bible. Visit www.esv.org to learn about the ESV." title="Visit www.esv.org to learn about the ESV Bible" width="80" height="21" /></a></span>', 'Scripturizer'); ?>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<label for="scripturizer_xml_tooltip">
						<?php _e('Rollover Tool Tip', 'Scripturizer'); ?>
						</label>
           		</th>
          		<td>
          			<input name="scripturizer_xml_tooltip" type="checkbox" id="scripturizer_xml_tooltip" value="1" <?php checked('1', get_option('scripturizer_xml_tooltip')); ?> />
			<?php _e('Use rollover tool tip. Example: <a href="http://biblegateway.com/bible?version=31&amp;passage=John+3%3A16" class="bibleref scripturizer_tooltip" title="&quot;For God so loved the world, that he gave his only Son, 
that whoever believes in him should not perish but have eternal life. (ESV)">John 3:16</a>', 'Scripturizer'); ?>
					</td>
				</tr>
				<tr valign="top" id="scripturizer_advanced">
					<th scope="row">
           			<?php _e('Advanced Options', 'Scripturizer'); ?>
           		</th>
           		<td>
                <?php
                    if (!get_option('scripturizer_esv_query_options')) {  //shouldn't be needed now with new install script
                        $LO_esv_form_qo = array(
                        	"output-format=plain-text", "include-passage-references=false", "include-first-verse-numbers=false", "include-verse-numbers=false", "include-footnotes=false", "include-short-copyright=true", "include-passage-horizontal-lines=false", "include-heading-horizontal-lines=false", "include-headings=false&include-subheadings=false", 
                        	"include-selahs=false", 
                        	"line-length=0");
                } else {
						 $LO_esv_form_qo = get_option('scripturizer_esv_query_options');
                   $esvOptions = implode('&',$LO_esv_form_qo);
                } ?>
            <input name="scripturizer_esv_query_options[0]" type="hidden" id="scripturizer_esv_query_options[0]" value="output-format=plain-text" />
            
			<label><input name="scripturizer_esv_query_options[1]" type="radio" id="scripturizer_esv_query_options[1]" value="include-passage-references=true" <?php checked('include-passage-references=true', $LO_esv_form_qo[1]); ?> />Yes</label>
			<label><input name="scripturizer_esv_query_options[1]" type="radio" id="scripturizer_esv_query_options[1]" value="include-passage-references=false" <?php checked('include-passage-references=false', $LO_esv_form_qo[1]); ?> />No</label> 
			<strong>Include Passage Reference</strong>
			<br />
			<label><input name="scripturizer_esv_query_options[2]" type="radio" id="scripturizer_esv_query_options[2]" value="include-first-verse-numbers=true" <?php checked('include-first-verse-numbers=true', $LO_esv_form_qo[2]); ?> />Yes</label>
			<label><input name="scripturizer_esv_query_options[2]" type="radio" id="scripturizer_esv_query_options[2]" value="include-first-verse-numbers=false" <?php checked('include-first-verse-numbers=false', $LO_esv_form_qo[2]); ?> />No</label> 
			<strong>Include First Verse Numbers</strong>
			<br />
			
			<label><input name="scripturizer_esv_query_options[3]" type="radio" id="scripturizer_esv_query_options[3]" value="include-verse-numbers=true" <?php checked('include-verse-numbers=true', $LO_esv_form_qo[3]); ?> />Yes</label>
			<label><input name="scripturizer_esv_query_options[3]" type="radio" id="scripturizer_esv_query_options[3]" value="include-verse-numbers=false" <?php checked('include-verse-numbers=false', $LO_esv_form_qo[3]); ?> />No</label> 
			<strong>Include Verse Numbers</strong>
			<br />
			
			<label><input name="scripturizer_esv_query_options[4]" type="radio" id="scripturizer_esv_query_options[4]" value="include-footnotes=true" <?php checked('include-footnotes=true', $LO_esv_form_qo[4]); ?> />Yes</label>
			<label><input name="scripturizer_esv_query_options[4]" type="radio" id="scripturizer_esv_query_options[4]" value="include-footnotes=false" <?php checked('include-footnotes=false', $LO_esv_form_qo[4]); ?> />No</label> 
			<strong>Include Footnotes</strong>
			<br />
			
 			<label><input name="scripturizer_esv_query_options[5]" type="radio" id="scripturizer_esv_query_options[5]" value="include-copyright=true" <?php checked('include-copyright=true', $LO_esv_form_qo[5]); ?> />Long</label>
			<label><input name="scripturizer_esv_query_options[5]" type="radio" id="scripturizer_esv_query_options[5]" value="include-short-copyright=true" <?php checked('include-short-copyright=true', $LO_esv_form_qo[5]); ?> />Short</label>
 			<strong>Include Copyright</strong>
 			<br/>
 			
 			<input name="scripturizer_esv_query_options[6]" type="hidden" id="scripturizer_esv_query_options[6]" value="include-passage-horizontal-lines=false" />
 			<input name="scripturizer_esv_query_options[7]" type="hidden" id="scripturizer_esv_query_options[7]" value="include-heading-horizontal-lines=false" />
 			
 			<label>
			<input name="scripturizer_esv_query_options[8]" type="radio" id="scripturizer_esv_query_options[8]" value="include-headings=true&include-subheadings=true" <?php checked('include-headings=true&include-subheadings=true', $LO_esv_form_qo[8]); ?> /> Yes</label>
			<label>
 			<input name="scripturizer_esv_query_options[8]" type="radio" id="scripturizer_esv_query_options[8]" value="include-headings=false&include-subheadings=false" <?php checked('include-headings=false&include-subheadings=false', $LO_esv_form_qo[8]); ?> /> No</label>
 			<strong>Include Headings and Subheadings </strong>
 			<br />
 			<label>
 			<input name="scripturizer_esv_query_options[9]" type="radio" id="scripturizer_esv_query_options[9]" value="include-selahs=true" <?php checked('include-selahs=true', $LO_esv_form_qo[9]); ?> /> Yes</label>
 			<label>
 			<input name="scripturizer_esv_query_options[9]" type="radio" id="scripturizer_esv_query_options[9]" value="include-selahs=false" <?php checked('include-selahs=false', $LO_esv_form_qo[9]); ?> /> No</label>
 			<strong>Include Selahs</strong> common in Psalms
 			
 			<input name="scripturizer_esv_query_options[10]" type="hidden" id="scripturizer_esv_query_options[10]" value="line-length=0" />
			    <p>
            <?php _e('For more information about these options visit the "Plan Text Output" section of the <a href="http://www.esvapi.org/api#plain-text-output">ESV Bible Web Service API documentation</a>.', 'Scripturizer'); ?>
            </p>
			</td>
			</tr>
			</tbody>
			</table>


    <p class="submit">
    <input type="submit" name="info_update" value="<?php _e('Update Options »', 'Scripturizer') ?>" />
    <input type="submit" name="uninstall" value="<?php _e('Reset/Uninstall Scripturizer', 'Scripturizer') ?>" />
    <a style="color:#333;" href="http://scripturizer.wordpress.com/usage"><?php _e('Help', 'Scripturizer'); ?></a>
    </p>
    </form>

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
    $esvOptions = implode('&',get_option('scripturizer_esv_query_options'));
    $esvUrl = "http://www.esvapi.org/v2/rest/passageQuery?key=". get_option('scripturizer_esv_key') ."&passage=$esvPassage&". $esvOptions;
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

    // fix thanks to jon47
    $verse_regex="\d{1,3}(?:[:.]\d{1,3})?(?:\s?(?:\s?(?:&amp;|&ndash;|[-&,])+\s?\d+))*\b";
    
	// non Bible Gateway translations are all together at the end to make it easier to maintain the list
	$translation_abbrv = array(); //Container array for abbreviations string
	foreach ($scripturizer_translations as $t => $v) { //Fill up the container
	   array_push($translation_abbrv, $v['abbrv']);
	}
	$translation_regex = implode('|',$translation_abbrv); // Empty the container into an abbreviations string that looks like 'NIV|KJV|ESV' etc


	// note that this will be executed as PHP code after substitution thanks to the /e at the end!
    $passage_regex = '/(?:('.$volume_regex.')\s)?('.$book_regex.')(?:&nbsp;?|\s+)('.$verse_regex.')(?:\s?[,-]?\s?((?:'.$translation_regex.')|\s?\((?:'.$translation_regex.')\)))?/e';

    $replacement_regex = "scripturizeLinkReference('\\0','\\1','\\2','\\3','\\4','$bible')";

    $text=preg_replace($passage_regex,$replacement_regex,$text);

    return $text;
}

function buildBiblerefTitle($translation, $volume, $book, $verse, $user_translation){
	$book = str_replace('.','',$book);
	if (get_option('scripturizer_xml_tooltip') && !is_feed()  && ($user_translation == '' || $user_translation == 'ESV')) { // Insert ToolTip and include ESV verse text
		 $output= getEsvText($volume, $book, $verse);
    } else {
		$output = $translation .' ' .$volume.$book. ' ' .$verse;
	}
	$needHeaders = '1';
	
	return $output;
}

function scripturizeLinkReference($reference='',$volume='',$book='',$verse='',$user_translation='',$translation='') {

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

//   if(!$translation) {
         if (!$user_translation) {
             $translation = get_option('scripturizer_default_translation');
         } else {
             $translation = $user_translation;
         }
//   } else {
//       $translation = trim($translation,' ()'); // strip out any parentheses that might have made it this far
//   }
	
   // BibleGateway doesn't like ampersands, but knows what to do with commas
   if ($verse) {
       $verse = str_replace('&amp;',',',$verse);
       $verse = str_replace('&ndash;','-',$verse);
   }

	if (get_option('scripturizer_libronix')) {
		$libronix=sprintf('<a title="View %s in Logos Bible Software Series X" href="libronixdls:keylink|ref=[en]bible:%s"><img border="0" src="%s/wp-content/LibronixLink.gif"></a>',trim("$volume $book $verse"),htmlentities(trim("$volume $book $verse")),get_settings('siteurl'));
	}

   switch ($translation) {
	case 'ESV':
        // note: the ESV could actually support a mouseover reference
        // we could pull it directly from their site and include it in the $title text
        // http://www.esvapi.org/api for more info
             $url = 'http://www.gnpcb.org/esv/search/?go=Go&amp;q=';

              $url = sprintf('%s%s',$url,htmlentities(urlencode(trim("$volume $book $verse"))));
      
	break;
	
	case 'NET':
	// example URL http://www.bible.org/netbible2/index.php?book=gen&chapter=1&verse=1&submit=Lookup+Verse
		$url = 'http://net.bible.org/passage.php';
		$url = sprintf('%s?passage=%s',$url,htmlentities(urlencode(trim("$volume $book $verse"))));
	break;
    
	case 'NRSV':
	// example URL http://bible.oremus.org/?passage=John+1%3A1&vnum=yes&version=nrsv
	// there is a new interface being developed at http://bible.oremus.org/bible.cgi
            $url = 'http://bible.oremus.org/';
			$options ='&amp;vnum=yes&amp;version=nrsv';
			$url = sprintf('%s?passage=%s%s',$url,htmlentities(urlencode(trim("$volume $book $verse"))),$options);
    break;
    
	case 'LXX':
	// example URL http://www.zhubert.com/bible?book=Matthew&chapter=2&verse=3
	// there's also an XML interface to this content - could do a trick like I propose with the ESV
             $url = 'http://www.zhubert.com/bible';
			//$chapter=zhubertize_chapter($verse);
			//$verse=zhubertize_verse($verse);
			$book=zhubertize_book($volume.' '.$book);
             $url = sprintf('%s?source=greek&verseref=%s',$url,htmlentities(urlencode(trim("$volume $book $verse"))));
    break;
    
    case 'NRSVUK':
	// example URL http://bible.oremus.org/?passage=John+1%3A1&vnum=yes&version=nrsvae
		$url = 'http://bible.oremus.org/';
		$options ='&amp;vnum=yes&amp;version=nrsvae';
		$url = sprintf('%s?passage=%s%s',$url,htmlentities(urlencode(trim("$volume $book $verse"))),$options);
    break;
	
	default:
	// Bible Gateway has a ton of translations, so just make it the default instead of checking for each one
	//The following code to converts tranlation names (i.e. NIV) to
	// the corresponding IDs per http://www.biblegateway.com/usage/linking/versionslist.php (LO; 3/10/07)

	foreach ($scripturizer_translations as $t => $v) { //Get the translation ID from the global array
		if ($v['abbrv'] === $translation)  {
			$translation_id = $v['gateway_id'];
		}
	}

	$url = "http://biblegateway.com/bible?version=$translation_id&amp;passage=";
	$url = sprintf('%s%s',$url,htmlentities(urlencode(trim("$volume $book $verse")))); 

	break;
    }

	$title = buildBiblerefTitle($translation, $volume, $book, $verse, $user_translation); // title attribute now follows the bibleref semantic standards
	if (get_option('scripturizer_xml_tooltip') && !is_feed()  && ($user_translation == '' || $user_translation == 'ESV')) { // Insert ToolTip and include ESV verse text
		$class = 'bibleref scripturizer_tooltip';
	} else {
		$class = 'bibleref';
	}

	// If the user selects the "Open link in new window" option,
	if (get_option('scripturizer_link_window')=='1') {
			$scripturizer_new_window_link = '<a href="'.$url.'" class="scripturizer_newwindow" title="Open this passage in a new browser window" target="_new"><img src="' .get_settings('siteurl') .'/wp-content/plugins/the-holy-scripturizer/new-window.gif" alt="Open Link in New Window" /></a>';
		} 
	if (get_option('scripturizer_link_window')=='2') {
		$target = ' target="_new"';
	} else {
		$target = '';
	}
	
	// Have all the options, time to build the link
	$link = '<a href="'.$url.'" class="'.$class.'" title="'.$title.'"'.$target.'>'.trim($reference).'</a>';
		
		
	if (get_option('scripturizer_libronix')) {
		$link.=$libronix;
	}
	# Insert Show/Hide link and include ESV verse text
	if (get_option('scripturizer_xml_show_hide') && !is_feed() && ($user_translation == '' || $user_translation == 'ESV')) {
	
		$esvResponse = getEsvText($volume, $book, $verse);

	    // Build the show/hide link
	    $randId = mt_rand(); //prefix the rand number with "id" to pass XHTML validation
		$output_dynamic = " <a href=\"javascript://\" id=\"showhide".$randId."\" onclick=\"showhide('"
        . $randId
        . "');\"><small>[show]</small></a><span id=\"scripturizer" . $randId . "\" class=\"scripturizer_showhide\">"
        . $esvResponse
        . "<br />"
        . "<a href=\"http://www.esv.org/\"><img src=\"http://www.esv.org/assets/buttons/small.7.png\" alt=\"This text is from the ESV Bible. Visit www.esv.org to learn about the ESV.\" title=\"Visit www.esv.org to learn about the ESV Bible\" width=\"80\" height=\"21\" /></a>"
        . "</span>";
	
		$link .= $output_dynamic;
	}
	if (get_option('scripturizer_link_window')=='1') {
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
    	echo '<link rel="stylesheet" type="text/css" media="screen" href="'.get_settings('siteurl') .'/wp-content/plugins/the-holy-scripturizer/scripturizer.css"/>';
    }
}

if (! function_exists('esvShowHideHeader')) {

    function esvShowHideHeader() {

        $content = "
            <script language=\"javascript\" type=\"text/javascript\">

            var state = 'none';

            function showhide(layer_ref) {

            if (state == 'block') {
            state = 'none';
            document.getElementById(\"showhide\"+layer_ref).innerHTML = \"<small>[show]</small>\";
            }
            else {
            state = 'block';
            document.getElementById(\"showhide\"+layer_ref).innerHTML = \"<small>[hide]</small>\";
            }
            if (document.all) { //IS IE 4 or 5 (or 6 beta)
            eval( \"document.all.\" + layer_ref + \".style.display = state\");
            }
            if (document.layers) { //IS NETSCAPE 4 or below
            document.layers[layer_ref].display = state;
            }
            if (document.getElementById && !document.all) {
            maxwell_smart = document.getElementById(\"scripturizer\"+layer_ref);
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
            <script type=\"text/javascript\" src=\"".get_settings('siteurl') ."/wp-includes/js/prototype.js\"></script>
            <script type=\"text/javascript\" src=\"".get_settings('siteurl') ."/wp-content/plugins/the-holy-scripturizer/tooltip-v0.2.js\"></script>
            <script type=\"text/javascript\">
			Event.observe(window,\"load\",function() {
				   $$(\".scripturizer_tooltip\").findAll(function(node){
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
add_action('admin_head', 'esvShowHideHeader', 5);
add_action('admin_head', 'esvToolTipHeader', 5);

if (get_option('scripturizer_xml_show_hide')) { // Load the javascript if the xml show/hide option is turned on
    add_action('wp_head', 'esvShowHideHeader', 5);
}
if (get_option('scripturizer_xml_tooltip')) { // Load the javascript if the tooltip option is turned on
    add_action('wp_head', 'esvToolTipHeader', 5);
}
add_filter('the_content','scripturize'); // Scripturize the content of posts and pages
add_filter('comment_text','scripturize'); // Scripturize the comments of posts and pages

add_action('admin_menu', 'scripturizer_add_options'); // Load the Admin Options page
?>