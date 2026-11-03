<?php

declare(strict_types=1);

namespace Tavaan\Engine\Workflow;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * WorkflowManager — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Workflow\Contracts\WorkflowManagerInterface
 */
final class WorkflowManager implements Contracts\WorkflowManagerInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function define(/* ... */): mixed
    {
        // TODO: پیاده‌سازی define مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function start(/* ... */): mixed
    {
        // TODO: پیاده‌سازی start مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function instance(/* ... */): mixed
    {
        // TODO: پیاده‌سازی instance مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function definitions(/* ... */): mixed
    {
        // TODO: پیاده‌سازی definitions مطابق مستندات (سند §3 API).
        return null;
    }
}