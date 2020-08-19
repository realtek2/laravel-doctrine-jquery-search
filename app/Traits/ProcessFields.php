<?php

namespace App\Traits;

trait ProcessFields
{
    protected function getItem($item, $fields)
    {
        $result = [];
        if ($fields) {
            foreach ($fields as $field) {
                $result[$field] = $item->{'get' . ucfirst($field)}();
            }
        }
        return $result;
    }

    protected function getAllItems($items, $fields)
    {
        $result = [];
        if ($items) {
            foreach ($items as $item) {
                $result[] = $this->getItem($item, $fields);
            }
        }
        return $result;
    }
}
