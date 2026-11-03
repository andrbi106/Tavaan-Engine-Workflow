<?php

declare(strict_types=1);

namespace Tavaan\Engine\Workflow;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Workflow\Contracts\WorkflowManagerInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * WorkflowManagerServiceProvider — ثبت سرویس‌های موتور WorkflowManager.
 */
final class WorkflowManagerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(WorkflowManagerInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new WorkflowManager($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('workflow', $this->app->get(WorkflowManagerInterface::class));

        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Workflow\Console\Workflow_timersCommand::class;
        $this->commands[] = \Tavaan\Engine\Workflow\Console\Workflow_listCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            WorkflowManagerInterface::class,
            'workflow',
        ];
    }
}