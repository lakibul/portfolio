<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Md Lakibul Hasan',
            'title' => 'Software Developer',
            'tagline' => 'Building scalable web applications with modern technologies and third-party integrations',
            'email' => 'lakibul.cse@gmail.com',
            'phone' => '+880 01983-427887',
            'location' => 'Dhaka, Bangladesh',
            'linkedin' => 'https://www.linkedin.com/in/lakib-hasan-295024169/',
            'github' => 'https://github.com/lakibul',
            'summary' => 'Software Developer with 3 years of experience in building scalable web applications using PHP (Laravel, CodeIgniter), Node JS, JavaScript, AJAX, Vue JS React JS, MySQL, MongoDB, HTML, CSS, Bootstrap with third party services integrations. Proficient in OOP, design patterns, and data structures, APIs. Also knowledgeable in Machine Learning and Deep Learning from research work.',
            'skills' => [
                'Languages' => ['C', 'C++', 'PHP', 'HTML', 'CSS', 'JavaScript'],
                'Frameworks' => ['CodeIgniter (v3, v4)', 'Laravel (v5-v11)', 'React.js', 'Node.js'],
                'Frontend' => ['Bootstrap', 'AJAX', 'jQuery'],
                'Database' => ['MySQL', 'MongoDB', 'Firestore', 'Redis', 'Elasticsearch'],
                'Tools' => ['Git', 'Composer', 'FileZilla', 'cPanel', 'IONOS', 'MQTT', 'Laravel Artisan CLI', 'Docker'],
                'Concepts' => ['OOP', 'MVC', 'REST API', 'GraphQL', 'Design Patterns', 'DSA', 'ER & Class Diagrams']
            ],
            'experience' => [
                [
                    'title' => 'Software Developer',
                    'company' => 'ParallaxLogic InfoTech',
                    'location' => 'Shahjadpur, Gulshan',
                    'period' => 'Jan 2023 – Present',
                    'responsibilities' => [
                        'Developed a social platform for older adults with chat, events, carpools, and timeline features using Laravel and Flutter',
                        'Contributed to an ERP-based hotel system using React.js, Firebase, Node.js, and CodeIgniter',
                        'Built CRM software with real-time chat functionality using Pusher and CodeIgniter v3',
                        'Migrated legacy PHP systems to Laravel framework with improved performance',
                        'Performed data scraping, API integration, query optimization, database design, and indexing',
                        'Delivered dynamic websites, e-commerce platforms, and web-based tools using Laravel, CodeIgniter, Node.js, and Bootstrap',
                        'Developed REST APIs for mobile applications'
                    ]
                ],
                [
                    'title' => 'Laravel Developer',
                    'company' => 'Uttara InfoTech',
                    'location' => 'Uttara, Dhaka',
                    'period' => 'Jun 2022 - Jul 2022',
                    'responsibilities' => [
                        'Worked on small-scale Laravel projects for local businesses',
                        'Developed custom admin panels and CRUD modules',
                        'Implemented basic API integrations for various business requirements'
                    ]
                ]
            ],
            'projects' => [
                [
                    'name' => 'Wyzr',
                    'description' => 'A community-driven social platform designed for older adults to connect, chat, carpools, events, timeline posts, and subscriptions. Available on Google Play Store.',
                    'technologies' => ['Laravel', 'Flutter', 'Stripe', 'Google Pay', 'Apple Pay'],
                    'features' => [
                        'Social networking for older adults',
                        'Real-time chat functionality',
                        'Event management system',
                        'Carpool coordination',
                        'Timeline posts and social feeds',
                        'Subscription management',
                        'Payment integration with multiple gateways'
                    ],
                    'github' => '#',
                    'link' => 'https://play.google.com/store/search?q=wyzr&c=apps&hl=en'
                ],
                [
                    'name' => 'Walltouch (Multivendor E-Commerce)',
                    'description' => 'Complete multivendor e-commerce platform with separate panels for Super Admin, Admin, and Sellers. Comprehensive solution for online marketplace management.',
                    'technologies' => ['Laravel', 'Bootstrap', 'MySQL', 'Payment Gateways'],
                    'features' => [
                        'Multivendor marketplace system',
                        'Super Admin, Admin, and Seller panels',
                        'Customer registration and order management',
                        'Vendor management system',
                        'Product catalog and inventory management',
                        'Order processing and tracking',
                        'Payment gateway integration'
                    ],
                    'github' => '#',
                    'link' => 'https://www.walltouchbd.com'
                ],
                [
                    'name' => 'Simple Admission',
                    'description' => 'Education agency software for study abroad consultancy and institute admissions. Complete solution for managing student applications and admissions process.',
                    'technologies' => ['Laravel', 'Bootstrap', 'MySQL'],
                    'features' => [
                        'Student application management',
                        'Institute partnership system',
                        'Admission process tracking',
                        'Document management',
                        'Study abroad consultation tools',
                        'Admin dashboard for agencies'
                    ],
                    'github' => '#',
                    'link' => 'https://simpleadmission.net'
                ],
                [
                    'name' => 'Hipe - ERP Hotel Management System',
                    'description' => 'Comprehensive ERP hotel management system with React.js frontend, Firebase live chat, Node.js APIs for mobile & scraping, and CodeIgniter admin panel. Features integrated Google Translation API with MongoDB caching for efficient multilingual support.',
                    'technologies' => ['React.js', 'Firebase', 'Node.js', 'CodeIgniter', 'MongoDB', 'Google Translation API'],
                    'features' => [
                        'Hotel management ERP system',
                        'React.js frontend interface',
                        'Firebase real-time chat integration',
                        'Node.js APIs for mobile applications',
                        'Data scraping capabilities',
                        'CodeIgniter admin panel',
                        'Google Translation API integration',
                        'MongoDB caching for multilingual support'
                    ],
                    'github' => '#'
                ],
                [
                    'name' => 'Better Buy (Laravel E-Commerce)',
                    'description' => 'Multivendor e-commerce system with role-based panels (Super Admin, Admin, Seller) and full customer order workflow management.',
                    'technologies' => ['Laravel', 'MySQL', 'Bootstrap', 'Payment Gateways'],
                    'features' => [
                        'Multivendor e-commerce platform',
                        'Role-based access control',
                        'Super Admin, Admin, and Seller panels',
                        'Complete customer order workflow',
                        'Product and inventory management',
                        'Payment processing integration',
                        'Order tracking and management'
                    ],
                    'github' => 'https://github.com/lakibul/better-buy'
                ],
                [
                    'name' => 'Laravel Chat with Vue.js',
                    'description' => 'Full-featured real-time chat application built with Laravel 10 (API backend), Vue.js 3 (frontend SPA), and Pusher (WebSocket broadcasting). Supports one-to-one private messaging, typing indicators, unread message counts, and modern responsive UI.',
                    'technologies' => ['Laravel 10', 'Vue.js 3', 'Pusher', 'WebSocket', 'REST API'],
                    'features' => [
                        'Real-time messaging with Pusher WebSockets',
                        'One-to-one private messaging',
                        'Typing indicators',
                        'Unread message counts',
                        'Modern responsive UI',
                        'Laravel API backend',
                        'Vue.js SPA frontend'
                    ],
                    'github' => 'https://github.com/lakibul/laravel-chat.git'
                ],
                [
                    'name' => 'Product Management System',
                    'description' => 'Multi-authentication system with unified login form for Admin and Merchant roles. Admin creates and manages products while merchants handle inventory management.',
                    'technologies' => ['Laravel', 'MySQL', 'Multi-Authentication', 'Role Management'],
                    'features' => [
                        'Multi-authentication with single login form',
                        'Role-based access for Admin and Merchant',
                        'Product creation and management by Admin',
                        'Inventory management by Merchants',
                        'Comprehensive API documentation',
                        'Role-based permission system'
                    ],
                    'github' => 'https://github.com/lakibul/product-manage'
                ],
                [
                    'name' => 'Recognition of Leaf Blight and Fruit Rot Diseases of Eggplant using Transfer Learning',
                    'description' => 'Machine Learning thesis-based research paper focusing on disease recognition in eggplants using advanced transfer learning techniques.',
                    'technologies' => ['Python', 'TensorFlow', 'Transfer Learning', 'Computer Vision', 'Machine Learning'],
                    'features' => [
                        'Disease recognition in eggplant crops',
                        'Transfer learning implementation',
                        'Computer vision techniques',
                        'Agricultural technology application',
                        'Research-based thesis project',
                        'Deep learning model development'
                    ],
                    'github' => '#'
                ]
            ],
            'education' => [
                [
                    'degree' => 'BSc in Computer Science & Engineering',
                    'institution' => 'Daffodil International University',
                    'period' => '2017 - 2021',
                    'location' => 'Dhaka, Bangladesh',
                    'cgpa' => '3.36 out of 4.00'
                ],
                [
                    'degree' => 'Higher Secondary Certificate (HSC)',
                    'institution' => 'Govt. Haji Mohammad Mohsin College',
                    'period' => '2016',
                    'location' => 'Chittagong, Bangladesh',
                    'gpa' => '4.50 out of 5.00',
                    'group' => 'Science'
                ],
                [
                    'degree' => 'Secondary School Certificate (SSC)',
                    'institution' => 'Chittagong Collegiate School',
                    'period' => '2014',
                    'location' => 'Chittagong, Bangladesh',
                    'gpa' => '5.00 out of 5.00',
                    'group' => 'Science'
                ]
            ],
            'certifications' => [
                'Training on PHP Laravel - BASIS-BITM (16/01/2022 – 16/03/2022)',
                'Data Structures And Algorithms - Bohubrihi',
                'Professional Web Development',
                'Machine Learning Fundamentals'
            ]
        ];

        return view('portfolio.index', compact('data'));
    }

    public function downloadCV()
    {
        $pathToFile = public_path('assets/cv/Md_Lakibul_Hasan_CV.pdf');
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
