<?php

namespace Harvest\Core\Services\Pipeline;

interface PipelineInterface
{
    public function process(AbstractPipelinePayload $payload): AbstractPipelinePayload;

    public function __invoke(AbstractPipelinePayload $payload): AbstractPipelinePayload;
}
