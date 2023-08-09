# SecurePass - 🔐 PHP MVC Password Management System (⚠️ Under Development)

SecurePass is a user-friendly password management system built using the PHP MVC architecture and MySQL database. It empowers users to securely store, organize, and manage their passwords while maintaining strong encryption and access control.

## ✨ Features

- 🔒 **Strong Encryption:** SecurePass uses industry-standard encryption techniques to safeguard your sensitive information. Your passwords are stored securely, ensuring your data remains private.

- 🖼️ **User-Friendly Interface:** With a clear separation of concerns using the MVC (Model-View-Controller) design pattern, SecurePass provides an intuitive and visually appealing user interface for easy navigation and interaction.

- 👤 **User Authentication:** SecurePass requires user authentication, ensuring that only authorized individuals can access the password database. This adds an extra layer of security to your sensitive data.

## 🚀 Getting Started

These instructions will help you set up SecurePass on your local machine for development and testing purposes.

### Prerequisites

- PHP 7.4 or later
- Composer (for dependency management)
- MySQL database

### 🛠 Installation

1. Clone the repository:
   ```sh
   git clone https://github.com/your-username/securepass.git
   cd securepass

2. Install dependencies using Composer:
   ```sh
   composer install
   ```

3. Create a MySQL database and import the included `database.sql` file.

4. Configure the database connection in `config/database.php`:

   ```php
   'mysql' => [
       'host' => 'localhost',
       'database' => 'your_database_name',
       'username' => 'your_database_username',
       'password' => 'your_database_password',
   ],
   ```

5. Set up a virtual host or use PHP's built-in server to run the application.

### 🚀 Usage

1. Register a new user or log in using existing credentials.
2. Manage your passwords by adding, editing, and deleting entries in a secure environment.
3. View your stored passwords with options to categorize and search.
4. Log out to end your session securely.

## 🤝 Contributing

We welcome contributions to enhance SecurePass! To contribute, please follow these steps:

1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Make your changes and ensure thorough testing.
4. Commit your changes with clear and descriptive commit messages.
5. Push your changes to your fork.
6. Create a pull request with a detailed description of your changes.

## 📄 License

SecurePass is open-source software licensed under the [MIT License](LICENSE).

## 🙏 Acknowledgments

We would like to express our gratitude to the open-source community for providing valuable resources and tools that contribute to SecurePass.

<p align="center">
  Built with ❤️ by the Jayashanka Deshan
</p>
