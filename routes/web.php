<?php

use App\Models\User;
use App\Models\Plant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\JardinController;
use App\Http\Controllers\ContenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Jardin_connecterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $jardiniers = User::all();
    return view('dashboard', compact('jardiniers'));
})
->middleware(['auth', 'verified'])
->name('dashboard');

Route::middleware('auth', 'verified')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route Jardin 
    Route::get('/jardin', [JardinController::class, 'index'])->name('jardin');
    Route::get('/jardin/create', [JardinController::class, 'create'])->name('jardin.create');
    Route::post('/jardin/store', [JardinController::class, 'store'])->name('jardin.store');
    Route::get('/jardin/{id}', [JardinController::class, 'show'])->name('jardin.show');
    Route::delete('/jardin/{id}', [JardinController::class, 'destroy'])->name('jardin.delete');

    // Route Vos Jardin
    Route::get('/vosJardin',[Jardin_connecterController::class , 'jardinier_connecter'])->name('jardin.jardinier_connecter');

    //Route Plante
    Route::resource('plante', PlantController::class);

    //Route Contenu
    Route::get('/contenu', [ContenuController::class,'index'])->name('contenu.index');
    Route::post('/contenu', [ContenuController::class,'content'])->name('contenu.content');
    Route::get('/contenu/create', [ContenuController::class,'create'])->name('contenu.create');
    Route::post('/contenu/create', [ContenuController::class,'attach'])->name('contenu.attach');
    Route::delete('/contenu/{id}', [ContenuController::class,'destroy'])->name('contenu.delete');

});

require __DIR__.'/auth.php';



// Route Jardinier
Route::get('/jardinier',function(){
    $jard_list = DB::table('users')
        ->where('profil', 'jardinier')
        ->get();
    $jardiniers = User::all();
    return view('jardinier.index', compact('jardiniers', 'jard_list'));
})->name('jardinier');




// Route::get('/test', function(){
//     dd(Plant::find(2)->jardins()->attach(3, ['quantité' => 9, 'date_plantation'=> '2023-03-15']));
// });