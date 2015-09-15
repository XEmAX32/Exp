<?php

namespace ExperienceWorld\commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginIdentifiableCommand;
use pocketmine\utils\TextFormat;
use ExperienceWorld\Main;

class ExperienceWorldCommand extends Command implements PluginIdentifiableCommand{
    /** @var Main */
    public $ExperienceWorld;
    /** @var SubCmd[] */
    public $subCommands = [];
    public function __construct(Main $ExperienceWorld){
        parent::__construct("experience", "ExperienceWorld main command", "/exp help", ["ew"]);
        $this->ExperienceWorld = $ExperienceWorld;
        $this->setPermission("experience.command");
        foreach(new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($this->getPlugin()->getSubCommands())) as $obj){
            /** @var \SplFileObject $obj */
            if($obj->getExtension() !== "php"){
                continue;
            }
            $class = $obj->getBasename(".php"); //rimuove estensione .php
            $className = "\\".__NAMESPACE__."\\sub\\".$class;
            $this->subCommands[strtolower(substr($class, 0, -6))] = new $className($this->tntRun);
        }
    }
    public function execute(CommandSender $sender, $label, array $args){
        if(!isset($args[0])){
            $args[0] = "info";
        }
        $sub = array_shift($args);
        if(isset($this->subCommands[strtolower($sub)])){
            if(!$sender->hasPermission("experience.".strtolower($sub))){
                $sender->sendMessage(TextFormat::RED . "You don't have permission to use this command!");
                return true;
            }
            return $this->subCommands[strtolower($sub)]->execute($sender, $args);
        }
        $sender->sendMessage("Strange argument ".$sub.". Please use /exp help");
        return true;
    }
    /** @return Main */
    public function getPlugin(){
        return $this->ExperienceWorld;
    }
}
