<?php

namespace discord3682\netheritetools\item;

use pocketmine\item\Sword;

class NetheriteSword extends Sword
{

  public function __construct (int $id, int $meta, string $name, int $tier)
  {
    parent::__construct ($id, $meta, $name, $tier);
  }

  public function getMaxDurability () : int
  {
    return 2031;
  }

  public function getAttackPoints () : int
  {
    return 9;
  }
}
