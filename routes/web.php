<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\ChartOfAccountController;
use App\Http\Controllers\AccountingController;
use App\Http\Controllers\PlaylistController;

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

Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {

    Route::get('/', function () {
        return view('welcome');
    })->name('home');
});

Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    //Accounts routes starts here
    Route::get('coa',[ChartOfAccountController::class,'index'])->name('coa.index');
    Route::get('coa/create',[ChartOfAccountController::class,'create'])->name('coa.create');
    Route::post('coa/store',[ChartOfAccountController::class,'store'])->name('coa.store');
    Route::get('coa/edit/{id}',[ChartOfAccountController::class,'edit'])->name('coa.edit');
    Route::patch('coa/update/{id}',[ChartOfAccountController::class,'update'])->name('coa.update');
    Route::delete('coa/destroy/{id}',[ChartOfAccountController::class,'destroy'])->name('coa.destroy');
    Route::post('coa/status',[ChartOfAccountController::class,'isEnabled'])->name('coa.isEnabled');
    //Accounts routes Ends here

    // journal routes starts here
    Route::resource('journals', JournalController::class)->middleware('auth');
    Route::get('journal/classic',[JournalController::class,'classic'])->name('journals.classic');
    Route::get('cash-book',[AccountingController::class],'cashBook')->name('accounts.cash-book');
    Route::post('cash-book-settings',[AccountingController::class,'cashBookSetting'])->name('accounts.cashBookSetting');
    Route::get('ledger',[AccountingController::class,'ledger'])->name('accounts.ledger');
    Route::get('trial-balance',[AccountingController::class,'trialBalance'])->name('accounts.trialBalance');
    Route::get('profit-n-loss',[AccountingController::class,'profitNLoss'])->name('accounts.profitNLoss');
    Route::get('balance-sheet',[AccountingController::class,'balanceSheet'])->name('accounts.balanceSheet');
    // journal routes ends here

    //Playlists routes starts here
    Route::get('playlists',[PlaylistController::class,'index'])->name('playlists.index');
    Route::post('playlist/store',[PlaylistController::class,'store'])->name('playlists.store');
    Route::get('playlist/show/{id}',[PlaylistController::class,'show'])->name('playlists.show');
    Route::delete('playlist/destroy/{id}',[PlaylistController::class,'destroy'])->name('playlists.destroy');
    //Playlists routes Ends here
});
