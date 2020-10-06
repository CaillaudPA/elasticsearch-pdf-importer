<?php

namespace CaillaudPA\Elastic\Importer;

use CaillaudPA\Elastic\Model\Document;

interface ImporterInterface
{
    /**
     * @param Document $document
     * @return string
     */
    public function import(Document $document);
}
