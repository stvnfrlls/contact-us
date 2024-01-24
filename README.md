# Contact Form

## Introduction

The Contact Us System is built on the Laravel framework with MySQL integration. This streamlined system is designed for efficient communication and ease of use.

## Features

-   **Send Message**: Allows users to submit inquiries or messages through a Contact Us form.

-   **View Messages**: Provides a user interface for managing and viewing contact form submissions.

-   **Delete Messages**: Offers functionality to delete contact form submissions.

## Requirements

-   PHP 7.3 or higher
-   Composer
-   Laravel 8.x

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/stvnfrlls/contact-us.git
    ```

2. Environment Configuration:

    - Duplicate the `.env.example` file and save it as `.env`.
    - Update the database configuration in the `.env` file with your database credentials.

3. Install dependencies:

    ```bash
    composer install
    ```

4. Generate Application Key:

    ```bash
    php artisan key:generate
    ```

5. Run Migrations:

    ```bash
    php artisan migrate
    ```

6. Start the development server:

    ```bash
    php artisan serve
    ```

## Routes

-   **/**: Route for index page
-   **contact**: Route to view contact form
-   **concerns/store**: Route to store message
-   **concerns/**: Route to view Messages
-   **concerns/view/{id}**: Route to view details of a message
-   **concerns/destroy/{id}**: Route to delete a message
