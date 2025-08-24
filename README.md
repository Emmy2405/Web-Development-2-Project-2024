# Library Book Reservation System

This is my full-stack web application developed for my Web Development 2 module in Year 2 Semester 1. This project is a functional library website where users can search for, reserve, and manage books. It features user authentication, dynamic search, and a clean, paginated interface, built with a PHP/MySQL backend and an HTML/CSS/JavaScript frontend.

##  Features

*   **User Authentication**
    *   Secure user registration with form validation (e.g., mobile number format, password confirmation).
    *   Login/Logout functionality with persistent sessions across the site.
*   **Book Search**
    *   Dynamic search by book title and/or author using partial matching.
    *   Filter books by category via a dropdown menu (populated from the database).
*   **Book Management**
    *   Reserve available books with a single click.
    *   View a personal list of all currently reserved books.
    *   Option to remove (unreserve) a book from your list.
*   **User Experience**
    *   Paginated search results (limited to 5 items per page for clarity).
    *   Clean, consistent layout with a common header and footer throughout.
    *   Server-side validation and error handling.

##  Built With

*   **Backend:** PHP, MySQL
*   **Frontend:** HTML5, CSS3, JavaScript
*   **Database:** MySQL with four core tables (`Users`, `Books`, `Category`, `ReservedBooks`)


## Screenshots:

<details>
  <summary>Login Page </summary>
  <img src="https://github.com/Emmy2405/Web-Development-2-Project-2024/blob/main/Website%20pictures/LoginPage%20(1).png" alt="Image of Login Page" width="800" />
</details>

<details>
  <summary>Sign Up Page (Register)</summary>
  <img src="https://github.com/Emmy2405/Web-Development-2-Project-2024/blob/main/Website%20pictures/LoginPage%20(2).png" alt="Image of Register Page" width="800" />
  <img src="https://github.com/Emmy2405/Web-Development-2-Project-2024/blob/main/Website%20pictures/LoginPage%20(3).png" alt="Image of Register Page 2" width="800" />
  
</details>

<details>
  <summary>Home Page (Logged in)</summary>
  <img src="https://github.com/Emmy2405/Web-Development-2-Project-2024/blob/main/Website%20pictures/HomePage-Search.png" alt="Image of Home Page (Logged In)" width="800" />
</details>

<details>
  <summary>Book Search Page</summary>
  <img src="https://github.com/Emmy2405/Web-Development-2-Project-2024/blob/main/Website%20pictures/AfterSearch.png" alt="Image of Book Search Page" width="800" />
</details>

<details>
  <summary>Book Reservations Page</summary>
  <img src="https://github.com/Emmy2405/Web-Development-2-Project-2024/blob/main/Website%20pictures/ReservedBookPage.png" alt="Image of Book Reservations Page" width="800" />
</details>

##  Database Schema

The application uses a normalized database with the following tables:
*   **Users:** Stores user credentials and details (username is the primary key).
*   **Books:** Contains book information, indexed by ISBN.
*   **Category:** Holds book categories (e.g., Fiction, Technology, Travel).
*   **ReservedBooks:** A junction table linking users to books they've reserved, including the reservation date.

##  Key Requirements

*   User registration and login system.
*   Complex search functionality (by title, author, category with partial matching).
*   Reservation system with logic to prevent double-booking.
*   Personal reservation management.
*   Pagination of results.
*   Server-side validation.
*   Consistent design using CSS.


