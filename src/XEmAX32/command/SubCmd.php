<?php

namespace ExperienceWorld\Commands;

use pocketmine\command\CommandSender;
use ExperienceWorld\Main;

abstract class SubCmd{
    private $ExperienceWorld;
    public function __construct(Main $ExperienceWorld){
        $this->ExperienceWorld = $ExperienceWorld;
    }
    public abstract function execute(CommandSender $sender, array $args);
    public function getMain(){
        return $this->ExperienceWorld;
    }
}
