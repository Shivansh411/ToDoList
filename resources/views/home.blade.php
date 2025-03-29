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
        
        <div class="card mb-3">
            <div class="card-header bg-primary text-white">Step 1: Install Laravel</div>
            <div class="card-body">
                <p>Use the following command to install Laravel:</p>
                <pre class="bg-light p-2">composer create-project laravel/laravel myProject</pre>
                <img src="https://laravel.com/img/logomark.min.svg" class="img-fluid" alt="Laravel Logo">
            </div>
        </div>
        
        <div class="card mb-3">
            <div class="card-header bg-success text-white">Step 2: Run Laravel Server</div>
            <div class="card-body">
                <p>Navigate to your project folder and run:</p>
                <pre class="bg-light p-2">php artisan serve</pre>
                <img src="https://i.imgur.com/5MHUVt3.png" class="img-fluid" alt="Laravel Serve Command">
            </div>
        </div>
        
        <div class="card mb-3">
            <div class="card-header bg-info text-white">Understanding API in Laravel</div>
            <div class="card-body">
                <p>Laravel makes it easy to create RESTful APIs using routes.</p>
                <pre class="bg-light p-2">Route::get('/api/users', function () {
    return response()->json(User::all());
});</pre>
                <img src="https://miro.medium.com/max/1400/1*fX4_kdzLvZplXGRNpfFrnA.png" class="img-fluid" alt="Laravel API Example">
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
