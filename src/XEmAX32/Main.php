<?php

namespace XEmAX32\Main;

use pocketmine\plugin\PluginBase;
use pocketmine\event\PlayerItemHeld;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{

public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this, $this);
$this->getLogger()->info(TextFormat::BLUE . "EXP enabled!");
$this->saveDefaultConfig();
}
  
public function onDisable(){
$this->getLogger()->info(TextFormat::BLUE . "EXP disabled!");
}

public function OnItemHeld(PlayerItemHeldEvent $e){
$p = $e->getPlayer();
$Exp_Bottle = $this->getConfig()->get("Exp_Bottle");
if($p->getInventory()->getItemOnHand() == Item::$Exp_Bottle){
$p->getInventory()->removeItem(Item::$Exp_Bottle);
}

    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        if(strtolower($command->getName()){
          $MyExp_Message = $this->getConfig()->get("MyExp_Message");
          $name = $e->getPlayer()->getName();
          case "$exp_command":
            $sender->sendMessage(TextFormat::GREEN . $MyExp_Message." ".$exp);
            break;
          
          case "$addexp_command":
            if($sender->hasPermission("experience.addexp")){
            $sender->sendMessage(TextFormat::GREEN . "Succesfully added ".$quantity TextFormat::GREEN . "to ".$name);
            break;
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
    if($ID == 68 or $ID == 63){
      if($tile->gettext(0) == "[EnchantShop]"){
      }
      }
  }
}
