<?php

namespace Rito\Discord\Command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use Rito\Discord\Main;


class DiscordCommand extends Command{
    public function __construct()
    {
        parent::__construct("discord", "Voire le discord du serveur", "/discord", ["ds", "contact"]);
        $this->setPermission("perm_cmd.discord");
    }
    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if ($sender instanceof Player){
            if ($sender->hasPermission("perm_cmd.discord")){
                $sender->sendMessage(str_replace(["{player}"], [$sender->getName()], Main::getInstance()->getConfig()->get("cmd-sendmessage")));
            }
        }
    }
}