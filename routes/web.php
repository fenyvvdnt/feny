<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\AuthControllerAdmin;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\Admin\TestimonialController as AdminTestimonialController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\ShopController;

// Public Index
Route::get('/', function () {
    return view('/index');
});

// Public routes untuk admin
Route::get('/admin', function () {
    return redirect('/admin/login');
});

// Route login admin
Route::get('/admin/login', [AuthControllerAdmin::class, 'showLogin']);
Route::post('/admin/login', [AuthControllerAdmin::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AuthControllerAdmin::class, 'logout'])->name('admin.logout');

// Contoh route dashboard admin
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/main', function () {
        return view('admin.main');
    })->name('admin.main');
});

//Public Routes untuk contact
Route::prefix('admin')->group(function () {
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
    Route::put('/contact/{id}', [ContactController::class, 'update'])->name('contact.update');
    Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
});

// Admin - Backend Hero Management
Route::prefix('admin')->group(function () {
    Route::resource('hero', HeroController::class);
    Route::resource('testimonial', AdminTestimonialController::class)->names('admin.testimonial');
    Route::resource('product', AdminProductController::class)->names('admin.product');
});


// Public routes untuk front-end
Route::get('/home', function () {
    return view('front-end.home');
})->name('home');

Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/product/{slug}', [ShopController::class, 'show'])->name('product.show');

