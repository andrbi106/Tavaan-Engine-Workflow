<?php

declare(strict_types=1);

namespace Tavaan\Engine\Workflow;

final class ProcessInstance
{
    public function fire(/* ... */): mixed
    {
        return null;
    }
    public function currentState(/* ... */): mixed
    {
        return null;
    }
    public function can(/* ... */): mixed
    {
        return $this->hasPermission($userId, $permission);
    }
    public function variables(/* ... */): mixed
    {
        return null;
    }
    public function complete(/* ... */): mixed
    {
        return null;
    }
    public function cancel(/* ... */): mixed
    {
        return null;
    }
}
