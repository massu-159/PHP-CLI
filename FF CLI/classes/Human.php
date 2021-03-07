<?php

class Human extends Lives
{
  const MAX_HITPOINT = 100;
  
  // コンストラクタ　名前は一度だけセットするように制限
  public function __construct($name, $hitPoint = 100, $attackPoint =20, $intelligence = 0)
  {
    parent::__construct($name, $hitPoint, $attackPoint, $intelligence);
  }
}