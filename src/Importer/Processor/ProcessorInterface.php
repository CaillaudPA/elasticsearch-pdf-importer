<?php

namespace CaillaudPA\Elastic\Importer\Processor;


interface ProcessorInterface
{
    /**
     * @param mixed $data
     * @return mixed
     */
    public function process(&$data);
}
