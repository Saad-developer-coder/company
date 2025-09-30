# Modern Company Website

A beautiful, modern company website built with Laravel and Tailwind CSS.

## Features

- 🎨 **Modern Design** - Clean, contemporary UI with smooth animations
- 📱 **Responsive** - Fully responsive design that works on all devices
- ⚡ **Fast Performance** - Optimized for speed and performance
- 🎯 **SEO Ready** - Built with SEO best practices
- 🔧 **Easy to Customize** - Well-structured code that's easy to modify
- 🎭 **Interactive Elements** - Smooth hover effects and transitions
- 📧 **Contact Form** - Working contact form with validation
- 🚀 **Laravel 12** - Built with the latest Laravel framework
- 🎨 **Tailwind CSS** - Utility-first CSS framework for rapid styling

## Pages

- **Home** - Hero section, features, stats, and call-to-action
- **About** - Company mission, values, team, and story
- **Services** - Detailed service offerings with process overview
- **Contact** - Contact form, information, and FAQ section

## Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd company-website
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database setup**
   - Create a MySQL database named "company"
   - Update your `.env` file with database credentials
   - Run migrations: `php artisan migrate`

6. **Build assets**
   ```bash
   npm run build
   # or for development
   npm run dev
   ```

7. **Start the server**
   ```bash
   php artisan serve
   ```

## Development

### Running in development mode

```bash
# Terminal 1: Start Laravel server
php artisan serve

# Terminal 2: Start Vite for asset compilation
npm run dev
```

### Building for production

```bash
npm run build
```

## Technologies Used

- **Laravel 12** - PHP framework
- **Tailwind CSS** - CSS framework
- **Alpine.js** - Lightweight JavaScript framework
- **Vite** - Build tool
- **PostCSS** - CSS processor

## Customization

### Colors
The color scheme can be customized in `tailwind.config.js`:

```javascript
colors: {
  primary: {
    50: '#eff6ff',
    100: '#dbeafe',
    // ... more shades
  }
}
```

### Content
- Update company information in the respective view files
- Modify the navigation in `resources/views/layouts/app.blade.php`
- Customize the footer in the same layout file

### Styling
- Add custom styles in `resources/css/app.css`
- Use Tailwind utility classes throughout the templates
- Create custom components using `@layer components`

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Support

For support, email hello@company.com or create an issue in the repository.