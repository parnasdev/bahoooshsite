<?php

namespace Harvest\Core\Services\Identifier;

use Jenssegers\Optimus\Optimus;
use JetBrains\PhpStorm\Pure;

trait IdentifierTrait
{
    private Optimus $optimus;

    public function __construct()
    {
        $this->optimus = new Optimus($this->getPrime(), $this->getInverse(), $this->getRandom());
    }

    #[Pure] public function generateIdentifier(int $id): int
    {
        return $this->optimus->encode($id);
    }

    #[Pure] public function getId(int $identifier): int
    {
        return $this->optimus->decode($identifier);
    }

    #[Pure] public function getBatchIds(array $identifiers): array
    {
        $ids = [];
        foreach ($identifiers as $identifier) {
            $ids[] = $this->getId($identifier);
        }

        return $ids;
    }

    #[Pure] public function getBatchIdentifiers(array $ids): array
    {
        $identifiers = [];
        foreach ($ids as $id) {
            $identifiers[] = $this->generateIdentifier($id);
        }

        return $identifiers;
    }

    abstract protected function getPrime(): int;

    abstract protected function getInverse(): int;

    abstract protected function getRandom(): int;
}
