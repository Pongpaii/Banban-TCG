<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    // GET /api/cards - ดึงการ์ดทั้งหมด
    public function index()
    {
        $cards = Card::with('priceSources')->get();
        
        return response()->json([
            'success' => true,
            'data' => $cards->map(function ($card) {
                return [
                    'id' => $card->id,
                    'slug' => $card->slug,
                    'name' => $card->name_en,
                    'nameTh' => $card->name_th,
                    'number' => $card->card_number,
                    'rarity' => $card->rarity,
                    'image' => $card->image_url,
                    'description' => $card->description,
                    'price' => '฿' . number_format($card->average_price),
                    'priceChange' => $card->price_change,
                    'sources' => $card->priceSources->map(function ($source) {
                        return [
                            'name' => $source->source_name,
                            'price' => '฿' . number_format($source->price)
                        ];
                    })
                ];
            })
        ]);
    }

    // GET /api/cards/{slug} - ดึงการ์ดตาม slug
    public function show($slug)
    {
        $card = Card::where('slug', $slug)->with('priceSources')->first();
        
        if (!$card) {
            return response()->json([
                'success' => false,
                'message' => 'ไม่พบการ์ดที่ค้นหา'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => [
                'id' => $card->id,
                'name' => $card->name_en,
                'nameTh' => $card->name_th,
                'number' => $card->card_number,
                'rarity' => $card->rarity,
                'rarityTh' => $this->getRarityTh($card->rarity),
                'set' => $card->set_name,
                'setTh' => $this->getSetTh($card->set_name),
                'description' => $card->description,
                'image' => $card->image_url,
                'currentPrice' => $card->average_price,
                'priceChange' => $card->price_change,
                'sources' => $card->priceSources->map(function ($source) {
                    return [
                        'name' => $source->source_name,
                        'price' => '฿' . number_format($source->price)
                    ];
                })
            ]
        ]);
    }

    // POST /api/cards/search - ค้นหาการ์ด
    public function search(Request $request)
    {
        $query = Card::with('priceSources');

        if ($request->has('name')) {
            $query->where('name_en', 'LIKE', '%' . $request->name . '%')
                  ->orWhere('name_th', 'LIKE', '%' . $request->name . '%');
        }

        if ($request->has('number')) {
            $query->where('card_number', 'LIKE', '%' . $request->number . '%');
        }

        $cards = $query->get();

        return response()->json([
            'success' => true,
            'data' => $cards
        ]);
    }

    private function getRarityTh($rarity)
    {
        $rarityMap = [
            'C' => 'ธรรมดา',
            'U' => 'อันคอมมอน',
            'R' => 'แรร์',
            'RR' => 'ดับเบิลแรร์',
            'RRR' => 'ทริปเปิลแรร์',
            'SR' => 'ซีเครทแรร์',
            'UR' => 'อัลตร้าแรร์',
            'AR' => 'อาร์ตแรร์',
            'SAR' => 'สเปเชียลอาร์ตแรร์',
            'ACE' => 'เอซ สเปค',
        ];
        return $rarityMap[$rarity] ?? $rarity;
    }

    private function getSetTh($set)
    {
        $setMap = [
            'sv1v' => 'ไวโอเล็ต ex',
            'sv1s' => 'สการ์เล็ต ex',
            'sv2a' => 'โปเกมอน การ์ด 151',
            // เพิ่มเติมตามต้องการ
        ];
        return $setMap[$set] ?? $set;
    }
}