<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Installation & API Guide</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .step-card {
            transition: transform 0.3s;
            margin-bottom: 20px;
        }
        .step-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .step-number {
            width: 40px;
            height: 40px;
            background-color: #FF2D20;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 15px;
        }
        .api-example {
            background-color: #f8f9fa;
            border-radius: 5px;
            padding: 15px;
            font-family: monospace;
            margin: 10px 0;
        }
        .laravel-logo {
            max-width: 200px;
            margin: 20px auto;
            display: block;
        }
        .section-header {
            border-bottom: 2px solid #FF2D20;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }
        .img-container {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin: 15px 0;
            text-align: center;
        }
        .img-container img {
            max-width: 100%;
            height: auto;
            border: 1px solid #dee2e6;
            border-radius: 4px;
        }
        .img-caption {
            font-size: 0.9rem;
            color: #6c757d;
            margin-top: 8px;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="text-center mb-5">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="Laravel Logo" class="laravel-logo">
            <h1 class="display-4">Laravel Installation & API Guide</h1>
            <p class="lead">A step-by-step tutorial for beginners</p>
        </div>

        <!-- Installation Section -->
        <section class="mb-5">
            <h2 class="section-header"><i class="fas fa-download me-2"></i>Laravel Installation</h2>
            
            <div class="row">
                <!-- Step 1 -->
                <div class="col-md-6">
                    <div class="card step-card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="step-number">1</div>
                                <h5 class="card-title mb-0">Prerequisites</h5>
                            </div>
                            <p class="card-text">Before installing Laravel, ensure you have the following installed:</p>
                            <ul>
                                <li>PHP ≥ 8.1</li>
                                <li>Composer (PHP dependency manager)</li>
                                <li>MySQL or other database system</li>
                                <li>Web server (Apache/Nginx) or use Laravel's built-in server</li>
                            </ul>
                            <div class="img-container">
                                <img src="https://www.hostinger.com/tutorials/wp-content/uploads/sites/2/2022/08/laravel-system-requirements.webp" alt="Laravel prerequisites">
                                <div class="img-caption">Laravel system requirements</div>
                            </div>
                            <p>You can check PHP version with <code>php -v</code> and Composer with <code>composer --version</code>.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="col-md-6">
                    <div class="card step-card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="step-number">2</div>
                                <h5 class="card-title mb-0">Install Laravel via Composer</h5>
                            </div>
                            <p class="card-text">Use Composer to create a new Laravel project:</p>
                            <div class="api-example">
                                composer create-project laravel/laravel my-laravel-app
                            </div>
                            <div class="img-container">
                                <img src="https://www.positronx.io/wp-content/uploads/2020/04/laravel-composer-create-project-command.jpg" alt="Composer installation">
                                <div class="img-caption">Creating Laravel project with Composer</div>
                            </div>
                            <p>This will create a new directory called "my-laravel-app" with all Laravel files.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="col-md-6">
                    <div class="card step-card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="step-number">3</div>
                                <h5 class="card-title mb-0">Configure Environment</h5>
                            </div>
                            <p class="card-text">Set up your environment variables:</p>
                            <ol>
                                <li>Copy <code>.env.example</code> to <code>.env</code></li>
                                <li>Generate application key: <code>php artisan key:generate</code></li>
                                <li>Configure database settings in <code>.env</code> file</li>
                            </ol>
                            <div class="img-container">
                                <img src="https://www.itsolutionstuff.com/upload/laravel/laravel-env-file-example.png" alt="Environment configuration">
                                <div class="img-caption">Laravel .env file configuration</div>
                            </div>
                            <p>Example database configuration:</p>
                            <div class="api-example">
                                DB_CONNECTION=mysql<br>
                                DB_HOST=127.0.0.1<br>
                                DB_PORT=3306<br>
                                DB_DATABASE=laravel<br>
                                DB_USERNAME=root<br>
                                DB_PASSWORD=
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Step 4 -->
                <div class="col-md-6">
                    <div class="card step-card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="step-number">4</div>
                                <h5 class="card-title mb-0">Run the Application</h5>
                            </div>
                            <p class="card-text">Start the development server:</p>
                            <div class="api-example">
                                php artisan serve
                            </div>
                            <div class="img-container">
                                <img src="https://www.positronx.io/wp-content/uploads/2020/04/laravel-artisan-serve-command.jpg" alt="Artisan serve">
                                <div class="img-caption">Running Laravel development server</div>
                            </div>
                            <p>This will start a server at <a href="http://localhost:8000" target="_blank">http://localhost:8000</a>.</p>
                            <p>You should see the Laravel welcome page:</p>
                            <div class="img-container">
                                <img src="https://laravel-courses.com/storage/series/55/8f6d7a1c-5a5c-4e0e-9f5a-7d0e8a6b5b5a.png" alt="Laravel welcome page">
                                <div class="img-caption">Laravel welcome screen</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- API Section -->
        <section class="mb-5">
            <h2 class="section-header"><i class="fas fa-code me-2"></i>Creating APIs with Laravel</h2>
            
            <div class="row">
                <!-- API Basics -->
                <div class="col-md-6">
                    <div class="card step-card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="step-number">1</div>
                                <h5 class="card-title mb-0">API Basics</h5>
                            </div>
                            <p class="card-text">Laravel makes it easy to build RESTful APIs. Key concepts:</p>
                            <ul>
                                <li><strong>Routes</strong>: Define API endpoints</li>
                                <li><strong>Controllers</strong>: Handle request logic</li>
                                <li><strong>Models</strong>: Interact with database</li>
                                <li><strong>Resources</strong>: Transform data for API responses</li>
                            </ul>
                            <div class="img-container">
                                <img src="https://www.nicesnippets.com/upload/blog/1588674600laravel-api.png" alt="API flow">
                                <div class="img-caption">Laravel API architecture</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Creating Routes -->
                <div class="col-md-6">
                    <div class="card step-card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="step-number">2</div>
                                <h5 class="card-title mb-0">Creating API Routes</h5>
                            </div>
                            <p class="card-text">Define routes in <code>routes/api.php</code>:</p>
                            <div class="api-example">
                                // Basic GET route<br>
                                Route::get('/posts', function () {<br>
                                &nbsp;&nbsp;return response()->json(['message' => 'List of posts']);<br>
                                });<br><br>
                                
                                // Resource route<br>
                                Route::apiResource('posts', PostController::class);
                            </div>
                            <p>API routes are automatically prefixed with <code>/api</code>.</p>
                            <div class="img-container">
                                <img src="https://www.itsolutionstuff.com/upload/laravel/laravel-8-api-authentication-with-sanctum-tutorial.png" alt="Route groups">
                                <div class="img-caption">API route examples</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Creating Controller -->
                <div class="col-md-6">
                    <div class="card step-card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="step-number">3</div>
                                <h5 class="card-title mb-0">Creating a Controller</h5>
                            </div>
                            <p class="card-text">Generate a controller with Artisan:</p>
                            <div class="api-example">
                                php artisan make:controller PostController --api
                            </div>
                            <p>This creates a controller with RESTful methods:</p>
                            <div class="api-example">
                                class PostController extends Controller<br>
                                {<br>
                                &nbsp;&nbsp;public function index() { /* GET /api/posts */ }<br>
                                &nbsp;&nbsp;public function store(Request $request) { /* POST /api/posts */ }<br>
                                &nbsp;&nbsp;public function show($id) { /* GET /api/posts/{id} */ }<br>
                                &nbsp;&nbsp;public function update(Request $request, $id) { /* PUT/PATCH /api/posts/{id} */ }<br>
                                &nbsp;&nbsp;public function destroy($id) { /* DELETE /api/posts/{id} */ }<br>
                                }
                            </div>
                            <div class="img-container">
                                <img src="https://www.itsolutionstuff.com/upload/laravel/laravel-controller-tutorial-example-from-scratch.png" alt="Controller example">
                                <div class="img-caption">API Controller structure</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Testing API -->
                <div class="col-md-6">
                    <div class="card step-card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="step-number">4</div>
                                <h5 class="card-title mb-0">Testing Your API</h5>
                            </div>
                            <p class="card-text">You can test your API with:</p>
                            <ul>
                                <li>Postman</li>
                                <li>cURL</li>
                                <li>Laravel's built-in HTTP tests</li>
                            </ul>
                            <p>Example cURL command:</p>
                            <div class="api-example">
                                curl -X GET http://localhost:8000/api/posts
                            </div>
                            <div class="img-container">
                                <img src="https://www.positronx.io/wp-content/uploads/2020/04/laravel-api-test-with-postman.jpg" alt="Postman testing">
                                <div class="img-caption">Testing API with Postman</div>
                            </div>
                            <p>Laravel also provides <code>php artisan route:list</code> to see all routes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Additional Resources -->
        <section class="mb-5">
            <h2 class="section-header"><i class="fas fa-book me-2"></i>Additional Resources</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-book fa-3x mb-3 text-primary"></i>
                            <h5>Official Documentation</h5>
                            <p>Comprehensive Laravel docs with examples</p>
                            <a href="https://laravel.com/docs" target="_blank" class="btn btn-outline-primary">View Docs</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-video fa-3x mb-3 text-danger"></i>
                            <h5>Laracasts</h5>
                            <p>Video tutorials for all skill levels</p>
                            <a href="https://laracasts.com" target="_blank" class="btn btn-outline-danger">Visit Laracasts</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fab fa-github fa-3x mb-3"></i>
                            <h5>GitHub Repositories</h5>
                            <p>Open-source Laravel projects</p>
                            <a href="https://github.com/laravel/laravel" target="_blank" class="btn btn-outline-dark">View on GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="text-center py-4 text-muted">
            <p>Laravel Installation & API Guide &copy; 2023</p>
            <p>Made with <i class="fas fa-heart text-danger"></i> for Laravel developers</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>