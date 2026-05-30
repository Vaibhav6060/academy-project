<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Blog;
use App\Models\Services;
use App\Models\Faculty;
use App\Models\UpcomingBatch;
use App\Models\Testimonial;
use App\Models\TopperStudent;
use App\Models\Gallery;
use App\Models\Newsletter;
use App\Models\Enquiry;
use App\Models\Contact;
use App\Models\Answerkey;
use App\Models\Enrollment;
use App\Models\Visitor;


class DashboardCharts extends ChartWidget
{
    protected static ?string $heading = 'Website Modules Analytics';
    protected static bool $isLazy = false;

    protected static ?string $maxHeight = 'none';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Total Records',
                    'data' => [
                        Blog::count(),
                        Services::count(),
                        Faculty::where('is_active', true)->count(),
                        UpcomingBatch::count(),
                        Testimonial::where('is_active', true)->count(),
                        TopperStudent::where('is_active', true)->count(),
                        Gallery::where('is_active', true)->count(),
                        Newsletter::count(),
                        Enquiry::count(),
                        Contact::count(),
                        Answerkey::count(),
                        Enrollment::count(),
                        Visitor::count(),
                        Visitor::whereDate('created_at', today())->count(),
                    ],
                    'backgroundColor' => [
                        '#f87171', // Blogs
                        '#60a5fa', // Services
                        '#34d399', // Faculties
                        '#fbbf24', // Upcoming Batches
                        '#c084fc', // Testimonials
                        '#facc15', // Toppers
                        '#f472b6', // Gallery
                        '#4ade80', // Newsletter
                        '#fdba74', // Enquiries
                        '#93c5fd', // Contacts
                        '#fcd34d', // Answer Keys
                        '#6ee7b7', // Enrollments
                        '#a78bfa', // Visitors
                        '#fca5a5', // Unique Today
                    ],
                ],
            ],
            'labels' => [
                'Blogs',
                'Services',
                'Faculties',
                'Upcoming Batches',
                'Testimonials',
                'Topper Students',
                'Gallery Images',
                'Newsletter Subscribers',
                'Enquiries',
                'Contact Messages',
                'Answer Keys',
                'Enrollments',
                'Total Visitors',
                'Unique Visitors Today',
            ],
        ];
    }


    protected function getType(): string
    {
        return 'line'; // You can change to 'pie', 'doughnut', 'line' etc
    }
    // public function getColumnSpan(): int|string|array
    // {
    //     return 'full'; // 🛑 this makes the chart full width properly
    // }
    // public function getOptions(): array
    // {
    //     return [
    //         'scales' => [
    //             'y' => [
    //                 'beginAtZero' => true,
    //             ],
    //         ],
    //         'maintainAspectRatio' => false, // Important line to reduce chart height
    //     ];
    // }
}
