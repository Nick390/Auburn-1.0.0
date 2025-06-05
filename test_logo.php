<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auburn CMS - Logo Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Auburn CMS - Logo Path Test</h1>
        
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Logo.svg Test</h5>
                    </div>
                    <div class="card-body text-center">
                        <p>Using absolute path: <code>/admin/files/logo.svg</code></p>
                        <img src="/admin/files/logo.svg" width="72" height="72" alt="Logo SVG - Absolute" class="border">
                        
                        <hr>
                        
                        <p>Using relative path: <code>admin/files/logo.svg</code></p>
                        <img src="admin/files/logo.svg" width="72" height="72" alt="Logo SVG - Relative" class="border">
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Favicon Test</h5>
                    </div>
                    <div class="card-body text-center">
                        <p>Using absolute path: <code>/admin/files/favicon.png</code></p>
                        <img src="/admin/files/favicon.png" width="72" height="72" alt="Favicon PNG - Absolute" class="border">
                        
                        <hr>
                        
                        <p>Using relative path: <code>admin/files/favicon.png</code></p>
                        <img src="admin/files/favicon.png" width="72" height="72" alt="Favicon PNG - Relative" class="border">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-12">
                <div class="alert alert-info">
                    <h6>Path Test Results:</h6>
                    <ul>
                        <li>If you see all 4 images above, the paths are working correctly</li>
                        <li>If some are missing, there might be path issues</li>
                        <li>Absolute paths (starting with /) work from anywhere in the site</li>
                        <li>Relative paths work only from the correct directory level</li>
                    </ul>
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="install.php" class="btn btn-primary">Go to Installation</a>
                    <a href="index.php" class="btn btn-secondary">Go to Login</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 