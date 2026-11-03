<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Workflow Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور workflow — همهٔ کلیدهای مستندشده در `docs/03-engines/workflow.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/workflow.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('WORKFLOW_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('WORKFLOW_PREFIX', 'workflow:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('WORKFLOW_LOG_CHANNEL', 'workflow'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Workflow',
        'accessor' => 'workflow',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];