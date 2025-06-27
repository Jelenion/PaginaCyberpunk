# Cyberpunk Edgerunners Apparel Website

A modern, responsive website for Cyberpunk Edgerunners apparel built with HTML, CSS, PHP, and JavaScript.

## Features

- **Responsive Design**: Works perfectly on desktop, tablet, and mobile devices
- **Modern UI**: Dark theme with cyberpunk aesthetics
- **Interactive Elements**: Hover effects, smooth animations, and user interactions
- **Dynamic Content**: PHP-powered product and category sections
- **Accessibility**: Keyboard navigation and focus management
- **Performance Optimized**: Fast loading with optimized assets

## File Structure

```
├── index.php          # Main homepage with PHP logic
├── styles.css         # All styling and responsive design
├── script.js          # JavaScript functionality and interactions
├── README.md          # This file
└── images/            # Image assets (create this folder)
    ├── logo.svg
    ├── hero-background.png
    ├── lucy-tshirt.jpg
    ├── crew-jacket.jpg
    ├── logo-cap.jpg
    ├── tshirts-category.jpg
    ├── jackets-category.jpg
    └── accessories-category.jpg
```

## Setup Instructions

### Prerequisites

- PHP server (XAMPP, WAMP, MAMP, or any web server with PHP support)
- Web browser

### Installation

1. **Download/Clone the files** to your web server directory
2. **Create an `images` folder** in the same directory as your PHP files
3. **Add your images** to the `images` folder:
   - `logo.svg` - Your website logo
   - `hero-background.png` - Hero section background image
   - Product images: `lucy-tshirt.jpg`, `crew-jacket.jpg`, `logo-cap.jpg`
   - Category images: `tshirts-category.jpg`, `jackets-category.jpg`, `accessories-category.jpg`

### Running the Website

1. **Start your PHP server** (if using XAMPP/WAMP/MAMP)
2. **Navigate to the website** in your browser:
   - Local: `http://localhost/your-folder-name/`
   - Or the appropriate URL for your setup

## Customization

### Colors
The website uses a cyberpunk color scheme defined in `styles.css`:
- Primary background: `#121417`
- Secondary background: `#26333b`
- Text color: `#e5e8eb`
- Accent color: `#38a8fa`
- Muted text: `#9cadba`

### Content
- **Products**: Edit the `$featured_products` array in `index.php`
- **Categories**: Edit the `$categories` array in `index.php`
- **Navigation**: Modify the navigation links in the HTML
- **Footer**: Update footer links and social media URLs

### Styling
- **Layout**: Modify CSS grid and flexbox properties in `styles.css`
- **Typography**: Change font families and sizes
- **Animations**: Adjust transition timings and effects

## Features Explained

### PHP Integration
- Dynamic product rendering from arrays
- Current year in footer copyright
- Easy content management through PHP variables

### JavaScript Functionality
- Smooth scrolling navigation
- Interactive hover effects
- Scroll-based navbar hiding/showing
- Intersection Observer for scroll animations
- Touch gesture support for mobile
- Error handling and performance monitoring

### Responsive Design
- Mobile-first approach
- Breakpoints at 768px and 1024px
- Flexible grid layouts
- Optimized typography scaling

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Internet Explorer 11+

## Performance Tips

1. **Optimize images** before adding them to the `images` folder
2. **Use WebP format** for better compression (with fallbacks)
3. **Minify CSS and JavaScript** for production
4. **Enable GZIP compression** on your server
5. **Use a CDN** for Font Awesome icons

## Troubleshooting

### Images Not Loading
- Check that the `images` folder exists
- Verify image file names match exactly
- Ensure proper file permissions

### PHP Errors
- Make sure PHP is installed and running
- Check PHP error logs for specific issues
- Verify file extensions are `.php`

### Styling Issues
- Clear browser cache
- Check CSS file path in HTML
- Verify CSS syntax in browser developer tools

## License

This project is open source and available under the [MIT License](LICENSE).

## Contributing

Feel free to submit issues and enhancement requests!

---

**Note**: This is a static website template. For a production e-commerce site, you would need to integrate with a database, payment processing, and additional security measures. 