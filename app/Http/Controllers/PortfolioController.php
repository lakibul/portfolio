<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Md Lakibul Hasan',
            'title' => 'Backend Developer',
            'tagline' => 'Building robust, scalable server-side solutions with modern technologies',
            'email' => 'lakibulhasan03@gmail.com',
            'phone' => '+880 1717-036103',
            'location' => 'Dhaka, Bangladesh',
            'linkedin' => 'https://linkedin.com/in/lakibul-hasan',
            'github' => 'https://github.com/lakibul',
            'summary' => 'Passionate Backend Developer with expertise in PHP, Laravel, Node.js, and database management. Experienced in building RESTful APIs, microservices, and scalable web applications. Strong problem-solving skills and commitment to clean, maintainable code.',
            'skills' => [
                'Programming Languages' => ['PHP', 'JavaScript', 'Python', 'Java', 'C++'],
                'Frameworks & Libraries' => ['Laravel', 'Node.js', 'Express.js', 'React.js', 'Vue.js'],
                'Databases' => ['MySQL', 'PostgreSQL', 'MongoDB', 'Redis'],
                'Tools & Technologies' => ['Git', 'Docker', 'AWS', 'Linux', 'Nginx', 'Apache'],
                'API Development' => ['RESTful APIs', 'GraphQL', 'API Documentation', 'Postman'],
                'Other' => ['OOP', 'Design Patterns', 'TDD', 'Agile/Scrum', 'DevOps']
            ],
            'experience' => [
                [
                    'title' => 'Backend Developer',
                    'company' => 'Tech Solutions Ltd.',
                    'location' => 'Dhaka, Bangladesh',
                    'period' => '2022 - Present',
                    'responsibilities' => [
                        'Developed and maintained RESTful APIs using Laravel and Node.js',
                        'Optimized database queries resulting in 40% performance improvement',
                        'Implemented microservices architecture for scalable applications',
                        'Collaborated with frontend teams to integrate APIs seamlessly',
                        'Mentored junior developers and conducted code reviews'
                    ]
                ],
                [
                    'title' => 'Junior Backend Developer',
                    'company' => 'Digital Innovations',
                    'location' => 'Dhaka, Bangladesh',
                    'period' => '2021 - 2022',
                    'responsibilities' => [
                        'Built web applications using PHP and Laravel framework',
                        'Designed and implemented database schemas',
                        'Created automated testing suites for API endpoints',
                        'Participated in Agile development processes'
                    ]
                ]
            ],
            'projects' => [
                [
                    'name' => 'E-Commerce API Platform',
                    'description' => 'Comprehensive RESTful API for e-commerce platform with user management, product catalog, order processing, and payment integration.',
                    'technologies' => ['Laravel', 'MySQL', 'Redis', 'Stripe API'],
                    'features' => [
                        'JWT Authentication & Authorization',
                        'Product & Category Management',
                        'Shopping Cart & Checkout Process',
                        'Payment Gateway Integration',
                        'Order Tracking & Management'
                    ],
                    'github' => 'https://github.com/lakibul/ecommerce-api'
                ],
                [
                    'name' => 'Real-time Chat Application',
                    'description' => 'Scalable real-time messaging system with WebSocket connections, user presence, and file sharing capabilities.',
                    'technologies' => ['Node.js', 'Socket.io', 'MongoDB', 'Express.js'],
                    'features' => [
                        'Real-time messaging with WebSockets',
                        'User authentication and presence',
                        'File upload and sharing',
                        'Message history and search',
                        'Room-based conversations'
                    ],
                    'github' => 'https://github.com/lakibul/realtime-chat'
                ],
                [
                    'name' => 'Task Management System',
                    'description' => 'Backend system for project and task management with team collaboration features and progress tracking.',
                    'technologies' => ['Laravel', 'PostgreSQL', 'Redis', 'AWS S3'],
                    'features' => [
                        'Project & Task Management',
                        'Team Collaboration Tools',
                        'File Management & Storage',
                        'Progress Tracking & Reports',
                        'Email Notifications'
                    ],
                    'github' => 'https://github.com/lakibul/task-management'
                ]
            ],
            'education' => [
                [
                    'degree' => 'Bachelor of Science in Computer Science',
                    'institution' => 'University of Dhaka',
                    'period' => '2018 - 2022',
                    'location' => 'Dhaka, Bangladesh'
                ]
            ],
            'certifications' => [
                'AWS Certified Developer - Associate',
                'Laravel Certified Developer',
                'MongoDB Certified Developer'
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
