### Shinzo Shop

## Description
Shinzo Shop is a comprehensive web application for food ordering and table reservation in hotels. 

This project leverages the Laravel framework, alongside HTML, CSS, JavaScript, PHP, and SQL to provide a seamless user experience for hotel customers.

### Prerequisites
- PHP >= 8.1
- Composer
- Node.js
- MySQL

### Steps
1. **Clone the repository**
    ```bash
    git clone https://github.com/gayathritcse/shinzo-shop.git
    ```

2. **Install dependencies**
    ```bash
    composer install
    npm install
    ```

3. **Set up the environment**
    - Copy `.env.example` to `.env`
    - Update `.env` with your database and other configuration settings

4. **Generate application key**
    ```bash
    php artisan key:generate
    ```

5. **Run database migrations and seeders**
    ```bash
    php artisan migrate --seed
    ```

6. **Build assets**
    ```bash
    npm run dev
    ```

7. **Start the development server**
    ```bash
    php artisan serve
    ```

## Usage
1. Open your browser and navigate to `http://localhost:8000`
2. Register a new account or log in with existing credentials
3. Explore the functionalities for food ordering and table reservation

## Features
- User registration and authentication
- Browse food menu
- Order food online
- Reserve tables
- Admin dashboard for managing orders, reservations and website.
- PayPal and Stripe gateways are available 

## Technologies Used
- **Backend**: Laravel, PHP
- **Frontend**: HTML, CSS, **JavaScript**
- **Database**: MySQL
- **Others**: Composer, NPM

## Screenshots

### Home Page
![Front Page](Screenshots/Front_Page.png)

### Admin Page
![Admin Dashboard](Screenshots/Admin_Dashboard.png)

### User Page
![User Page](Screenshots/User_Dashboard.png)

### Menu Page
![Food Menu Page](Screenshots/Food_Menu.png)

### Details Page
![Product Details Page](Screenshots/Product_Details.png)

### Cart Page
![Cart Page](Screenshots/Cart.png)

### Checkout Page
![Checkout Page](Screenshots/Checkout.png)

### Payment Gatway Page
![Gateway Page](Screenshots/Payment_Gateway.png)


You're welcome! If you need any more help or have any other questions, feel free to ask. Good luck with your Shinzo Shop project!



