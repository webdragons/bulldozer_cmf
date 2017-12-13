<?php

namespace bulldozer\db;

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
}