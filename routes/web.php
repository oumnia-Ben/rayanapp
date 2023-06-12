<?php

use App\Http\Controllers\ContributionController;
use App\Http\Controllers\CotisationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\ValidationController;
use App\Http\Controllers\ReleveController;
use App\Http\Controllers\ResidenceController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReunionController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\AnnonceController;
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

Route::group([
    'middleware' => 'auth'
], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/residence', [ResidenceController::class, 'index'])->name('residence');
    Route::get('/cotisation/{year?}', [CotisationController::class, 'index'])->name('cotisation');
    Route::get('/contribution/{year?}', [ContributionController::class, 'index'])->name('contribution');
    Route::get('/contribution/vote/{contribution_id}/{vote}', [ContributionController::class, 'vote'])->name('votecontribution');
    Route::get('/paiement/{year?}', [PaiementController::class, 'index'])->name('paiement');
    Route::get('/validation', [ValidationController::class, 'index'])->name('validation');
    Route::post('/save-validation', [ValidationController::class, 'save'])->name('savevalidation');
    Route::get('/add-paiement', [PaiementController::class, 'create'])->name('addpaiement');
    Route::post('/save-paiement', [PaiementController::class, 'save'])->name('savepaiement');
    Route::get('/releve', [ReleveController::class, 'index'])->name('releve');
    Route::get('/expense', [ExpenseController::class, 'index'])->name('expense');
    Route::get('/reunion', [ReunionController::class, 'index'])->name('reunion');
    Route::get('/annonce', [AnnonceController::class, 'index'])->name('annonce');
});

require __DIR__.'/auth.php';

Route::get('/push/key', function(){
    return [
        'key' => env('VAPID_PUBLIC_KEY')
    ];
});

Route::post('/push/subscribe', [SubscriptionController::class, 'register']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
