<?php

declare(strict_types=1);

namespace Tavaan\Engine\Workflow\Contracts;

/**
 * قرارداد WorkflowManager.
 *
 * @see \Tavaan\Engine\Workflow\WorkflowManager
 * @api 1.0
 */
interface WorkflowManagerInterface
{
    /**
     * متد define.
     *
     * @return mixed
     */
    public function define(/* ... */): mixed;

    /**
     * متد start.
     *
     * @return mixed
     */
    public function start(/* ... */): mixed;

    /**
     * متد instance.
     *
     * @return mixed
     */
    public function instance(/* ... */): mixed;

    /**
     * متد definitions.
     *
     * @return mixed
     */
    public function definitions(/* ... */): mixed;
}