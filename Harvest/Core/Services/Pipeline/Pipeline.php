<?php

namespace Harvest\Core\Services\Pipeline;

class Pipeline implements PipelineInterface
{
    public function __construct(private iterable $stages)
    {
    }

    public static function fromStages(iterable $stages): self
    {
        return new static($stages);
    }

    public function process(AbstractPipelinePayload $payload): AbstractPipelinePayload
    {
        $stages = is_array($this->stages) ? $this->stages : iterator_to_array($this->stages);

        usort($stages, fn($stageA, $stageB) => $stageB->getPriority() - $stageA->getPriority());

        foreach ($stages as $stage) {
            $payload = $stage($payload);
        }

        return $payload;
    }

    public function __invoke(AbstractPipelinePayload $payload): AbstractPipelinePayload
    {
        return $this->process($payload);
    }
}
