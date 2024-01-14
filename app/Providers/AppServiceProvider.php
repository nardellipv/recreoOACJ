<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view::composer(
            [
                'auth.login',
                'school.parts._menu',
                'school.student.note'
            ],
            function ($view) {

                $registerSchool = Setting::where('id', 2)
                    ->first();

                $registerTeacher = Setting::where('id', 3)
                    ->first();

                $registerStudent = Setting::where('id', 4)
                    ->first();

                $registerNoteColegial = Setting::where('id', 5)
                    ->first();

                $registerNoteInter = Setting::where('id', 6)
                    ->first();

                $downloadExam = Setting::where('id', 7)
                    ->first();

                $downloadCorrection = Setting::where('id', 8)
                    ->first();

                $downloadCorrection2 = Setting::where('id', 9)
                    ->first();

                $view->with([
                    'registerSchool' => $registerSchool,
                    'registerTeacher' => $registerTeacher,
                    'registerStudent' => $registerStudent,
                    'registerNoteColegial' => $registerNoteColegial,
                    'registerNoteInter' => $registerNoteInter,
                    'downloadExam' => $downloadExam,
                    'downloadCorrection' => $downloadCorrection,
                    'downloadCorrection2' => $downloadCorrection2,
                ]);
            }
        );
    }
}
