<?php

namespace App;

trait Selectable {

    protected function selectKey() {
        return 'name';
    }

    public function scopeOptions($query)
    {
        return $query->pluck(
            $this->getQualifiedSelectableColumn(),
            $this->getQualifiedKeyName()
        );
    }

    private function getQualifiedSelectableColumn() {
        return $this->getTable() .
            '.' . $this->selectKey();
    }
}
