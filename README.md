# Learn_PHP
**README.md**

# PHP Installation Guide for Windows

This guide provides step-by-step instructions for installing PHP on Windows operating systems.

## 1. Using XAMPP:

XAMPP is a popular software package that includes Apache, MySQL, and PHP. Here's how to install PHP using XAMPP:

1. Download XAMPP from [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).
2. Run the installer and follow the installation wizard.
3. During installation, select the components you want to install. Make sure PHP is selected.
4. Complete the installation process.
5. After installation, you can start XAMPP Control Panel and start Apache server. PHP will be ready to use.

## 2. Using WampServer:

WampServer is another popular option for installing PHP on Windows. Here's how to install PHP using WampServer:

1. Download WampServer from [https://www.wampserver.com/en/](https://www.wampserver.com/en/).
2. Run the installer and follow the installation wizard.
3. Choose the components you want to install, including PHP.
4. Complete the installation process.
5. Start WampServer, and PHP will be installed and ready to use.

## 3. Verifying PHP Installation:

To verify that PHP is installed correctly, follow these steps:

1. Open Command Prompt.
2. Type the following command and press Enter:
   ```sh
   php -v
   ```
   You should see the PHP version installed printed on the screen.

## Additional Notes:

- Make sure to configure PHP settings according to your requirements. The configuration file (`php.ini`) can be found in the PHP installation directory.
- You may need to enable PHP modules/extensions based on your project requirements. This can typically be done by editing the `php.ini` file.
- For web development, consider installing a web server like Apache or Nginx alongside PHP for serving PHP files via HTTP.

This README provides basic instructions for installing PHP on Windows using XAMPP or WampServer. For more detailed instructions or troubleshooting, please refer to the official documentation of the respective software or community resources.
