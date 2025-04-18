# AWC Dashboard

The **AWC Dashboard** is a web-based registration and management system, likely for an event or competition (such as arm wrestling, based on `armwrestler.png`). It allows users to register, log in, view schedules, and manage registrations.

## Features

- **User Authentication**
  - Login (`login.php`)
  - Register (`register.php`)
  - Logout (`logout.php`)
  - Auth logic (`auth.php`, `authenticate.php`)

- **Dashboard**
  - User landing page (`dashboard.php`)
  - About page (`about.php`)
  - Index/home (`index.php`)

- **Registration Management**
  - Submit registration (`submit_registration.php`)
  - Edit registration (`edit_registration.php`)
  - Delete registration (`delete_registration.php`)

- **Event Schedule**
  - View schedule (`schedule.php`)

- **Database**
  - Database connection (`db_connection.php`)

- **Assets**
  - `armwrestler.png` - Visual asset, possibly used in UI

## Setup Instructions

1. Clone the repository or download the project files.
2. Configure your server (Apache, Nginx) to serve PHP files.
3. Import the database (crud_db.sql).
4. Update `db_connection.php` with your local database credentials.
5. Open `index.php` in the browser to start using the dashboard.

## Requirements

- PHP 7.x or higher
- MySQL/MariaDB
- Web server (e.g., Apache, Nginx)

## Notes

- Ensure proper permissions are set for the project directory.
- Add more security layers for authentication (e.g., hashed passwords).
- Consider using prepared statements or an ORM to avoid SQL injection.

## License

This project is for educational or internal use. Update this section with appropriate licensing if planning to release publicly.

