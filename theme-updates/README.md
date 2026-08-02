# Recreate Wix site - initial artifacts

This directory contains initial assets and template stubs to start recreating https://erinleigh0528.wixsite.com/archangelcosplays inside the WordPress theme. It is intentionally non-invasive: it does not overwrite existing theme files. Instead, it provides an integration-ready set of files and instructions you (or a maintainer) can copy into the theme and refine.

What's included:
- assets/asset-list.yml — crawl-style inventory and placeholders for images/fonts/colors
- initial-templates/ — skeleton template parts (header, footer, front-page)
- style/screen.css — base variables and starter rules
- functions-snippet.php — copy-paste snippet to add to your theme's functions.php (register menus, enqueue styles/fonts, theme supports)

Next steps (recommended):
1. Provide the actual images (hero, gallery photos, logo) or allow me to download them and I will add them to the repo.
2. Optionally copy the functions-snippet.php code into your theme's functions.php and adjust paths/handles.
3. Import the front-page.php as a starting template, then build Elementor sections inside the WP Admin using the page builder.

Notes about extraction: From this environment I cannot automatically download all Wix assets. The asset-list.yml contains the placeholders with instructions on how to copy image URLs using a browser. If you'd like, provide the files or give permission and staging credentials and I will fetch and add them.