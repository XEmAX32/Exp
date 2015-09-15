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
use pocketmine\event\player\PlayerAchievementAwardedEvent;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\player;

class Main extends PluginBase implements Listener{

public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this, $this);
$this->getLogger()->info(TextFormat::BLUE . "EXP enabled!");
$this->saveDefaultConfig();
$this->experience = new Config($this->getDataFolder()."experience.properties", Config::PROPERTIES);
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
experience->set($name $FirstJoinExperience);
   }
  }
}

public function PopupExperience(PlayerMoveEvent $e){
$exp = $this->experience->get("$name");
if($this->getConfig()->get("Popup_Show_Experience") == "true"){
  $player->sendPopup(TextFormat::GREEN . "You Experience: ".$exp)
  }
}

//Sposta nella vera funzione PlayerInteractEvent sotto
public function OnInteract(PlayerInteractEvent $e){
$p = $e->getPlayer();
$name = $e->getPlayer()->getName();
$Exp_Bottle_Quantity = $this->getConfig()->get("Exp_Bottle_Quantity");
if($p->getInventory()->getItemOnHand() == Item::/*devo trovare un item da mettere xD*/){
$p->getInventory()->removeItem(Item::?);
$this->experience->set($name [] + $Exp_Bottle_Quantity);
      }
}

//COMANDI VARI
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        if(strtolower($command->getName()){
            //sistemare le funzioni
          $addexp_command = $this->getConfig()->get("AddExp_Command");
          $exp_command = $this->getConfig()->get("MyExp_Command");
          $exp = $experience->get($name);
          $rmexp_command = $this->getConfig()->get("RmExp_Command");
          $quantity = 
          $name = $e->getPlayer()->getName();
          
          case "$exp_command":
            $sender->sendMessage(TextFormat::GREEN . "You have ".$exp);
            break;
          
          case "exphelp":
               if($sender->hasPermission("experience.manage")){
                  $sender->sendMessage(TextFormat::AQUA . "-=-=-Help For Experience-=-=-");
                  $sender->sendMessage(TextFormat::AQUA . "/$exp_command for show your exp");
                  $sender->sendMessage(TextFormat::AQUA . "/$addexp_command for add exp to a player");
                  $sender->sendMessage(TextFormat::AQUA . "/$rmexp_command for remove exp to a player");
                  if($this->getConfig()->get("Enchant_Sign") == "true"){
                  $sender->sendMessage(TextFormat::AQUA . "For use the EnchantShop feauture write in the first line of a sign the secret code");
                  $sender->sendMessage(TextFormat::AQUA . "in the second line write the")
                  }
          case "$addexp_command":
            if($sender->hasPermission("experience.manage")){
            $sender->sendMessage(TextFormat::GREEN . "Succesfully added ".$quantity TextFormat::GREEN . "to ".$name);
            $this->addExp();
            }else{
            $sender->sendMessage(TextFormat::RED . "You don't have permissions for run this command");
            }
            break;

          case "$rmexp_command":
            if($sender->hasPermission("experience.menage")){
            $sender->sendMessage(TextFormat::GREEN . "Succesfully removed ".$quantity TextFormat::GREEN . "to  ".$name);
            $this->rmExp();
            }else{
            $sender->sendMessage(TextFormat::RED . "You don't have permissions for run this command");
            }
            break;

//PLACE DEI CARTELLI
public function onPlace(BlockPlaceEvent $e){
$line1 = $e->getLine(1);
$secretcode = $this->getConfig()->get("Secret_Code");
if($ID == 68 or $ID == 63 && $line1 == $secretcode){
  $e->setLine(1, TextFormat::GREEN . "[Enchanter]"); 
            }
      }

public function onDeath(PlayerDeathEvent $e){
if($this->getConfig()->get("AddExp_OnKill") == "true"){
$quantity = $this->getConfig()->get("Exp_PerKill");
$name = $e->getEntity()->getLastDamageCause()->getDamager();
$this->addExp();
        }
      }
}

public function onInteract(PlayerInteractEvent $e){
if($ID == 63 or $ID == 68){
      $line1 = $tile->getLine(1);
      $line2 = $tile->getLine(2);
      $line3 = $tile->getLine(3);
      $line4 = $tile->getLine(4);
      $item = $e->getPlayer()->getInventory()->getItemOnHand();
      $tile = $event->getBlock()->getLevel()->getTile(new Vector3($event->getBlock()->getX(),$event->getBlock()->getY(),$event->getBlock()->getZ()));
        	if($tile instanceof Sign){
        	      if($tile->$line1 == "[Enchanter]"){
        	            if($item == Item::256 or $item == Item::257 or $item == Item::258 or $item == Item::261 or $item == Item::267 or $item == Item::268 or $item == Item::269 or $item == Item::270 or $item == Item::271 or $item == Item::272 or $item == Item::273 or $item == Item::274 or $item == Item::275 or $item == Item::276 or $item == Item::277 or $item == Item::278 or $item == Item::279 or $item == Item::283 or $item == Item::284 or $item == Item::285 or $item == Item::286){
        	            $player->addEnchant  
        	                  
        	            }
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
      
public function addExp(){
$experience->set($name + $quantity);
      }
      
public function rmExp(){
$experience->set($name - $quantity);
      }
}
?>
