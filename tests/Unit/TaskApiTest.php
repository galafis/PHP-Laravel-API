<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Task;

class TaskApiTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_task()
    {
        $response = $this->postJson("/api/tasks", [
            "title" => "Test Task",
            "description" => "This is a test description.",
            "completed" => false,
        ]);

        $response->assertStatus(201)
                 ->assertJsonFragment(["title" => "Test Task"]);

        $this->assertDatabaseHas("tasks", ["title" => "Test Task"]);
    }

    /** @test */
    public function it_can_list_all_tasks()
    {
        Task::factory()->create(["title" => "Task 1"]);
        Task::factory()->create(["title" => "Task 2"]);

        $response = $this->getJson("/api/tasks");

        $response->assertStatus(200)
                 ->assertJsonCount(2)
                 ->assertJsonFragment(["title" => "Task 1"])
                 ->assertJsonFragment(["title" => "Task 2"]);
    }

    /** @test */
    public function it_can_show_a_single_task()
    {
        $task = Task::factory()->create(["title" => "Single Task"]);

        $response = $this->getJson("/api/tasks/" . $task->id);

        $response->assertStatus(200)
                 ->assertJsonFragment(["title" => "Single Task"]);
    }

    /** @test */
    public function it_can_update_a_task()
    {
        $task = Task::factory()->create(["title" => "Old Title"]);

        $response = $this->putJson("/api/tasks/" . $task->id, [
            "title" => "New Title",
            "completed" => true,
        ]);

        $response->assertStatus(200)
                 ->assertJsonFragment(["title" => "New Title", "completed" => true]);

        $this->assertDatabaseHas("tasks", ["id" => $task->id, "title" => "New Title", "completed" => true]);
    }

    /** @test */
    public function it_can_delete_a_task()
    {
        $task = Task::factory()->create();

        $response = $this->deleteJson("/api/tasks/" . $task->id);

        $response->assertStatus(200)
                 ->assertJsonFragment(["message" => "Task deleted successfully"]);

        $this->assertDatabaseMissing("tasks", ["id" => $task->id]);
    }

    /** @test */
    public function it_returns_404_if_task_not_found_on_show()
    {
        $response = $this->getJson("/api/tasks/999");
        $response->assertStatus(404);
    }

    /** @test */
    public function it_returns_404_if_task_not_found_on_update()
    {
        $response = $this->putJson("/api/tasks/999", ["title" => "Non Existent"]);
        $response->assertStatus(404);
    }

    /** @test */
    public function it_returns_404_if_task_not_found_on_delete()
    {
        $response = $this->deleteJson("/api/tasks/999");
        $response->assertStatus(404);
    }

    /** @test */
    public function it_validates_task_creation_request()
    {
        $response = $this->postJson("/api/tasks", [
            "description" => "Missing title",
        ]);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors(["title"]);
    }

    /** @test */
    public function it_validates_task_update_request()
    {
        $task = Task::factory()->create();

        $response = $this->putJson("/api/tasks/" . $task->id, [
            "title" => null, // Title cannot be null if present
        ]);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors(["title"]);
    }
}

