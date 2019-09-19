<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Telegram\Bot\Api;
use Telegram\Bot\Laravel\Facades\Telegram;
use Illuminate\Support\Facades\DB;
class TelegramController extends Controller
{
    protected $telegram;
 
    public function __construct()
    {
        $this->telegram = new Api('665199342:AAHsD8IVVsaI6f_GUqxPKG-U0dMPIYYPoxg');
    }
 
    public function getMe()
    {
        $response = $this->telegram->getMe();
        return $response;
    }
    public function sendMessage(){
        $response = $this->telegram->sendMessage([
          'chat_id' => '813010770', 
          'text' => '🙂'
        ]);

    $messageId = $response->getMessageId();
    }
    public function sendProductos(){
        $text = "Esta es la lista de productos disponibles, jefe:\n\n";
        $productos = DB::table('producto')->select('n_producto','cantidad')->get();
        foreach($productos as $p){
            $text = $text."📌".$p->n_producto." => ".$p->cantidad . " en stock\n";
        }
        
        $response = $this->telegram->sendMessage([
          'chat_id' => '733050849', 
          'text' => $text
        ]);

    $messageId = $response->getMessageId();
    }
    public function sendVentas(){

        $response = $this->telegram->sendMessage([
          'chat_id' => '813010770', 
          'text' => '🙂'
        ]);

    $messageId = $response->getMessageId();
    }
    public function getUpdates() {
        $updates = $this->telegram->getUpdates();
        return $updates;
    }
}
?>