<?php
/*
    SiPac is highly customizable PHP and AJAX chat
    Copyright (C) 2013 Jan Houben

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License along
    with this program; if not, write to the Free Software Foundation, Inc.,
    51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */
 
/* GLOBAL CONFIG 

Please don't change anything here. 
If you want to change theese settings, use "$chat_settings[setting_name_here] = setting;" like in the sample index.php

*/
date_default_timezone_set('Europe/Berlin');


function return_default_settings()
{
	$chat_default_settings = array(
	"default_user_infos" => array(),
	"language" => "en",
	"log_language" => "en",
	"html_path" => "!!AUTO!!",
	"theme" => "default",
	"rows" => '1',
	"replace_own_username" => false,
	"deactivate_afk" => false,
	"auto_detect_no_afk" => true,
	"smileys" => array(
		':)' => "happy.png",
		';)' => "winking.png",
		":D" => "smile.png",
		":(" => "sad.png",
		":'(" => "cry.png",
		">:|" => "angry.png",
		":O" => "huh.png",
		"o_o" => "glasses.png",
		":/" => "worried.png",
		"*?*" => "question.png"
	),
	"smiley_width" => "!!AUTO!!",
	"smiley_height" => "!!AUTO!!",
	"time_24_hours" => true,
	"date_format" => "d.m.y",
	"channels" => array(
		"Main"
	),
	"can_join_channels" => true,
	"max_ping_remove" => 30,
	"username_var" => "!!AUTO!!",
	"custom_status" => "!!AUTO!!",
	"start_as_afk" => false,
	"can_rename" => true,
	"can_kick" => true,
	"can_ban" => true,
	"show_kick_user" => true,
	"show_ban_user" => true,
	"can_rename_others" => true,
	"can_see_ip" => false,
	"user_infos" => array(
	),
	"can_see_debug" => true,
	"default_debug" => "warn",
	"own_log_folder_for_chat_id" => true,
	"max_messages" => "50",
	
	
	
	"include_file" => false,
	"user_afk_class" => "!!AUTO!!",
	"user_online_class" => "!!AUTO!!"
	);
	
	return  $chat_default_settings;
}

?>