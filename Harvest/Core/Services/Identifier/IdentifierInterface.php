<?php

namespace Harvest\Core\Services\Identifier;

interface IdentifierInterface
{
    public function generateIdentifier(int $id): int;

    public function getId(int $transactionIdentifier): int;
}
