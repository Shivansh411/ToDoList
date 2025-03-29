<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    // Get all tasks
    public function index()
    {
        $tasks = Task::all(); 
        return response()->json($tasks);
    }

    // Store a new task
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'task' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $task = Task::create([
            'task' => $request->task
        ]);

        return response()->json([
            'message' => 'Task created successfully!',
            'task' => $task
        ], 201);
    }

    // Show a single task
    public function show($id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }

        return response()->json($task);
    }

    // Update a task
    public function update(Request $request, $id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'task' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $task->update([
            'task' => $request->task
        ]);

        return response()->json([
            'message' => 'Task updated successfully!',
            'task' => $task
        ]);
    }

    // Delete a task
    public function destroy($id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }

        $task->delete();

        return response()->json(['message' => 'Task deleted successfully']);
    }
}
