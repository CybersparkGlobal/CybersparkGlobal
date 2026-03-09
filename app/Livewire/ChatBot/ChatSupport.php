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


//    public function sendMessage()
//    {
//        if (empty(trim($this->message))) return;
//
//        $userMessage = $this->message;
//
//        // রেট লিমিট কিছুটা শিথিল করা (১ মিনিটে ১০টি মেসেজ)
//        $executed = RateLimiter::attempt(
//            'send-message:'.request()->ip(),
//            $perMinute = 10,
//            function() use ($userMessage) {
//                $this->chatHistory[] = ['role' => 'user', 'content' => $userMessage];
//                $this->message = '';
//                $this->dispatch('scroll-bottom');
//
//                $websiteInfo = "
//            Company: CyberSpark Global, Khulna. Expert in E-commerce & Custom Web Apps.
//            Clients: https://jvcobd.com, https://aclaha.edu.bd, https://bdpickup.com, https://mvc.edu.bd, https://sgdc.edu.bd.
//            Product: 'আমাদের POS' (Invoice, Inventory, Installment, SMS, Online/Offline, Cloud).
//            Links: Optical( https://optical.cybersparkglobal.com ), Restaurant( https://restaurant.cybersparkglobal.com ), POS( https://pos.cybersparkglobal.com ), Institute Demo( https://demo.cybersparkglobal.com ).
//            Team: Farid Ahmed (CEO),Helal Ahmed (CFO), MD Aktarozzaman (Senior Dev - Bot Creator). 14-Days Free Trial on all.
//            ";
//
//                $systemPrompt = "You are 'CSG AI', the official project buddy from CyberSpark Global.
//                Rules:
//                1. Start with 'Assalamu Alaikum'. Reply strictly in Bengali.
//                2. Global Reach: Mention that we are a dedicated tech service agency collaborating with global brands.
//                3. Professionalism: Use a tone that reflects our commitment to high-quality software solutions.
//                4. Use Markdown for links: [Text](URL).";
//                try {
//                    //llama-3.1-8b-instant
//                    $response = Http::timeout(30)->withOptions(['verify' => false])->withHeaders([
//                        'Authorization' => 'Bearer ' . env('GROQ_API_KEY'),
//                        'Content-Type' => 'application/json',
//                    ])->post('https://api.groq.com/openai/v1/chat/completions', [
//                        'model' => 'llama-3.1-8b-instant',
//                        'messages' => [
//                            ['role' => 'system', 'content' => $systemPrompt . "\nContext: " . $websiteInfo],
//                            ['role' => 'user', 'content' => $userMessage],
//                        ],
//                        'temperature' => 0.5,
//                    ]);
//
//                    if ($response->successful()) {
//                        $aiResponse = $response->json()['choices'][0]['message']['content'];
//                        $this->chatHistory[] = ['role' => 'assistant', 'content' => $aiResponse];
//                    } else {
//                        // Groq থেকে আসা আসল এরর লগ করা
//                        Log::error("Groq API Error: " . $response->body());
//                        $this->chatHistory[] = ['role' => 'assistant', 'content' => "দুঃখিত, আমাদের AI সার্ভিস এখন কিছুটা ওভারলোডেড। কয়েক সেকেন্ড পর আবার মেসেজ দিন।"];
//                    }
//                } catch (\Exception $e) {
//                    Log::error("Chatbot Exception: " . $e->getMessage());
//                    $this->chatHistory[] = ['role' => 'assistant', 'content' => "দুঃখিত, সংযোগে সমস্যা হচ্ছে।"];
//                }
//            }
//        );
//
//        if (!$executed) {
//            $this->chatHistory[] = ['role' => 'assistant', 'content' => "আপনি খুব দ্রুত মেসেজ পাঠাচ্ছেন। দয়া করে কিছুক্ষণ অপেক্ষা করুন।"];
//        }
//
//        $this->dispatch('scroll-bottom');
//    }

    public function sendMessage()
    {
        if (empty(trim($this->message))) return;

        $userMessage = $this->message;

        // ১ মিনিটে ১০টি মেসেজ লিমিট
        $executed = RateLimiter::attempt(
            'send-message:'.request()->ip(),
            $perMinute = 10,
            function() use ($userMessage) {
                $this->chatHistory[] = ['role' => 'user', 'content' => $userMessage];
                $this->message = '';
                $this->dispatch('scroll-bottom');

                $websiteInfo = "
            Company: CyberSpark Global, Khulna.
            Expertise: E-commerce, Custom Web Apps, ERP.

            Our Clients & Projects:
            - JVC Bangladesh: https://jvcobd.com
            - Aclaha: https://aclaha.edu.bd
            - BD Pickup: https://bdpickup.com
            - MVC: https://mvc.edu.bd
            - SGDC: https://sgdc.edu.bd

            Our Products:
            - Smart Institute System Demo: https://demo.cybersparkglobal.com (User: superadmin, Pass: 417685)
            - Optical POS: https://optical.cybersparkglobal.com
            - Restaurant POS: https://restaurant.cybersparkglobal.com
            - General POS: https://pos.cybersparkglobal.com

            Trial Offer: 14-Days Free Trial on all products after registration.
            Team: Farid Ahmed (CEO), Helal Ahmed (CFO), Md Aktarozzaman (Senior Dev - Bot Creator).
            ";

                $systemPrompt = "You are 'CSG AI', the official project buddy from CyberSpark Global.
            Rules:
            1. Start with 'Assalamu Alaikum'. Reply strictly in Bengali.
            2. When mentioning any project or client, ALWAYS use the full URL provided in the context.
            3. Use Markdown for links: [Website Name](URL).
            4. Global Reach: Mention we collaborate with global brands.
            5. Professionalism: Be polite, helpful, and concise.";

                try {
                    // llama-3.1-8b-instant
                    $response = Http::timeout(30)->withOptions(['verify' => false])->withHeaders([
                        'Authorization' => 'Bearer ' . env('GROQ_API_KEY'),
                        'Content-Type' => 'application/json',
                    ])->post('https://api.groq.com/openai/v1/chat/completions', [
                        'model' => 'llama-3.1-8b-instant',
                        'messages' => [
                            ['role' => 'system', 'content' => $systemPrompt . "\nContext: " . $websiteInfo],
                            ['role' => 'user', 'content' => $userMessage],
                        ],
                        'temperature' => 0.5,
                    ]);

                    if ($response->successful()) {
                        $aiResponse = $response->json()['choices'][0]['message']['content'];
                        $this->chatHistory[] = ['role' => 'assistant', 'content' => $aiResponse];
                    } else {
                        Log::error("Groq API Error: " . $response->body());
                        $this->chatHistory[] = ['role' => 'assistant', 'content' => "দুঃখিত, আমাদের AI সার্ভিস এখন কিছুটা ওভারলোডেড। কয়েক সেকেন্ড পর আবার মেসেজ দিন।"];
                    }
                } catch (\Exception $e) {
                    Log::error("Chatbot Exception: " . $e->getMessage());
                    $this->chatHistory[] = ['role' => 'assistant', 'content' => "দুঃখিত, সংযোগে সমস্যা হচ্ছে।"];
                }
            }
        );

        if (!$executed) {
            $this->chatHistory[] = ['role' => 'assistant', 'content' => "আপনি খুব দ্রুত মেসেজ পাঠাচ্ছেন। দয়া করে কিছুক্ষণ অপেক্ষা করুন।"];
        }

        $this->dispatch('scroll-bottom');
    }
    public function sendQuickMessage($txt)
    {
        $this->message = $txt;
        $this->sendMessage();
    }
    public function render()
    {
        return view('livewire.chat-bot.chat-support');
    }
}
