# 🚀 Laravel Portfolio Vercel Deployment Guide

## Current Status
Your build error is likely due to one of these common issues:
1. **Node.js version mismatch** - Vercel detected package.json and tried to build as Node.js
2. **Missing environment variables** - Laravel needs APP_KEY and other configs
3. **PHP runtime configuration** - Vercel needs to use PHP runtime, not Node.js

## 📋 Step-by-Step Solution

### 1. Login to Vercel
```powershell
vercel login
# Choose your preferred login method (GitHub, Google, etc.)
```

### 2. Set Environment Variables
After login, set these environment variables in Vercel:
```bash
vercel env add APP_KEY
# Paste: base64:NS5GYfbCK8giYdqZQgY9IIcJpqqRnNikZ9ggdAd7jm8=

vercel env add APP_ENV
# Enter: production

vercel env add APP_DEBUG
# Enter: false

vercel env add APP_URL
# Enter: https://your-portfolio.vercel.app (will be provided after first deploy)
```

### 3. Deploy with Correct Configuration
```powershell
# Run the deployment script
.\deploy.ps1
```

### 4. Alternative Manual Deployment
If the script fails, try manual deployment:
```powershell
# Install dependencies
composer install --no-dev --optimize-autoloader

# Deploy to Vercel
vercel --prod
```

## 🔧 Troubleshooting Build Errors

### Error: "No Output Directory named 'dist'"
✅ **FIXED** - Updated vercel.json with correct configuration

### Error: "Build failed" or "Runtime mismatch"
**Solution**: Make sure vercel.json is using PHP runtime:
```json
{
    "version": 2,
    "builds": [
        {
            "src": "api/index.php",
            "use": "vercel-php@0.6.0"
        }
    ],
    "routes": [
        {
            "src": "/(.*)",
            "dest": "/api/index.php"
        }
    ],
    "installCommand": "echo 'No install command required'",
    "buildCommand": "echo 'No build command required'",
    "outputDirectory": "."
}
```

### Error: "APP_KEY not set"
**Solution**: Use the generated key in environment variables:
```
APP_KEY=base64:NS5GYfbCK8giYdqZQgY9IIcJpqqRnNikZ9ggdAd7jm8=
```

### Error: "Database connection failed"
**Solution**: For portfolio website (static content), disable database in production:
- Use array cache driver
- Use array session driver
- Remove database dependencies

## 🎯 Quick Deploy Command
After setting environment variables:
```powershell
vercel --prod
```

## 📞 If You Still Get Errors
1. Copy and paste the exact error message
2. Check Vercel dashboard for detailed logs
3. Ensure all required files are present:
   - ✅ vercel.json
   - ✅ api/index.php
   - ✅ .vercelignore
   - ✅ public/index.php

## 🌟 Expected Result
After successful deployment:
- ✅ Portfolio website live on Vercel
- ✅ Professional design with animations
- ✅ All CV data properly displayed
- ✅ Fast loading and responsive

Your portfolio URL will be: `https://[your-project-name].vercel.app`
