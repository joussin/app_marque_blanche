<?php

namespace SJoussin\Providers;


use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\ArgvInput;

class AppMarqueBlancheServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

//                $this->app->register(UninstallScaffolderServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Schema::defaultStringLength(191);

        JsonResource::withoutWrapping();


        $this->loadRoutes();
//        $this->loadViews();

        $this->loadMigrationsFrom(
            base_path("/src/Database/Migrations")
        );
    }



    public function loadViews()
    {
        // views
        $views_namespace_path_from_package = base_path("src/resources/views/marque_blanche");

        if(File::isDirectory($views_namespace_path_from_package))
        {
            $this->loadViewsFrom($views_namespace_path_from_package, "marque_blanche");
        }
    }

    public function loadRoutes()
    {
        $use_routes_resource = true;

        // swagger
        $routes_swagger_path_from_package = base_path('src/routes/routes-swagger.php' );

         if(File::isFile($routes_swagger_path_from_package)){
            $this->loadRoutesFrom($routes_swagger_path_from_package);
        }

        // routes

        $generated_route_dir =  base_path ("src/routes/");



        if (File::isDirectory($generated_route_dir)) {
            $routesFiles = File::files(($generated_route_dir));

            foreach ($routesFiles as $routesFile) {

                if($use_routes_resource && Str::contains($routesFile->getRelativePathname(), "resource"))
                {
                    $this->loadRoutesFrom(
                        $generated_route_dir . $routesFile->getRelativePathname()
                    );
                } else if(!$use_routes_resource && !Str::contains($routesFile->getRelativePathname(), "resource"))
                {
                    $this->loadRoutesFrom(
                        $generated_route_dir . $routesFile->getRelativePathname()
                    );
                }

            }
        }
    }
}
