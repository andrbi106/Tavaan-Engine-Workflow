<?php

declare(strict_types=1);

namespace Tavaan\Engine\Workflow\Tests\Unit;

use Tavaan\Testing\TestCase;
use Tavaan\Engine\Workflow\WorkflowDefinition;
use Tavaan\Engine\Workflow\WorkflowManager;
use Tavaan\Engine\Workflow\ProcessInstance;

/**
 * T-NN scenario tests for the workflow engine.
 *
 * Generated from ROADMAP.md scenarios — real implementations, not placeholders.
 */
final class WorkflowScenarioTest extends TestCase
{'    public function t01_start_workflow_at_initial_state(): void\n    {\n        // Scenario T-01\n$def = new WorkflowDefinition("order");\n        $def->addState("pending")->addState("approved");\n        $def->setInitial("pending");\n        $def->addTransition("pending", "approved", "approve");\n        $mgr = new WorkflowManager();\n        $mgr->register($def);\n        $inst = $mgr->start("order");\n        $this->assertNotNull($inst);\n        $this->assertSame("pending", $inst->getState());\n    }\n    public function t02_fire_transition_changes_state(): void\n    {\n        // Scenario T-02\n$def = new WorkflowDefinition("wf");\n        $def->addState("a")->addState("b");\n        $def->setInitial("a");\n        $def->addTransition("a", "b", "go");\n        $mgr = new WorkflowManager();\n        $mgr->register($def);\n        $inst = $mgr->start("wf");\n        $ok = $inst->transition("go");\n        $this->assertTrue($ok);\n        $this->assertSame("b", $inst->getState());\n    }\n    public function t03_fire_invalid_action_returns_false(): void\n    {\n        // Scenario T-03\n$def = new WorkflowDefinition("wf");\n        $def->addState("a")->addState("b");\n        $def->setInitial("a");\n        $def->addTransition("a", "b", "go");\n        $mgr = new WorkflowManager();\n        $mgr->register($def);\n        $inst = $mgr->start("wf");\n        $this->assertFalse($inst->transition("invalid"));\n        $this->assertSame("a", $inst->getState());\n    }\n    public function t04_available_actions(): void\n    {\n        // Scenario T-04\n$def = new WorkflowDefinition("wf");\n        $def->addState("a")->addState("b")->addState("c");\n        $def->setInitial("a");\n        $def->addTransition("a", "b", "toB");\n        $def->addTransition("a", "c", "toC");\n        $mgr = new WorkflowManager();\n        $mgr->register($def);\n        $inst = $mgr->start("wf");\n        $actions = $inst->availableActions();\n        $this->assertCount(2, $actions);\n        $this->assertContains("toB", $actions);\n        $this->assertContains("toC", $actions);\n    }\n    public function t05_process_instance_complete_and_cancel(): void\n    {\n        // Scenario T-05\n$def = new WorkflowDefinition("wf");\n        $def->addState("a")->addState("b");\n        $def->setInitial("a");\n        $mgr = new WorkflowManager();\n        $mgr->register($def);\n        $inst = $mgr->start("wf");\n        $pi = new ProcessInstance($inst);\n        $this->assertFalse($pi->isCompleted());\n        $this->assertTrue($pi->complete());\n        $this->assertTrue($pi->isCompleted());\n        $this->assertFalse($pi->complete(), "double complete returns false");\n    }'}
