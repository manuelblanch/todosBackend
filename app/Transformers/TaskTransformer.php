<?php

namespace App\Transformers;

use App\Exceptions\IncorrectModelException;

/**
 * Class TaskTransformer
 * @package App\Transformers
 */
class TaskTransformer extends Transformer
{
    /**
     * @param $resource
     * @return array
     * @throws IncorrectModelException
     */
    public function transform($resource)
    {
        if (!$resource instanceof \App\Task) {
            throw new IncorrectModelException();
        }

        return [
            'name'     => $resource['name'],
            'done'     => (bool) $resource['done'],
            'priority' => (int) $resource['priority'],
        ];
    }
}
