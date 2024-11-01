<?php
/*
Plugin Name: WpMathEditor
Plugin URI: http://www.52nlp.com/wpmatheditor
Description: WpMathEditor is a WordPress plugin which shows the mathematical formula within your posts and pages.This plugin is based on the <a href="http://www.xm1math.net/phpmathpublisher/"target=_blank>PhpMathPublisher</a>, by calling the library functions it provides. Put your mathmatical expressions between &lt;m&gt;...&lt;/m&gt; tags, and it will convert the mathmatical expressions into a picture in your posts or pages.The basic mathmatical expressions you can find in the <a  href="http://www.xm1math.net/phpmathpublisher/doc/help.html"target=_blank>PhpMathPubliser help</a> doc.
Version: 0.1
Author: GaryPYang
Author URI: http://www.52nlp.com/
*/

/*  Copyright 2009 GaryPYang  (email : garypyang@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA */

$basedir = '/wp-content/plugins/WpMathEditor/phpmathpublisher';

// include the php math Publisher librarry
include_once( "phpmathpublisher/mathpublisher.php" );

function content2phpmath( $content )
{
	global $basedir;
	return mathfilter( $content, 12, get_bloginfo('url').$basedir.'/img/');
} 

add_filter( 'the_content', 'content2phpmath', 6 );

?>
