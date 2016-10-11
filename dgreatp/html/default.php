<?php include('../layout/lesson.php')?>
<body>
<div class='w3-container top'>
<div class='w3schools-logo'><img src="../images/header/Logo1.png" alt="logo" /></div>
<div align = "right"><?php echo 'Welcome' ?>  </div>
<!-- href='../index.html'>Logout<span class='dotcom'>.com</span></a>-->
</div>

<div class='w3-navbar w3-card-2 w3-slim topnav' id='topnav'>
<div style='overflow:auto;'>
<div style='float:left;width:50%;overflow:hidden;height:44px'>
<a href='javascript:void(0);' class='topnav-localicons w3-hide-large w3-left' onclick='open_menu()' title='Menu'>DGP</a>
<a href='../default.php' class='topnav-icons fa fa-home w3-left' title='Home'>HOME</a>
<a href='../html/default.php' class='w3-hide-small' title='HTML Tutorial'>HTML</a><a href='../css/default.html' class='w3-hide-small' title='CSS Tutorial'>CSS</a><a href='../js/default.html' class='w3-hide-small' title='JavaScript Tutorial'>JAVASCRIPT</a><a href='../sql/default.html' class='w3-hide-small' title='SQL Tutorial'>SQL</a><a href='default.html' class='w3-hide-small' title='PHP Tutorial'>PHP</a><a href='../bootstrap/default.html' class='w3-hide-small' title='Bootstrap Tutorial'>BOOTSTRAP</a><a href='../jquery/default.html' class='w3-hide-small' title='jQuery Tutorial'>JQUERY</a><a href='../angular/default.html' class='w3-hide-small' title='Angular Tutorial'>ANGULAR</a><a href='../xml/default.html' class='w3-hide-small' title='XML Tutorial'>XML</a></div>
<div style='width:0;position:absolute;overflow:hidden;transition:all 0.3s;z-index:3;right:0;height:44px;background-color:#5f5f5f;letter-spacing:normal;' id='googleSearch'><div class='gcse-search'></div></div>
<div style='width:0;position:absolute;overflow:hidden;transition:all 0.2s;z-index:2;right:111px;height:44px;background-color:#5f5f5f;text-align:right;line-height:0.5;padding-top:7px;' id='google_translate_element'></div>
<div style='float:right;width:110px;overflow:hidden;height:44px;'>
<!--<a href='javascript:void(0);' class='topnav-icons fa w3-right' onclick='click_search(this)' style='position:relative;z-index:4;' title='Search W3Schools'></a>-->
<a href='#' class='topnav-icons fa w3-right'  title='Translate W3Schools'></a></div>
<div class='w3-hide-small' style='float:right;width:30%;overflow:hidden;height:44px;'>
<!--<a id='topnavbtn_tutorials' href='javascript:void(0);' onclick='w3_open_nav("tutorials")' title='Tutorials'>TUTORIALS <i class='fa fa-caret-down'></i>--><!--<i class='fa fa-caret-up' style='display:none'></i></a><a id='topnavbtn_references' href='javascript:void(0);' onclick='w3_open_nav("references")' title='References'>REFERENCES <i class='fa fa-caret-down'></i>--><i class='fa fa-caret-up' style='display:none'></i></a><!--<a id='topnavbtn_examples' href='javascript:void(0);' onclick='w3_open_nav("examples")' title='Examples'>EXAMPLES <i class='fa fa-caret-down'></i><i class='fa fa-caret-up' style='display:none'></i></a><a href='http://w3schools.invisionzone.com/'>FORUM</a>--></div></div>

