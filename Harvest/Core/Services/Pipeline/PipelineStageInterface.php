<?php

namespace Harvest\Core\Services\Pipeline;

interface PipelineStageInterface
{
    public function __invoke(AbstractPipelinePayload $payload): AbstractPipelinePayload;

    public function getPriority(): int;
}
