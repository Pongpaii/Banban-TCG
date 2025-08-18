namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class HomeController extends Controller
{
    public function index()
    {
        // ดึงข้อมูลการ์ดยอดนิยม (อาจจะจาก API หรือ DB)
        // ตัวอย่างนี้สมมติใช้ API เหมือนเดิม จึงไม่ดึงมาใน Controller

        // ดึงข้อมูลการ์ดจากฐานข้อมูลเรา
        $cardsFromDb = Card::where('status', 'active')->limit(8)->get();

        return view('home', compact('cardsFromDb'));
    }
}
