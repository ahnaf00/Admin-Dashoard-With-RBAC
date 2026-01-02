# E-Com Admin Dashboard

A professional, high-performance admin dashboard built with Laravel 11, featuring advanced Role-Based Access Control (RBAC), sleek UI enhancements, and robust authentication.

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

- **Framework**: [Laravel 11](https://laravel.com)
- **Authentication**: [Tyro Login](https://github.com/hasinhayder/tyro-login)
- **Role-Based Access Control**: [Tyro RBAC](https://github.com/hasinhayder/tyro)
- **Frontend Framework**: Bootstrap 5 (via Argon Dashboard)
- **Font**: Inter (Custom Integrated)
- **Icons**: Font Awesome & Nucleo Icons

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

### Super Admin Role
The system identifies the **Super Admin** using the `super-admin` role slug. Ensure the default seeder creates this role for full access.

## 📝 Customization

### Border Radius
To adjust the sharper look, modify the `--radius-*` variables in `resources/views/Backend/layouts/inc/style.blade.php`.

### Typography
The project uses **Inter** font as the primary typeface. You can customize the scale and weights in the custom styling section of the layout.

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
