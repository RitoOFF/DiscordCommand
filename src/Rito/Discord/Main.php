<?php

namespace Rito\Discord;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;
use Rito\Discord\Command\DiscordCommand;

class Main extends PluginBase{

    use SingletonTrait;

    protected function onLoad(): void {
        self::setInstance($this);
    }


    public function onEnable(): void
    {
        $this->getResource("config.yml");
        $this->saveDefaultConfig();
        $this->getServer()->getCommandMap()->register("", new DiscordCommand());
        $this->getLogger()->notice("Enable -> Discord Plugin BY RITO | disocrd: rito.off");
    }
    public function onDisable(): void
    {
        $this->getLogger()->notice("Disable ->  Discord Plugin BY RITO | disocrd: rito.off");
    }
}