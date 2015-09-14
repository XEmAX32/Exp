<?php

      #############################
      #   Experience By XEmAX32   #
      #     v1.0 in Development   #
      #############################
      
namespace XEmAX32\Main;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use pocketmine\block;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\player;

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
$name = $e->getPlayer()->getName();
if(!$this->experience->exist($name)){
if($this->getConfig()->get("FirstJoin_Experience_Enabler") == "true"){
$this->experience->set($name [] + $FirstJoinExperience);
   }
  }
}

public function PopupExperience(PlayerMoveEvent $e){
$exp = $this->experience->get("$name");
if($this->getConfig()->get("Popup_Show_Experience") == "true"){
  $player->sendPopup(TextFormat::GREEN . "You Experience: ".$exp)
  }
}

public function OnInteract(PlayerInteractEvent $e){
$p = $e->getPlayer();
$name = $e->getPlayer()->getName();
$Exp_Bottle_Quantity = $this->getConfig()->get("Exp_Bottle_Quantity");
if($p->getInventory()->getItemOnHand() == Item::/*devo trovare un item da mettere xD*/){
$p->getInventory()->removeItem(Item::$Exp_Bottle);
$this->experience->set($name [] + $Exp_Bottle_Quantity);
      }
}

    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        if(strtolower($command->getName()){
            //sistemare le funzioni
          $addexp_command = $this->getConfig()->get("AddExp_Command");
          $exp_command = $this->getConfig()->get("MyExp_Command");
          $exp = $this->experience->get("$name");
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
            $this->experience->set($name [] + $quantity);
            }else{
              $sender->sendMessage(TextFormat::RED . "You don't have permissions for run this command");
            }
            break;
          
          case "$rmexp_command":
            if($sender->hasPermission("experience.rmexp")){
            $sender->sendMessage(TextFormat::GREEN . "Succesfully removed ".$quantity TextFormat::GREEN . "to ".$name);
            $this->experience->set($name [] - $quantity);
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
    $line4 = $e->getLine(4);
    $secretcode = $this->getConfig()->get("Secret_Code");
    if($this->getConfig()->get("Enchant_Sign") == "true"){
    if($ID == 68 or $ID == 63){
      if($line1 == $secretcode){
        $rmexperience = $line3;
        $item = $p->getInventory()->getItemOnHand();
        $addenchant = $line2;
        $level = $line4;
        $name = $e->getPlayer()->getName();
           $this->experience->set($name [] - $rmexperience);
               $item->addEnchantment($enchantment);
                $enchantment = Enchantment::getEnchantment($addenchant);
                $enchantment->setLevel($level);
                  }
                }
      }
}

public function onPlace(BlockPlaceEvent $e){
$line1 = $e->getLine(1);
$secretcode = $this->getConfig()->get("Secret_Code");
if($ID == 68 or $ID == 63 && $line1 == $secretcode){
  $e->setLine(1, TextFormat::GREEN . "[Enchanter]"); 
            }
      }

public function onDeath(PlayerDeathEvent $e){
if($this->getConfig()->get("AddExp_OnKill") == "true"){
$Exp_PerKill = $this->getConfig()->get("Exp_PerKill");
$name = $e->getEntity()->getLastDamageCause()->getDamager();
$this->experience->set($name [] + $Exp_PerKill);
        }
      }
}
