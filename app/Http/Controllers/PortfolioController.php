<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $data = [
            'name'     => 'Md Lakibul Hasan',
            'title'    => 'Backend Software Engineer',
            'tagline'  => 'Building scalable APIs and backend systems with PHP, Laravel, Node.js — microservices, payment integrations, and database optimization.',
            'email'    => 'lakibul.cse@gmail.com',
            'phone'    => '+880 1983-427887',
            'location' => 'Dhaka, Bangladesh',
            'linkedin' => 'https://www.linkedin.com/in/lakibul-hasan',
            'github'   => 'https://github.com/lakibul',
            'summary'  => 'Backend Software Engineer with 3+ years of experience building scalable APIs and backend systems using PHP (Laravel, CodeIgniter, Raw), Node.js, and JavaScript. Experienced in microservices, payment integrations, and database optimization using MySQL, MongoDB, Redis, and Docker.',
            'skills'   => [
                'Languages'       => ['PHP', 'JavaScript', 'C', 'HTML', 'CSS'],
                'Frameworks'      => ['Laravel (v5–v11)', 'CodeIgniter (v3, v4)', 'Node.js', 'Vue.js (Basic)'],
                'Frontend'        => ['Bootstrap', 'AJAX', 'jQuery', 'Responsive UI', 'SPA Architecture'],
                'Database'        => ['MySQL', 'PostgreSQL', 'MongoDB', 'DynamoDB', 'Firebase Firestore'],
                'Tools & DevOps'  => ['Docker', 'Git', 'Composer', 'Laravel Artisan', 'cPanel', 'Redis'],
                'Concepts'        => ['OOP', 'MVC', 'REST API', 'GraphQL', 'Design Patterns', 'DSA', 'Microservices'],
            ],
            'experience' => [
                [
                    'title'            => 'Software Developer',
                    'company'          => 'ParallaxLogic InfoTech',
                    'location'         => 'Shahjadpur, Gulshan, Dhaka',
                    'period'           => 'Jan 2023 – Present',
                    'responsibilities' => [
                        'Developed microservice-based backend systems using PHP, Laravel, CodeIgniter, and Node.js, including legacy PHP migrations with API integrations and data scraping.',
                        'Optimized MongoDB and MySQL queries, reducing database response time by 25%.',
                        'Developed a social platform for older adults (Wyzr) with real-time chat, events, carpools, timeline posts, and subscription billing.',
                        'Implemented third-party payment gateway integrations including Stripe, Google Pay, and Apple Pay.',
                        'Built REST APIs consumed by Flutter mobile applications and third-party services.',
                        'Contributed to an ERP-based hotel system using React.js, Firebase real-time chat, Node.js, and CodeIgniter.',
                    ],
                ],
                [
                    'title'            => 'Freelance Backend Developer',
                    'company'          => 'Contract / Remote',
                    'location'         => 'Remote',
                    'period'           => '2024 – Present',
                    'responsibilities' => [
                        'Developed and maintained backend systems for E-commerce, SaaS, and ERP applications — APIs, database design, and third-party integrations.',
                        'Implemented real-time chat, authentication, payment integrations (Stripe, Google Pay, Apple Pay), and REST APIs for web and mobile applications.',
                        'Built backend features for a SEO analytics and keyword rank tracking platform, integrating DataForSEO APIs to collect SERP rankings, search volume, and CPC data.',
                    ],
                ],
            ],
            'projects' => [
                [
                    'name'         => 'Wyzr',
                    'description'  => 'Community-driven social platform for older adults — real-time chat, carpools, events, timeline posts, and subscription billing. Available on Google Play Store.',
                    'technologies' => ['Laravel', 'Flutter', 'Stripe', 'Google Pay', 'Apple Pay', 'MySQL'],
                    'features'     => ['Social networking for older adults', 'Real-time chat & events', 'Carpool coordination', 'Subscription management', 'Multi-gateway payment integration'],
                    'github'       => '#',
                    'link'         => 'https://play.google.com/store/search?q=wyzr&c=apps&hl=en',
                ],
                [
                    'name'         => 'Walltouch — Multivendor E-Commerce',
                    'description'  => 'Full multivendor marketplace with dedicated Super Admin, Admin, and Seller panels. Customer-facing storefront with full order lifecycle management.',
                    'technologies' => ['Laravel', 'MySQL', 'Bootstrap', 'Payment Gateway'],
                    'features'     => ['Multivendor marketplace', 'Role-based admin panels', 'Order & inventory management', 'Payment gateway integration'],
                    'github'       => '#',
                    'link'         => 'https://www.walltouchbd.com',
                ],
                [
                    'name'         => 'Simple Admission',
                    'description'  => 'Education agency SaaS platform for study-abroad consultancy and institute admissions — student applications, document management, and partner institute tracking.',
                    'technologies' => ['Laravel', 'MySQL', 'Bootstrap'],
                    'features'     => ['Student application management', 'Institute partnership system', 'Admission process tracking', 'Document management'],
                    'github'       => '#',
                    'link'         => 'https://simpleadmission.net',
                ],
                [
                    'name'         => 'BFSA-JICA',
                    'description'  => 'Food safety compliance platform for the hospitality industry. Manages surveys, inspections, swab tests, and sample tests to enforce health standards.',
                    'technologies' => ['Laravel', 'MySQL', 'Bootstrap'],
                    'features'     => ['Survey & inspection management', 'Swab and sample test tracking', 'Food safety compliance reporting', 'Hospitality industry dashboard'],
                    'github'       => '#',
                    'link'         => 'https://bfsastirc.com',
                ],
                [
                    'name'         => 'Hipe — ERP Hotel System',
                    'description'  => 'Comprehensive ERP hotel management system with React.js frontend, Firebase real-time chat, Node.js APIs, and CodeIgniter admin panel. Includes Google Translation API with MongoDB caching.',
                    'technologies' => ['React.js', 'Node.js', 'CodeIgniter', 'Firebase', 'MongoDB', 'Google Translation API'],
                    'features'     => ['Hotel ERP management', 'Firebase real-time chat', 'Node.js mobile APIs', 'Multilingual support with MongoDB caching'],
                    'github'       => '#',
                    'link'         => '#',
                ],
                [
                    'name'         => 'Better Buy — Multivendor E-Commerce',
                    'description'  => 'Multivendor e-commerce system with role-based panels for Super Admin, Admin, and Seller. Full customer order workflow from cart to fulfillment.',
                    'technologies' => ['Laravel', 'MySQL', 'Bootstrap', 'Payment Gateway'],
                    'features'     => ['Multivendor marketplace', 'Role-based admin panels', 'Full order lifecycle management', 'Payment gateway integration'],
                    'github'       => '#',
                    'link'         => '#',
                ],
                [
                    'name'         => 'Product Management System',
                    'description'  => 'Multi-authentication system with a unified login for Admin and Merchant roles. Admin manages products while merchants handle their own inventory.',
                    'technologies' => ['Laravel', 'MySQL', 'Bootstrap', 'Multi-Auth'],
                    'features'     => ['Unified multi-role login', 'Admin product management', 'Merchant inventory control', 'Role-based access control'],
                    'github'       => '#',
                    'link'         => '#',
                ],
                [
                    'name'         => 'Laravel Chat with Vue.js',
                    'description'  => 'Real-time private messaging app built with Laravel 10 API backend, Vue.js 3 SPA, and Pusher WebSockets — supports typing indicators and unread message tracking.',
                    'technologies' => ['Laravel 10', 'Vue.js 3', 'Pusher', 'WebSocket', 'REST API'],
                    'features'     => ['Real-time messaging via Pusher', 'One-to-one private messaging', 'Typing indicators', 'Unread message counts'],
                    'github'       => 'https://github.com/lakibul/laravel-chat.git',
                    'link'         => '#',
                ],
                [
                    'name'         => 'Health Point',
                    'description'  => 'Hospital Management System built with Laravel for managing patients, appointments, doctors, and hospital operations efficiently.',
                    'technologies' => ['Laravel', 'MySQL', 'Bootstrap'],
                    'features'     => ['Patient management', 'Doctor & appointment scheduling', 'Hospital operations dashboard', 'Role-based access control'],
                    'github'       => 'https://github.com/lakibul/health-point.git',
                    'link'         => '#',
                ],
                [
                    'name'         => 'Eggplant Disease Recognition (ML Thesis)',
                    'description'  => 'Machine learning research paper using transfer learning to recognize leaf blight and fruit rot diseases in eggplant crops from image data.',
                    'technologies' => ['Python', 'TensorFlow', 'Transfer Learning', 'Computer Vision'],
                    'features'     => ['Transfer learning model', 'Crop disease detection', 'Agricultural technology application', 'Deep learning research'],
                    'github'       => '#',
                    'link'         => '#',
                ],
            ],
            'education' => [
                [
                    'degree'      => 'BSc in Computer Science & Engineering',
                    'institution' => 'Daffodil International University',
                    'period'      => '2017 – 2021',
                    'location'    => 'Dhaka, Bangladesh',
                    'cgpa'        => '3.36 / 4.00',
                ],
                [
                    'degree'      => 'Higher Secondary Certificate (HSC)',
                    'institution' => 'Govt. Haji Mohammad Mohsin College',
                    'period'      => '2016',
                    'location'    => 'Chittagong, Bangladesh',
                    'gpa'         => '4.50 / 5.00',
                    'group'       => 'Science',
                ],
                [
                    'degree'      => 'Secondary School Certificate (SSC)',
                    'institution' => 'Chittagong Collegiate School',
                    'period'      => '2014',
                    'location'    => 'Chittagong, Bangladesh',
                    'gpa'         => '5.00 / 5.00',
                    'group'       => 'Science',
                ],
            ],
            'certifications' => [
                'Training on PHP Laravel — BASIS-BITM (Jan 2022 – Mar 2022)',
                'Data Structures and Algorithms — Bohubrihi',
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
