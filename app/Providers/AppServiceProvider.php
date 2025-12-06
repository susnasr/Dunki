<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View; // 👈 Import View
use Illuminate\Support\Facades\Auth; // 👈 Import Auth
use App\Models\Message;              // 👈 Import Message

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // ✅ Add this line to fix the pagination buttons
        Paginator::useBootstrapFive();

        // ✅ GLOBAL VIEW COMPOSER
        // This runs on every page load to check unread messages for the sidebar badge
        View::composer('*', function ($view) {
            $unreadCount = 0;
            if (Auth::check()) {
                $unreadCount = Message::where('receiver_id', Auth::id())
                    ->where('is_read', false)
                    ->count();
            }
            $view->with('globalUnreadCount', $unreadCount);
        });
    }
}
