<?php
namespace bulldozer;

use Yii;

class App extends Yii
{
    /**
     * Returns an HTML hyperlink that can be displayed on your Web page showing "Powered by Bulldozer CMF" information.
     * @return string an HTML hyperlink that can be displayed on your Web page showing "Powered by Bulldozer CMF" information
     */
    public static function powered()
    {
        return \Yii::t('yii', 'Powered by {bulldozer}', [
            'bulldozer' => '<a href="https://webdragons.ru/" rel="external">Bulldozer CMF</a>'
        ]);
    }
}