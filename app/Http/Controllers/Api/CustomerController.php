<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 * @OA\Tag(
 *     name="Customers",
 *     description="API Endpoints untuk manajemen Customer"
 * )
 */
class CustomerController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/customers",
     *     tags={"Customers"},
     *     summary="Ambil semua customer",
     *     @OA\Response(
     *         response=200,
     *         description="List of customers"
     *     )
     * )
     */
    public function index()
    {
        return Customer::all();
    }

    /**
     * @OA\Get(
     *     path="/api/customers/{id}",
     *     tags={"Customers"},
     *     summary="Ambil data customer berdasarkan ID",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID customer",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Customer ditemukan"),
     *     @OA\Response(response=404, description="Customer tidak ditemukan")
     * )
     */
    public function show(string $id)
    {
        return Customer::findOrFail($id);
    }

    /**
     * @OA\Put(
     *     path="/api/customers/{id}",
     *     tags={"Customers"},
     *     summary="Update data customer",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="username", type="string"),
     *             @OA\Property(property="fullname", type="string"),
     *             @OA\Property(property="email", type="string"),
     *             @OA\Property(property="phone_number", type="string"),
     *             @OA\Property(property="address", type="string"),
     *             @OA\Property(property="password", type="string")
     *         )
     *     ),
     *     @OA\Response(response=200, description="Customer berhasil diupdate"),
     *     @OA\Response(response=404, description="Customer tidak ditemukan")
     * )
     */
    public function update(Request $request, string $id)
    {
        $customer = Customer::findOrFail($id);
        $validated = $request->validate([
            'username' => 'sometimes|required|string|max:255',
            'fullname' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:customers,email,' . $customer->id,
            'phone_number' => 'sometimes|nullable|numeric|unique:customers,phone_number,' . $customer->id,
            'address' => 'sometimes|nullable|string|max:255',
            'password' => 'sometimes|required|string|min:8|max:255',
        ]);
        $customer->update($validated);
        return $customer;
    }

    /**
     * @OA\Delete(
     *     path="/api/customers/{id}",
     *     tags={"Customers"},
     *     summary="Hapus customer",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=204, description="Customer berhasil dihapus"),
     *     @OA\Response(response=404, description="Customer tidak ditemukan")
     * )
     */
    public function destroy(string $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return response()->noContent();
    }

    /**
     * @OA\Post(
     *     path="/api/customers/login",
     *     tags={"Customers"},
     *     summary="Login customer",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"username","password"},
     *             @OA\Property(property="username", type="string"),
     *             @OA\Property(property="password", type="string")
     *         )
     *     ),
     *     @OA\Response(response=200, description="Login berhasil"),
     *     @OA\Response(response=401, description="Login gagal")
     * )
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $customer = Customer::where('username', $credentials['username'])->first();

        if ($customer && Hash::check($credentials['password'], $customer->password)) {
            return response()->json(['message' => 'Login successful', 'customer' => $customer], 200);
        } else {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }

    /**
     * @OA\Post(
     *     path="/api/customers/register",
     *     tags={"Customers"},
     *     summary="Register customer baru",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"username","fullname","email","password"},
     *             @OA\Property(property="username", type="string"),
     *             @OA\Property(property="fullname", type="string"),
     *             @OA\Property(property="email", type="string"),
     *             @OA\Property(property="phone_number", type="string"),
     *             @OA\Property(property="address", type="string"),
     *             @OA\Property(property="password", type="string")
     *         )
     *     ),
     *     @OA\Response(response=201, description="Registrasi berhasil")
     * )
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255|unique:customers',
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers',
            'phone_number' => 'nullable|numeric|unique:customers',
            'address' => 'nullable|string|max:255',
            'password' => 'required|string|min:8|max:255',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $customer = Customer::create($validated);

        return response()->json(['message' => 'Registration successful', 'customer' => $customer], 201);
    }

    /**
     * @OA\Post(
     *     path="/api/customers/logout",
     *     tags={"Customers"},
     *     summary="Logout customer",
     *     @OA\Response(response=200, description="Logout berhasil")
     * )
     */
    public function logout(Request $request)
    {
        return response()->json(['message' => 'Logout successful'], 200);
    }
}
