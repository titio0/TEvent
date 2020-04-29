<?php

//해당 플러그인 (TEvent)은 Fabrik-EULA에 의해 보호됩니다.//Fabrik-EULA : https://github.com/Flug-in-Fabrik/Fabrik-EULAnamespace TEvent;

namespace TEvent;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;


class TEvent extends PluginBase implements Listener {
     public function onEnable() {
               $this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );
               $this->getLogger ()->alert("티오 이벤트 플러그인 적용완료");   }

     public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{
       $command = $command->getName ();
       $name = $sender->getName ();
       $tag = "§3§l[ §f공지 §3] §f";

       if ($command == "이벤트공지") {
         if (! $sender->isOp ()) {
           $sender->sendMessage ( $tag . "당신은 권한이 없습니다. " );
           return true;
                }
                elseif (isset($args[0])) {
                  foreach ($this->getServer()->getOnlinePlayers() as $player) {
                     $player->addTitle("§6§l[§f!§6]§r§f " . $args[0]);}
                     return true;
                }
                else {
                  $sender->sendMessage ( $tag . "/이벤트공지 [할말]" );
                  return true;
                }
              }
            }
          }
