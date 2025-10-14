<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Vehicles",
 *     description="API Endpoints untuk manajemen kendaraan"
 * )
 */
class VehicleController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/vehicles",
     *     summary="Mendapatkan daftar semua kendaraan",
     *     tags={"Vehicles"},
     *     @OA\Response(
     *         response=200,
     *         description="Daftar kendaraan berhasil diambil",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Vehicle")
     *         )
     *     )
     * )
     */
    public function index()
    {
        return Vehicle::all();
    }

    /**
     * @OA\Post(
     *     path="/api/vehicles",
     *     summary="Membuat kendaraan baru",
     *     tags={"Vehicles"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"vehicle_name","id_partner","id_category","price","vehicle_year","license_plate","status"},
     *             @OA\Property(property="vehicle_name", type="string", example="Honda Beat"),
     *             @OA\Property(property="id_partner", type="integer", example=1),
     *             @OA\Property(property="id_category", type="integer", example=1),
     *             @OA\Property(property="price", type="number", format="float", example=75000),
     *             @OA\Property(property="vehicle_year", type="integer", example=2023),
     *             @OA\Property(property="license_plate", type="string", example="B 1234 XYZ"),
     *             @OA\Property(property="desc", type="string", example="Motor matic yang nyaman untuk perjalanan"),
     *             @OA\Property(property="status", type="string", example="available"),
     *             @OA\Property(property="image_url", type="string", example="https://example.com/image.jpg")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Kendaraan berhasil dibuat",
     *         @OA\JsonContent(ref="#/components/schemas/Vehicle")
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
            'vehicle_name' => 'required|string|max:255',
            'id_partner' => 'required|exists:partners,id_partner',
            'id_category' => 'required|exists:categories,id_category',
            'price' => 'required|numeric',
            'vehicle_year' => 'required|integer',
            'license_plate' => 'required|string|max:50|unique:vehicles',
            'desc' => 'nullable|string',
            'status' => 'required|string|max:50',
            'image_url' => 'nullable|url|max:255',
        ]);
        return Vehicle::create($validated);
    }

    /**
     * @OA\Get(
     *     path="/api/vehicles/{id}",
     *     summary="Mendapatkan detail kendaraan",
     *     tags={"Vehicles"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID kendaraan",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Detail kendaraan",
     *         @OA\JsonContent(ref="#/components/schemas/Vehicle")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Kendaraan tidak ditemukan"
     *     )
     * )
     */
    public function show(string $id)
    {
        return Vehicle::findOrFail($id);
    }

    /**
     * @OA\Put(
     *     path="/api/vehicles/{id}",
     *     summary="Mengupdate kendaraan",
     *     tags={"Vehicles"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID kendaraan",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="vehicle_name", type="string", example="Honda Beat"),
     *             @OA\Property(property="id_partner", type="integer", example=1),
     *             @OA\Property(property="id_category", type="integer", example=1),
     *             @OA\Property(property="price", type="number", format="float", example=75000),
     *             @OA\Property(property="vehicle_year", type="integer", example=2023),
     *             @OA\Property(property="license_plate", type="string", example="B 1234 XYZ"),
     *             @OA\Property(property="desc", type="string", example="Motor matic yang nyaman untuk perjalanan"),
     *             @OA\Property(property="status", type="string", example="available"),
     *             @OA\Property(property="image_url", type="string", example="https://example.com/image.jpg")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Kendaraan berhasil diupdate",
     *         @OA\JsonContent(ref="#/components/schemas/Vehicle")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Kendaraan tidak ditemukan"
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error"
     *     )
     * )
     */
    public function update(Request $request, string $id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $validated = $request->validate([
            'vehicle_name' => 'sometimes|required|string|max:255',
            'id_partner' => 'sometimes|required|exists:partners,id_partner',
            'id_category' => 'sometimes|required|exists:categories,id_category',
            'price' => 'sometimes|required|numeric',
            'vehicle_year' => 'sometimes|required|integer',
            'license_plate' => 'sometimes|required|string|max:50|unique:vehicles,license_plate,' . $vehicle->id_vehicle . ',id_vehicle',
            'desc' => 'sometimes|nullable|string',
            'status' => 'sometimes|required|string|max:50',
            'image_url' => 'sometimes|nullable|url|max:255',
        ]);
        $vehicle->update($validated);
        return $vehicle;
    }

    /**
     * @OA\Delete(
     *     path="/api/vehicles/{id}",
     *     summary="Menghapus kendaraan",
     *     tags={"Vehicles"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID kendaraan",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Kendaraan berhasil dihapus"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Kendaraan tidak ditemukan"
     *     )
     * )
     */
    public function destroy(string $id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();
        return response()->noContent();
    }
}