<div id='nav_tutorials' class='w3-dropnav w3-light-grey w3-card-2 w3-center'></div>
<div id='nav_references' class='w3-dropnav w3-light-grey w3-card-2 w3-center'></div>
<div id='nav_examples' class='w3-dropnav w3-light-grey w3-card-2 w3-center'></div>
<div id='nav_translate' class='w3-dropnav w3-light-grey w3-card-2 w3-center'></div>
<div id='nav_search' class='w3-dropnav w3-light-grey w3-card-2 w3-center'></div></div>
<div class='w3-sidenav w3-collapse w3-slim' id='sidenav'>
<div id='leftmenuinner'>
<div class='w3-light-grey' id='leftmenuinnerinner'>
<a href='javascript:void(0)' onclick='close_menu()' class='w3-closebtn w3-hide-large w3-large' style='padding:3px 12px;'>&times;</a>
<h2 class="left"><span class="left_h2">HTML5</span> Tutorial</h2>
<a target="_top" href="default.php">HTML HOME</a>
<a target="_top" href="html_intro.html">HTML Introduction</a>
<a target="_top" href="html_editors.html">HTML Editors</a>
<a target="_top" href="html_basic.html">HTML Basic</a>
<a target="_top" href="html_elements.html">HTML Elements</a>
<a target="_top" href="html_attributes.html">HTML Attributes</a>
<a target="_top" href="html_headings.html">HTML Headings</a>
<a target="_top" href="html_paragraphs.html">HTML Paragraphs</a>
<a target="_top" href="html_styles.html">HTML Styles</a>
<a target="_top" href="html_formatting.html">HTML Formatting</a>
<a target="_top" href="html_quotation_elements.html">HTML Quotations</a>
<a target="_top" href="html_computercode_elements.html">HTML Computercode</a>
<a target="_top" href="html_comments.html">HTML Comments</a>
<a target="_top" href="html_colors.html">HTML Colors</a>
<a target="_top" href="html_css.html">HTML CSS</a>
<a target="_top" href="html_links.html">HTML Links</a>
<a target="_top" href="html_images.html">HTML Images</a>
<a target="_top" href="html_tables.html">HTML Tables</a>
<a target="_top" href="html_lists.html">HTML Lists</a>
<a target="_top" href="html_blocks.html">HTML Blocks</a>
<a target="_top" href="html_classes.html">HTML Classes</a>
<a target="_top" href="html_iframe.html">HTML Iframes</a>
<a target="_top" href="html_scripts.html">HTML JavaScript</a>
<a target="_top" href="html_head.html">HTML Head</a>
<a target="_top" href="html_layout.html">HTML Layout</a>
<a target="_top" href="html_responsive.html">HTML Responsive</a>
<a target="_top" href="html_entities.html">HTML Entities</a>
<a target="_top" href="html_symbols.html">HTML Symbols</a>
<a target="_top" href="html_charset.html">HTML Charset</a>
<a target="_top" href="html_urlencode.html">HTML URL Encode</a>
<a target="_top" href="html_xhtml.html">HTML XHTML</a>
<br>
<h2 class="left"><span class="left_h2">HTML</span> Forms</h2>
<a target="_top" href="html_forms.html">HTML Forms</a>
<a target="_top" href="html_form_elements.html">HTML Form Elements</a>
<a target="_top" href="html_form_input_types.html">HTML Input Types</a>
<a target="_top" href="html_form_attributes.html">HTML Input Attributes</a>
<br>
<h2 class="left"><span class="left_h2">HTML5</span></h2>
<a target="_top" href="html5_intro.php">HTML5 Intro</a>
<a target="_top" href="html5_browsers.html">HTML5 Support</a>
<a target="_top" href="html5_new_elements.html">HTML5 Elements</a>
<a target="_top" href="html5_semantic_elements.html">HTML5 Semantics</a>
<a target="_top" href="html5_migration.html">HTML5 Migration</a>
<a target="_top" href="html5_syntax.html">HTML5 Style Guide</a>
<br>
<h2 class="left"><span class="left_h2">HTML</span> Graphics</h2>
<a target="_top" href="html5_canvas.html">HTML Canvas</a>
<a target="_top" href="html5_svg.html">HTML SVG</a>
<a target="_top" href="html_googlemaps.html">HTML Google Maps</a>
<br>
<h2 class="left"><span class="left_h2">HTML</span> Media</h2>
<a target="_top" href="html_media.html">HTML Media</a>
<a target="_top" href="html5_video.html">HTML Video</a>
<a target="_top" href="html5_audio.html">HTML Audio</a>
<a target="_top" href="html_object.html">HTML Plug-ins</a>
<a target="_top" href="html_youtube.html">HTML YouTube</a>
<br>
<h2 class="left"><span class="left_h2">HTML</span> APIs</h2>
<a target="_top" href="html5_geolocation.html">HTML Geolocation</a>
<a target="_top" href="html5_draganddrop.html">HTML Drag/Drop</a>
<a target="_top" href="html5_webstorage.html">HTML Local Storage</a>
<a target="_top" href="html5_app_cache.html">HTML App Cache</a>
<a target="_top" href="html5_webworkers.html">HTML Web Workers</a>
<a target="_top" href="html5_serversentevents.html">HTML SSE</a>
<br>
<br></div></div></div>
<div class='w3-main w3-light-grey' id='belowtopnav' style='margin-left:220px;'>
<div class='w3-row w3-white'>
<div class='w3-col l10 m12' id='main'>
<div id='mainLeaderboard' style='overflow:hidden;'>
<!-- MainLeaderboard-->
<div id='div-gpt-ad-1422003450156-2'>
<script type='text/javascript'>googletag.cmd.push(function() { googletag.display('div-gpt-ad-1422003450156-2'); });</script>
</div></div>
<h1>HTML5<span class="color_h1"> Tutorial</span></h1>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn" href="../default.html">&#10094; Home</a>
<a class="w3-right w3-btn" href="html_intro.html">Next &#10095;</a>
</div>

