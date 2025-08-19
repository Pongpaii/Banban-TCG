<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    // GET /api/cards
    public function index()
    {
        $cards = Card::with('priceSources')->get();

        return response()->json([
            'success' => true,
            'data' => $cards->map(function ($card) {
                return $this->formatCardData($card);
            })
        ]);
    }

    // GET /api/cards/{slug}
    public function show($slug)
{
    // ดึงการ์ดจาก DB
    $card = Card::where('slug', $slug)->firstOrFail();

    // ถ้าไม่มี sources ให้สร้าง mock data
    if (!isset($card->sources) || empty($card->sources)) {
        $card->sources = [
            ['name' => 'Shopee', 'price' => '฿3,500'],
            ['name' => 'Lazada', 'price' => '฿3,450'],
            ['name' => 'Facebook Marketplace', 'price' => '฿3,600'],
        ];
    }

    return view('cards.show', compact('card'));
}
public function updatePrice(Request $request, Card $card)
{
    $request->validate([
        'price' => 'required|numeric|min:0',
    ]);

    $card->current_price = $request->price;
    $card->save();

    return response()->json([
        'success' => true,
        'new_price' => number_format($card->current_price),
    ]);
}
public function destroy(Card $card)
{
    $card->delete();
    return response()->json(['success' => true]);
}

    // POST /api/cards/search
    public function search(Request $request)
    {
        $query = Card::with('priceSources');

        if ($request->has('name')) {
            $query->where(function ($q) use ($request) {
                $q->where('name_en', 'LIKE', '%' . $request->name . '%')
                    ->orWhere('name_th', 'LIKE', '%' . $request->name . '%');
            });
        }

        if ($request->has('number')) {
            $query->where('card_number', 'LIKE', '%' . $request->number . '%');
        }

        $cards = $query->get();

        return response()->json([
            'success' => true,
            'data' => $cards->map(function ($card) {
                return $this->formatCardData($card);
            })
        ]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_en' => 'required|string|max:255',
            'name_th' => 'required|string|max:255',
            'card_number' => 'required|string|max:100',
            'rarity' => 'required|string|max:20',
            'set_name' => 'required|string|max:50',
            'description' => 'nullable|string',
            'image_url' => 'nullable|url',
            'slug' => 'required|string|unique:cards,slug',
            'average_price' => 'nullable|numeric',
            'price_change' => 'nullable|numeric',
        ]);

        $card = Card::create($validated);

        return redirect()->route('uploadsuccess');
    }


    // 🔄 Helper method: format card data for API
    private function formatCardData($card)
    {
        return [
            'id' => $card->id,
            'slug' => $card->slug,
            'name' => $card->name_en,
            'nameTh' => $card->name_th,
            'number' => $card->card_number,
            'rarity' => $card->rarity,
            'rarityTh' => $this->getRarityTh($card->rarity),
            'set' => $card->set_name,
            'setTh' => $this->getSetTh($card->set_name),
            'description' => $card->description,
            'image' => $card->image_url,
            'price' => '฿' . number_format($card->average_price),
            'priceChange' => $card->price_change,
            'sources' => $card->priceSources->map(function ($source) {
                return [
                    'name' => $source->source_name,
                    'price' => '฿' . number_format($source->price)
                ];
            })
        ];
    }

    // 🗂 Rarity to Thai
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

    // 🗂 Set name to Thai
    private function getSetTh($set)
    {
        $setMap = [
            'sv1v' => 'ไวโอเล็ต ex',
            'sv1s' => 'สการ์เล็ต ex',
            'sv2a' => 'โปเกมอน การ์ด 151',
            // เพิ่มเติมได้ที่นี่
        ];
        return $setMap[$set] ?? $set;
    }
}
