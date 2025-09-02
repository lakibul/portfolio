# Laravel Portfolio - Vercel Deployment

This Laravel portfolio application is configured for deployment on Vercel.

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

3. **Environment Variables**
   Set these in Vercel dashboard:
   ```
   APP_NAME=Lakibul Portfolio
   APP_ENV=production
   APP_KEY=base64:your-generated-key-here
   APP_DEBUG=false
   APP_URL=https://your-domain.vercel.app
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

## Features

- ✅ Static portfolio (no database required)
- ✅ Contact form with JSON response
- ✅ Responsive design with animations
- ✅ Professional layout
- ✅ CV download functionality
- ✅ Modern UI/UX

## Local Development

```bash
composer install
php artisan key:generate
php artisan serve
```

## Project Structure

- `api/index.php` - Vercel entry point
- `vercel.json` - Vercel configuration
- Portfolio data is stored in `PortfolioController.php`
- No database required for deployment
