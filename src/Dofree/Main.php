<?php

namespace Dofree;
use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;
use pocketmine\command\ConsoleCommandSender;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
class Main extends PluginBase{

	public function onEnable(){
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
		
		switch($cmd->getName()){
			case "dochonguoikhokhan":
			  $this->getServer()->broadcastMessage("Đã nhận đồ free vì khó khăn !");
			  $this->getServer()->dispatchCommand(new ConsoleCommandSender(), "kill " . $sender->getName() . "");
              return true;
            } else {
              $sender->sendMessage("deo co gi la free ca ok");
				}
			}
			return true;
		}
	}
}