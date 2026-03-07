<?php

namespace App\Livewire\ChatBot;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Component;

class ChatSupport extends Component
{
    public $isOpen = false;
    public $message = '';
    public $chatHistory = [];

    public function toggleChat()
    {
        $this->isOpen = !$this->isOpen;
        if ($this->isOpen) {
            $this->dispatch('scroll-bottom');
        }
    }

    public function sendMessage()
    {
        if (empty(trim($this->message))) return;

        // Rate Limiter: প্রতি ১ মিনিটে ৫টি মেসেজ লিমিট (Rate Limit বাঁচানোর জন্য)
        $executed = RateLimiter::attempt(
            'send-message:'.request()->ip(),
            $perMinute = 5,
            function() {
                $userMessage = $this->message;
                $this->chatHistory[] = ['role' => 'user', 'content' => $userMessage];
                $this->message = '';
                $this->dispatch('scroll-bottom');

                // সাশ্রয়ী নলেজ বেস (টোকেন সেভ করার জন্য সাজানো)
                $websiteInfo = "
                Company: CyberSpark Global, Khulna. Expert in E-commerce & Custom Web Apps.
                Clients: jvcobd.com, aclaha.edu.bd, bdpickup.com, mvc.edu.bd, sgdc.edu.bd.

                Product 1: 'আমাদের POS' Features: Invoice/Billing, Inventory, Due/Installment (NID/Reminder), Accounting, SMS, Online/Offline, Warranty (IMEI), Profit/Loss, Barcode, Cloud Security.
                POS Links: Optical ( https://optical.cybersparkglobal.com ), Restaurant ( https://restaurant.cybersparkglobal.com ), General ( https://pos.cybersparkglobal.com ).

                Product 2: Smart Institute System: https://demo.cybersparkglobal.com (User: superadmin, Pass: 417685).
                Offer: 14-Days Free Trial after registration on any software.

                Team: Farid Ahmed (CEO), Helal Ahmed (Co-Founder), Md Aktarozzaman (Senior Dev - Bot Creator), Prosen Mondal (Web Dev).
                Contact: Office: 3rd Floor, R-Amin Trade Center, Khulna. Phone: +880 1685-375652, +880 1749-369514.
                ";

                $systemPrompt = "You are 'CSG AI', the official project buddy from CyberSpark Global.
                Rules:
                1. Start with 'Assalamu Alaikum'. Reply strictly in Bengali.
                2. If asked about POS, list 'আমাদের POS' features (1-10) simply.
                3. Confirm we build any E-commerce site; use clients as proof.
                4. For any demo/trial, insist on registration for 14-day access.
                5. Use Markdown for links: [Text](URL).
                6. Identity: Md Aktarozzaman is the Senior Developer.";

                try {
                    $response = Http::withOptions(['verify' => env('GROQ_SSL_VERIFY', false)])->withHeaders([
                        'Authorization' => 'Bearer ' . env('GROQ_API_KEY'),
                        'Content-Type' => 'application/json',
                    ])->post('https://api.groq.com/openai/v1/chat/completions', [
                        'model' => 'llama-3.3-70b-versatile', // অথবা 'llama-3.1-8b-instant' আরও ফাস্ট রেসপন্সের জন্য
                        'messages' => [
                            ['role' => 'system', 'content' => $systemPrompt . "\nContext: " . $websiteInfo],
                            ['role' => 'user', 'content' => $userMessage],
                        ],
                        'temperature' => 0.4,
                    ]);

                    if ($response->successful()) {
                        $aiResponse = $response->json()['choices'][0]['message']['content'];
                        $this->chatHistory[] = ['role' => 'assistant', 'content' => $aiResponse];
                    } else {
                        $this->chatHistory[] = ['role' => 'assistant', 'content' => "দুঃখিত, আমি এখন উত্তর দিতে পারছি না। ১ মিনিট পর চেষ্টা করুন।"];
                    }
                } catch (\Exception $e) {
                    Log::error("Chatbot Error: " . $e->getMessage());
                    $this->chatHistory[] = ['role' => 'assistant', 'content' => "দুঃখিত, টেকনিক্যাল সমস্যা হচ্ছে।"];
                }
            }
        );

        if (!$executed) {
            $this->chatHistory[] = ['role' => 'assistant', 'content' => "আপনি খুব দ্রুত মেসেজ পাঠাচ্ছেন। অনুগ্রহ করে ১ মিনিট অপেক্ষা করুন।"];
        }

        $this->dispatch('scroll-bottom');
    }

    public function render()
    {
        return view('livewire.chat-bot.chat-support');
    }
}
