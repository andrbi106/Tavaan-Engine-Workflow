<?php

declare(strict_types=1);

namespace Tavaan\Engine\Workflow\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * workflow:timers command.
 */
final class Workflow_timersCommand implements CommandInterface
{
    public function name(): string
    {
        return 'workflow:timers';
    }

    public function description(): string
    {
        return 'Run workflow:timers (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
