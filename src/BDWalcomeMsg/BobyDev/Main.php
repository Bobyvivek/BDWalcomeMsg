<?php

namespace BDwalcomeMsg\BobyDev;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener {

    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("BDWelcomeMsg By BobyDev enabled!
 ⠛⠛⣿⣿⣿⣿⣿⡷⢶⣦⣶⣶⣤⣤⣤⣀⠀⠀⠀
 ⠀⠀⠀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⡀⠀
 ⠀⠀⠀⠉⠉⠉⠙⠻⣿⣿⠿⠿⠛⠛⠛⠻⣿⣿⣇⠀
 ⠀⠀⢤⣀⣀⣀⠀⠀⢸⣷⡄⠀⣁⣀⣤⣴⣿⣿⣿⣆
 ⠀⠀⠀⠀⠹⠏⠀⠀⠀⣿⣧⠀⠹⣿⣿⣿⣿⣿⡿⣿
 ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠛⠿⠇⢀⣼⣿⣿⠛⢯⡿⡟
 ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠦⠴⢿⢿⣿⡿⠷⠀⣿⠀
 ⠀⠀⠀⠀⠀⠀⠀⠙⣷⣶⣶⣤⣤⣤⣤⣤⣶⣦⠃⠀
 ⠀⠀⠀⠀⠀⠀⠀⢐⣿⣾⣿⣿⣿⣿⣿⣿⣿⣿⠀⠀
 ⠀⠀⠀⠀⠀⠀⠀⠈⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇⠀⠀
 ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⠻⢿⣿⣿⣿⣿⠟⠁
GitHub: https://github.com/Bobyvivek");
    }

    public function onPlayerJoin(PlayerJoinEvent $event): void {
        $player = $event->getPlayer();

        // Header message
        $player->sendMessage(TextFormat::GRAY . str_repeat("-", 50));
        $player->sendMessage(TextFormat::GOLD . "Welcome to " . TextFormat::LIGHT_PURPLE . "RiftMC");

        // Section: Store, Website, Discord, Twitter
        $player->sendMessage(TextFormat::RED . "STORE: " . TextFormat::YELLOW . "shop.riftmc.co " . TextFormat::GRAY . "[50% OFF SALE]");
        $player->sendMessage(TextFormat::YELLOW . "WEBSITE: " . TextFormat::WHITE . "www.riftmc.co");
        $player->sendMessage(TextFormat::AQUA . "DISCORD: " . TextFormat::WHITE . "riftmc.co/discord");
        $player->sendMessage(TextFormat::DARK_AQUA . "TWITTER: " . TextFormat::WHITE . "@riftmc_co");

        // Footer message
        $player->sendMessage(TextFormat::LIGHT_PURPLE . "UPDATES: " . TextFormat::GRAY . "You have unread updates. Use /updates to view.");
        $player->sendMessage(TextFormat::GRAY . str_repeat("-", 50));
    }
}