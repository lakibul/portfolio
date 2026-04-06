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
                    'name'         => 'Wyzr',
                    'description'  => 'Community platform for older adults with chat, events, carpools, timeline posts, and subscriptions.',
                    'technologies' => ['Laravel', 'Flutter', 'Stripe', 'Google Pay', 'Apple Pay'],
                    'link'         => 'https://play.google.com/store/search?q=wyzr&c=apps&hl=en',
                ],
                [
                    'name'         => 'Walltouch (Multivendor E-Commerce)',
                    'description'  => 'Multivendor commerce platform with Super Admin, Admin, and Seller operations.',
                    'technologies' => ['Laravel', 'MySQL', 'Bootstrap'],
                    'link'         => 'https://www.walltouchbd.com',
                ],
                [
                    'name'         => 'Simple Admission',
                    'description'  => 'Education agency platform for study-abroad admissions and process management.',
                    'technologies' => ['Laravel', 'Bootstrap', 'MySQL'],
                    'link'         => 'https://simpleadmission.net',
                ],
                [
                    'name'         => 'BFSA-JICA',
                    'description'  => 'Food safety compliance system covering inspections, swab tests, and sample tracking.',
                    'technologies' => ['Laravel', 'MySQL'],
                    'link'         => 'https://bfsastirc.com',
                ],
                [
                    'name'         => 'Laravel Chat with Vue.js',
                    'description'  => 'Real-time private messaging app with typing indicators and unread tracking.',
                    'technologies' => ['Laravel', 'Vue.js', 'Pusher'],
                    'link'         => 'https://github.com/lakibul/laravel-chat.git',
                ],
                [
                    'name'         => 'Health Point',
                    'description'  => 'Hospital management system for patient and operational workflows.',
                    'technologies' => ['Laravel', 'MySQL'],
                    'link'         => 'https://github.com/lakibul/health-point.git',
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
