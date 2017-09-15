<?php

namespace bulldozer\i18n;

/**
 * Class I18N
 * @package bulldozer\i18n
 */
class I18N extends \yii\i18n\I18N
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if (!isset($this->translations['bulldozer']) && !isset($this->translations['bulldozer*'])) {
            $this->translations['bulldozer'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'sourceLanguage' => 'en-US',
                'basePath' => '@bulldozer/messages',
            ];
        }
    }
}