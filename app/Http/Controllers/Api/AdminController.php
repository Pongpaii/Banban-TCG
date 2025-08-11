<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\PriceSource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    // POST /api/admin/cards - เพิ่มการ์ดใหม่
    public function addCard(Request $request)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_th' => 'required|string|max:255',
            'card_number' => 'required|string|unique:cards',
            'rarity' => 'required|string',
            'set_name' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5120', // 5MB
            'prices' => 'required|array|min:1',
            'prices.*.source_name' => 'required|string',
            'prices.*.price' => 'required|numeric|min:0'
        ]);

        try {
            // อัปโหลดรูปภาพ
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('cards', 'public');
            }

            // สร้างการ์ดใหม่
            $card = Card::create([
                'name_en' => $request->name_en,
                'name_th' => $request->name_th,
                'card_number' => $request->card_number,
                'rarity' => $request->rarity,
                'set_name' => $request->set_name,
                'description' => $request->description,
                'image_url' => $imagePath ? Storage::url($imagePath) : null,
                'slug' => Str::slug($request->name_en)
            ]);

            // เพิ่มราคาจากแหล่งต่างๆ
            foreach ($request->prices as $priceData) {
                PriceSource::create([
                    'card_id' => $card->id,
                    'source_name' => $priceData['source_name'],
                    'price' => $priceData['price']
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => 'เพิ่มการ์ดใหม่สำเร็จ',
                'data' => $card->load('priceSources')
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'เกิดข้อผิดพลาด: ' . $e->getMessage()
            ], 500);
        }
    }

    // PUT /api/admin/cards/{id}/prices - อัปเดตราคา
    public function updatePrices(Request $request, $id)
    {
        $request->validate([
            'prices' => 'required|array',
            'prices.*.id' => 'nullable|exists:price_sources,id',
            'prices.*.source_name' => 'required|string',
            'prices.*.price' => 'required|numeric|min:0'
        ]);

        $card = Card::findOrFail($id);

        try {
            // ลบราคาเก่าทั้งหมด
            $card->priceSources()->delete();

            // เพิ่มราคาใหม่
            foreach ($request->prices as $priceData) {
                PriceSource::create([
                    'card_id' => $card->id,
                    'source_name' => $priceData['source_name'],
                    'price' => $priceData['price']
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => 'อัปเดตราคาสำเร็จ',
                'data' => $card->load('priceSources')
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'เกิดข้อผิดพลาด: ' . $e->getMessage()
            ], 500);
        }
    }
}