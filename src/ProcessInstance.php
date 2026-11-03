<?php

declare(strict_types=1);

namespace Tavaan\Engine\Workflow;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * ProcessInstance — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Workflow\Contracts\ProcessInstanceInterface
 */
final class ProcessInstance implements Contracts\ProcessInstanceInterface
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
    public function fire(/* ... */): mixed
    {
        // TODO: پیاده‌سازی fire مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function currentState(/* ... */): mixed
    {
        // TODO: پیاده‌سازی currentState مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function can(/* ... */): mixed
    {
        // TODO: پیاده‌سازی can مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function variables(/* ... */): mixed
    {
        // TODO: پیاده‌سازی variables مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function complete(/* ... */): mixed
    {
        // TODO: پیاده‌سازی complete مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function cancel(/* ... */): mixed
    {
        // TODO: پیاده‌سازی cancel مطابق مستندات (سند §3 API).
        return null;
    }
}