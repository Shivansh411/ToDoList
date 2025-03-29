<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Installation & API Guide</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center mb-4">Laravel Installation & API Guide</h2>
        
        <!-- Step 1: Install Laravel -->
        <div class="accordion" id="laravelGuide">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Step 1: Install Laravel
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#laravelGuide">
                    <div class="accordion-body">
                        <p>Use the following command to install Laravel:</p>
                        <pre class="bg-light p-2">composer create-project laravel/laravel myProject</pre>
                        <img src="https://laravel.com/img/logomark.min.svg" class="img-fluid" alt="Laravel Logo">
                    </div>
                </div>
            </div>
            
            <!-- Step 2: Run Laravel Server -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Step 2: Run Laravel Server
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#laravelGuide">
                    <div class="accordion-body">
                        <p>Navigate to your project folder and run:</p>
                        <pre class="bg-light p-2">php artisan serve</pre>
                        <img src="https://i.imgur.com/5MHUVt3.png" class="img-fluid" alt="Laravel Serve Command">
                    </div>
                </div>
            </div>
            
            <!-- Step 3: What is an API? -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Step 3: What is an API?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#laravelGuide">
                    <div class="accordion-body">
                        <p>API (Application Programming Interface) allows different applications to communicate with each other. In Laravel, APIs are used to build web services.</p>
                        <img src="https://miro.medium.com/max/1400/1*fX4_kdzLvZplXGRNpfFrnA.png" class="img-fluid" alt="API Explanation">
                    </div>
                </div>
            </div>
            
            <!-- Step 4: Why Use API in Laravel? -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Step 4: Why Use API in Laravel?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#laravelGuide">
                    <div class="accordion-body">
                        <p>Laravel provides a simple and powerful way to create APIs using built-in routing and response handling.</p>
                        <ul>
                            <li>Easy to build RESTful services</li>
                            <li>Supports authentication & authorization</li>
                            <li>Flexible data handling with JSON responses</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Step 5: How to Use API in Laravel? -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Step 5: How to Use API in Laravel?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#laravelGuide">
                    <div class="accordion-body">
                        <p>Create an API route in Laravel:</p>
                        <pre class="bg-light p-2">Route::get('/api/users', function () {
    return response()->json(User::all());
});</pre>
                        <p>This route returns a JSON response containing all users.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>