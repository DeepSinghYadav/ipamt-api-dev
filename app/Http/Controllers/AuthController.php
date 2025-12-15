<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    /**
     * Register a new user (invite/open mode)
     */
    public function register(Request $request)
    {
        // Step 1: Validate input
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|unique:users,email',
            'password'    => 'required|min:6',
            'invite_code' => 'nullable|string',
        ]);

        try {
            // Step 2: Call AuthService
            $user = $this->authService->register($validated);

            return response()->json([
                'status'  => true,
                'message' => 'Registration successful',
                'data'    => $user
            ]);

        } catch (\Exception $e) {

            return response()->json([
                'status'  => false,
                'message' => $e->getMessage()
            ], 400);
        }
    }
}
