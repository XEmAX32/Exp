<?php

      #############################
      #   Experience By XEmAX32   #
      #     v1.0 in Development   #
      #############################
      
namespace ExperienceWorld;

use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerAchievementAwardedEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\utils\TextFormat;
use pocketmine\player;
use pocketmine\block;

class extends PluginBase implements Listener{

public function onDeath(PlayerDeathEvent $e){
if($this->getConfig()->get("AddExp_OnKill") == "true"){
$quantity = $this->getConfig()->get("Exp_PerKill");
$name = $e->getEntity()->getLastDamageCause()->getDamager();
$this->addExp();
  }
}
  
public function onJoin(PlayerJoinEvent $e){
$FirstJoinExperience = $this->getConfig()->get("FirstJoin_Experience");
$name = $e->getPlayer()->getName();
if(!$this->experience->exist($name)){
if($this->getConfig()->get("FirstJoin_Experience_Enabler") == "true"){
experience->set($name $FirstJoinExperience);
   }
  }
}

public function OnInteract(PlayerInteractEvent $e){
$p = $e->getPlayer();
$name = $e->getPlayer()->getName();
$Exp_Bottle_Quantity = $this->getConfig()->get("Exp_Bottle_Quantity");
if($p->getInventory()->getItemOnHand() == Item::/*devo trovare un item da mettere xD*/){
$p->getInventory()->removeItem(Item::?);
$experience->set($name + $Exp_Bottle_Quantity);
  }
}

public function onAchievementAwarded(PlayerAchievementAwardedEvent $e){
$p = $e->getPlayer();
$name = $e->getPlayer()->getName();
$quantity = $this->getConfig()->get("ExpAchievement");
if($this->getConfig()->get("Exp_OnAchievement") == "true"){
$this->addExp();
    }
  }
}
