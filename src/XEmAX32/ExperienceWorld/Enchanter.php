<?php

      #############################
      #   Experience By XEmAX32   #
      #     v1.0 in Development   #
      #############################
      
namespace ExperienceWorld;

use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\player;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\item\enchantment\EnchantmentEntry;
use pocketmine\item\enchantment\EnchantmentList;
use pocketmine\item\Item;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\block;
use pocketmine\math\Vector3;

class Enchanter extends PluginBase implements Listener{

public function Enchanter(PlayerInteractEvent $e){
$ID = $e->getBlock()->getId();
$incantesimo = $tile->getLine(2);
$player = $e->getPlayer();
$level = $tile->getLine(3);
$name = $player->getName();
$tile = $event->getBlock()->getLevel()->getTile(new Vector3($event->getBlock()->getX(),$event->getBlock()->getY(),$event->getBlock()->getZ()));
$cost = $tile->getLine(4);
$item = $player->getInventory()->getItemOnHand();
if($ID == 68 or $ID == 63){
      if($tile->getLine(1) == "[Enchanter]"){
                   $player->addEnchant($enchant);
                   $item->addEnchantment($incantesimo);
                   $enchantment = Enchantment::getEnchantment($incantesimo);
                   $enchantment->setLevel($level);
                   $experience->set($name - $cost);
            }
      }
}
  
public function onPlace(BlockPlaceEvent $e){
$line1 = $e->getLine(1);
$enchant = $tile->getLine(2);
$secretcode = $this->getConfig()->get("Secret_Code");
$tile = $event->getBlock()->getLevel()->getTile(new Vector3($event->getBlock()->getX(),$event->getBlock()->getY(),$event->getBlock()->getZ()));
if($ID == 68 or $ID == 63){
  $e->setLine(1, TextFormat::GREEN . "[Enchanter]");
  if(!$tile->getLine(3) == <10){
        $player->sendMessage(TextFormat::RED . "[EW] Error reduce the level in the third line please");
               }
  if(!$enchant == )
            }   
      }
}
