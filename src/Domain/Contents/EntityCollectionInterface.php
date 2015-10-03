<?php

namespace Cnab\Domain\Contents;

interface EntityCollectionInterface extends \Traversable
{
    public function add(EntityInterface $entity);

    /**
     * @return EntityInterface[]
    */
    public function fetchAll();
}