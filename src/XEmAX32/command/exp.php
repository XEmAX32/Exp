<?php

namespace ExperienceWorld\commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginIdentifiableCommand;
use pocketmine\utils\TextFormat;
use ExperienceWorld\Main;

public function onCommand(CommandSender $sender, $label, array $args){
    		switch($cmd->getName()){
$name = $e->getPlayer->getName();
$exp = $experience->get($name);

case "exp":
$sender->sendMessage(TextFormat::AQUA . "You have $exp exp");
return true;
    }
  }
}