<div class="w3-panel w3-info w3-large">
<p>With HTML you can create your own Web site.</p>
<p>This tutorial teaches you everything about HTML.</p>
<p>HTML is easy to learn - You will enjoy it.</p>
</div>

<hr>
<h2>Examples in Every Chapter</h2>
<p>This HTML tutorial contains some HTML examples.</p>
<p>With our online HTML editor, you can edit the HTML, and click on a button to 
view the result.</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
&lt;!DOCTYPE html&gt;<br>
&lt;html&gt;<br>&lt;head&gt;<br>&lt;title&gt;Page Title&lt;/title&gt;<br>
&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;h1&gt;This is my Heading&lt;/h1&gt;<br>&lt;p&gt;This is my paragraph.&lt;/p&gt;<br><br>
&lt;/body&gt;<br>&lt;/html&gt;
</div>
<a class="w3-btn w3-margin-bottom" href="tryitfb35.html?filename=tryhtml_default" target="_blank">Try it&raquo;</a>
</div>
<p><strong>Click on the &quot;Try it&quot; button to see how it works.</strong></p>
<hr>

<h2>HTML Exercises and Quiz Test</h2>
<p>Test your HTML skills at W3Schools!</p>
<p><a href="exercise8ec8.html?filename=exercise_attributes1" target="_blank">Start HTML Exercises!</a></p>
<p><a href="html_quiz.html">Start HTML Quiz!</a></p>
<hr>


<div class="w3-clear nextprev">
<a class="w3-left w3-btn" href="../default.html">&#10094; Home</a>
<a class="w3-right w3-btn" href="html_intro.html">Next &#10095;</a>
</div>
</div>
<div class="w3-col l2 m12" id="right">

<div id="stickypos" class="sidesection" style="text-align:center;">
<div id="stickyadcontainer">
<div style="position:relative;margin:auto;">
<div id='div-gpt-ad-1472547360578-0'>
<script>
  if (Number(w3_getStyleValue(document.getElementById("main"), "height").replace("px", "")) > 2200) {
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1472547360578-0'); });
    window.addEventListener("scroll", fix_stickyad);
    window.addEventListener("resize", fix_stickyad);
  }
