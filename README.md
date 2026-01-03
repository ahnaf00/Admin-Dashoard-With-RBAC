# E-Com Admin Dashboard

A professional, high-performance admin dashboard built with Laravel 12, featuring advanced Role-Based Access Control (RBAC), sleek UI enhancements, and robust authentication.

## 🚀 Key Features

- **Advanced RBAC Management**:
  - Full CRUD for Roles and Privileges.
  - Granular permission assignment.
  - Exclusive **Super Admin** restricted access to high-level management routes.
  - Conditional sidebar navigation based on user roles and permissions.
- **Enhanced Security**:
  - Custom `SuperAdminMiddleware` for iron-clad route protection.
  - Functional Logout system with secure CSRF protection and configurable redirects.
  - Automated session invalidation on logout.
- **Sleek & Professional UI**:
  - Based on **Argon Dashboard 3 PRO** with deep custom refinements.
  - **Modern Typography**: Integrated **Inter** Google Font for superior readability and professional aesthetic.
  - **Refined Styling**: Reduced border-radius (sharper look), enhanced shadows, and subtle micro-animations.
  - Responsive design optimized for all screen sizes.
- **User Management**: Efficiently manage user roles and permissions from a centralized interface.

## 🛠️ Tech Stack

- **Framework**: [Laravel 12](https://laravel.com)
- **Authentication**: [Tyro Login](https://github.com/hasinhayder/tyro-login)
- **Role-Based Access Control**: [Tyro RBAC](https://github.com/hasinhayder/tyro)


## ⚙️ Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/ahnaf00/Admin-Dashoard-With-RBAC.git
   cd Admin-Dashoard-With-RBAC
   ```

2. **Install dependencies**:
   ```bash
   composer install
   npm install
   ```

3. **Configure Environment**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database Setup**:
   - Update your `.env` with your database credentials.
   - Run migrations and seeders:
     ```bash
     php artisan migrate --seed
     ```

5. **Build Assets**:
   - For development:
     ```bash
     npm run dev
     ```
   - For production:
     ```bash
     npm run build
     ```

6. **Start the server**:
   ```bash
   php artisan serve
   ```

## 🔒 Configuration

### Redirect Paths
Configure your redirect paths in `config/tyro-login.php` or via `.env`:
- `TYRO_LOGIN_REDIRECT_AFTER_LOGIN=/dashboard`
- `TYRO_LOGIN_REDIRECT_AFTER_LOGOUT=/`

### Role Configuration
The project uses a configuration-driven approach for core roles. You can customize the role slugs via the `SUPER_ADMIN_ROLE`, `ADMIN_ROLE`, `EDITOR_ROLE`, and `USER_ROLE` environment variables or by modifying `config/tyro_custom.php`.

- **Super Admin**: High-level management access.
- **Admin**: Standard administrative access.
- **Editor**: Content management access.
- **User**: Standard user access.


## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
