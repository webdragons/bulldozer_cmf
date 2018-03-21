<?php

namespace bulldozer\db;

use bulldozer\App;

/**
 * Class ActiveRecord
 * @package bulldozer\db
 */
class ActiveRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public function rules(): array
    {
        $rules = [];

        foreach ($this->getAttributes() as $attribute => $value) {
            $rules[] = [$attribute, 'safe'];
        }

        return $rules;
    }

    /**
     * @param array $row
     * @return object|static
     * @throws \yii\base\InvalidConfigException
     */
    public static function instantiate($row)
    {
        return App::createObject([
            'class' => get_called_class(),
        ]);
    }
}