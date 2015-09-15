<?php

namespace ExperienceWorld\Commands\sub;

use ExperienceWorld\Commands\SubCmd;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;

class AddExpSubCmd extends SubCmd{
  
public function execute(CommandSender $sender, array $args){
if($sender->hasPermission("experience.manage")){
  $sender->sendMessage(TextFormat::AQUA . "-=-=-Help For ExperienceWorld-=-=-");
  $sender->sendMessage(TextFormat::AQUA . "/addexp for add exp to other players");
  $sender->sendMessage(TextFormat::AQUA . "/rmexp for remove exp from other players");
  $sender->sendMessage(TextFormat::AQUA . "For create an enchant shop do this:");
  $sender->sendMessage(TextFormat::AQUA . "Place a sign");
  $sender->sendMessage(TextFormat::AQUA . "Write in the first line the secret code");
  $sender->sendMessage(TextFormat::AQUA . "Write in the second line the enchant");
  $sender->sendMessage(TextFormat::AQUA . "Write in the third line the level");
  $sender->sendMessage(TextFormat::AQUA . "Write in the fourth line the cost in exp");
  break;
  }else{
  $sender->sendMessage(TextFormat::RED . "You don't have permissions for run this command");
  return true;
    }
  }
}
