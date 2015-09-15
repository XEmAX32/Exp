<?php


use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerAchievementAwardedEvent;
use pocketmine\utils\TextFormat;
use pocketmine\player;
use pocketmine\block;

class extends PluginBase implements Listener{

public function onDeath(PlayerDeathEvent $e){