Route::get('/product-detail/{product}', function ($product) {
    $products = [
        'caramelfudge' => [
            'name' => 'MYKONOS - Caramel Fudge',
            'price' => 'Rp 200.000',
            'image' => 'caramelfudge-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma caramel yang manis dan menggoda.',
            'notes' => ['top' => 'Caramel, Vanilla', 'middle' => 'Brown Sugar, Toffee', 'base' => 'Musk, Vanilla']
        ],
        'vanillaclouds' => [
            'name' => 'MYKONOS - Vanilla Clouds',
            'price' => 'Rp 200.000',
            'image' => 'vanillaclouds-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma vanilla yang lembut dan nyaman.',
            'notes' => ['top' => 'Vanilla, Marshmallow', 'middle' => 'Cotton Candy, Caramel', 'base' => 'Musk, Vanilla']
        ],
        'utopia' => [
            'name' => 'MYKONOS - Utopia',
            'price' => 'Rp 80.000',
            'image' => 'utopia-paarfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma yang menyegarkan.',
            'notes' => ['top' => 'Citrus, Green Notes', 'middle' => 'Floral, Aquatic', 'base' => 'Musk, Woody']
        ],
        'sparklingrose' => [
            'name' => 'MYKONOS - Sparkling Rose',
            'price' => 'Rp 200.000',
            'image' => 'sparklingrose-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma mawar yang segar dan elegan.',
            'notes' => ['top' => 'Rose, Bergamot', 'middle' => 'Jasmine, Lily', 'base' => 'Musk, Amber']
        ],
        'slowliving' => [
            'name' => 'MYKONOS - Slow Living California',
            'price' => 'Rp 200.000',
            'image' => 'slowliving-california-removebg-preview.png',
            'description' => 'Parfum dengan aroma yang menenangkan dan nyaman.',
            'notes' => ['top' => 'Lavender, Sage', 'middle' => 'Jasmine, Rose', 'base' => 'Musk, Woody']
        ],
        'satinblanc' => [
            'name' => 'MYKONOS - Satin Blanc',
            'price' => 'Rp 200.000',
            'image' => 'satinblanc-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma yang bersih dan elegan.',
            'notes' => ['top' => 'Bergamot, Lemon', 'middle' => 'Jasmine, Lily', 'base' => 'Musk, Amber']
        ],
        'sansa' => [
            'name' => 'MYKONOS - Sansa',
            'price' => 'Rp 200.000',
            'image' => 'sansa-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma yang feminin dan elegan.',
            'notes' => ['top' => 'Bergamot, Mandarin', 'middle' => 'Jasmine, Rose', 'base' => 'Musk, Amber']
        ],
        'rouge' => [
            'name' => 'MYKONOS - Rouge',
            'price' => 'Rp 200.000',
            'image' => 'rouge-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma yang sensual dan memikat.',
            'notes' => ['top' => 'Bergamot, Mandarin', 'middle' => 'Jasmine, Rose', 'base' => 'Musk, Amber']
        ],
        'pistacio' => [
            'name' => 'MYKONOS - Pistacio',
            'price' => 'Rp 200.000',
            'image' => 'pistacio-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma kacang pistacio yang unik.',
            'notes' => ['top' => 'Pistacio, Almond', 'middle' => 'Vanilla, Caramel', 'base' => 'Musk, Woody']
        ],
        'pinkdrops' => [
            'name' => 'MYKONOS - Pink Drops',
            'price' => 'Rp 200.000',
            'image' => 'pinkdrops-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma yang manis dan feminin.',
            'notes' => ['top' => 'Strawberry, Raspberry', 'middle' => 'Rose, Jasmine', 'base' => 'Musk, Vanilla']
        ],
        'pinkbeach' => [
            'name' => 'MYKONOS - Pink Beach',
            'price' => 'Rp 200.000',
            'image' => 'pinkbeach-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma pantai yang menyegarkan.',
            'notes' => ['top' => 'Coconut, Sea Salt', 'middle' => 'Jasmine, Rose', 'base' => 'Musk, Woody']
        ],
        'ontherock' => [
            'name' => 'MYKONOS - On The Rock',
            'price' => 'Rp 200.000',
            'image' => 'ontherock-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma yang kuat dan maskulin.',
            'notes' => ['top' => 'Bergamot, Pepper', 'middle' => 'Lavender, Cedar', 'base' => 'Musk, Amber']
        ],
        'nikycucalifornia' => [
            'name' => 'MYKONOS - Nikycu California',
            'price' => 'Rp 200.000',
            'image' => 'nikycucalifornia-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma yang segar dan energik.',
            'notes' => ['top' => 'Citrus, Green Notes', 'middle' => 'Jasmine, Rose', 'base' => 'Musk, Woody']
        ],
        'muskaura' => [
            'name' => 'MYKONOS - Musk Aura',
            'price' => 'Rp 200.000',
            'image' => 'muskaura-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma musk yang sensual.',
            'notes' => ['top' => 'Bergamot, Mandarin', 'middle' => 'Jasmine, Rose', 'base' => 'Musk, Amber']
        ],
        'ivory' => [
            'name' => 'MYKONOS - Ivory',
            'price' => 'Rp 200.000',
            'image' => 'ivory-pafume-removebg-preview.png',
            'description' => 'Parfum dengan aroma yang bersih dan elegan.',
            'notes' => ['top' => 'Bergamot, Lemon', 'middle' => 'Jasmine, Lily', 'base' => 'Musk, Amber']
        ],
        'hawaii' => [
            'name' => 'MYKONOS - Hawaii',
            'price' => 'Rp 200.000',
            'image' => 'hawaii-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma tropis yang menyegarkan.',
            'notes' => ['top' => 'Coconut, Pineapple', 'middle' => 'Jasmine, Rose', 'base' => 'Musk, Woody']
        ],
        'enchanted' => [
            'name' => 'MYKONOS - Enchanted',
            'price' => 'Rp 200.000',
            'image' => 'enchanted-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma yang misterius dan memikat.',
            'notes' => ['top' => 'Bergamot, Mandarin', 'middle' => 'Jasmine, Rose', 'base' => 'Musk, Amber']
        ],
        'downearth' => [
            'name' => 'MYKONOS - Down Earth',
            'price' => 'Rp 200.000',
            'image' => 'downearth-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma yang natural dan menenangkan.',
            'notes' => ['top' => 'Lavender, Sage', 'middle' => 'Jasmine, Rose', 'base' => 'Musk, Woody']
        ],
        'coconutdream' => [
            'name' => 'MYKONOS - Coconut Dream',
            'price' => 'Rp 200.000',
            'image' => 'coconutdream-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma kelapa yang menyegarkan.',
            'notes' => ['top' => 'Coconut, Vanilla', 'middle' => 'Jasmine, Rose', 'base' => 'Musk, Woody']
        ],
        'chai' => [
            'name' => 'MYKONOS - Chai',
            'price' => 'Rp 200.000',
            'image' => 'chai-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma teh chai yang hangat.',
            'notes' => ['top' => 'Cardamom, Cinnamon', 'middle' => 'Tea, Ginger', 'base' => 'Musk, Vanilla']
        ],
        'bonfirevanilla' => [
            'name' => 'MYKONOS - Bonfire Vanilla',
            'price' => 'Rp 200.000',
            'image' => 'bonfirevanilla-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma vanilla yang hangat.',
            'notes' => ['top' => 'Vanilla, Caramel', 'middle' => 'Wood Smoke, Amber', 'base' => 'Musk, Vanilla']
        ],
        'affair' => [
            'name' => 'MYKONOS - Affair',
            'price' => 'Rp 75.000',
            'image' => 'affair-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma yang elegan dan memikat.',
            'notes' => ['top' => 'Bergamot, Lemon, Mandarin', 'middle' => 'Jasmine, Rose, Lily of the Valley', 'base' => 'Musk, Amber, Vanilla']
        ],
        'aphrodite' => [
            'name' => 'MYKONOS - Aphrodite',
            'price' => 'Rp 130.000',
            'image' => 'aphrodite-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma yang memikat dan elegan.',
            'notes' => ['top' => 'Bergamot, Mandarin, Peach', 'middle' => 'Jasmine, Rose, Lily', 'base' => 'Musk, Amber, Vanilla']
        ],
        'babylove' => [
            'name' => 'MYKONOS - Baby Love',
            'price' => 'Rp 131.000',
            'image' => 'babylove-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma manis dan lembut.',
            'notes' => ['top' => 'Cotton Candy, Vanilla', 'middle' => 'Marshmallow, Caramel', 'base' => 'Musk, Vanilla']
        ],
        'cafedrops' => [
            'name' => 'MYKONOS - Café Drops',
            'price' => 'Rp 155.000',
            'image' => 'cafedrops-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma kopi yang nikmat.',
            'notes' => ['top' => 'Coffee, Vanilla', 'middle' => 'Caramel, Hazelnut', 'base' => 'Musk, Coffee']
        ],
        'darksecret' => [
            'name' => 'MYKONOS - Dark Secret',
            'price' => 'Rp 79.000',
            'image' => 'darksecret-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma misterius dan sensual.',
            'notes' => ['top' => 'Black Pepper, Bergamot', 'middle' => 'Rose, Patchouli', 'base' => 'Oud, Vanilla']
        ],
        'matchalatte' => [
            'name' => 'MYKONOS - Matcha Latte',
            'price' => 'Rp 160.000',
            'image' => 'matchalatte-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma matcha yang nikmat.',
            'notes' => ['top' => 'Matcha, Green Tea', 'middle' => 'Milk, Vanilla', 'base' => 'Musk, Woody']
        ],
        'luminous' => [
            'name' => 'MYKONOS - Luminous',
            'price' => 'Rp 249.000',
            'image' => 'luminous-parfume-removebg-preview.png',
            'description' => 'Parfum dengan aroma yang mewah dan elegan.',
            'notes' => ['top' => 'Bergamot, Mandarin', 'middle' => 'Jasmine, Rose', 'base' => 'Amber, Musk']
        ]
    ];

    if (!isset($products[$product])) {
        abort(404);
    }

    $source = request()->query('source', 'shop');
    return view('front-end.product-detail', [
        'product' => $products[$product],
        'source' => $source
    ]);
})->name('product.detail');

// Route untuk user (front-end)
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Protected routes
Route::middleware(['auth'])->group(function () {
    Route::get('/contact', function () {
        return view('front-end.contact');
    })->name('contact');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Testimonial routes
Route::resource('testimonial', TestimonialController::class);

Route::get('/why', function () {
    return view('front-end.why');
})->name('why');


Route::get('/main', function () {
    return view('admin.main');
})->name('main');