# Modula - A Modern WordPress Block Theme

Modula is a modern, lightweight, and highly customizable WordPress block theme built with React and the WordPress block editor (Gutenberg). It's designed to be fast, accessible, and developer-friendly.

## Features

- 🎨 Built with the WordPress Block Editor (Gutenberg)
- ⚡️ Lightweight and fast performance
- 🎯 Mobile-first responsive design
- 🧩 Block patterns and template parts
- 🎨 Global styles with theme.json
- 🛠️ Modern development workflow with Webpack and Babel
- 🧪 Includes useful SASS mixins and variables

## Requirements

- WordPress 6.0 or higher
- PHP 7.4 or higher
- Node.js 14.0.0 or higher
- npm or yarn

## Installation

1. **Install the theme**
   - Download the theme zip file and upload it via WordPress admin under Appearance > Themes > Add New > Upload Theme
   - Or upload the theme folder to `/wp-content/themes/`
   - Activate the theme through the 'Themes' menu in WordPress

2. **Set up the development environment**
   ```bash
   # Navigate to the theme directory
   cd wp-content/themes/modula-theme
   
   # Install dependencies
   npm install
   
   # Start the development server
   npm start
   
   # Build for production
   npm run build
   ```

## Theme Structure

```
modula-theme/
├── assets/                  # Compiled assets
├── build/                   # Built files (generated)
├── node_modules/            # Node.js dependencies (generated)
├── parts/                   # Template parts
│   ├── footer.html
│   └── header.html
├── src/                     # Source files
│   ├── blocks/              # Custom blocks
│   └── styles/              # SASS styles
│       ├── _mixins.scss
│       ├── _variables.scss
│       ├── editor.scss
│       └── style.scss
│   ├── index.js             # Main JavaScript file
├── templates/               # Block templates
│   ├── index.html
│   ├── page.html
│   └── single.html
├── .gitignore
├── functions.php            # Theme functions
├── package.json             # Node.js dependencies and scripts
├── README.md
├── style.css                # Theme styles
└── theme.json               # Theme settings
```

## Customization

### Adding Custom Blocks

1. Create a new directory in `src/blocks/` for your block
2. Create a new JavaScript file (e.g., `my-block.js`)
3. Register your block using `registerBlockType`
4. Import your block in `src/index.js`

### Theme Settings

Edit `theme.json` to customize:

- Color palettes
- Typography settings
- Layout settings
- Block styles
- And more

## Development

### Available Scripts

- `npm start` - Compiles the assets and starts the development server
- `npm run build` - Builds the assets for production
- `npm run format:js` - Formats JavaScript files
- `npm run lint:js` - Lints JavaScript files
- `npm run packages-update` - Updates WordPress packages

### Coding Standards

- Follow the [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/)
- Use meaningful commit messages
- Document your code
- Write unit tests for new features

## Browser Support

- Latest Chrome, Firefox, Safari, and Edge
- IE 11 is not supported

## License

GPL-2.0-or-later

## Credits

- Built with ❤️ by [Your Name]
