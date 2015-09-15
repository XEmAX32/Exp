<?php

      #############################
      #   Experience By XEmAX32   #
      #     v1.0 in Development   #
      #############################
      
namespace ExperienceWorld;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\Server;
use ExperienceWorld\Commands\ExperienceWorldCommand;

class Main extends PluginBase implements Listener{

public function onEnable(){
  $this->getLogger()->info(TextFormat::BLUE . "ExperienceWorld enabled");
  $this->getServer()->getCommandMap()->register("ExperienceWorld", new ExperienceWorldCommand($this));
  $this->saveDefaultConfig();
  $this->experience = new Config($this->getDataFolder()."experience.properties", Config::PROPERTIES);
}
    
public function PopupExperience(PlayerMoveEvent $e){
$exp = $this->experience->get("$name");
if($this->getConfig()->get("Popup_Show_Experience") == "true"){
$player->sendPopup(TextFormat::GREEN . "You Experience: ".$exp)
  }
}

public function onDisable(){
$this->getLogger()->info(TextFormat::BLUE . "ExperienceWorld disabled");
}

public function getSubCommands(){
return $this->getFile()."src/Commands/sub/";
  }
}
