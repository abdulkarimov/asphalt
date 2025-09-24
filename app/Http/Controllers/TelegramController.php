<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TelegramController extends Controller
{
    public function sendMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'workType' => 'required|string|max:255',
            'area' => 'nullable|numeric|min:0',
            'comment' => 'nullable|string|max:1000'
        ]);

        $botToken = env('TELEGRAM_BOT_TOKEN');
        $chatId = '5916232864';
        $message = "🏗️ *Новая заявка с сайта Sett Group*\n\n";
        $message .= "👤 *Имя:* {$request->name}\n";
        $message .= "📞 *Телефон:* {$request->phone}\n";
        $message .= "🔧 *Тип работ:* {$request->workType}\n";
        $message .= "📐 *Площадь:* " . ($request->area ? $request->area . ' м²' : 'Не указана') . "\n";
        $message .= "💬 *Комментарий:* " . ($request->comment ?: 'Не указан') . "\n\n";
        $message .= "⏰ *Время заявки:* " . now()->format('d.m.Y H:i');
        try {
            $response = Http::withoutVerifying()->get("https://api.telegram.org/bot".$botToken."/sendMessage", [
                'chat_id' => $chatId,
                'text' => $message
            ]);
            if ($response->successful()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Заявка успешно отправлена! Мы свяжемся с вами в ближайшее время.'
                ]);
            } else {
                Log::error('Telegram API Error: ' . $response->body());
                return response()->json([
                    'success' => false,
                    'message' => 'Произошла ошибка при отправке заявки. Попробуйте позже.'
                ], 500);
            }
        } catch (\Exception $e) {
            Log::error('Telegram send error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Произошла ошибка при отправке заявки. Попробуйте позже.'
            ], 500);
        }
    }
}
