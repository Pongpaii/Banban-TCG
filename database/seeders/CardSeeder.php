<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Card;
use App\Models\PriceSource;

class CardSeeder extends Seeder
{
    public function run()
    {
        $cards = [
            [
                'name_en' => 'Kijikigisu EX',
                'name_th' => 'คิจิคิกิสึ ex',
                'card_number' => 'SV5s-104/166',
                'rarity' => 'RR',
                'set_name' => 'sv5s',
                'description' => 'เทิร์นที่แล้ว ถ้ามีตัวตาย จั่ว สามใบ',
                'image_url' => '/images/kiji.png',
                'prices' => [
                    ['source_name' => 'Pokemon TCG Thailand', 'price' => 2800],
                    ['source_name' => 'Card Market TH', 'price' => 2750],
                    ['source_name' => 'TCG Facebook Group', 'price' => 2900],
                ]
            ],
            [
                'name_en' => 'Mew EX',
                'name_th' => 'มิว ex',
                'card_number' => 'SV2a-151/165',
                'rarity' => 'RR',
                'set_name' => 'sv2a',
                'description' => 'รีสตาร์ต จั่วมือให้ครบ สาม ใบ',
                'image_url' => '/images/mewex.png',
                'prices' => [
                    ['source_name' => 'Pokemon TCG Thailand', 'price' => 3500],
                    ['source_name' => 'Card Market TH', 'price' => 3400],
                    ['source_name' => 'TCG Facebook Group', 'price' => 3600],
                ]
            ],
            // เพิ่มการ์ดอื่นๆ ตามต้องการ
        ];

        foreach ($cards as $cardData) {
            $prices = $cardData['prices'];
            unset($cardData['prices']);
            
            $card = Card::create($cardData);
            
            foreach ($prices as $priceData) {
                PriceSource::create([
                    'card_id' => $card->id,
                    'source_name' => $priceData['source_name'],
                    'price' => $priceData['price']
                ]);
            }
        }
    }
}