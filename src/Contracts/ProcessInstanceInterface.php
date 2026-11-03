<?php

declare(strict_types=1);

namespace Tavaan\Engine\Workflow\Contracts;

/**
 * قرارداد ProcessInstance.
 *
 * @see \Tavaan\Engine\Workflow\ProcessInstance
 * @api 1.0
 */
interface ProcessInstanceInterface
{
    /**
     * متد fire.
     *
     * @return mixed
     */
    public function fire(/* ... */): mixed;

    /**
     * متد currentState.
     *
     * @return mixed
     */
    public function currentState(/* ... */): mixed;

    /**
     * متد can.
     *
     * @return mixed
     */
    public function can(/* ... */): mixed;

    /**
     * متد variables.
     *
     * @return mixed
     */
    public function variables(/* ... */): mixed;

    /**
     * متد complete.
     *
     * @return mixed
     */
    public function complete(/* ... */): mixed;

    /**
     * متد cancel.
     *
     * @return mixed
     */
    public function cancel(/* ... */): mixed;
}