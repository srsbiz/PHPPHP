<?php

namespace PHPPHP\Engine\OpLines;

class Iterate extends \PHPPHP\Engine\OpLine {

    public function execute(\PHPPHP\Engine\ExecuteData $data) {
        $this->op1->iterator = $this->op1->getIterator();
        if (!$this->op1->iterator->valid()) {
            $data->jumpTo($this->op2);
        } else {
            $data->nextOp();
        }
    }

}