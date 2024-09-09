# Laravel eCommerce Site

An eCommerce application built using the Laravel framework, featuring an integrated payment gateway and email notification system.

## Features

- **User Authentication:** Secure user registration and login system.
- **Product Management:** CRUD operations for product management (add, update, delete, and view products).
- **Cart & Checkout:** Add items to cart, manage cart, and checkout process.
- **Payment Gateway:** Integrated payment system for handling transactions.
- **Email Notifications:** Automatic email notifications for order confirmations and status updates.
- **Admin Dashboard:** Admin panel for managing users, orders, and products.

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP >= 8.0
- Composer
- MySQL or any compatible database
- Node.js and npm (for front-end asset compilation)
- A mail server or service for email notifications

## Installation

Follow these steps to set up the project:

1. **Clone the Repository**
    ```bash
    git clone https://github.com/alhussain50/PixelPositions.git
    cd PixelPositions
    ```

2. **Install Dependencies**
    ```bash
    composer install
    npm install
    ```

3. **Set Up Environment Variables**
    - Copy `.env.example` to `.env` and configure database and mail server credentials.
    ```bash
    cp .env.example .env
    ```
    - Generate the application key:
    ```bash
    php artisan key:generate
    ```

4. **Run Database Migrations**
    ```bash
    php artisan migrate
    ```

5. **Seed the Database** (Optional)
    ```bash
    php artisan db:seed
    ```

6. **Compile Frontend Assets**
    ```bash
    npm run dev
    ```

7. **Start the Server**
    ```bash
    php artisan serve
    ```

## Payment Gateway Integration

The project includes a payment gateway integration. Configure the payment service provider credentials in the `.env` file:

```env
PAYMENT_GATEWAY_API_KEY=your_api_key_here
PAYMENT_GATEWAY_SECRET=your_secret_here
