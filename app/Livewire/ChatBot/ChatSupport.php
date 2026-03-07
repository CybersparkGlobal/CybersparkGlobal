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

//    public function sendMessage()
//    {
//        if (empty(trim($this->message))) return;
//
//        $userMessage = $this->message;
//
//        // ১. আপনার ওয়েবসাইটের, টিমের, ডেমো এবং ক্লায়েন্ট লিস্টের তথ্য
//        $websiteInfo = "
//        CyberSpark Global - খুলনায় অবস্থিত একটি শীর্ষস্থানীয় এবং বিশ্বস্ত আইটি প্রতিষ্ঠান।
//        আমরা যেকোনো ধরনের ই-কমার্স (E-commerce) ওয়েবসাইট এবং কাস্টম ওয়েব অ্যাপ্লিকেশন তৈরিতে দক্ষ।
//
//        আমাদের কিছু উল্লেখযোগ্য ক্লায়েন্ট এবং প্রজেক্ট:
//        - [jvcobd.com](https://jvcobd.com)
//        - [aclaha.edu.bd](https://aclaha.edu.bd)
//        - [bdpickup.com](https://bdpickup.com)
//        - [mvc.edu.bd](https://mvc.edu.bd)
//        - [sgdc.edu.bd](https://sgdc.edu.bd)
//        - [cybersparkglobal.com](https://cybersparkglobal.com)
//        - [college.cybersparkglobal.com](https://college.cybersparkglobal.com)
//
//        আমাদের ডেমো এবং ট্রায়াল সিস্টেম:
//        ১. Smart Institute Management System:
//           - ডেমো লিঙ্ক: [https://demo.cybersparkglobal.com](https://demo.cybersparkglobal.com)
//           - সুপারএডমিন লগইন: (User: superadmin, Pass: 417685)
//           - অফার: রেজিস্ট্রেশন করলে ১৪ দিনের ফ্রি ট্রায়াল সুবিধা।
//
//        ২. POS সফটওয়্যারসমূহ (১৪ দিনের ফ্রি ট্রায়াল):
//           - Optical POS: [https://optical.cybersparkglobal.com](https://optical.cybersparkglobal.com)
//           - Restaurant POS: [https://restaurant.cybersparkglobal.com](https://restaurant.cybersparkglobal.com)
//           - General POS: [https://pos.cybersparkglobal.com](https://pos.cybersparkglobal.com)
//           - নোট: ট্রায়াল পেতে ইউজারকে অবশ্যই সাইটে রেজিস্ট্রেশন সম্পন্ন করতে হবে।
//
//        আমাদের টিম:
//        - ফরিদ আহমেদ (CEO), হেলাল আহমেদ (Co-Founder), মো: আক্তারুজ্জামান (Senior Web Developer), প্রোসেন মন্ডল (Web Developer)।
//
//        যোগাযোগ:
//        - অফিস: ৩য় তলা, আর-আমিন ট্রেড সেন্টার, ১৭ কেডিএ এভিনিউ, খুলনা ৯১০০।
//        - ফোন: +880 1685-375652 / +880 1749-369514
//    ";
//
//        $this->chatHistory[] = ['role' => 'user', 'content' => $userMessage];
//        $this->message = '';
//        $this->dispatch('scroll-bottom');
//
//        // ২. সিস্টেম প্রম্পট (AI নির্দেশনা)
//        $systemPrompt = "You are 'CSG AI', the project buddy from CyberSpark Global.
//        Context: $websiteInfo
//
//        Instructions:
//        1. ALWAYS start with 'Assalamu Alaikum'. Reply strictly in Bengali.
//        2. E-commerce: If asked, confirm that CyberSpark Global can build any type of e-commerce website.
//        3. Experience: Use the client list (like jvcobd.com, bdpickup.com, etc.) as proof of experience.
//        4. Web Links: Provide all links as clickable Markdown [Text](URL).
//        5. POS Trial: Instruct users to register on the respective POS site for the 14-day free trial.
//        6. Institute Demo: Provide the superadmin login details clearly for the demo link.
//        7. Identity: Mention Md Aktarozzaman as the Senior Developer who developed this system.";
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
//                $this->chatHistory[] = ['role' => 'assistant', 'content' => "দুঃখিত, আমি এখন উত্তর দিতে পারছি না।"];
//            }
//        } catch (\Exception $e) {
//            Log::error("Chatbot Error: " . $e->getMessage());
//            $this->chatHistory[] = ['role' => 'assistant', 'content' => "দুঃখিত, টেকনিক্যাল সমস্যা হচ্ছে।"];
//        }
//
//        $this->dispatch('scroll-bottom');
//    }

    public function sendMessage()
    {
        if (empty(trim($this->message))) return;

        $userMessage = $this->message;

        // ১. আপনার ওয়েবসাইটের, টিমের, ক্লায়েন্ট এবং 'আমাদের POS' এর বিস্তারিত তথ্য
        $websiteInfo = "
        CyberSpark Global - খুলনায় অবস্থিত একটি শীর্ষস্থানীয় এবং বিশ্বস্ত আইটি প্রতিষ্ঠান।
        আমরা যেকোনো ধরনের ই-কমার্স (E-commerce) ওয়েবসাইট এবং কাস্টম ওয়েব অ্যাপ্লিকেশন তৈরিতে দক্ষ।

        আমাদের কিছু উল্লেখযোগ্য ক্লায়েন্ট: [jvcobd.com](https://jvcobd.com), [aclaha.edu.bd](https://aclaha.edu.bd), [bdpickup.com](https://bdpickup.com), [mvc.edu.bd](https://mvc.edu.bd), [sgdc.edu.bd](https://sgdc.edu.bd)।

        CyberSpark Global - 'আমাদের POS' (Our POS) সফটওয়্যারের মূল ফিচারসমূহ:
        ১. ইনভয়েস ও বিলিং: খুব সহজে কাস্টমারের বিল, ইনভয়েস, চালান এবং খরচের ভাউচার তৈরি ও প্রিন্ট করা যায়।
        ২. ইনভেন্টরি ম্যানেজমেন্ট: পণ্য ক্রয়-বিক্রয়, স্টক হিসাব এবং সাপ্লাইয়ারদের পেমেন্টের পূর্ণাঙ্গ হিসাব রাখা।
        ৩. বাকি ও কিস্তি ব্যবস্থাপনা: কাস্টমারের বাকি হিসাব রাখা এবং কিস্তিতে বিক্রয়ের ক্ষেত্রে NID ও রেফারেন্সসহ কিস্তির রিমাইন্ডার পাঠানোর সুবিধা।
        ৪. কমপ্লিট একাউন্টিং ও খরচ: প্রতিষ্ঠানের সব খরচের হেড অনুসারে হিসাব এবং স্বচ্ছ একাউন্টিং রিপোর্ট।
        ৫. এসএমএস (SMS) সুবিধা: বাকি টাকা, কিস্তির রিমাইন্ডার বা প্রমোশনাল মেসেজ পাঠানোর ব্যবস্থা।
        ৬. অনলাইন ও অফলাইন: ইন্টারনেট ছাড়াই পিসিতে ব্যবহার করা যায় এবং অনলাইনে বিশ্বের যেকোনো প্রান্ত থেকে মোবাইল এ্যাপে নজর রাখা যায়।
        ৭. ওয়ারেন্টি ও গ্যারান্টি: সিরিয়াল নম্বর (IMEI) যুক্ত প্রোডাক্টের ওয়ারেন্টি পিরিয়ড ইনভয়েসে সেট করার সুবিধা।
        ৮. লাভ-লোকসান রিপোর্ট: দৈনিক, মাসিক ও বাৎসরিক লাভ-ক্ষতির হিসাব এবং প্রোডাক্ট অনুযায়ী আলাদা রিপোর্ট।
        ৯. বারকোড ও নিরাপত্তা: বারকোড প্রিন্ট/স্ক্যানিং সুবিধা, ডাটা ব্যাকআপ (Excel, PDF, CSV) এবং ক্লাউড কম্পিউটিংয়ের মাধ্যমে সর্বোচ্চ নিরাপত্তা।
        ১০. ইউজার কন্ট্রোল: ৬০টিরও বেশি অটোমেটিক রিপোর্ট এবং ইউজার এ্যাকসেস কন্ট্রোল ফিচার।

        আমাদের ডেমো এবং ট্রায়াল সিস্টেম:
        - Smart Institute Demo: [https://demo.cybersparkglobal.com](https://demo.cybersparkglobal.com) (User: superadmin, Pass: 417685)
        - Optical POS: [https://optical.cybersparkglobal.com](https://optical.cybersparkglobal.com)
        - Restaurant POS: [https://restaurant.cybersparkglobal.com](https://restaurant.cybersparkglobal.com)
        - General POS: [https://pos.cybersparkglobal.com](https://pos.cybersparkglobal.com)

        নোট: ট্রায়াল পেতে ইউজারকে অবশ্যই সংশ্লিষ্ট সাইটে রেজিস্ট্রেশন সম্পন্ন করতে হবে। রেজিস্ট্রেশন করলে ১৪ দিনের ফ্রি ট্রায়াল সুবিধা পাওয়া যাবে।

        আমাদের টিম:
        - ফরিদ আহমেদ (CEO), হেলাল আহমেদ (Co-Founder), মো: আক্তারুজ্জামান (Senior Web Developer), প্রোসেন মন্ডল (Web Developer)।

        যোগাযোগ:
        - অফিস: ৩য় তলা, আর-আমিন ট্রেড সেন্টার, ১৭ কেডিএ এভিনিউ, খুলনা ৯১০০।
        - ফোন: +880 1685-375652 / +880 1749-369514
    ";

        // ইউজারের মেসেজ হিস্টোরিতে যোগ করা
        $this->chatHistory[] = ['role' => 'user', 'content' => $userMessage];
        $this->message = '';
        $this->dispatch('scroll-bottom');

        // ২. সিস্টেম প্রম্পট (AI নির্দেশনা)
        $systemPrompt = "You are 'CSG AI', the official project buddy from CyberSpark Global, Khulna.
        Context: $websiteInfo

        Instructions:
        1. ALWAYS start with 'Assalamu Alaikum'. Reply strictly in Bengali.
        2. When asked about POS, refer to it as 'আমাদের POS' and list the features (1-10) clearly using bullet points.
        3. E-commerce: Confirm we can build any type of e-commerce site.
        4. Experience: Mention our clients (jvcobd, bdpickup, etc.) as proof of quality.
        5. Institute Demo: Clearly provide the superadmin login details for the demo link.
        6. Identity: Mention Md Aktarozzaman as the Senior Developer who developed this bot and system.
        7. E-commerce: If asked, confirm that CyberSpark Global can build any type of e-commerce website.
        8. Web Links: Provide all links as clickable Markdown [Text](URL).
        9. POS Trial: Instruct users to register on the respective POS site for the 14-day free trial.
       10. Institute Demo: Provide the superadmin login details clearly for the demo link. ";


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
                $this->chatHistory[] = ['role' => 'assistant', 'content' => "দুঃখিত, আমি এখন উত্তর দিতে পারছি না।"];
            }
        } catch (\Exception $e) {
            \Log::error("Chatbot Error: " . $e->getMessage());
            $this->chatHistory[] = ['role' => 'assistant', 'content' => "দুঃখিত, টেকনিক্যাল সমস্যা হচ্ছে।"];
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
