# SehatPLUS Application README

## Introduction
Welcome to the SehatPlus Application README! This document provides an overview of the SehatPlus Application, designed to streamline the process of reserving healthcare services at community health centers (Puskesmas). The application aims to improve access to healthcare by allowing users to book appointments for various healthcare services offered at Puskesmas facilities.

## Features
1. Appointment Reservation: Users can book appointments for healthcare services offered at Puskesmas facilities through the application. They can select the type of service they require, choose a preferred date and time, and receive confirmation of their appointment booking.
2. Healthcare Service Information: The application provides information about the healthcare services available at Puskesmas facilities. Users can browse through the list of services offered, including general check-ups, vaccinations, maternal and child health services, and more.
3. User Profiles: Users can create profiles within the application, providing basic information such as name, age, and contact details. Profile creation facilitates the appointment booking process and allows users to track their appointment history and upcoming appointments.
4. Notification System: The application includes a notification system to remind users of upcoming appointments. Users receive timely reminders to ensure they do not miss their scheduled appointments.
5. Feedback and Ratings: After receiving healthcare services, users can provide feedback and ratings for the services they have received. This feedback helps improve the quality of healthcare services offered at Puskesmas facilities.

## Technologies Used
- Laravel: The backend of the application is developed using the Laravel PHP framework. Laravel provides a robust foundation for building secure and scalable web applications, offering features such as routing, authentication, and database management.
- Android Studio: The frontend of the application is built using Android Studio, the official integrated development environment (IDE) for Android app development. Android Studio provides tools for designing user interfaces, writing code, and testing applications on various Android devices.
- MySQL: The application's data is stored and managed using MySQL, a popular open-source relational database management system. MySQL offers reliability, performance, and ease of use for handling large datasets.

## Installation Instructions
To set up the Immunization Application on your local environment, follow these steps:
1. Clone Repository
   ```
   git clone <repository-url>
   ```
2. Backend Setup:
   - Navigate to the backend directory (cd backend) and install dependencies using Composer:
     ```
     composer install
     ```
   - Rename the .env.example file to .env and configure your database connection details.
   - Generate a new application key
     ```
     php artisan key:generate
     ```
   - Run database migrations to create the necessary tables:
     ```
     php artisan migrate
     ```
3. Frontend Setup:
   - Open the Android project in Android Studio located in the frontend directory.
   - Configure the necessary API endpoints to communicate with the backend.
4. Run the Application:
   - Start the Laravel development server:
     ```
     php artisan serve
     ```
   - Run the Android application on an emulator or physical device from Android Studio.

## Contact
For any inquiries or support regarding the SehatPlus Application, please contact our team at gathanafrr@gmail.com.

---

This README provides a comprehensive guide for setting up, understanding, and contributing to the SehatPlus Application. If you have any further questions or need assistance, don't hesitate to reach out. Happy coding!
