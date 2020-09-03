 <?php

namespace App\Providers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class CollectionMacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // 自定义集合分页服务
        if (!Collection::hasMacro('paginate')) {
            //注册分页宏
            Collection::macro('paginate',
                function ($perPage = 15, $page = null, $options = []) {
                    //获取当前页
                    $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
                    //初始化LengthAwarePaginator
                    return (new LengthAwarePaginator(
                        $this->forPage($page, $perPage), $this->count(), $perPage, $page, $options))
                        ->withPath('');
                });
        }
    }
}
