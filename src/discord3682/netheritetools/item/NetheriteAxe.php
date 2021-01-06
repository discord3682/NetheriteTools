<?php

namespace discord3682\netheritetools\item;

use pocketmine\item\Axe;

class NetheriteAxe extends Axe
{

  public function __construct (int $id, int $meta, string $name, int $tier)
  {
    parent::__construct ($id, $meta, $name, $tier);
  }

  public function getMaxDurability () : int
  {
    return 2031;
  }
}
