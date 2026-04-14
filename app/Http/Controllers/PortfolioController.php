<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $data = [
            'name'       => 'Md Lakibul Hasan',
            'title'      => 'Software Engineer (Backend)',
            'tagline'    => '4+ years building scalable backend systems, APIs, and automation workflows with PHP, Laravel, CodeIgniter, and Node.js.',
            'email'      => 'lakibul.cse@gmail.com',
            'phone'      => '+880 1983-427887',
            'phone_alt'  => '+880 1516-179534',
            'location'   => 'Dhaka, Bangladesh',
            'linkedin'   => 'https://www.linkedin.com/in/lakibul-hasan',
            'github'     => 'https://github.com/lakibul',
            'portfolio'  => 'https://lakibul.vercel.app',
            'summary'    => 'Software Engineer with strong backend focus. Experienced in microservices, payment integrations, queue-driven processing, caching, and performance optimization. Recent work includes AI integration and automation using OpenAI APIs.',
            'highlights' => [
                '4+ years of backend engineering experience',
                '25% API response improvement via query optimization + Redis caching',
                'Production systems in social, e-commerce, education, hospitality, and health domains',
            ],
            'skills'     => [
                'Languages'       => ['PHP', 'JavaScript', 'C'],
                'Frameworks'      => ['Laravel (v5-v11)', 'CodeIgniter (v3-v4)', 'Node.js', 'Inertia.js', 'React.js (Basic)'],
                'Data & Storage'  => ['MySQL', 'PostgreSQL', 'MongoDB', 'DynamoDB', 'Firebase Firestore', 'Redis'],
                'AI & Automation' => ['OpenAI API Integration', 'Prompt Engineering', 'Automation Workflows', 'Queue Processing'],
                'Tools'           => ['Docker', 'Git', 'Composer', 'Ubuntu', 'REST API Design', 'Design Patterns'],
            ],
            'experience' => [
                [
                    'title'            => 'Software Developer',
                    'company'          => 'ParallaxLogic InfoTech',
                    'location'         => 'Shahjadpur, Gulshan, Dhaka',
                    'period'           => 'Jan 2023 - Present',
                    'responsibilities' => [
                        'Develop and maintain microservice-oriented backend services with Laravel, CodeIgniter, and Node.js.',
                        'Integrated APIs, legacy PHP migrations, and data pipelines including scraping and external service sync.',
                        'Improved response time by 25% through SQL/MongoDB tuning and Redis caching.',
                        'Built asynchronous workflows for notifications, API jobs, and data synchronization.',
                        'Implemented analytics integrations (DataForSEO) for SERP and keyword intelligence.',
                    ],
                ],
                [
                    'title'            => 'Web Developer',
                    'company'          => 'Uttara InfoTech',
                    'location'         => 'Uttara, Dhaka',
                    'period'           => 'Aug 2022 - Oct 2022',
                    'responsibilities' => [
                        'Delivered custom web applications for local clients with focus on usability and performance.',
                    ],
                ],
            ],
            'projects' => [
                [
                    'name'         => 'Wyzr: Meet Activity Friends',
                    'description'  => 'Developed a community-driven social platform for older adults, enabling real-world connections through chat, events, carpooling, and timeline posts, Calling feature (Agora), with subscription-based features and interest-based networking.',
                    'image'        => 'https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto/v1/attachments/project_item/attachment/b25b8ca01d8503e3cbd75275d5c9effa-1776173266792/Screenshot_11.png',
                    'technologies' => ['Laravel', 'Flutter', 'Stripe', 'Google Pay', 'Apple Pay', 'Agora API'],
                    'link'         => 'https://play.google.com/store/search?q=wyzr&c=apps&hl=en',
                ],
                [
                    'name'         => 'Walltouch - Multivendor E-Commerce',
                    'description'  => 'Developed a multi-vendor eCommerce platform with Super Admin, Admin, and Seller role-based operations. Implemented product management, order processing, payment integration and POS.',
                    'image'        => 'https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto/v1/attachments/project_item/attachment/5aa2e91b74052568997237f799f0b931-1776172882838/WhatsApp%20Image%202026-04-14%20at%207.21.09%20PM.jpeg',
                    'technologies' => ['Laravel', 'MySQL', 'Bootstrap'],
                    'link'         => 'https://www.walltouchbd.com',
                ],
                [
                    'name'         => 'PrimeBazar - Fresh halal groceries',
                    'description'  => 'Engineered backend systems for a high-traffic eCommerce platform, implementing order slot management, seamless Shopify integration, social authentication, large dataset processing, Stripe subscriptions, and high-performance APIs.',
                    'image'        => 'https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto/v1/attachments/project_item/attachment/e211142beef4d318a8d23ae91d3d827e-1776173832953/Screenshot%202026-04-14%20192936.png',
                    'technologies' => ['Laravel', 'Flutter', 'Stripe', 'Google Pay', 'Apple Pay', 'Shopify API'],
                    'link'         => 'https://primebazaartx.com',
                ],
                [
                    'name'         => 'Ultimate POS (Walltouch)',
                    'description'  => 'Developed and maintained backend systems for a cloud-based POS (Point of Sale) platform, enabling businesses to manage sales, inventory, invoicing, and multi-location operations with real-time data processing.',
                    'image'        => 'https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto/v1/attachments/project_item/attachment/5dbc915493c416b5e95c8f86228d082c-1776174995486/Screenshot_12.png',
                    'technologies' => ['Laravel', 'MySQL', 'Bootstrap'],
                    'link'         => 'https://pos2.walltouchbd.com',
                ],
                [
                    'name'         => 'ReplyFlow — AI-Powered Customer Support SaaS',
                    'description'  => 'Built a production-ready AI SaaS (ReplyFlow) using Laravel 12, OpenAI GPT-4o-mini & Redis queues — auto-generates customer support replies, summaries, and ticket classifications with tiered subscription limits',
                    'image'        => 'https://media.licdn.com/dms/image/v2/D5622AQEg3tkUYrw9yw/feedshare-shrink_2048_1536/B56Z11fF7GHkAg-/0/1775792578517?e=1777507200&v=beta&t=ESFttEaXOOYtbxiwJdlUzndq4Il768bKCcbs3pEv3QI',
                    'technologies' => ['Laravel 12', 'OpenAI', 'MySQL', 'Redis'],
                    'features'     => ['AI reply generation', 'Message summarization', 'Auto ticket classification', 'Redis async queue processing', 'Subscription-based usage limits', 'Web dashboard portal', 'Fake AI mode for local dev'],
                    'github'       => 'https://github.com/lakibul/replyflow',
                ],
                [
                    'name'         => 'Simple Admission',
                    'description'  => 'Education agency platform for study-abroad admissions and process management.',
                    'image'        => 'https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto/v1/attachments/project_item/attachment/57b57ca6f199be3a1c260d7d6d921872-1776174023101/Screenshot%202026-04-14%20194016.png',
                    'technologies' => ['Laravel', 'Bootstrap', 'MySQL'],
                    'link'         => 'https://simpleadmission.net',
                ],
                [
                    'name'         => 'Sportsplex Booking Platform (POHS Sportsplex)',
                    'description'  => 'Developed backend features for a sports facility booking platform, enabling slot-based session reservations, real-time availability management, and seamless booking workflows for multiple sports activities.',
                    'image'        => 'https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto/v1/attachments/project_item/attachment/b777c1ff4cea64db8f904fb7b193b96f-1776175222844/Screenshot%202026-04-14%20195934.png',
                    'technologies' => ['Laravel', 'MySQL', 'Bootstrap'],
                    'link'         => 'https://pohssportsplex.com',
                ],
                // [
                //     'name'         => 'BFSA-JICA',
                //     'description'  => 'Food safety compliance system covering inspections, swab tests, and sample tracking.',
                //     'image'        => 'https://image.thum.io/get/width/1200/crop/750/noanimate/https://bfsastirc.com',
                //     'technologies' => ['Laravel', 'MySQL'],
                //     'link'         => 'https://bfsastirc.com',
                // ],
                [
                    'name'         => 'Laravel Chat with Vue.js',
                    'description'  => 'Real-time private messaging app with typing indicators and unread tracking.',
                    'image'        => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?auto=format&fit=crop&w=1200&q=80',
                    'technologies' => ['Laravel', 'Vue.js', 'Pusher'],
                    'github'         => 'https://github.com/lakibul/laravel-chat.git',
                ],
                [
                    'name'         => 'Health Point',
                    'description'  => 'Hospital management system for patient and operational workflows.',
                    'image'        => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?auto=format&fit=crop&w=1200&q=80',
                    'technologies' => ['Laravel', 'MySQL'],
                    'github'         => 'https://github.com/lakibul/health-point.git',
                ],
                [
                    'name'         => 'Hipe',
                    'description'  => 'Online-based Hotel and Booking Management (ERP) software using PHP (CodeIgniter), Node.js and Flutter with google translation microservice.',
                    'image'        => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?auto=format&fit=crop&w=1200&q=80',
                    'technologies' => ['CodeIgniter v3', 'Node.js', 'MySQL', 'Whatsapp API', 'Google Translation API', 'Flutter'],
                    'link'         => '#',
                ],
            ],
            'education' => [
                [
                    'degree'      => 'BSc in Computer Science & Engineering',
                    'institution' => 'Daffodil International University',
                    'period'      => '2017 - 2021',
                    'score'       => 'CGPA: 3.36 / 4.00',
                ],
                [
                    'degree'      => 'Higher Secondary Certificate (Science)',
                    'institution' => 'Govt. Haji Mohammad Mohsin College',
                    'period'      => '2016',
                    'score'       => 'GPA: 4.50 / 5.00',
                ],
                [
                    'degree'      => 'Secondary School Certificate (Science)',
                    'institution' => 'Chittagong Collegiate School',
                    'period'      => '2014',
                    'score'       => 'GPA: 5.00 / 5.00',
                ],
            ],
            'certifications' => [
                'Training on PHP Laravel - BASIS-BITM (Jan 2022 - Mar 2022)',
                'Data Structures and Algorithms - Bohubrihi',
            ],
        ];

        return view('portfolio.index', compact('data'));
    }

    public function downloadCV()
    {
        $pathToFile = public_path('assets/cv/Md_Lakibul_Hasan_CV.pdf');

        // Check if file exists, if not provide a fallback
        if (!file_exists($pathToFile)) {
            // Create a simple response for when CV is not available
            return response()->json([
                'message' => 'CV download is temporarily unavailable. Please contact me directly.',
                'email' => 'lakibul.cse@gmail.com'
            ], 404);
        }

        return response()->download($pathToFile);
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        // In a real application, you would send email here
        // For now, we'll just return a success response

        return response()->json([
            'success' => true,
            'message' => 'Thank you for your message! I will get back to you soon.'
        ]);
    }
}
