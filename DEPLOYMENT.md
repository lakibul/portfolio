# Laravel Portfolio - Vercel Deployment

This Laravel portfolio application is configured for deployment on Vercel.

## ⚠️ Important: Fix for "No Output Directory named 'dist'" Error

If you encounter the error about missing "dist" directory, follow these steps:

### Step 1: Vercel Project Settings
1. Go to your project dashboard on Vercel
2. Click on "Settings" tab
3. Go to "General" section
4. Set **Framework Preset** to "Other" (not Next.js or any Node.js framework)
5. Set **Build Command** to: `echo "No build required"`
6. Set **Output Directory** to: `.` (just a dot)
7. Save the settings

### Step 2: Redeploy
1. Go to "Deployments" tab
2. Click "Redeploy" on the latest deployment
3. Or push a new commit to trigger automatic deployment

## Deployment Steps

1. **Push to GitHub**
   ```bash
   git add .
   git commit -m "Prepare for Vercel deployment"
   git push origin main
   ```

2. **Connect to Vercel**
   - Go to [vercel.com](https://vercel.com)
   - Sign up/Login with GitHub
   - Import your repository
   - **IMPORTANT**: Set Framework Preset to "Other"

3. **Environment Variables**
   Set these in Vercel dashboard under "Settings > Environment Variables":
   ```
   APP_NAME=Lakibul Portfolio
   APP_ENV=production
   APP_KEY=base64:your-generated-key-here
   APP_DEBUG=false
   LOG_CHANNEL=stderr
   CACHE_DRIVER=array
   SESSION_DRIVER=cookie
   QUEUE_CONNECTION=sync
   ```

4. **Generate APP_KEY**
   Run locally and copy the key:
   ```bash
   php artisan key:generate --show
   ```

## Project Configuration

- ✅ `vercel.json` - Properly configured for PHP
- ✅ `api/index.php` - Entry point for Vercel
- ✅ No Node.js build process required
- ✅ Static portfolio (no database required)

## Features

- ✅ Contact form with JSON response
- ✅ Responsive design with animations
- ✅ Professional layout
- ✅ CV download functionality
- ✅ Modern UI/UX

## Troubleshooting

### Common Issues:

1. **"Missing dist directory"**
   - Solution: Set Framework Preset to "Other" in Vercel settings

2. **"Build failed"**
   - Solution: Ensure Build Command is set to `echo "No build required"`

3. **"500 Internal Server Error"**
   - Solution: Check environment variables are set correctly

## Local Development

```bash
composer install
php artisan key:generate
php artisan serve
```