</script>
</div>
</div>
</div>
</div>

</div>
</div>
<div id="footer" class="footer w3-container w3-white">

<hr>
<div style="overflow:auto">
<!-- BottomMediumRectangle -->
<div class="bottomad" id='div-gpt-ad-1422003450156-0'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1422003450156-0'); });
</script>
</div>

<!-- RightBottomMediumRectangle -->
<div class="bottomad" id='div-gpt-ad-1422003450156-3'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1422003450156-3'); });
</script>
</div>
</div>

<div class="w3-center w3-small w3-opacity">
. All Rights Reserved.<hr>
 <br>
</div>
<br><br>
</div>

</div>

<!--<div id="nav_tutorials_content" style="padding-bottom:32px;display:none;">
<span onclick='w3_close_nav("tutorials")' class='w3-closebtn w3-xlarge w3-hover-text-grey'>&times;</span>
<div class='w3-row-padding'>
<div class='w3-col m4'>
<h3>HTML and CSS</h3>
<a href='default.php'>Learn HTML</a>
<a href='../css/default.html'>Learn CSS</a>
<a href='../w3css/default.html'>Learn W3.CSS</a>
<a href='../colors/default.html'>Learn Colors</a>
<a href='../bootstrap/default.html'>Learn Bootstrap</a>
<a href='../graphics/default.html'>Learn Graphics</a>
<a href='../icons/default.html'>Learn Icons</a>
<a href='../howto/default.html'>Learn How To</a>
</div>
<div class='w3-col m4'>  
<h3>JavaScript</h3>
<a href='../js/default.html'>Learn JavaScript</a>
<a href='../jquery/default.html'>Learn jQuery</a>
<a href='../jquerymobile/default.html'>Learn jQueryMobile</a>
<a href='../appml/default.html'>Learn AppML</a>
<a href='../angular/default.html'>Learn AngularJS</a>
<a href='../json/default.html'>Learn JSON</a>
<a href='../ajax/default.html'>Learn AJAX</a>
<h3>XML</h3>
<a href='../xml/default.html'>Learn XML</a>
<a href='../xsl/default.html'>Learn XSLT</a>
<a href='../xsl/xpath_intro.html'>Learn XPath</a>
<a href='../xsl/xquery_intro.html'>Learn XQuery</a>
</div>
<div class='w3-col m4'>
<h3>Server Side</h3>
<a href='../sql/default.html'>Learn SQL</a>
<a href='../php/default.html'>Learn PHP</a>
<a href='../asp/default.html'>Learn ASP</a>
<h3>Web Building</h3>
<a href="../w3css/w3css_templates.html">Web Templates</a>
<a href='../browsers/default.html'>Web Statistics</a>
<a href='../cert/default.html'>Web Certificates</a>
</div>
</div>
</div>
<div id="nav_references_content" style="display:none;">
<span onclick='w3_close_nav("references")' class='w3-closebtn w3-xlarge w3-hover-text-grey'>&times;</span>
<div class='w3-row-padding'>
<div class='w3-col m4'>
<h3>HTML</h3>
<a href='../tags/default.html'>HTML Tag Reference</a>
<a href='../tags/ref_eventattributes.html'>HTML Event Reference</a>
<a href='../colors/default.html'>HTML Color Reference</a>
<a href='../tags/ref_attributes.html'>HTML Attribute Reference</a>
<a href='../tags/ref_canvas.html'>HTML Canvas Reference</a>
<a href='../graphics/svg_reference.html'>HTML SVG Reference</a>
<a href='../graphics/google_maps_reference.html'>Google Maps Reference</a>
<h3>CSS</h3>
<a href='../cssref/default.html'>CSS Reference</a>
<a href='../cssref/css_selectors.html'>CSS Selector Reference</a>
<a href='../w3css/w3css_references.html'>W3.CSS Reference</a>
<a href='../bootstrap/bootstrap_ref_css_text.html'>Bootstrap Reference</a>
</div>
<div class='w3-col m4'>
<h3>JavaScript</h3>
<a href='../jsref/default.html'>JavaScript Reference</a>
<a href='../jsref/default.html'>HTML DOM Reference</a>
<a href='../jquery/jquery_ref_selectors.html'>jQuery Reference</a>
<a href='../jquerymobile/jquerymobile_ref_data.html'>jQuery Mobile Reference</a>
<a href='../angular/angular_ref_directives.html'>AngularJS Reference</a>
<h3>XML</h3>
<a href='../xml/dom_nodetype.html'>XML Reference</a>
<a href='../xsl/xsl_w3celementref.html'>XSLT Reference</a>
<a href='../xml/schema_elements_ref.html'>XML Schema Reference</a>
</div>
<div class='w3-col m4'>
<h3>Charsets</h3>
<a href='../charsets/default.html'>HTML Character Sets</a>
<a href='../charsets/ref_html_ascii.html'>HTML ASCII</a>
<a href='../charsets/ref_html_ansi.html'>HTML ANSI</a>
<a href='../charsets/ref_html_ansi.html'>HTML Windows-1252</a>
<a href='../charsets/ref_html_8859.html'>HTML ISO-8859-1</a>
<a href='../charsets/ref_html_symbols.html'>HTML Symbols</a>
<a href='../charsets/ref_html_utf8.html'>HTML UTF-8</a>
<h3>Server Side</h3>
<a href='../php/php_ref_array.html'>PHP Reference</a>
<a href='../sql/sql_quickref.html'>SQL Reference</a>
<a href='../asp/asp_ref_response.html'>ASP Reference</a>
</div>
</div>
</div>
<div id="nav_examples_content" style="display:none;">
<span onclick='w3_close_nav("examples")' class='w3-closebtn w3-xlarge w3-hover-text-grey'>&times;</span>
<div class='w3-row-padding'>
<div class='w3-col l3 m6'>
<h3>HTML/CSS</h3>
<a href='html_examples.html'>HTML Examples</a>
<a href='../css/css_examples.html'>CSS Examples</a>
<a href='../w3css/w3css_examples.html'>W3.CSS Examples</a>
</div>-->
<!--<div class='w3-col l3 m6'>
<h3>JavaScript</h3>
<a href='../js/js_examples.html' target='_top'>JavaScript Examples</a>
<a href='../js/js_dom_examples.html' target='_top'>HTML DOM Examples</a>
<a href='../jquery/jquery_examples.html' target='_top'>jQuery Examples</a>
<a href='../jquerymobile/jquerymobile_examples.html' target='_top'>jQuery Mobile Examples</a>
<a href='../angular/angular_examples.html' target='_top'>AngularJS Examples</a>
<a href='../ajax/ajax_examples.html' target='_top'>AJAX Examples</a>-->
<!--</div>
<div class='w3-col l3 m6'>
<h3>Server Side</h3>
<a href='../php/php_examples.html' target='_top'>PHP Examples</a>
<a href="../asp/asp_examples.html" target="_top">ASP Examples</a>
</div>-->
<!--<div class='w3-col l3 m6'>
<h3>XML</h3>
<a href='../xml/xml_examples.html' target='_top'>XML Examples</a>
<a href='../xsl/xsl_examples.html' target='_top'>XSL Examples</a>
<a href='../xsl/xsl_examples.html' target='_top'>XSLT Examples</a>
<a href='../xsl/xpath_examples.html' target='_top'>XPath Examples</a>
<a href='../xml/schema_example.html' target='_top'>XML Schema Examples</a>
<a href='../graphics/svg_examples.html' target='_top'>SVG Examples</a>
</div>-->
</div>
</div>
<script src="../lib/w3schools_footer.js"></script>
<script src="../../translate.google.com/translate_a/elementa0d8.html?cb=googleTranslateElementInit"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
<![endif]-->
</body>


</html>
