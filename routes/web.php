<?php

use App\Http\Controllers\ProfileController;
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

Route::resource('/', App\Http\Controllers\Pjv\HomeController::class);
Route::resource('/accommodation', App\Http\Controllers\Pjv\AccommodationController::class);
// Route::resource('/activities', App\Http\Controllers\Pjv\ActivityController::class);
Route::resource('/dining', App\Http\Controllers\Pjv\DiningController::class);
// Route::resource('/spa', App\Http\Controllers\Pjv\SpaController::class);
// Route::resource('/event', App\Http\Controllers\Pjv\EventController::class);
Route::resource('/wedding', App\Http\Controllers\Pjv\WeddingController::class);
Route::resource('/offers', App\Http\Controllers\Pjv\OfferController::class);
Route::resource('/gallery', App\Http\Controllers\Pjv\GalleryController::class);
Route::resource('/contact-us', App\Http\Controllers\Pjv\ContactUsController::class);
Route::resource('/story', App\Http\Controllers\Pjv\StoryController::class);
Route::resource('/terms-conditions', App\Http\Controllers\Pjv\TermConditionController::class);
Route::resource('/awards', App\Http\Controllers\Pjv\AwardController::class);
Route::resource('/press-room', App\Http\Controllers\Pjv\PressRoomController::class);
Route::resource('/careers', App\Http\Controllers\Pjv\CareerController::class);
Route::resource('/blog', App\Http\Controllers\Pjv\BlogController::class);
Route::get('/blog/{slug}', [App\Http\Controllers\Pjv\BlogController::class, 'show']);



Route::get('/m', [App\Http\Controllers\Mobile\IndexController::class, 'index'])->name('mobile.home');
Route::get('/m/accommodation', [App\Http\Controllers\Mobile\AccommodationController::class, 'index'])->name('mobile.accommodation');
Route::get('/m/dining', [App\Http\Controllers\Mobile\DiningController::class, 'index'])->name('mobile.dining');
Route::get('/m/offers', [App\Http\Controllers\Mobile\OfferController::class, 'index'])->name('mobile.offer');
Route::get('/m/gallery', [App\Http\Controllers\Mobile\GalleryController::class, 'index'])->name('mobile.gallery');
Route::get('/m/wedding', [App\Http\Controllers\Mobile\WeddingController::class, 'index'])->name('mobile.wedding');
Route::get('/m/blog', [App\Http\Controllers\Mobile\BlogController::class, 'index'])->name('mobile.blog');
Route::get('/m/blog/{slug}', [App\Http\Controllers\Mobile\BlogController::class, 'show'])->name('mobile.blog-detail');


Route::get('optimize-all', function () {
    \Artisan::call('optimize:clear');
    dd("Cache is cleared");
});


require __DIR__ . '/auth.php';


// ADMIN
Route::middleware(['auth', 'verified'])->prefix('panel/admin')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('dashboard', App\Http\Controllers\Admin\DashboardController::class);

    Route::resource('home-setting', App\Http\Controllers\Admin\HomeSettingController::class);
    Route::resource('home-slider', App\Http\Controllers\Admin\HomeSliderController::class);
    Route::resource('home-slider2', App\Http\Controllers\Admin\HomeSlider2Controller::class);

    Route::resource('offer-list', App\Http\Controllers\Admin\OfferController::class);
    Route::resource('offer-setting', App\Http\Controllers\Admin\OfferSettingController::class);

    Route::resource('villa-list', App\Http\Controllers\Admin\VillaController::class);
    Route::resource('villa-setting', App\Http\Controllers\Admin\VillaSettingController::class);
    Route::resource('villa-feature', App\Http\Controllers\Admin\VillaFeatureController::class);
    Route::resource('villa-image', App\Http\Controllers\Admin\VillaImageController::class);
    Route::resource('feature-list', App\Http\Controllers\Admin\FeatureController::class);

    Route::resource('experience-list', App\Http\Controllers\Admin\ExperienceController::class);
    Route::resource('experience-setting', App\Http\Controllers\Admin\ExperienceSettingController::class);
    Route::resource('experience-image', App\Http\Controllers\Admin\ExperienceImageController::class);

    Route::resource('spa-list', App\Http\Controllers\Admin\SpaController::class);
    Route::resource('spa-setting', App\Http\Controllers\Admin\SpaSettingController::class);
    Route::resource('spa-image', App\Http\Controllers\Admin\SpaImageController::class);

    Route::resource('restaurant-list', App\Http\Controllers\Admin\RestaurantController::class);
    Route::resource('restaurant-setting', App\Http\Controllers\Admin\RestaurantSettingController::class);
    Route::resource('restaurant-image', App\Http\Controllers\Admin\RestaurantImageController::class);

    Route::resource('wedding-list', App\Http\Controllers\Admin\WeddingController::class);
    Route::resource('wedding-setting', App\Http\Controllers\Admin\WeddingSettingController::class);
    Route::resource('wedding-image', App\Http\Controllers\Admin\WeddingImageController::class);

    Route::resource('gallery-list', App\Http\Controllers\Admin\GalleryController::class);
    Route::resource('gallery-setting', App\Http\Controllers\Admin\GallerySettingController::class);
    Route::resource('category', App\Http\Controllers\Admin\CategoryController::class);

    Route::resource('contact-us-setting', App\Http\Controllers\Admin\ContactUsSettingController::class);

    Route::resource('page-list', App\Http\Controllers\Admin\PageController::class);

    Route::resource('award-list', App\Http\Controllers\Admin\AwardController::class);
    Route::resource('award-setting', App\Http\Controllers\Admin\AwardSettingController::class);

    Route::resource('press-room-list', App\Http\Controllers\Admin\PressRoomController::class);
    Route::resource('press-room-setting', App\Http\Controllers\Admin\PressRoomSettingController::class);

    Route::resource('career-list', App\Http\Controllers\Admin\CareerController::class);
    Route::resource('career-setting', App\Http\Controllers\Admin\CareerSettingController::class);

    Route::resource('blog-list', App\Http\Controllers\Admin\BlogController::class);
    Route::resource('blog-setting', App\Http\Controllers\Admin\BlogSettingController::class);
});
