<?php

namespace XEmAX32\Main;

use pocketmine\plugin\PluginBase;
use pocketmine\event\PlayerItemHeld;
use pocketmine\event\Listener;
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
