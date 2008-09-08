=== The Holy Scripturizer ===
Contributors: laurence0, petervcook
Donate link: http://lo.notsorry.net
Tags: Bible, Scripture, Christian, post, comments, formatting, ajax
Requires at least: 2.1
Tested up to: 2.6.1
Stable tag: 1.8.3

Automatically link your Bible references to Bible sites. Works with almost every major Bible version in many languages. Easy setup; customizable.

== Description ==

Automaticallly hyperlink Bible references. No special tags or extra coding are needed. Simply type a Bible reference, like John 3:16, and it is converted automatically to [John 3:16](http://www.gnpcb.org/esv/search/?q=john+3.16 "Read John 3:16").

Scripturizer uses PHP-based filtering to automatically convert Bible references in your posts, pages, and comments into hyperlinks which point to major online Bible websites, such as the [Bible Gateway](http://www.biblegateway.com/ "The Bible Gateway"), [NET Bible](http://www.bible.org/ "The NET Bible"), the [ESV Bible](http://www.gnpcb.org/esv/ "The ESV Bible"), and others.

= Features: =
* **New** Display verse when mousing over reference.
* **Updated** Simplified admin interface.
* Easy to install
* Easy to administer via the admin panel under the Options/Settings tab (`Options/Settings --> Scripturizer`).
* Easy to use, just type in a scripture reference reference. 
* No proprietary markup tags. You don’t have to use special tags (such as [bible]Genesis 1:1[/bible]) around Bible references.
* More translations than any other plugin including NIV & The Message.
* Optional open Bible links in new windows.
* Automatically include the scripture from the ESV translation on rollover or with a show/hide link next to references.
* Works for posts, pages, and comments without modifying the database.
* Dozens of versions supported in many languages. To use a specific translation, simple post-fix the abbreviation for that translation to the reference, like this: Genesis 1:1 ESV; Genesis 1:1 NIV; etc. (See the usage instructions page for more detailed instructions.)
* Support for [Libronix](http://www.libronix.com/ "Libronix is a digital library software system from Logos Software") links.
* [Bibleref](http://semanticbible.com/bibleref/bibleref-overview.html "Bibleref, semantic standards for Bible verse markup") standards compliant.

= New in Version 1.8.3 =
* Fixed error where text such as "Acts 1984" would get matched as a Bible reference
* Validates as XHTML
* Small changes to the Admin interface

= New in Version 1.8.2 =
* Removed an unnecessary function to reduce file size

= New in Version 1.8.1 =
* Fixed bug where open in new window via icon feature would return 404 errors

= New in Version 1.8 =

* Added rollover tooltips
* ESV Show/Hide links can now be used even in the default translation links to another translation
* Show/Hide links changed from [+/-] to [show]
* Easier installation
* Streamlined code & smaller file size
* Redesigned Admin Panel to match WordPress 2.5
* CSS Code moved to an external file
* Added support for periods and endashes in the reference (ex. John 3.16&ndash;17)

== Installation ==

The Holy Scripturizer has a standard WP Plugin installtion process

= Install =

1. Upload `the-holy-scripturizer` to your `/wp-content/plugins/` directory.
1. If an older version of `scripurizer.php` or `the-holy-scripturizer` exists, remove it.
1. Activate the plugin through the 'Plugins' menu in WordPress

Customize setting by going to the Scripturizer admin panel in your Wordpress console (`Options/Settings --> Scripturizer`). Choose your settings, and then press the **Update Options** button. That's it!

= Use =

= Link to a Scripture Reference with Default Version =

Making a Scripture reference is easy. Simply type the name of the book and the reference, such as:

* John 3:16,
* or Romans 5:1-4,
* or Genesis 1-2.

You can also use abbreviations for the book names, such as:

* Gen. 1:1,
* Exo. 3-6,
* Psa 2.

All links created in this manner will be linked to your default Bible version (see below).

= Link to a Scripture Reference with a Specified Version =

To create a Bible link with a version other than your default version, type the abbreviated name of the version after the reference, like this:

* John 1:1 NIV
* Gen. 1-2 LXX
* Exodus 3 NRSV

The list of available versions with their abbreviations is below.

= Default Bible Version and Supported Versions =

Upon activation, the default Bible version is set to the English Standard Version (ESV). The default can be changed simply by changing the default Bible option on the `Options/Settings --> Scripturizer` page in your Wordpress control panel.

Scripturizer supports many versions (soon to be all versions) from the Bible Gateway plus the NET, NRSV, and LXX. Therefore, the list of supported versions with their corresponding abbreviations (i.e. the abbreviations that you should use in your links) is as follows:

1. 1940 Bulgarian Bible (BG1940)
1. 21st Century King James Version (KJ21)
1. American Standard Version (ASV)
1. Amplified Bible (AMP)
1. Arabic Life Application Bible (ALAB)
1. Bulgarian Bible (BULG)
1. Contemporary English Version (CEV)
1. Darby Translation (DARBY)
1. Detta är Bibeln på danska (DN1933)
1. Douay-Rheims 1899 American Edition (DRA)
1. Elberfelder (ELB)
1. English Standard Version (ESV)
1. Haitian Creole Version (HCV)
1. Hoffnung für Alle (HOF)
1. Holman Christian Standard Bible (HCSB)
1. King James Version (KJV)
1. Luther Bibel 1545 (LUTH1545)
1. Septuigent (LXX)
1. New American Standard Bible (NASB)
1. New English Translation (NET)
1. New International Readerís Version (NIRV)
1. New International Version (NIV)
1. New International Version - UK (NIVUK)
1. New King James Version (NKJV)
1. New Life Version (NLV)
1. New Living Translation (NLT)
1. New Revised Standard Version (NRSV)
1. Slovo na cestu (SNC)
1. The Message (MSG)
1. Today’s New International Version (TNIV)
1. Worldwide English (New Testament) (WE)
1. Wycliffe New Testament (WYC)
1. Young’s Literal Translation (YLT)

== Frequently Asked Questions ==

= Additional Features (ESV only) =

1. Display the scripture when the user's mouse rollsover the reference.
1. Create [show/hide] link for viewing the scripture without having to leave the current page.

= CSS Styles =

All elements that Scripturizer adds have clean CSS classes in order to make it easy for you to match the look with your site's template.

Tool Tip example:

`.tooltip {
		max-width: 30em;
		text-align: left;
      padding: 0.5em;
      margin: 0;
      background-color: #333;
      color: #FFF
}`

Box displayed after [show/hide] click is clicked:

`.scripturizer_showhide {
		display: none; 
		padding: 1em; 
		border-style: solid ;
		border-color: DarkGrey;
		border-width: 1px;
}`


Open in new window icon:

`.scripturizer_newwindow {
	margin-top: 0px; 
	margin-right: 0px; 
	margin-bottom: 0px; 
	margin-left: 5px; 
	border: 0px;
}`

= Credits =

Initial vision and Perl module:
[Dean Peters](http://www.HealYourChurchWebSite.com)
	
Additional Credits For Perl version:
[Jonathan Fox](http://vulpecula.us/~jon/)
[Jason Rust](http://rustyparts.com/blip/)
[Joseph Markey](http://thegreatlands.com/archives/000032.html)
[Brian A Thomas]
(http://www.brianathomas.com/archives/2005/01/17/editing-scripturizer/)
[Rob Hulson](http://www.robhulson.com/archives/000073.html)
 	
Port to PHP for Wordpress
[Glen Davis](http://www.glenandpaula.com)

WordPress Documentation
[Chip Bennett](http://www.chipbennett.net)

Maintaining Code
v1.5-1.7: [Laurence O'Donnell](http://laurenceo.com)
v1.8: [Peter V Cook](http://www.petervcook.com)

JavaScript:
show/hide link is modified from [this script](http://lists.evolt.org/archive/Week-of-Mon-20020624/116151.html)
[ToolTip](http://blog.innerewut.de/tooltip) for Prototype by [Jonathan Weiss](http://blog.innerewut.de/tooltip)

== Screenshots ==

1. Just type a Bible reference and a link to read that scripture is automatically added. (Shown with optional open-in-new-window icon.)
2. Scripture link with rollover Tool Tip option turned on.