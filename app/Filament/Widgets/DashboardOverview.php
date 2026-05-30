<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Blog;
use App\Models\Faculty;
use App\Models\Services;
use App\Models\UpcomingBatch;
use App\Models\Testimonial;
use App\Models\TopperStudent;
use App\Models\Gallery;
use App\Models\Newsletter; 
use App\Models\Visitor;
use App\Models\Answerkey;
use App\Models\Enquiry;
use App\Models\Enrollment;
use App\Models\Contact;

class DashboardOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getCards(): array
    {
        return [
            // Website Activity
            Card::make('Total Visitors', Visitor::count())
                ->description('Since website launch')
                ->color('info')
                ->icon('heroicon-o-eye'),

            Card::make('Today\'s Unique Visitors', Visitor::whereDate('created_at', today())->count())
                ->description("New users today")
                ->color('info')
                ->icon('heroicon-o-user'),

            Card::make('Newsletter Subscribers', Newsletter::count())
                ->description('Subscribed users')
                ->color('primary')
                ->icon('heroicon-o-envelope'),

            Card::make('Enquiries', Enquiry::count())
                ->description('Website enquiries')
                ->color('success')
                ->icon('heroicon-o-chat-bubble-left-ellipsis'),

            Card::make('Contact Submissions', Contact::count())
                ->description('Contact form messages')
                ->color('success')
                ->icon('heroicon-o-phone'),

            // Content Modules
            Card::make('Blog Posts', Blog::count())
                ->description('Published articles')
                ->color('primary')
                ->icon('heroicon-o-document-text'),

            Card::make('Services Offered', Services::count())
                ->description('Course/services listed')
                ->color('secondary')
                ->icon('heroicon-o-briefcase'),

            Card::make('Student Testimonials', Testimonial::where('is_active', true)->count())
                ->description('Visible testimonials')
                ->color('warning')
                ->icon('heroicon-o-chat-bubble-bottom-center-text'),

            Card::make('Gallery Images', Gallery::where('is_active', true)->count())
                ->description('Uploaded images')
                ->color('gray')
                ->icon('heroicon-o-photo'),

            // Core Academy
            Card::make('Faculties', Faculty::where('is_active', true)->count())
                ->description('Active faculty profiles')
                ->color('success')
                ->icon('heroicon-o-user-group'),

            Card::make('Topper Students', TopperStudent::where('is_active', true)->count())
                ->description('Featured toppers')
                ->color('primary')
                ->icon('heroicon-o-trophy'),

            Card::make('Upcoming Batches', UpcomingBatch::count())
                ->description('Live upcoming batches')
                ->color('warning')
                ->icon('heroicon-o-calendar-days'),

            Card::make('Enrollments', Enrollment::count())
                ->description('Student enrollments')
                ->color('success')
                ->icon('heroicon-o-academic-cap'),

            // Utility
            Card::make('Answer Keys Uploaded', Answerkey::count())
                ->description('Exam answer PDFs')
                ->color('gray')
                ->icon('heroicon-o-archive-box-arrow-down'),
        ];
    }
}
