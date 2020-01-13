<?php

declare(strict_types=1);

namespace App\Presenters;


final class TestovaciPresenter extends Nette\Application\UI\Presenter
{
    public function renderDefault(): void
    {
        $this->template->anyVariable = 'any value';
    }
}
