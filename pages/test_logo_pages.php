<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auburn CMS - Logo Test (From Pages Directory)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Auburn CMS - Logo Path Test (From /pages/ directory)</h1>
        
        <div class="alert alert-info">
            <strong>Current Directory:</strong> /pages/<br>
            <strong>Testing paths from subdirectory context</strong>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Logo.svg Test</h5>
                    </div>
                    <div class="card-body text-center">
                        <p>Using relative path: <code>../admin/files/logo.svg</code></p>
                        <img src="../admin/files/logo.svg" width="72" height="72" alt="Logo SVG - Relative from pages" class="border">
                        
                        <hr>
                        
                        <p>Using absolute path: <code>/admin/files/logo.svg</code></p>
                        <img src="/admin/files/logo.svg" width="72" height="72" alt="Logo SVG - Absolute" class="border">
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Favicon Test</h5>
                    </div>
                    <div class="card-body text-center">
                        <p>Using relative path: <code>../admin/files/favicon.png</code></p>
                        <img src="../admin/files/favicon.png" width="72" height="72" alt="Favicon PNG - Relative from pages" class="border">
                        
                        <hr>
                        
                        <p>Using absolute path: <code>/admin/files/favicon.png</code></p>
                        <img src="/admin/files/favicon.png" width="72" height="72" alt="Favicon PNG - Absolute" class="border">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-12">
                <div class="alert alert-success">
                    <h6>Expected Results from /pages/ directory:</h6>
                    <ul>
                        <li>✅ <code>../admin/files/logo.svg</code> should work (goes up one level, then into admin/files)</li>
                        <li>✅ <code>/admin/files/logo.svg</code> should work (absolute path from web root)</li>
                        <li>❌ <code>admin/files/logo.svg</code> would NOT work (looks for /pages/admin/files/)</li>
                    </ul>
                </div>
                
                <div class="alert alert-warning">
                    <h6>Register Page Issue:</h6>
                    <p>If register.php gets <code>admin/files/logo.svg</code> from database (without ../), 
                    it needs to be converted to <code>../admin/files/logo.svg</code> for pages directory.</p>
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="../test_logo.php" class="btn btn-secondary">Main Logo Test</a>
                    <a href="register.php" class="btn btn-primary">Test Register Page</a>
                    <a href="../install.php" class="btn btn-warning">Go to Installation</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 