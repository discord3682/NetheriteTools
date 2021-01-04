<?php

namespace discord3682\netheritetools;

use discord3682\netheritetools\item\armor\NetheriteHelmet;
use discord3682\netheritetools\item\armor\NetheriteChestplate;
use discord3682\netheritetools\item\armor\NetheriteLeggings;
use discord3682\netheritetools\item\armor\NetheriteBoots;
use discord3682\netheritetools\item\NetheriteSword;
use discord3682\netheritetools\item\NetheriteShovel;
use discord3682\netheritetools\item\NetheritePickaxe;
use discord3682\netheritetools\item\NetheriteAxe;
use discord3682\netheritetools\item\NetheriteHoe;
use pocketmine\plugin\PluginBase;
use pocketmine\item\ItemFactory;
use pocketmine\item\TieredTool;
use pocketmine\item\Item;

class NetheriteTools extends PluginBase
{

  public function onLoad () : void
  {
    foreach ([
      new NetheriteSword (743, 0, 'Netherite Sword', TieredTool::TIER_DIAMOND),
      new NetheriteShovel (744, 0, 'Netherite Shovel', TieredTool::TIER_DIAMOND),
      new NetheritePickaxe (745, 0, 'Netherite Pickaxe', TieredTool::TIER_DIAMOND),
      new NetheriteAxe (746, 0, 'Netherite Axe', TieredTool::TIER_DIAMOND),
      new NetheriteHoe (747, 0, 'Netherite Hoe', TieredTool::TIER_DIAMOND),

      new NetheriteHelmet (748, 0, 'Netherite Helmet'),
      new NetheriteChestplate (749, 0, 'Netherite Chestplate'),
      new NetheriteLeggings (750, 0, 'Netherite Leggings'),
      new NetheriteBoots (751, 0, 'Netherite Boots')
    ] as $tool)
    {
      ItemFactory::registerItem ($tool);
      Item::addCreativeItem ($tool);
    }
  }
}
