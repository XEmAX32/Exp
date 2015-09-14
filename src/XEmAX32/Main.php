<?php

namespace XEmAX32\Main;

use pocketmine\plugin\PluginBase;
use pocketmine\event\PlayerInteractEvent;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{

public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this, $this);
$this->getLogger()->info(TextFormat::BLUE . "EXP enabled!");
$this->saveDefaultConfig();
$this->experience = new Config($this->getDataFolder()."experience.yml", Config::YAML);
}
  
public function onDisable(){
$this->getLogger()->info(TextFormat::BLUE . "EXP disabled!");
$this->experience->save();
}

public function OnLoad(){
$this->experience->save();
}

public function onJoin(PlayerJoinEvent $e){
$FirstJoinExperience = $this->getConfig()->get("FirstJoin_Experience");
if(!$this->experience->exist($player)){
if($this->getConfig()->get("FirstJoin_Experience_Enabler") == "true"){
$this->experience->set($player, array($FirstJoinExperience);
   }
  }
}

public function OnInteract(PlayerInteractEvent $e){
$p = $e->getPlayer();
if($p->getInventory()->getItemOnHand() == Item::/*devo trovare un item da mettere xD*/){
$p->getInventory()->removeItem(Item::$Exp_Bottle);
}

    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        if(strtolower($command->getName()){
          $addexp_command = $this->getConfig()->get("AddExp_Command");
          $exp_command = $this->getConfig()->get("MyExp_Command");
          $exp = $this->experience->get("$player");
          $rmexp_command = $this->getConfig()->get("RmExp_Command");
          $quantity = 
          $name = $e->getPlayer()->getName();
          case "$exp_command":
            $sender->sendMessage(TextFormat::GREEN . "You have ".$exp);
            break;
          
          case "$addexp_command":
            if($sender->hasPermission("experience.addexp")){
            $sender->sendMessage(TextFormat::GREEN . "Succesfully added ".$quantity TextFormat::GREEN . "to ".$name);
            break;
            $this->experience->set($name)
            }else{
              $sender->sendMessage(TextFormat::RED . "You don't have permissions for run this command");
            }
            break;
          
          case "$rmexp_command":
            if($sender->hasPermission("experience.rmexp")){
            $sender->sendMessage(TextFormat::GREEN . "Succesfully removed ".$quantity TextFormat::GREEN . "to ".$name);
            }else{
              $sender->sendMessage(TextFormat::RED . "You don't have permissions for run this command")
            }
            break;
        }
    }
    
  public function onPlayerInteract(PlayerInteractEvent $e){
    $ID  = $e->getBlock()->getID();
    $p = $e->getPlayer();
    $line1 = $e->getLine(1);
    $line2 = $e->getLine(2);
    $line3 = $e->getLine(3);
    $secretcode = $this->getConfig()->get("Secret_Code");
    if($ID == 68 or $ID == 63){
      if($line1 == $secretcode){
        $rmexperience = $line3
        $addenchant = $line2
      }
      }
  }
}
