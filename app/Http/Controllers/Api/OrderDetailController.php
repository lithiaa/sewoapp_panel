<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Order Details",
 *     description="API Endpoints untuk manajemen detail pesanan"
 * )
 */
class OrderDetailController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/order-details",
     *     summary="Mendapatkan daftar semua detail pesanan",
     *     tags={"Order Details"},
     *     @OA\Response(
     *         response=200,
     *         description="Daftar detail pesanan berhasil diambil",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/OrderDetail")
     *         )
     *     )
     * )
     */
    public function index()
    {
        return OrderDetail::all();
    }

    /**
     * @OA\Post(
     *     path="/api/order-details",
     *     summary="Membuat detail pesanan baru",
     *     tags={"Order Details"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"id_order","id_vehicle","price","total_days","total_price"},
     *             @OA\Property(property="id_order", type="integer", example=1),
     *             @OA\Property(property="id_vehicle", type="integer", example=1),
     *             @OA\Property(property="price", type="number", format="float", example=250000),
     *             @OA\Property(property="total_days", type="integer", example=5),
     *             @OA\Property(property="total_price", type="number", format="float", example=1250000)
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Detail pesanan berhasil dibuat",
     *         @OA\JsonContent(ref="#/components/schemas/OrderDetail")
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
            'id_order' => 'required|exists:orders,id_order',
            'id_vehicle' => 'required|exists:vehicles,id_vehicle',
            'price' => 'required|numeric',
            'total_days' => 'required|integer',
            'total_price' => 'required|numeric',
        ]);
        return OrderDetail::create($validated);
    }

    /**
     * @OA\Get(
     *     path="/api/order-details/{id}",
     *     summary="Mendapatkan detail pesanan berdasarkan ID",
     *     tags={"Order Details"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID detail pesanan",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Detail pesanan",
     *         @OA\JsonContent(ref="#/components/schemas/OrderDetail")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Detail pesanan tidak ditemukan"
     *     )
     * )
     */
    public function show(string $id)
    {
        return OrderDetail::findOrFail($id);
    }

    /**
     * @OA\Put(
     *     path="/api/order-details/{id}",
     *     summary="Mengupdate detail pesanan",
     *     tags={"Order Details"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID detail pesanan",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="id_order", type="integer", example=1),
     *             @OA\Property(property="id_vehicle", type="integer", example=1),
     *             @OA\Property(property="price", type="number", format="float", example=250000),
     *             @OA\Property(property="total_days", type="integer", example=5),
     *             @OA\Property(property="total_price", type="number", format="float", example=1250000)
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Detail pesanan berhasil diupdate",
     *         @OA\JsonContent(ref="#/components/schemas/OrderDetail")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Detail pesanan tidak ditemukan"
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error"
     *     )
     * )
     */
    public function update(Request $request, string $id)
    {
        $orderDetail = OrderDetail::findOrFail($id);
        $validated = $request->validate([
            'id_order' => 'sometimes|required|exists:orders,id_order',
            'id_vehicle' => 'sometimes|required|exists:vehicles,id_vehicle',
            'price' => 'sometimes|required|numeric',
            'total_days' => 'sometimes|required|integer',
            'total_price' => 'sometimes|required|numeric',
        ]);
        $orderDetail->update($validated);
        return $orderDetail;
    }

    /**
     * @OA\Delete(
     *     path="/api/order-details/{id}",
     *     summary="Menghapus detail pesanan",
     *     tags={"Order Details"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID detail pesanan",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Detail pesanan berhasil dihapus"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Detail pesanan tidak ditemukan"
     *     )
     * )
     */
    public function destroy(string $id)
    {
        $orderDetail = OrderDetail::findOrFail($id);
        $orderDetail->delete();
        return response()->noContent();
    }
}
