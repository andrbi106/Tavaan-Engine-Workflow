<?php

declare(strict_types=1);

namespace Tavaan\Engine\Workflow;

final class ProcessInstance
{
    public function fire()
    {
        return null;
    }
    public function currentState()
    {
        return null;
    }
    public function can(string $permission): bool
    {
        return $this->hasPermission($permission);
    }
    public function variables()
    {
        return null;
    }
    public function complete()
    {
        return null;
    }
    public function cancel()
    {
        return null;
    }
}
