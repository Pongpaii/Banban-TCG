
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name_th' => 'required',
            'name_en' => 'required',
            'card_number' => 'required|unique:cards,card_number',
            'rarity' => 'required',
            'set_name' => 'required',
            'price' => 'nullable|numeric|min:0',
        ]);

        Card::create([
            'name_th' => $request->name_th,
            'name_en' => $request->name_en,
            'card_number' => $request->set_name . '-' . $request->card_number, // รวม set กับ หมายเลขย่อย
            'rarity' => $request->rarity,
            'set_name' => $request->set_name,
            'slug' => \Str::slug($request->name_en),
        ]);

        return redirect()->back()->with('success', 'เพิ่มการ์ดใหม่สำเร็จแล้ว!');
    }
}
