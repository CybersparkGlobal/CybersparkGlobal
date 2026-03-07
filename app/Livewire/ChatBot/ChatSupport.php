<?php
//
//namespace App\Livewire\ChatBot;
//
//use Illuminate\Support\Facades\Http;
//use Illuminate\Support\Facades\Log;
//use Livewire\Component;
//
//class ChatSupport extends Component
//{
//    public $isOpen = false;
//    public $message = '';
//    public $chatHistory = [];
//
//    public function toggleChat()
//    {
//        $this->isOpen = !$this->isOpen;
//        if ($this->isOpen) {
//            $this->dispatch('scroll-bottom');
//        }
//    }
//
//    public function sendMessage()
//    {
//        if (empty(trim($this->message))) return;
//
//        $userMessage = $this->message;
//
//        // ১. আপনার ওয়েবসাইটের এবং গুগল ফর্মের তথ্য
//        $websiteInfo = "
//            CyberSpark Global - Leading IT Solution Company in Khulna, Bangladesh.
//
//            1. Smart Institute/College Management System:
//               - Features: Student/Faculty Management, Automated Fee & Finance, Attendance & Exam tracking.
//               - Product URL: " . url('/institution-management-software') . "
//               - Order/Registration Form: https://docs.google.com/forms/d/e/1FAIpQLSfqmtPpS9qOh8Rj-jhcz6eJeNdrrFAMkW_28pJeJqCVinCWdg/viewform (ইউজার সফটওয়্যারটি নিতে চাইলে এই লিংকে ফর্ম পূরণ করতে হবে)
//
//            2. Other Services:
//               - Web Development: Custom solutions using Laravel & React. URL: " . url('/services') . "
//               - SEO Services: Website ranking and optimization.
//               - POS & Pharmacy Management Software.
//
//            3. Contact Info:
//               - Contact Page: " . url('/contact') . "
//               -Office Location: 3th floor, R-Amin trade center, 17 KDA Ave, Khulna 9100. (সবাইকে কফি খাওয়ার আমন্ত্রণ জানাবেন)।
//               -Contact Numbers:
//               -Bangladesh: +880 1685-375652 / +880 1749-369514
//               -International: +1 307-312-2095
//               -Email: cybersparkglobal@gmail.com, contact@cybersparkglobal.com
//        ";
//
//        // ইউজারের মেসেজ হিস্টোরিতে যোগ করা
//        $this->chatHistory[] = ['role' => 'user', 'content' => $userMessage];
//        $this->message = '';
//        $this->dispatch('scroll-bottom');
//
//        // ২. সিস্টেম প্রম্পট (বটকে যেভাবে ইনস্ট্রাকশন দেওয়া হয়েছে)
//        $systemPrompt = "You are 'Spark AI', the official representative of CyberSpark Global.
//            Context: $websiteInfo
//
//            Rules:
//            1. ALWAYS start with 'Assalamu Alaikum' (আসসালামু আলাইকুম).
//            2. Reply strictly in Bengali (Bangla).
//            3. If the user wants to buy or register for the 'Institute Management Software', you MUST provide this Google Form link: [রেজিস্ট্রেশন ফর্ম পূরণ করুন](https://docs.google.com/forms/d/e/1FAIpQLSfqmtPpS9qOh8Rj-jhcz6eJeNdrrFAMkW_28pJeJqCVinCWdg/viewform).
//            4. For other services, share the relevant website links provided in Context.
//            5. Use Markdown for links: [Text](URL).
//            6. Keep the tone professional, friendly, and helpful.";
//
//        try {
//            $response = Http::withOptions(['verify' => env('GROQ_SSL_VERIFY', false)])->withHeaders([
//                'Authorization' => 'Bearer ' . env('GROQ_API_KEY'),
//                'Content-Type' => 'application/json',
//            ])->post('https://api.groq.com/openai/v1/chat/completions', [
//                'model' => 'llama-3.3-70b-versatile',
//                'messages' => [
//                    ['role' => 'system', 'content' => $systemPrompt],
//                    ['role' => 'user', 'content' => $userMessage],
//                ],
//                'temperature' => 0.4,
//            ]);
//
//            if ($response->successful()) {
//                $aiResponse = $response->json()['choices'][0]['message']['content'];
//                $this->chatHistory[] = ['role' => 'assistant', 'content' => $aiResponse];
//            } else {
//                $this->chatHistory[] = ['role' => 'assistant', 'content' => "দুঃখিত, আমি এখন উত্তর দিতে পারছি না। অনুগ্রহ করে সরাসরি যোগাযোগ করুন।"];
//            }
//        } catch (\Exception $e) {
//            Log::error("Chatbot Error: " . $e->getMessage());
//            $this->chatHistory[] = ['role' => 'assistant', 'content' => "দুঃখিত, টেকনিক্যাল সমস্যা হচ্ছে।"];
//        }
//
//        $this->dispatch('scroll-bottom');
//    }
//
//    public function sendQuickMessage($txt)
//    {
//        $this->message = $txt;
//        $this->sendMessage();
//    }
//
//    public function render()
//    {
//        return view('livewire.chat-bot.chat-support');
//    }
//}


