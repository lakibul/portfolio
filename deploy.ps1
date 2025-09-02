# Laravel Portfolio Deployment Script for Vercel
# Run this script after logging into Vercel

Write-Host "📦 Starting Laravel Portfolio Deployment to Vercel..." -ForegroundColor Green

# Step 1: Check if logged into Vercel
Write-Host "🔐 Checking Vercel authentication..." -ForegroundColor Yellow
$vercelAuth = vercel whoami
if ($LASTEXITCODE -ne 0) {
    Write-Host "❌ Please login to Vercel first using: vercel login" -ForegroundColor Red
    exit 1
}
Write-Host "✅ Authenticated as: $vercelAuth" -ForegroundColor Green

# Step 2: Check required files
Write-Host "📋 Checking deployment configuration..." -ForegroundColor Yellow

$requiredFiles = @(
    "vercel.json",
    "api/index.php",
    ".vercelignore"
)

foreach ($file in $requiredFiles) {
    if (Test-Path $file) {
        Write-Host "✅ Found: $file" -ForegroundColor Green
    } else {
        Write-Host "❌ Missing: $file" -ForegroundColor Red
        exit 1
    }
}

# Step 3: Validate Laravel structure
Write-Host "🏗️ Validating Laravel structure..." -ForegroundColor Yellow
$laravelFiles = @(
    "public/index.php",
    "artisan",
    "composer.json"
)

foreach ($file in $laravelFiles) {
    if (Test-Path $file) {
        Write-Host "✅ Laravel file: $file" -ForegroundColor Green
    } else {
        Write-Host "❌ Missing Laravel file: $file" -ForegroundColor Red
        exit 1
    }
}

# Step 4: Install dependencies
Write-Host "📦 Installing Composer dependencies..." -ForegroundColor Yellow
composer install --no-dev --optimize-autoloader

if ($LASTEXITCODE -ne 0) {
    Write-Host "❌ Composer install failed" -ForegroundColor Red
    exit 1
}

# Step 5: Deploy to Vercel
Write-Host "🚀 Deploying to Vercel..." -ForegroundColor Yellow
vercel --prod

if ($LASTEXITCODE -eq 0) {
    Write-Host "🎉 Deployment successful!" -ForegroundColor Green
    Write-Host "📝 Your Laravel portfolio is now live on Vercel!" -ForegroundColor Cyan
} else {
    Write-Host "❌ Deployment failed. Check the error messages above." -ForegroundColor Red
    Write-Host "💡 Common issues:" -ForegroundColor Yellow
    Write-Host "   - PHP version mismatch (ensure PHP 8.1+)" -ForegroundColor White
    Write-Host "   - Missing environment variables" -ForegroundColor White
    Write-Host "   - File permissions issues" -ForegroundColor White
    Write-Host "   - Invalid vercel.json configuration" -ForegroundColor White
}
