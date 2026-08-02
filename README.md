# Archangel Cosplays WordPress Theme

A custom WordPress theme designed for the Archangel Cosplays portfolio website. This theme provides a responsive, elegant design optimized for showcasing cosplay projects and portfolios.

## Features

- **Responsive Design** – Mobile-first, works on all devices
- **Portfolio Gallery** – Showcase cosplay projects with featured images
- **Custom Post Types** – Support for portfolio items with custom fields
- **Blog Support** – Full blog functionality for updates and posts
- **Contact Forms** – Compatible with WPForms and Contact Form 7
- **SEO Optimized** – Built with best practices for search engines
- **Accessibility** – WCAG compliant markup and navigation
- **Mobile Menu** – Touch-friendly navigation on mobile devices

## Requirements

- WordPress 5.9 or higher
- PHP 7.4 or higher
- MySQL 5.7 or higher

## Installation

### Option 1: Docker (Recommended for Development)

1. Clone the repository:
   ```bash
   git clone https://github.com/cfcass/archangel-cosplays-theme.git
   cd archangel-cosplays-theme
   ```

2. Start the Docker containers:
   ```bash
   docker-compose up -d
   ```

3. Access WordPress at: `http://localhost:8080`
   - Username: `admin`
   - Password: `admin` (set during initial WordPress setup)

4. Access phpMyAdmin at: `http://localhost:8081`
   - Username: `wordpress`
   - Password: `wordpress`

5. Activate the theme in WordPress admin:
   - Go to **Appearance > Themes**
   - Find "Archangel Cosplays" and click **Activate**

### Option 2: Manual Installation

1. Download the theme files
2. Upload to `/wp-content/themes/archangel-cosplays/`
3. Go to **Appearance > Themes** in WordPress admin
4. Click **Activate** on the Archangel Cosplays theme

## File Structure

```
archangel-cosplays-theme/
├── style.css              # Theme metadata and main styles
├── functions.php          # Theme functions and hooks
├── header.php             # Header template
├── footer.php             # Footer template
├── index.php              # Main template (fallback)
├── page.php               # Static page template
├── single.php             # Single post template
├── 404.php                # 404 error page
├── comments.php           # Comments template
├── assets/
│   └── js/
│       └── main.js        # Main JavaScript
├── Dockerfile             # Docker configuration
├── docker-compose.yml     # Docker Compose configuration
└── README.md              # This file
```

## Configuration

### Customize Colors

Edit the CSS variables in `style.css`:

```css
:root {
  --color-primary: #2d1b3d;
  --color-secondary: #a855f7;
  --color-accent: #ec4899;
  /* ... more colors ... */
}
```

### Add Menus

In WordPress admin:
1. Go to **Appearance > Menus**
2. Create new menus for "Primary Menu" and "Social Links"
3. Assign menus to locations

### Set Logo

In WordPress admin:
1. Go to **Appearance > Customize**
2. Click on **Site Identity**
3. Upload your logo

## Development

### Starting Docker

```bash
docker-compose up -d
```

### Stopping Docker

```bash
docker-compose down
```

### Viewing Logs

```bash
docker-compose logs -f wordpress
```

### Accessing the WordPress Installation

- **WordPress**: http://localhost:8080
- **phpMyAdmin**: http://localhost:8081

## Recommended Plugins

- **Advanced Custom Fields (ACF)** – Custom fields for portfolio items
- **WPForms** – Contact form plugin
- **Yoast SEO** – SEO optimization
- **Wordfence Security** – Website security
- **WP Smush** – Image optimization

## Customization

To customize the theme:

1. Edit `style.css` for CSS changes
2. Edit `functions.php` to add new features
3. Edit template files (`.php`) to modify layout
4. Add custom CSS in WordPress Customizer

## Support

For issues or questions, please open an issue on GitHub.

## License

This theme is licensed under the GPL v2 or later. See LICENSE file for details.

## Credits

Created for Archangel Cosplays portfolio website.
