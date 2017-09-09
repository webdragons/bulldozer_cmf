<?php

namespace bulldozer\components;

use bulldozer\App;
use bulldozer\base\BackendModule;
use InvalidArgumentException;
use yii\base\Component;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

class BackendMenu extends Component
{
    /**
     * @var array
     */
    public $modules;

    /**
     * @var array
     */
    public $menuItems = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->menuItems[] = [
            'label' => 'Главная',
            'icon' => 'fa fa-home',
            'url' => Url::home(),
        ];

        if (is_array($this->modules)) {
            foreach ($this->modules as $module) {
                /** @var BackendModule $moduleObj */
                $moduleObj = App::$app->getModule($module);

                if ($moduleObj && $moduleObj instanceof BackendModule) {
                    $this->menuItems = ArrayHelper::merge($this->menuItems, $moduleObj->getMenuItems());
                } else {
                    throw new InvalidArgumentException($module . ' must be instance of BackendModule');
                }
            }
        } else {
            throw new InvalidArgumentException('Modules must be array');
        }

        $this->menuItems[] = [
            'label' => 'Вернуться на сайт',
            'icon' => 'fa fa-undo',
            'url' => '/',
        ];
    }
}