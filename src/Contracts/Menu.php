<?php

namespace Bekwoh\LaravelContract\Contracts;

use Illuminate\Support\Collection;

interface Menu
{
    public function menus(): Collection;
}
