<?php

namespace ExperienceWorld\Commands\sub;

use ExperienceWorld\Commands\SubCmd;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;

class AddExpSubCmd extends SubCmd{
  
public function execute(CommandSender $sender, array $args){
  $name = $e->getPlayer()->getName();
  $quantity = 
  if($sender->hasPermission("experience.manage")){
    $experience->set($name + $quantity);
    $sender->sendMessage(TextFormat::AQUA . "You have added ".$quantity TextFormat::AQUA . "to "$name);
   }else{
     $sender->sendMessage(TextFormat::RED . "You don't have permissions for run this command");
   }
  }
}
