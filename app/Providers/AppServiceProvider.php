<?php

namespace App\Providers;

use App\Models\Hero;
use App\Models\Team;
use App\Models\Work;
use App\Models\About;
use App\Models\Client;
use App\Models\Mission;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Support\ServiceProvider;

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
        view()->composer(['components.hero'], function ($view) {
            $view->with('heros', Hero::take(3)->get());
        });

        view()->composer(['components.service', 'components.navigation', 'components.foot', 'hero.show' , 'service.show',
            'project.show'], function ($view) {
            $view->with('services', Service::take(6)->get());
        });
        view()->composer(['components.project', 'portfolio' , 'hero.show','service.show'], function ($view) {
            $view->with('projects', Project::take(6)->get());
            $view->with('project', Project::first());
        });
        view()->composer(['components.about-us'], function ($view) {
            $view->with('about_us', About::take(6)->get());
        });
        view()->composer(['about.show'], function ($view) {
            $view->with('about_us', About::where('is_current', 1)->first());
        });
        view()->composer(['components.work'], function ($view) {
            $view->with('works', Work::take(4)->get());
        });
        view()->composer(['components.team', 'team.index'], function ($view) {
            $view->with('teams', Team::all());
        });
        view()->composer(['components.clients', 'client.index'], function ($view) {
            $view->with('clients', Client::all());
        });
        view()->composer(['components.missions'], function ($view) {
            $view->with('mission', Mission::where('type', 'Mission')->first());
            $view->with('vision', Mission::where('type', 'Vision')->first());
        });
    }
}
