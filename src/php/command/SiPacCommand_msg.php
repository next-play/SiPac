<?php

class SiPacCommand_msg extends SiPacCommand
{
	public $usage = "/msg <user> [<message>]";
	public $description = "Starts  a private chat with a specific user. Optionally the chat will start with a given message.";
  
	public function check_permission()
	{
		return $this->chat->settings->get('can_join_channels');
	}
	public function execute()
	{
		$parameters = explode(" ", $this->parameters);
		
		if (!empty($parameters[0]))
		{
			$user = $parameters[0];
			if (substr($user, 0, 1) == "@")
				$user = substr($user, 1);
			
			if (isset($parameters[1]))
				$message = $parameters[1];
			else
				$message = false;
				
			foreach ($parameters as $key => $parameter)
			{
				if ($key > 1)
					$message = $message." ".$parameter;
			}
			
			$channel_name_self = $user;
			$channel_name_user = $this->chat->nickname;
				
			$channel_id = $this->chat->client_num.mt_rand(0, 10000);
				
			$join_return = $this->chat->db->add_task("join|".$channel_id."|".$channel_name_user, $user, $this->chat->channel->active, $this->chat->id);
			if ($join_return == false)
				return array("info_type"=>"error", "info_text"=>"<||user-not-found-text|".$user."||>");
			else
			{	
				$join_return = $this->chat->db->add_task("join|".$channel_id."|".$channel_name_self, $this->chat->nickname, $this->chat->channel->active, $this->chat->id);
				if ($message !== false)
					$this->chat->message->send($message, $channel_id);
			}
		}
		else
			return array("info_type"=>"error", "info_text"=>"<||arguments-missing-text||>");
	}
}

?>