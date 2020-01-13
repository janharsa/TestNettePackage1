<?php

declare(strict_types=1);

namespace App\Presenters;


use Nette\Application\UI\Presenter;

class TestovaciPresenter extends Presenter
{
    public function renderDefault(): void
    {
        $this->template->anyVariable = 'any value';
        $this->template->test = 'test2';
    }
}
