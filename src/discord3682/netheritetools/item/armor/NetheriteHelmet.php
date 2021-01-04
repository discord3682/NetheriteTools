<?php

namespace discord3682\netheritetools\item\armor;

use pocketmine\item\Armor;

class NetheriteHelmet extends Armor
{

  public function __construct (int $id, int $meta, string $name)
  {
    parent::__construct ($id, $meta, $name);
  }

  public function getDefensePoints () : int
  {
    return 3;
  }

  public function getMaxDurability () : int
  {
    return 407;
  }
}