namespace App\Livewire\ChatBot;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
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

        $userMessage = $this->message;

        // ১. আপনার ওয়েবসাইটের, টিমের এবং কন্টাক্ট ইনফরমেশন
        $websiteInfo = "
            CyberSpark Global - খুলনায় অবস্থিত একটি শীর্ষস্থানীয় এবং বিশ্বস্ত আইটি প্রতিষ্ঠান।
            আমরা মূলত ব্যবসার ডিজিটাল রূপান্তর এবং আধুনিক সফটওয়্যার সলিউশন নিয়ে কাজ করি।

            আমাদের টিম (Team Members):
            - ফরিদ আহমেদ (Farid Ahmed): CEO
            - হেলাল আহমেদ (Helal Ahmed): Co-Founder
            - মো: আক্তারুজ্জামান (Md Aktarozzaman): Senior Web and Software Developer (যিনি এই চ্যাটবট এবং সিস্টেমটি ডেভেলপ করেছেন)।
            - প্রোসেন মন্ডল (Prosen Mondal): Web and Software Developer.
            - ফাহিম ইসলাম (Fahim Islam): Content Writer SEO Expert.
            - টি জুবায়ের আরাফ (T Jubear Araf): Social Media Manager and Marketing Specialist.
            - আর জুবায়ের খান (Ar Jubair Khan): SEO Specialist and Web Developer.




            সফটওয়্যার এবং সার্ভিসসমূহ:
            1. Smart Institute/College Management System:
               ফিচার: স্টুডেন্ট/ফ্যাকাল্টি ম্যানেজমেন্ট, অটোমেটেড ফি কালেকশন, ডিজিটাল এটেন্ডেন্স এবং এক্সাম ম্যানেজমেন্ট।
               URL: " . url('/institution-management-software') . "
               অর্ডার ফর্ম: https://docs.google.com/forms/d/e/1FAIpQLSfqmtPpS9qOh8Rj-jhcz6eJeNdrrFAMkW_28pJeJqCVinCWdg/viewform

            2. অন্যান্য সার্ভিস: কাস্টম ওয়েব ডেভেলপমেন্ট (Laravel, React), SEO সার্ভিস, রেস্টুরেন্ট POS, এবং ফার্মেসি ম্যানেজমেন্ট সফটওয়্যার।
               URL: " . url('/services') . "

            যোগাযোগের ঠিকানা:
            - অফিস: ৩য় তলা, আর-আমিন ট্রেড সেন্টার, ১৭ কেডিএ এভিনিউ, খুলনা ৯১০০। (সরাসরি অফিসে এসে কফি খাওয়ার আমন্ত্রণ রইলো)।
            - ফোন: +880 1685-375652 / +880 1749-369514
            - ইমেইল: contact@cybersparkglobal.com / cybersparkglobal@gmail.com
        ";

        // ইউজারের মেসেজ হিস্টোরিতে যোগ করা
        $this->chatHistory[] = ['role' => 'user', 'content' => $userMessage];
        $this->message = '';
        $this->dispatch('scroll-bottom');

        // ২. সিস্টেম প্রম্পট (AI কে দেওয়া নির্দেশনা)
        $systemPrompt = "You are 'CSG AI', the official project buddy from CyberSpark Global, Khulna.
            Context: $websiteInfo

            Instructions:
            1. ALWAYS start with 'Assalamu Alaikum' (আসসালামু আলাইকুম).
            2. Language: Reply strictly in Bengali (Bangla).
            3. Tone: Be extremely professional, polite, and confident.
            4. Identity: If anyone asks about the developers or team, mention 'Md Aktarozzaman' as the Senior Developer and others accordingly.
            5. Trust: Highlight that we are a trusted IT firm in Khulna focused on business growth.
            6. Links: If they want the Institute Software, provide the Google Form link: [রেজিস্ট্রেশন ফর্ম পূরণ করুন](https://docs.google.com/forms/d/e/1FAIpQLSfqmtPpS9qOh8Rj-jhcz6eJeNdrrFAMkW_28pJeJqCVinCWdg/viewform).
            7. Formatting: Use Markdown for links and bold text to make it readable.";

        try {
            $response = Http::withOptions(['verify' => env('GROQ_SSL_VERIFY', false)])->withHeaders([
                'Authorization' => 'Bearer ' . env('GROQ_API_KEY'),
                'Content-Type' => 'application/json',
            ])->post('https://api.groq.com/openai/v1/chat/completions', [
                'model' => 'llama-3.3-70b-versatile',
                'messages' => [
                    ['role' => 'system', 'content' => $systemPrompt],
                    ['role' => 'user', 'content' => $userMessage],
                ],
                'temperature' => 0.4,
            ]);

            if ($response->successful()) {
                $aiResponse = $response->json()['choices'][0]['message']['content'];
                $this->chatHistory[] = ['role' => 'assistant', 'content' => $aiResponse];
            } else {
                $this->chatHistory[] = ['role' => 'assistant', 'content' => "দুঃখিত, আমি এখন উত্তর দিতে পারছি না। অনুগ্রহ করে আমাদের সাথে সরাসরি ফোনে যোগাযোগ করুন।"];
            }
        } catch (\Exception $e) {
            Log::error("Chatbot Error: " . $e->getMessage());
            $this->chatHistory[] = ['role' => 'assistant', 'content' => "দুঃখিত, আমাদের সার্ভারে কিছুটা সমস্যা হচ্ছে। দ্রুত সমাধানের চেষ্টা চলছে।"];
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
