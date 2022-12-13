    <?php

    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\cookieController;
    use App\Http\Controllers\ShowroomController;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

    Route::get('/', function () {
        return view('auth.Before-Rofi');
    });

    Route::middleware(["auth"]) -> group(function() {
        Route::get('/home', [ShowroomController::class, "home"]);
        Route::get('/ListCar', [ShowroomController::class, "index"]);
        Route::get('/showroom/add-car', [ShowroomController::class, "create"]);
        Route::post('/showroom/store-create', [ShowroomController::class, "store_create"]);
        Route::get('/showroom/{id}/detail-car', [ShowroomController::class, "edit_detail"]);
        Route::post('showroom/{id}/edit', [ShowroomController::class, "edit"]);
        Route::put('/showroom/{id}/store-edit', [ShowroomController::class, "store_edit"]);
        Route::get('/showroom/{id}/hapus', [ShowroomController::class, "destroy"]);
        Route::get('/profiles', [AuthController::class, "profile"]);
        Route::put('/update-profile/{id}', [AuthController::class, "update_profile"]);
        Route::get('/auth/{id}/delete-account', [AuthController::class, "delete_profile"]);
    });


    Route::get('/auth/register', [AuthController::class, "register"])->middleware("guest");
    Route::post('/auth/regist-user', [AuthController::class, "register_user"]);
    Route::get('/auth/login', [AuthController::class, "login_page"])->name('login')->middleware("guest");
    Route::post('/auth/login-store', [AuthController::class, "login_store"]);
    Route::get('/auth/logout', [AuthController::class, "logout"]);
