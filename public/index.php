<?php
// Start the session to be able to use $_SESSION superglobal
session_start();
require_once __DIR__ . '/../vendor/autoload.php';

use App\Router;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\RegisterController;
use App\Controllers\ProfileController;
use App\Controllers\PostController;
use App\Controllers\SearchController;
use App\Controllers\ExploreController;
use App\View;
use App\App;
use App\Config;

// Access to .env file. CreateImmutable to make sure that env variables are not editable
// ->load() to load the env variables into $_ENV superglobal
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();



define('STORAGE_PATH', __DIR__ . '/../storage/uploads');
define('VIEW_PATH', __DIR__ . '/../app/Views');

$router = new Router();

$router
    ->get('/', [HomeController::class, 'index'])
    ->get('/explore', [ExploreController::class, 'index'])
    ->get('/login', [LoginController::class, 'showLoginForm'])
    ->get('/register', [RegisterController::class, 'showRegisterForm'])
    ->get('/profile', [ProfileController::class, 'showMyProfile'])
    ->get('/{username}/edit-profile', [ProfileController::class, 'showEditProfileForm'])
    ->get('/profile/{username}', [ProfileController::class, 'showUserProfile'])
    ->get('/{id_post}/edit', [PostController::class, 'showEditPostForm'])
    ->get('/{id_post}/comments', [PostController::class, 'viewComments'])
    ->get('/search', [SearchController::class, 'showSearch'])
    ->get('/{username}/followers', [ProfileController::class, 'showFollowers'])
    ->get('/{username}/following', [ProfileController::class, 'showFollowing'])
    ->get('/{id_comment}/replies', [PostController::class, 'viewReplies'])

    ->post('/', [HomeController::class, 'index'])
    ->post('/login', [LoginController::class, 'login'])
    ->post('/logout', [LoginController::class, 'logout'])
    ->post('/register', [RegisterController::class, 'register'])
    ->post('/post', [PostController::class, 'createPost'])
    ->post('/{id_post}/edit', [PostController::class, 'editPost'])
    ->post('/{id_post}/delete', [PostController::class, 'deletePost'])
    ->post('/{id_post}/createComment', [PostController::class, 'createComment'])
    ->post('/{id_post}/like', [PostController::class, 'handleLike'])
    ->post('/{id_comment}/handleLike', [PostController::class, 'handleCommentLike'])
    ->post('/{username}/edit-profile', [ProfileController::class, 'editProfile'])
    ->post('/{user_id}/follow', [ProfileController::class, 'followUser'])
    ->post('/{user_id}/unfollow', [ProfileController::class, 'unfollowUser'])
    ->post('/search', [SearchController::class, 'searchUsers'])
    ->post('/{id_comment}/createReply', [PostController::class, 'createReply']);



(new App(
    $router,
    ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
    new Config($_ENV)
))->run();
