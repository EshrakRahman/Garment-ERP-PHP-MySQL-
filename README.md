# Garment ERP (OOP PHP + MySQL)

A lightweight ERP system for garment manufacturing, built with **OOP PHP** and **MySQL**.  
This project follows a simplified **MVC-inspired architecture**, designed for beginners to learn **object-oriented programming** while building a real-world ERP application.

---

## 🚀 Features

- **Role-Based Login & Access Control**  
  - Admin, Merchandiser, Storekeeper, Production, Finance  
- **Buyers & Suppliers Management**  
  - Add, edit, delete, view lists  
- **Orders & BOM (Bill of Materials)**  
  - Create orders, attach BOM, track status  
- **Inventory / Stock Management**  
  - Stock In, Stock Out, Current Stock Report  
- **Production Tracking**  
  - Cutting, Sewing, Finishing stages, Daily Production Reports  
- **Finance / Invoices**  
  - Buyer & Supplier invoices, Outstanding reports, Payment tracking  
- **Dashboard**  
  - Key KPIs for orders, stock, production, and finance  

---

garment-erp/
├── config/            # Database connection & autoload classes
├── core/              # Base Model, Controller, Database, Auth classes
├── modules/           # ERP modules
│   ├── users/         # User module
│   │   └── views/     # Forms, tables, login/register pages
│   ├── buyers/        # Buyer module
│   │   └── views/     # Add, edit, list views
│   ├── suppliers/     # Supplier module
│   │   └── views/     # Add, edit, list views
│   ├── items/         # Inventory module
│   │   └── views/     # Add, edit, list views
│   ├── orders/        # Orders & BOM module
│   │   └── views/     # Index, add, BOM views
│   ├── stock/         # Stock module
│   │   └── views/     # Stock In, Stock Out, Reports
│   ├── production/    # Production module
│   │   └── views/     # Add, report, index views
│   └── finance/       # Finance module
│       └── views/     # Buyer/Supplier invoices & reports
├── public/            # Entry points, assets, uploads
│   ├── css/           # Custom CSS
│   ├── js/            # Custom JS
│   └── uploads/       # File uploads
├── includes/          # Shared layouts: header, footer, sidebar
├── .gitignore         # Git ignore
└── README.md          # Project documentation
---

## ⚙️ Installation

1. Clone the repository:

```bash
git clone https://github.com/yourusername/garment-erp.git
cd garment-erp
Import the database schema (garment_erp.sql) into MySQL.

Update database credentials in:

php
Copy code
config/config.php
Start a PHP development server:

bash
Copy code
php -S localhost:8000 -t public
Open your browser and visit:

arduino
Copy code
http://localhost:8000
Login with default admin credentials (set manually in DB).
```
## 🛠 Tech Stack

- **PHP** (Core PHP, Object-Oriented Programming)  
- **MySQL / MariaDB**  
- **Bootstrap 5** (UI)  
- **Vanilla JavaScript**  

---

## 📚 Learning Goals

- Apply **OOP concepts**: classes, objects, inheritance  
- Learn **MVC-inspired architecture** in PHP  
- Build **CRUD modules** for real-world ERP  
- Implement **role-based access control**  
- Practice **session management and secure login**  
- Generate **reports and dashboards** from database  

---

## 🖥 Usage / Flow

1. Users log in through `/modules/users/views/login.php`  
2. **Controller** (`UserController.php`) verifies credentials via **Model** (`User.php`)  
3. Redirects user based on **role** to relevant module/dashboard  
4. Users can perform **module-specific tasks**: CRUD operations, stock management, production tracking, invoices  
5. **Reports and dashboards** provide insights for decision-making  

---

## 📊 Reports & Dashboards

- **Order Status Report**  
- **Inventory / Stock Report**  
- **Daily Production Report**  
- **Buyer & Supplier Outstanding Reports**  
- **Dashboard KPIs** (Orders in progress, Total Stock Value, Production Quantity, Pending Payments)  

---

## 💡 Tips for Development

- Place **business logic in Models**  
- **Controllers** handle input & redirects  
- **Views** should only render HTML and echo variables  
- Use **PDO prepared statements** for secure database queries  
- Keep **role-based menu logic** in `includes/sidebar.php`  

---

## 📜 License

This project is licensed under the **MIT License**.  
Feel free to use, modify, and learn from it.

