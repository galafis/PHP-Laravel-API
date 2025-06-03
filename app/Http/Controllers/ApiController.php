<?php

/**
 * API Controller
 * @author Gabriel Demetrios Lafis
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ApiController extends Controller
{
    /**
     * API Information
     */
    public function index(): JsonResponse
    {
        return response()->json([
            'message' => 'Laravel API by Gabriel Demetrios Lafis',
            'version' => '1.0.0',
            'author' => 'Gabriel Demetrios Lafis',
            'endpoints' => [
                'GET /api' => 'API information',
                'GET /api/users' => 'Get all users',
                'POST /api/users' => 'Create user',
                'GET /api/health' => 'Health check'
            ]
        ]);
    }

    /**
     * Get all users
     */
    public function getUsers(): JsonResponse
    {
        $users = [
            ['id' => 1, 'name' => 'Gabriel Lafis', 'email' => 'gabriel@example.com'],
            ['id' => 2, 'name' => 'John Doe', 'email' => 'john@example.com'],
            ['id' => 3, 'name' => 'Jane Smith', 'email' => 'jane@example.com']
        ];

        return response()->json([
            'success' => true,
            'message' => 'Users retrieved successfully',
            'data' => $users,
            'author' => 'Gabriel Demetrios Lafis'
        ]);
    }

    /**
     * Create user
     */
    public function createUser(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255'
        ]);

        $user = [
            'id' => rand(100, 999),
            'name' => $validated['name'],
            'email' => $validated['email'],
            'created_at' => now()->toISOString()
        ];

        return response()->json([
            'success' => true,
            'message' => 'User created successfully',
            'data' => $user,
            'author' => 'Gabriel Demetrios Lafis'
        ], 201);
    }

    /**
     * Health check
     */
    public function health(): JsonResponse
    {
        return response()->json([
            'status' => 'healthy',
            'timestamp' => now()->toISOString(),
            'author' => 'Gabriel Demetrios Lafis',
            'php_version' => PHP_VERSION,
            'laravel_version' => app()->version()
        ]);
    }
}
