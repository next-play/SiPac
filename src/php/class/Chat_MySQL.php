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
 
class Chat_MySQL
{
  private $host;
  private $db;
  private $user;
  private $pw;
  
  private $mysql_error;
  
  public function __construct($host, $user, $pw, $db)
  {
    $this->host = $host;
    $this->db = $db;
    $this->user = $user;
    $this->pw = $pw;
  }
  public function check()
  {
    $this->mysql_error = $this->connect();
    return $this->mysql_error;
  }
  
  public function get_posts($chat_id)
  {
    $this->connect();
    $chat_mysql = mysql_query("SELECT * FROM chat_entries ORDER BY id ASC");
    $posts = mysql_fetch_array($chat_mysql);
    return $posts;
  }
  
  private function connect()
  {
    /*Connect to mysql */
    if (!mysql_connect($this->host, $this->user, $this->pw))
      return mysql_error();
    else if (!mysql_select_db($this->db))
      return mysql_error();
    else
      return true;
  }
}



?>