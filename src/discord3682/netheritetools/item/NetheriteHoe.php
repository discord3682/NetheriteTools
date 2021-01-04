<?php

namespace discord3682\netheritetools\item;

use pocketmine\item\Hoe;

class NetheriteHoe extends Hoe
{

  public function __construct (int $id, int $meta, string $name, int $tier)
  {
    parent::__construct ($id, $meta, $name, $tier);
  }

  public function getMaxDurability () : int
  {
    return 2000;
  }
}
