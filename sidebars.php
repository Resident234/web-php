<?php
// $Id$
$_SERVER['BASE_PAGE'] = 'sidebars.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/prepend.inc';
site_header("PHP.net Search Bars");
?>
<h1>PHP.net Search Bars</h1>

<p>
 Among the many smart access methods to get to information quickly
 on the PHP site, we provide sidebars for the most popular browsers
 used on different operating systems to access PHP.net pages easily.
 Here you can find setup and uninstall information for the browsers
 supported. Feel free to send in suggestions on how to implement our 
 sidebar for another browser or how to enhance it's services by sending
 an email to <a href="mailto:webmaster@php.net">the webmasters</a>.
</p>

<h2>Mozilla 0.9.4 and above</h2>
<script type="text/javascript">
function addPanel()
{
    if ((typeof window.sidebar == "object") && (typeof window.sidebar.addPanel == "function")) {
        window.sidebar.addPanel("PHP.net Search Bar", "<?php echo $MYSITE; ?>searchbar.php", "");
    } else {
        alert('Sidebar cannot be added! You must use Mozilla 0.9.4 or later!');
    }
}
</script>
<p>
 If you use Mozilla 0.9.4 or later, you can <a href="javascript:addPanel()">add
 our sidebar to your set</a>. You can uninstall this sidebar using the "Customize
 Sidebar" dialog in Mozilla. <em>To get more information on Mozilla sidebars
 see the <a href="http://wp.netscape.com/sidebar/how.html">Netscape Sidebar
 Howto</a>.</em>
</p>

<h2>Internet Explorer 5 and above</h2>

<p>
 If you use Internet Explorer 5 or above on Windows, you can add the
 <a href="javascript:void(open('<?php echo $MYSITE; ?>searchbar.php','_search'))">PHP.net Search Bar</a>
 to your Links toolbar (dragging the link there) or you can add it to your 
 favorites and clicking on it you can see our bar displayed in place of your
 usual search bar. This link does not install our bar as your default search bar,
 so no modification is made to your system. <em>We used the _search target name
 supported by IE 5+ passed to the
 <a href="http://msdn.microsoft.com/workshop/author/dhtml/reference/methods/open_1.asp">open()
 JavaScript function</a> to make this sidebar available.</em>
</p>

<p>
 If you use Internet Explorer 5 or above on MacOS,
 <a href="<?php echo $MYSITE; ?>searchbar.php">open our sidebar page</a> in a
 separate window. In that window, open the "Page Holder" tab on the left side
 of the window. Click "Add." If you want to keep it for future use, click on
 "Favorites" and select "Add to Page Holder Favorites." <em>If you would like to
 read more about the Page Holder, see
 <a href="http://www.microsoft.com/mac/products/ie/ie_main.asp?embfpath=howto&amp;embfname=ie_1.asp">Microsoft's
 Macintosh IE page</a>.</em>
</p>

<h2>Opera 6 and above</h2>

<p>
 If you are using Opera, you can <a href="<?php echo $MYSITE; ?>searchbar.php"
 rel="sidebar" title="PHP.net Search Bar">click on this link to add our sidebar
 to your set</a>. You can uninstall the sidebar by right clicking on it's tab
 and choosing "Delete" from the context menu.
 <em><a href="http://www.tntluoma.com/opera/lover/day16-sidebars/">Read
 more about Opera sidebars on this page</a>.</em>
</p>

<?php site_footer(); ?>
