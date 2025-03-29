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
        .code-image {
            background: #1e1e1e;
            padding: 0;
            border-radius: 8px;
            margin: 15px 0;
            overflow: hidden;
        }
        .code-image img {
            width: 100%;
            display: block;
        }
        .img-caption {
            font-size: 0.9rem;
            color: #6c757d;
            margin-top: 8px;
            text-align: center;
        }
        .terminal-image {
            background: #000;
            border-radius: 8px;
            padding: 0;
            margin: 15px 0;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="text-center mb-5">
            <img src="https://via.placeholder.com/400x200/FF2D20/FFFFFF?text=Laravel+Logo" alt="Laravel Logo" class="laravel-logo">
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
                            <div class="terminal-image">
                                <img src="https://carbon.now.sh/embed?bg=rgba(0,0,0,1)&t=seti&wt=none&l=application/x-sh&ds=true&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=48px&ph=32px&ln=false&fl=1&fm=Hack&fs=14px&lh=133%25&si=false&es=2x&wm=false&code=php%2520-v%250A%250Acomposer%2520--version" alt="Terminal commands">
                            </div>
                            <p class="img-caption">Checking PHP and Composer versions</p>
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
                            <div class="terminal-image">
                                <img src="https://carbon.now.sh/embed?bg=rgba(0,0,0,1)&t=seti&wt=none&l=application/x-sh&ds=true&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=48px&ph=32px&ln=false&fl=1&fm=Hack&fs=14px&lh=133%25&si=false&es=2x&wm=false&code=composer%2520create-project%2520laravel%252Flaravel%2520my-laravel-app" alt="Composer command">
                            </div>
                            <p class="img-caption">Installing Laravel via Composer</p>
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
                            <div class="code-image">
                                <img src="https://carbon.now.sh/embed?bg=rgba(30,30,30,1)&t=material&wt=none&l=properties&ds=true&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=48px&ph=32px&ln=false&fl=1&fm=Hack&fs=14px&lh=133%25&si=false&es=2x&wm=false&code=APP_NAME%253DLaravel%250AAPP_ENV%253Dlocal%250AAPP_KEY%253Dbase64%253Asomerandomstring%253D%253D%250AAPP_DEBUG%253Dtrue%250A%250ADB_CONNECTION%253Dmysql%250ADB_HOST%253D127.0.0.1%250ADB_PORT%253D3306%250ADB_DATABASE%253Dlaravel%250ADB_USERNAME%253Droot%250ADB_PASSWORD%253D" alt=".env file">
                            </div>
                            <p class="img-caption">Example .env file configuration</p>
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
                            <div class="terminal-image">
                                <img src="https://carbon.now.sh/embed?bg=rgba(0,0,0,1)&t=seti&wt=none&l=application/x-sh&ds=true&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=48px&ph=32px&ln=false&fl=1&fm=Hack&fs=14px&lh=133%25&si=false&es=2x&wm=false&code=php%2520artisan%2520serve%250A%250AServer%2520started%2520on%2520http%253A%252F%252Flocalhost%253A8000" alt="Artisan serve">
                            </div>
                            <p class="img-caption">Starting Laravel development server</p>
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
                            <div class="code-image">
                                <img src="https://carbon.now.sh/embed?bg=rgba(30,30,30,1)&t=material&wt=none&l=php&ds=true&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=48px&ph=32px&ln=false&fl=1&fm=Hack&fs=14px&lh=133%25&si=false&es=2x&wm=false&code=%253C%253Fphp%250A%250Ause%2520Illuminate%2520Http%2520Request%253B%250Ause%2520App%2520Http%2520Controllers%2520Controller%253B%250Ause%2520App%2520Models%2520Post%253B%250A%250Aclass%2520PostController%2520extends%2520Controller%250A%257B%250A%2520%2520public%2520function%2520index()%250A%2520%2520%257B%250A%2520%2520%2520%2520return%2520Post%253A%253Aall()%253B%250A%2520%2520%257D%250A%257D" alt="Controller example">
                            </div>
                            <p class="img-caption">Basic API controller structure</p>
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
                            <div class="code-image">
                                <img src="https://carbon.now.sh/embed?bg=rgba(30,30,30,1)&t=material&wt=none&l=php&ds=true&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=48px&ph=32px&ln=false&fl=1&fm=Hack&fs=14px&lh=133%25&si=false&es=2x&wm=false&code=%253C%253Fphp%250A%250Ause%2520Illuminate%2520Support%2520Facades%2520Route%253B%250Ause%2520App%2520Http%2520Controllers%2520PostController%253B%250A%250ARoute%253A%253Aget('%252Fposts'%252C%2520%255BPostController%253A%253Aclass%252C%2520'index'%255D)%253B%250ARoute%253A%253Apost('%252Fposts'%252C%2520%255BPostController%253A%253Aclass%252C%2520'store'%255D)%253B%250ARoute%253A%253AapiResource('posts'%252C%2520PostController%253A%253Aclass)%253B" alt="Route definitions">
                            </div>
                            <p class="img-caption">API route definitions</p>
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
                            <div class="terminal-image">
                                <img src="https://carbon.now.sh/embed?bg=rgba(0,0,0,1)&t=seti&wt=none&l=application/x-sh&ds=true&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=48px&ph=32px&ln=false&fl=1&fm=Hack&fs=14px&lh=133%25&si=false&es=2x&wm=false&code=php%2520artisan%2520make%253Acontroller%2520PostController%2520--api" alt="Artisan command">
                            </div>
                            <p class="img-caption">Generating an API controller</p>
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
                            <div class="terminal-image">
                                <img src="https://carbon.now.sh/embed?bg=rgba(0,0,0,1)&t=seti&wt=none&l=application/x-sh&ds=true&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=48px&ph=32px&ln=false&fl=1&fm=Hack&fs=14px&lh=133%25&si=false&es=2x&wm=false&code=curl%2520-X%2520GET%2520http%253A%252F%252Flocalhost%253A8000%252Fapi%252Fposts%250A%250A%257B%250A%2520%2520%2522data%2522%253A%2520%255B%250A%2520%2520%2520%2520%257B%250A%2520%2520%2520%2520%2520%2520%2522id%2522%253A%25201%252C%250A%2520%2520%2520%2520%2520%2520%2522title%2522%253A%2520%2522First%2520Post%2522%250A%2520%2520%2520%2520%257D%250A%2520%2520%255D%250A%257D" alt="API response">
                            </div>
                            <p class="img-caption">Testing API endpoint with cURL</p>
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