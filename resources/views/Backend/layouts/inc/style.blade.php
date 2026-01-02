<!--     Fonts and icons     -->
<!-- Google Fonts - Inter (Modern Professional Font) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
  rel="stylesheet" />
<!-- Nucleo Icons -->
<link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<!-- CSS Files -->
<link id="pagestyle" href="{{ asset('Backend/assets/css/argon-dashboard.css') }}?v=2.1.0" rel="stylesheet" />

<!-- Custom Professional Styling -->
<style>
  :root {
    /* Typography Scale */
    --font-family-primary: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    --font-size-xs: 0.75rem;
    /* 12px */
    --font-size-sm: 0.8125rem;
    /* 13px */
    --font-size-base: 0.875rem;
    /* 14px */
    --font-size-md: 0.9375rem;
    /* 15px */
    --font-size-lg: 1rem;
    /* 16px */
    --font-size-xl: 1.125rem;
    /* 18px */
    --font-size-2xl: 1.25rem;
    /* 20px */
    --font-size-3xl: 1.5rem;
    /* 24px */
    --font-size-4xl: 1.875rem;
    /* 30px */

    /* Font Weights */
    --font-weight-light: 300;
    --font-weight-normal: 400;
    --font-weight-medium: 500;
    --font-weight-semibold: 600;
    --font-weight-bold: 700;
    --font-weight-extrabold: 800;

    /* Spacing */
    --spacing-xs: 0.25rem;
    --spacing-sm: 0.5rem;
    --spacing-md: 1rem;
    --spacing-lg: 1.5rem;
    --spacing-xl: 2rem;

    /* Shadows */
    --shadow-sm: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px -1px rgba(0, 0, 0, 0.1);
    --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
    --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1);
    --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);

    /* Border Radius - Reduced for sharper look */
    --radius-sm: 0.25rem;
    --radius-md: 0.375rem;
    --radius-lg: 0.5rem;
    --radius-xl: 0.625rem;

    /* Transitions */
    --transition-fast: 150ms ease;
    --transition-base: 250ms ease;
    --transition-slow: 350ms ease;
  }

  /* === Global Typography === */
  body,
  html {
    font-family: var(--font-family-primary) !important;
    font-size: var(--font-size-base);
    font-weight: var(--font-weight-normal);
    letter-spacing: -0.01em;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  .h1,
  .h2,
  .h3,
  .h4,
  .h5,
  .h6 {
    font-family: var(--font-family-primary) !important;
    font-weight: var(--font-weight-semibold);
    letter-spacing: -0.02em;
    line-height: 1.3;
  }

  h1,
  .h1 {
    font-size: var(--font-size-4xl);
  }

  h2,
  .h2 {
    font-size: var(--font-size-3xl);
  }

  h3,
  .h3 {
    font-size: var(--font-size-2xl);
  }

  h4,
  .h4 {
    font-size: var(--font-size-xl);
  }

  h5,
  .h5 {
    font-size: var(--font-size-lg);
    font-weight: var(--font-weight-semibold);
  }

  h6,
  .h6 {
    font-size: var(--font-size-base);
    font-weight: var(--font-weight-semibold);
  }

  p,
  span,
  a,
  li,
  td,
  th,
  label,
  input,
  textarea,
  select,
  button {
    font-family: var(--font-family-primary) !important;
  }

  .text-xs {
    font-size: var(--font-size-xs) !important;
  }

  .text-sm {
    font-size: var(--font-size-sm) !important;
  }

  .text-base {
    font-size: var(--font-size-base) !important;
  }

  .text-md {
    font-size: var(--font-size-md) !important;
  }

  .text-lg {
    font-size: var(--font-size-lg) !important;
  }

  .text-xl {
    font-size: var(--font-size-xl) !important;
  }

  /* === Improved Card Styling === */
  .card {
    border: none;
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-md);
    transition: box-shadow var(--transition-base), transform var(--transition-base);
    overflow: hidden;
  }

  .card:hover {
    box-shadow: var(--shadow-lg);
  }

  .card-header {
    background: transparent;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    padding: var(--spacing-lg);
  }

  .card-header h6 {
    font-size: var(--font-size-md);
    font-weight: var(--font-weight-semibold);
    color: #344767;
    margin-bottom: 0;
    letter-spacing: -0.01em;
  }

  .card-body {
    padding: var(--spacing-lg);
  }

  /* === Statistics Cards Enhancement === */
  .card .numbers h5 {
    font-size: var(--font-size-2xl);
    font-weight: var(--font-weight-bold);
    margin-bottom: 0;
  }

  .card .numbers p.text-sm {
    font-size: var(--font-size-xs);
    text-transform: uppercase;
    font-weight: var(--font-weight-medium);
    letter-spacing: 0.05em;
    margin-bottom: var(--spacing-xs);
  }

  /* === Table Improvements === */
  .table {
    font-size: var(--font-size-sm);
  }

  .table thead th {
    font-size: var(--font-size-xs);
    font-weight: var(--font-weight-semibold);
    text-transform: uppercase;
    letter-spacing: 0.05em;
    padding: var(--spacing-md) var(--spacing-lg);
    border-bottom: 2px solid #e9ecef;
    color: #8898aa;
  }

  .table tbody td {
    padding: var(--spacing-md) var(--spacing-lg);
    vertical-align: middle;
    border-top: 1px solid #f4f5f7;
  }

  .table tbody tr {
    transition: background-color var(--transition-fast);
  }

  .table tbody tr:hover {
    background-color: #f8f9fe;
  }

  .table tbody td h6 {
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-semibold);
    margin-bottom: 0;
  }

  .table tbody td .text-secondary {
    font-size: var(--font-size-xs);
  }

  /* === Form Controls Enhancement === */
  .form-control {
    font-family: var(--font-family-primary) !important;
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-normal);
    padding: 0.625rem 0.875rem;
    border-radius: var(--radius-md);
    border: 1px solid #d2d6da;
    transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
  }

  .form-control:focus {
    border-color: #5e72e4;
    box-shadow: 0 0 0 3px rgba(94, 114, 228, 0.15);
  }

  .form-control-label {
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-medium);
    color: #525f7f;
    margin-bottom: 0.375rem;
  }

  .form-group {
    margin-bottom: var(--spacing-lg);
  }

  /* === Button Improvements === */
  .btn {
    font-family: var(--font-family-primary) !important;
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-semibold);
    padding: 0.625rem 1.25rem;
    border-radius: var(--radius-md);
    letter-spacing: 0.01em;
    transition: all var(--transition-fast);
  }

  .btn-sm {
    font-size: var(--font-size-xs);
    padding: 0.5rem 1rem;
  }

  .btn-primary {
    box-shadow: 0 3px 5px -1px rgba(94, 114, 228, 0.3);
  }

  .btn-primary:hover {
    box-shadow: 0 6px 10px -2px rgba(94, 114, 228, 0.4);
    transform: translateY(-1px);
  }

  /* === Sidebar Enhancement === */
  .sidenav {
    box-shadow: var(--shadow-lg);
  }

  .sidenav .navbar-brand span {
    font-size: var(--font-size-md);
    font-weight: var(--font-weight-bold);
    letter-spacing: -0.02em;
  }

  .sidenav .nav-link {
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-medium);
    padding: 0.75rem 1rem;
    border-radius: var(--radius-md);
    margin: 0.125rem 0.5rem;
    transition: all var(--transition-fast);
  }

  .sidenav .nav-link:hover {
    background-color: #f8f9fe;
  }

  .sidenav .nav-link.active {
    background: linear-gradient(310deg, #5e72e4 0%, #825ee4 100%);
    box-shadow: 0 4px 6px -1px rgba(94, 114, 228, 0.4);
  }

  .sidenav .nav-link-text {
    font-weight: var(--font-weight-medium);
  }

  .sidenav h6.text-uppercase {
    font-size: 0.65rem;
    font-weight: var(--font-weight-bold);
    letter-spacing: 0.08em;
    color: #8898aa;
    margin-top: var(--spacing-lg);
    margin-bottom: var(--spacing-sm);
  }

  /* === Navbar Enhancement === */
  .navbar .breadcrumb-item,
  .navbar .breadcrumb-item a {
    font-size: var(--font-size-sm);
  }

  .navbar h6 {
    font-size: var(--font-size-lg);
    font-weight: var(--font-weight-bold);
  }

  /* === Badge Improvements === */
  .badge {
    font-family: var(--font-family-primary) !important;
    font-size: var(--font-size-xs);
    font-weight: var(--font-weight-semibold);
    padding: 0.35em 0.65em;
    border-radius: var(--radius-sm);
    letter-spacing: 0.02em;
  }

  /* === Dropdown Enhancements === */
  .dropdown-menu {
    font-family: var(--font-family-primary) !important;
    border: none;
    box-shadow: var(--shadow-xl);
    border-radius: var(--radius-lg);
    padding: 0.5rem;
  }

  .dropdown-item {
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-medium);
    padding: 0.5rem 1rem;
    border-radius: var(--radius-md);
    transition: background-color var(--transition-fast);
  }

  .dropdown-item:hover {
    background-color: #f8f9fe;
  }

  /* === Alert Improvements === */
  .alert {
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-medium);
    border-radius: var(--radius-md);
    border: none;
  }

  /* === Chart Container === */
  .chart {
    border-radius: var(--radius-md);
  }

  /* === List Group Enhancement === */
  .list-group-item {
    font-size: var(--font-size-sm);
    padding: var(--spacing-md);
    transition: background-color var(--transition-fast);
  }

  .list-group-item:hover {
    background-color: #f8f9fe;
  }

  .list-group-item h6 {
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-semibold);
  }

  /* === Icon Enhancements === */
  .icon-shape {
    transition: transform var(--transition-fast);
  }

  .card:hover .icon-shape {
    transform: scale(1.05);
  }

  /* === Smooth Scrollbar === */
  ::-webkit-scrollbar {
    width: 6px;
    height: 6px;
  }

  ::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
  }

  ::-webkit-scrollbar-thumb {
    background: #c1c1c1;
    border-radius: 10px;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: #a1a1a1;
  }

  /* === Animation Enhancements === */
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .card {
    animation: fadeInUp 0.4s ease-out;
  }

  /* Stagger animation for cards */
  .row>[class*="col-"]:nth-child(1) .card {
    animation-delay: 0.05s;
  }

  .row>[class*="col-"]:nth-child(2) .card {
    animation-delay: 0.1s;
  }

  .row>[class*="col-"]:nth-child(3) .card {
    animation-delay: 0.15s;
  }

  .row>[class*="col-"]:nth-child(4) .card {
    animation-delay: 0.2s;
  }
</style>