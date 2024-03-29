# laravel-single-db-multi-tenancy-boilerplate

**Laravel Single-DB Multi-Tenancy boilerplate**: An Laravel boilerplate designed to streamline the development of multi-tenant applications while maintaining a single database structure.

In the context of web applications, **multi-tenancy** refers to the architectural pattern where a single instance of the application serves multiple tenants, each with its own isolated and secure environment. Tenants could be organizations, businesses, or individual users, and the challenge lies in providing a seamless yet isolated experience for each tenant within the same application.

The **Laravel Single-DB Multi-Tenancy boilerplate** addresses the complexities of implementing multi-tenancy in Laravel applications. It facilitates the creation of web applications that can efficiently and securely serve multiple tenants while utilizing a shared database architecture. This boilerplate provides a solid foundation for developers to build scalable and maintainable multi-tenant Laravel applications.

### Key Features

- **Multi-Tenancy:** Easily implement and manage multiple tenants in your application, ensuring data isolation and security.
- **Single Database Architecture:** Utilize a shared database, optimizing resource utilization while maintaining the flexibility of a multi-tenant system.
- **Simplified Setup:** Kickstart your project with a pre-configured boilerplate, reducing the initial development overhead and allowing you to focus on your application's unique features.

## Getting Started

Follow these steps to get started with the Laravel Single-DB Multi-Tenancy boilerplate. Whether you're new to Laravel or an experienced developer, this boilerplate provides a quick and effective way to set up a multi-tenant Laravel project.

### Prerequisites

- [Laravel](https://laravel.com/docs) installed
- [Composer](https://getcomposer.org/) installed

### Installation

##### Clone the repository
``` git clone https://github.com/mikias-tulu/laravel-single-db-multi-tenancy-boilerplate.git ```

##### Navigate to the project folder
``` cd laravel-single-db-multi-tenancy-boilerplate ```

##### Install dependencies
``` composer install ```

##### Configure environment
 ``` cp .env.example .env ```
``` php artisan key:generate ```

##### Run migrations
``` php artisan migrate ```

##### Serve the application
``` php artisan serve ```
