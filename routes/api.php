<?php









use App\Helpers\Routes\RoutesHelper;
use App\Http\Controllers\ServicesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//require('/project_Uneversty/system/laravel/projectTravel/routes/Helper/RoutesHelper.php');
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
//RouteHelper::includeRoutFiles(__DIR__.'/api/v1');
Route::prefix('v1')

    ->group(function () {
        RoutesHelper::includeRoutFiles(__DIR__ . '/api/v1');
    });
