<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Orders",
 *     description="API Endpoints untuk manajemen pesanan"
 * )
 */
class OrderController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/orders",
     *     summary="Mendapatkan daftar semua pesanan",
     *     tags={"Orders"},
     *     @OA\Response(
     *         response=200,
     *         description="Daftar pesanan berhasil diambil",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Order")
     *         )
     *     )
     * )
     */
    public function index()
    {
        return Order::all();
    }

    /**
     * @OA\Post(
     *     path="/api/orders",
     *     summary="Membuat pesanan baru",
     *     tags={"Orders"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"id_customer","order_date","start_date","finish_date","status","total_price","payment_method"},
     *             @OA\Property(property="id_customer", type="integer", example=1),
     *             @OA\Property(property="order_date", type="string", format="date", example="2025-10-14"),
     *             @OA\Property(property="start_date", type="string", format="date", example="2025-10-15"),
     *             @OA\Property(property="finish_date", type="string", format="date", example="2025-10-20"),
     *             @OA\Property(property="status", type="string", example="pending"),
     *             @OA\Property(property="total_price", type="number", format="float", example=500000),
     *             @OA\Property(property="payment_method", type="string", example="transfer"),
     *             @OA\Property(property="payment_gateway_ref", type="string", example="TRX123456")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Pesanan berhasil dibuat",
     *         @OA\JsonContent(ref="#/components/schemas/Order")
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error"
     *     )
     * )
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_customer' => 'required|exists:customers,id_customer',
            'order_date' => 'required|date',
            'start_date' => 'required|date',
            'finish_date' => 'required|date|after_or_equal:start_rent',
            'status' => 'required|string|max:50',
            'total_price' => 'required|numeric',
            'payment_method' => 'required|string|max:50',
            'payment_gateway_ref' => 'nullable|string|max:100',
        ]);
        return Order::create($validated);
    }

    /**
     * @OA\Get(
     *     path="/api/orders/{id}",
     *     summary="Mendapatkan detail pesanan",
     *     tags={"Orders"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID pesanan",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Detail pesanan",
     *         @OA\JsonContent(ref="#/components/schemas/Order")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pesanan tidak ditemukan"
     *     )
     * )
     */
    public function show(string $id)
    {
        return Order::findOrFail($id);
    }

    /**
     * @OA\Put(
     *     path="/api/orders/{id}",
     *     summary="Mengupdate pesanan",
     *     tags={"Orders"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID pesanan",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="id_customer", type="integer", example=1),
     *             @OA\Property(property="order_date", type="string", format="date", example="2025-10-14"),
     *             @OA\Property(property="start_date", type="string", format="date", example="2025-10-15"),
     *             @OA\Property(property="finish_date", type="string", format="date", example="2025-10-20"),
     *             @OA\Property(property="status", type="string", example="completed"),
     *             @OA\Property(property="total_price", type="number", format="float", example=500000),
     *             @OA\Property(property="payment_method", type="string", example="transfer"),
     *             @OA\Property(property="payment_gateway_ref", type="string", example="TRX123456")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Pesanan berhasil diupdate",
     *         @OA\JsonContent(ref="#/components/schemas/Order")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pesanan tidak ditemukan"
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error"
     *     )
     * )
     */
    public function update(Request $request, string $id)
    {
        $order = Order::findOrFail($id);
        $validated = $request->validate([
            'id_customer' => 'sometimes|required|exists:customers,id_customer',
            'order_date' => 'sometimes|required|date',
            'start_date' => 'sometimes|required|date',
            'finish_date' => 'sometimes|required|date|after_or_equal:start_rent',
            'status' => 'sometimes|required|string|max:50',
            'total_price' => 'sometimes|required|numeric',
            'payment_method' => 'sometimes|required|string|max:50',
            'payment_gateway_ref' => 'sometimes|nullable|string|max:100',
        ]);
        $order->update($validated);
        return $order;
    }

    /**
     * @OA\Delete(
     *     path="/api/orders/{id}",
     *     summary="Menghapus pesanan",
     *     tags={"Orders"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID pesanan",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Pesanan berhasil dihapus"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pesanan tidak ditemukan"
     *     )
     * )
     */
    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return response()->noContent();
    }
}
