# Affiliate Marketing Plugin for WordPress

[![License](https://img.shields.io/badge/license-GPLv2-blue.svg)](https://www.gnu.org/licenses/gpl-2.0.html)
[![Version](https://img.shields.io/badge/version-1.0.0-green.svg)](https://github.com/yourusername/affiliate-marketing-plugin/releases)

A powerful WordPress plugin designed to help you manage affiliate marketing campaigns with ease. This plugin integrates with popular affiliate programs like Amazon, eBay, and AliExpress, and provides a custom post type for creating detailed product reviews with a modern design inspired by GSMArena.

## Features

- **Custom Post Type for Product Reviews**: Create detailed reviews for products with support for images, ratings, pros & cons, and affiliate links.
- **Modern Design**: Layout inspired by GSMArena, featuring a clean, functional, and responsive design for product review pages.
- **Affiliate Product Integration**: Display related affiliate products at the bottom of each review with links to purchase (API integration placeholder included).
- **Comment System**: Built-in support for user comments on reviews using WordPress's native comment system.
- **Extensible Structure**: Modular code structure following WordPress best practices, ready for further customization and API integrations.

## Installation

1. **Download the Plugin**:
   - Download the latest release from the [GitHub repository](https://github.com/yourusername/affiliate-marketing-plugin/releases).
   - Alternatively, clone the repository using `git clone https://github.com/yourusername/affiliate-marketing-plugin.git`.

2. **Install the Plugin**:
   - Upload the `affiliate-marketing-plugin` folder to the `/wp-content/plugins/` directory of your WordPress installation.
   - Or, install it via the WordPress admin panel by navigating to **Plugins > Add New > Upload Plugin** and selecting the ZIP file.

3. **Activate the Plugin**:
   - Go to **Plugins > Installed Plugins** in your WordPress admin dashboard.
   - Find "Affiliate Marketing Plugin" and click **Activate**.

## Usage

### Creating a Product Review

1. After activating the plugin, a new menu item called **Product Reviews** will appear in your WordPress admin sidebar.
2. Click on **Product Reviews > Add New** to create a new review.
3. Enter the product name as the title, write your detailed review in the content editor, and add a featured image.
4. Use custom fields (or future meta boxes) to add additional information like:
   - **Rating** (e.g., 4.5/5)
   - **Pros** (list of positive points)
   - **Cons** (list of negative points)
   - **Affiliate Products** (manually add product details or integrate with APIs in future updates).
5. Publish the review and view it on the frontend to see the GSMArena-inspired layout with affiliate links and a comment section.

### Customizing the Design

- The plugin includes a CSS file located at `assets/css/product-review.css` which you can modify to adjust the styling of the review pages.
- For advanced customization, you can override the template file `templates/single-product_review.php` by copying it to your theme's directory under `affiliate-marketing-plugin/single-product_review.php`.

## Roadmap

- **API Integrations**: Add support for fetching affiliate product data directly from Amazon Associates, eBay Partner Network, and AliExpress Affiliate Program.
- **Admin Dashboard**: Develop a dashboard for managing affiliate settings, API keys, and performance tracking.
- **Shortcodes & Widgets**: Provide shortcodes or widgets to display affiliate products or reviews in other parts of your site.
- **Analytics**: Include click tracking and basic reporting for affiliate links.

## Contributing

Contributions are welcome! Here's how you can help:

1. **Fork the Repository**: Click the "Fork" button on GitHub to create your own copy of the repository.
2. **Clone the Repository**: Clone your fork to your local machine using `git clone https://github.com/yourusername/affiliate-marketing-plugin.git`.
3. **Create a Branch**: Create a new branch for your feature or bug fix with `git checkout -b feature/your-feature-name`.
4. **Make Changes**: Implement your changes and commit them with descriptive messages.
5. **Push Changes**: Push your branch to GitHub with `git push origin feature/your-feature-name`.
6. **Submit a Pull Request**: Open a pull request on the original repository, describing your changes in detail.

Please ensure your code follows WordPress coding standards and includes appropriate documentation.

## License

This plugin is licensed under the GNU General Public License v2.0 or later. See the [LICENSE](LICENSE) file for more details.

## Support

If you encounter any issues or have questions, please open an issue on the [GitHub repository](https://github.com/yourusername/affiliate-marketing-plugin/issues).

## Credits

- Developed by [Your Name](https://example.com)
- Design inspiration from [GSMArena](https://www.gsmarena.com)

Thank you for using the Affiliate Marketing Plugin!
