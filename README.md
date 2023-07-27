# E.B.M.S - Electricity Bill Management System

The Electricity Bill Management System is a comprehensive web-based application designed to simplify the management of electricity bills for households and businesses. It offers an intuitive interface for both admin users and consumers to efficiently handle bill payments, track transaction history, manage complaints, and enjoy the convenience of a payment gateway integration. The application is built using HTML, CSS, and JavaScript for the frontend, while the backend utilizes PHP, and the database is managed through SQL.

## Features

### Admin Functionalities

The admin dashboard provides a powerful control panel to monitor key statistics and efficiently manage the electricity billing system.

- **Customer Management:** Admins have access to a comprehensive customer section that lists all registered users and their details.

- **Bill Generation:** The admin can generate new bills and view the billing history of customers.

- **Complaint Management:** Admins can handle customer complaints, review past complaints, and address new ones.

### Customer Functionalities

The customer dashboard offers essential statistics related to bill payments and complaints, along with a seamless payment gateway integration.

- **Bill History:** Customers can access their bill history and view any pending dues.

- **Transaction Records:** Transaction history is available for customers to keep track of their payments.

- **Complaint Status:** Customers can view the status of their past complaints and lodge new complaints if needed.

- **Payment Gateway Integration:** The application integrates with the testing API version of Razorpay, allowing users to change the API key or register on the Razorpay website to pay the subscription amount. Upon successful registration, users can enter the actual API key, enabling secure and convenient payment transactions.

## Installation and Setup

To run this project using XAMPP, follow the steps below:

1. **Install XAMPP:** Download and install XAMPP from the official website suitable for your operating system.

2. **Project Placement:** Clone this project repository or copy the files into the 'htdocs' folder of your XAMPP installation directory.

3. **Start Apache and MySQL:** Run the XAMPP control panel and start both the Apache server and MySQL.

4. **Database Setup:** In the browser, navigate to 'phpMyAdmin' by accessing 'http://localhost/phpmyadmin/'. Create a new database named 'ebillsystem'.

5. **Import Database:** Import the provided database file into the newly created 'ebillsystem' database through 'phpMyAdmin'.

6. **Web Application Access:** To access the application, open your web browser and enter 'http://localhost/EBMS' in the address bar.

## Payment Gateway Integration

To enable payment transactions, follow these steps:

1. **Testing API Version of Razorpay:** By default, the application uses the testing API version of Razorpay. Users can change the API key to use the payment gateway in test mode.

2. **Register on Razorpay Website:** Users must register on the Razorpay website (https://razorpay.com/) to access their API key.

3. **Subscription Payment:** Pay the subscription amount on the Razorpay website to obtain the actual API key for secure payment transactions.

4. **Enter Actual API Key:** Once the actual API key is obtained, users can enter it in the application settings to enable payment functionality.

## Getting Started

1. **Admin Login:** Use the admin login credentials to access the admin functionalities.

2. **Customer Signup/Sign-in:** Customers can sign up if new to the system or sign in with their existing credentials.

3. **Admin Dashboard:** Explore the dashboard to get an overview of essential statistics related to customers and billing.

4. **Customer Dashboard:** Customers can manage their bills, transactions, and complaints through their personalized dashboard.

## Contributions

We welcome contributions to improve the Electricity Bill Management System. If you have any suggestions, bug fixes, or new features to add, please follow the guidelines below:

1. Fork the repository and create a new branch for your contribution.

2. Make your changes and test thoroughly.

3. Submit a pull request with a clear description of your changes and their purpose.

## License

This project is licensed under the [MIT License](LICENSE). Feel free to use, modify, and distribute the code as permitted by the license.

## Support

For any issues or questions regarding the Electricity Bill Management System, please contact [maileraish@gmail.com](mailto:maileraish@gmail.com).
