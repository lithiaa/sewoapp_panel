<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="SewoApp API Documentation",
 *     description="Dokumentasi API untuk SewoApp"
 * ),
 *
 * @OA\Server(
 *     url=L5_SWAGGER_CONST_HOST,
 *     description="API Server"
 * )
 *
 * @OA\Schema(
 *     schema="Order",
 *     type="object",
 *     required={"id_customer", "order_date", "start_date", "finish_date", "status", "total_price", "payment_method"},
 *     @OA\Property(property="id_order", type="integer", example=1, description="ID pesanan"),
 *     @OA\Property(property="id_customer", type="integer", example=1, description="ID customer"),
 *     @OA\Property(property="order_date", type="string", format="date", example="2025-10-14", description="Tanggal pemesanan"),
 *     @OA\Property(property="start_date", type="string", format="date", example="2025-10-15", description="Tanggal mulai sewa"),
 *     @OA\Property(property="finish_date", type="string", format="date", example="2025-10-20", description="Tanggal selesai sewa"),
 *     @OA\Property(property="status", type="string", example="pending", description="Status pesanan"),
 *     @OA\Property(property="total_price", type="number", format="float", example=500000, description="Total harga"),
 *     @OA\Property(property="payment_method", type="string", example="transfer", description="Metode pembayaran"),
 *     @OA\Property(property="payment_gateway_ref", type="string", example="TRX123456", description="Referensi payment gateway"),
 *     @OA\Property(property="created_at", type="string", format="date-time", example="2025-10-14T10:00:00Z", description="Tanggal dibuat"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", example="2025-10-14T10:00:00Z", description="Tanggal diupdate")
 * ),
 *
 * @OA\Schema(
 *     schema="OrderDetail",
 *     type="object",
 *     required={"id_order", "id_vehicle", "price", "total_days", "total_price"},
 *     @OA\Property(property="id_order_detail", type="integer", example=1, description="ID detail pesanan"),
 *     @OA\Property(property="id_order", type="integer", example=1, description="ID pesanan"),
 *     @OA\Property(property="id_vehicle", type="integer", example=1, description="ID kendaraan"),
 *     @OA\Property(property="price", type="number", format="float", example=250000, description="Harga per hari"),
 *     @OA\Property(property="total_days", type="integer", example=5, description="Total hari sewa"),
 *     @OA\Property(property="total_price", type="number", format="float", example=1250000, description="Total harga"),
 *     @OA\Property(property="created_at", type="string", format="date-time", example="2025-10-14T10:00:00Z"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", example="2025-10-14T10:00:00Z")
 * ),
 *
 * @OA\Schema(
 *     schema="Vehicle",
 *     type="object",
 *     required={"vehicle_name", "id_partner", "id_category", "price", "vehicle_year", "license_plate", "status"},
 *     @OA\Property(property="id_vehicle", type="integer", example=1, description="ID kendaraan"),
 *     @OA\Property(property="vehicle_name", type="string", example="Honda Beat", description="Nama kendaraan"),
 *     @OA\Property(property="id_partner", type="integer", example=1, description="ID partner"),
 *     @OA\Property(property="id_category", type="integer", example=1, description="ID kategori"),
 *     @OA\Property(property="price", type="number", format="float", example=75000, description="Harga sewa per hari"),
 *     @OA\Property(property="vehicle_year", type="integer", example=2023, description="Tahun kendaraan"),
 *     @OA\Property(property="license_plate", type="string", example="B 1234 XYZ", description="Nomor plat kendaraan"),
 *     @OA\Property(property="desc", type="string", example="Motor matic yang nyaman", description="Deskripsi kendaraan"),
 *     @OA\Property(property="status", type="string", example="available", description="Status kendaraan"),
 *     @OA\Property(property="image_url", type="string", example="https://example.com/image.jpg", description="URL gambar kendaraan"),
 *     @OA\Property(property="created_at", type="string", format="date-time", example="2025-10-14T10:00:00Z"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", example="2025-10-14T10:00:00Z")
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
