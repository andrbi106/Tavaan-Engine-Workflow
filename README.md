# Tavaan Engine — Workflow

> **گردش‌کار** — موتور Workflow در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.workflow` |
| نام | `Workflow` |
| عنوان فارسی | گردش‌کار |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Workflow` |
| نوع | `engine` |
| Facade | `Workflow` (accessor: `workflow`) |

## توضیحات

M7 — State Machine/BPM خودنوشته: DSL تعریف فرایند (ProcessBuilder) + JSON/Schema (Designer)، Guard/Action، دروازهٔ انحصاری (اولین guard موفق) و موازی (fork/join با Token)، Human Task (assignee role:/user: + claim/complete/delegate)، Timer (انسانی/ISO-8601 + workflow:timers)، Sub-Process (پیش‌برد والد با تکمیل فرزند)، History، Visualizer (DOT/Mermaid)، fire اتمیک (snapshot/restore)، محافظ DoS (max_active_instances) و mask متغیرهای حساس.

## خطاها (Exceptions)

- `Tavaan\Engine\Workflow\Exceptions\IllegalTransitionException`
- `Tavaan\Engine\Workflow\Exceptions\ProcessDefinitionException`
- `Tavaan\Engine\Workflow\Exceptions\TaskException`
- `Tavaan\Engine\Workflow\Exceptions\WorkflowException`

## Facadeها

- `Tavaan\Engine\Workflow\Facades\Workflow`

## کلاس‌های اصلی

- `src/Console/WorkflowListCommand.php`
- `src/Console/WorkflowTimersCommand.php`
- `src/Duration.php`
- `src/Events/ProcessTransitioned.php`
- `src/Events/TaskCreated.php`
- `src/Events/WorkflowCanceled.php`
- `src/Events/WorkflowCompleted.php`
- `src/Events/WorkflowStarted.php`
- `src/ProcessBuilder.php`
- `src/ProcessContext.php`
- `src/ProcessDefinition.php`
- `src/ProcessInstance.php`
- `src/StateDefinition.php`
- `src/StateFluent.php`
- `src/StateType.php`
- `src/Store/ArrayStore.php`
- `src/Store/DatabaseStore.php`
- `src/Store/StoreInterface.php`
- `src/Task.php`
- `src/TimerDefinition.php`
- ... و 6 فایل دیگر

## Service Providerها

- `Tavaan\Engine\Workflow\WorkflowManagerServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`

**موتورهای اختیاری:**

- `event`
- `database`
- `migration`
- `rbac`
- `queue`
- `console`
- `auth`

## جداول دیتابیس

- `tvn_workflows`
- `tvn_process_instances`
- `tvn_process_tasks`
- `tvn_process_history`

## دستورات CLI

- `workflow:timers`
- `workflow:list`

## پیکربندی

- فایل پیکربندی: `config/workflow.php`
- کلید: `workflow`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Workflow.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Workflow`** (این مخزن) | موتور Workflow |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
