<?php

namespace Cnab\Domain\Message;

use Cnab\Domain\Contents\EntityCollectionInterface;
use Cnab\Domain\Contents\FooterInterface;
use Cnab\Domain\Contents\HeaderInterface;

interface MessageInterface
{
    /**
     * @return HeaderInterface
     */
    public function getHeader();

    /**
     * @return EntityCollectionInterface
     */
    public function getContents();

    /**
     * @return FooterInterface
     */
    public function getFooter();
}