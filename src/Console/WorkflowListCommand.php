<?php

declare(strict_types=1);

namespace Tavaan\Engine\Workflow\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * workflow:list command.
 */
final class WorkflowListCommand implements CommandInterface
{
    public function name(): string
    {
        return 'workflow:list';
    }

    public function description(): string
    {
        return 'Run workflow:list (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
