# Company Profile Website - Laravel MVC Implementation

## 1. Project Title
**Mellovia Creamery - Company Profile Website**

---

## 2. Introduction

### What is a Company Profile Website?
A Company Profile Website serves as an official online presence for a business. It provides visitors with important information about the company, its products or services, values, and contact details. For Mellovia Creamery, the website introduces the brand and showcases its ice cream flavors and offerings.

### Why Businesses Need One
* **Credibility & Trust:** An official website helps establish a professional and trustworthy online presence.
* **Brand Awareness:** It allows customers to discover the business, its products, and its brand identity.
* **Customer Engagement:** Visitors can easily explore products, learn more about the company, and find contact information.
* **Accessible Information:** Customers can view the company's offerings and information anytime through the website. media.

### Purpose of the Project
The purpose of this project is to develop a responsive multi-page company profile website for **Mellovia Creamery** using PHP and Laravel's Model-View-Controller (MVC) architecture. The project demonstrates the use of Laravel routing, controllers, Blade templates, reusable layouts, components, and organized project structure.

---

## 3. Objectives
* Configure Laravel routes in `routes/web.php` for the Home, About, Services, and Contact pages.
* Implement `CompanyController.php` to handle client requests and return the appropriate views.
* Use the Blade Templating Engine to create reusable layouts and components.
* Create a consistent navigation bar and footer across all pages.
* Develop a responsive and user-friendly company profile website for Mellovia Creamery.
* Organize the Laravel project using proper MVC architecture and folder structure.
* Manage the project using Git and maintain a meaningful commit history.
* Publish the project through a public GitHub repository.
 

---

## 4. MVC Architecture

### What is MVC?
MVC stands for **Model-View-Controller**, an architectural pattern that separates an application into three main components:
 
* **Model:** Handles data, business logic, and database-related operations.
* **View:** Handles the presentation and user interface displayed to the visitor.
* **Controller:** Handles incoming requests, processes application logic, and determines which view should be returned.
 
### Why Laravel Uses MVC
Laravel uses the MVC architecture to promote **Separation of Concerns**. This allows different parts of the application to have specific responsibilities, making the project easier to organize, maintain, and expand.
 
### Advantages of MVC in Software Development
 
1. **Maintainability:** Developers can modify one part of the application without unnecessarily affecting other parts.
2. **Organization:** Application logic, user interface, and data management are separated into appropriate files and folders.
3. **Reusability:** Blade layouts and components can be reused across multiple pages.
4. **Scalability:** The structure makes it easier to add new features as the application grows.
 
### Mellovia Creamery Request Flow
 
```text
Browser
   │
   ▼
Route (routes/web.php)
   │
   ▼
CompanyController
   │
   ▼
Blade View
   │
   ▼
HTML Response
   │
   ▼
Browser
```
### 5. Laravel Routing

Key Routing Concepts
Route Definitions: This is the official declaration of URL endpoints inside routes/web.php. It specifies the HTTP method (such as GET, POST), the path, and the corresponding logic or controller function.

GET Requests: The HTTP GET method is used to request or retrieve data from the server without modifying any data in the database. All standard navigation across pages (Home, About, Services, Contact) utilizes GET requests.

Named Routes: Assigning a unique name to a route using the ->name('route.name') helper. This provides flexibility because if the actual URL path changes in the future, you won't need to manually update every hyperlink across the entire application.

![Route Definitions](public/images/web.php.png)

## 6. Controllers
Purpose of Controllers
The Controller serves as the "brain" or intermediary between the Model and the View in the MVC architecture. Instead of placing all business and rendering logic directly inside routes/web.php, it is separated into dedicated Controller classes to keep the application clean and organized.

Benefits of Controllers
Organization: Groups related HTTP request handlers together in a single file.

Reusability: Methods defined inside a controller can easily be invoked or reused.

Middleware Integration: Makes it easier to apply authentication, validation, and security filters across the whole class or specific functions.

Cleaner Code: Prevents bloated routing files by offloading execution logic.

![companycontroll](public/images/companycontrol.png)

## 7. Blade Templating Engine
Blade is the powerful yet lightweight templating engine included with Laravel. It allows the use of plain PHP code within views while providing a clean, concise, and fast syntax for constructing dynamic UI layouts.

Core Blade Directives & Components
Blade Layouts: A master template containing the general HTML structure (head tags, external CSS/JS scripts) and repeating components like the Header and Footer.

Blade Components: Reusable small UI parts (such as the Navigation Bar or Footer) included within the master layout or other views.

@extends('layout.app'): Placed at the top of a child view to inform Laravel that it will use the designated Master Layout file.

@yield('content'): Used in the Master Layout to reserve space where content from the child view will be fetched or rendered.

@section('content') ... @endsection: Used in the child view to specify the exact content that will be injected into its corresponding @yield in the master layout.

@include('components.navbar'): Directly imports a separate Blade template component inside the current layout file.

![meow](public/images/snipets.png)
![chicken](public/images/app.png)

## 8. Laravel Folder Structure
Laravel is structured with a neat and predictable folder hierarchy to ensure a high level of code organization:

app/
Contains the core code of the application. This is where Controllers (app/Http/Controllers), Models, Middleware, and Providers reside.

routes/
Stores all route definitions for the application. The web.php file handles web-based interface requests.

resources/
Contains uncompiled front-end assets and views. This includes Blade Templates (resources/views), Raw CSS, and JavaScript files.

public/
The web root directory where all incoming HTTP requests enter (index.php). It also stores public assets such as images, compiled CSS, and JS files.

bootstrap/
Contains files that optimize and bootstrap the Laravel framework setup, including app.php and configuration cache files.

config/
Houses all official configuration files for the entire framework (such as database.php, app.php, mail.php).

## 9. ScreenShots

![Home Page](public/images/home1.png)
![About Page](public/images/about2.png)
![Service](public/images/service3.png)
![Contact](public/images/contact4.png)
![Nav Bar](public/images/navbar.png)
![Footer](public/images/footer.png)
![Routes](public/images/web.php.png)
![companycontroll](public/images/companycontrol.png)
![chicken](public/images/app.png)
![Project](public/images/project.png)
![GitHub](public/images/.png)



## 10. Problems Encountered
While developing the Laravel MVC Company Profile application, the following technical challenges were encountered:

Target Class / Controller Namespace Issue (Target class [CompanyController] does not exist):

Upon defining initial routes in routes/web.php, a runtime error occurred because Laravel could not locate CompanyController.

View Not Found Error (InvalidArgumentException: View [pages.home] not found):

Encountered this error when attempting to render the home page after adding a Controller method.

Blade Syntax and Inheritance Misconfiguration Errors:

Issues arose where content from child views (home.blade.php) failed to render in the browser or resulted in broken HTML layout structure.

## 11. Solutions
The steps taken to resolve the aforementioned issues:

Resolving Controller Namespace Issue:

Added the proper use import statement at the top of the routes/web.php file: use App\Http\Controllers\CompanyController;. Also verified that the namespace inside app/Http/Controllers/CompanyController.php was explicitly set to namespace App\Http\Controllers;.

Resolving View Not Found Error:

Inspected file naming and directory hierarchy inside resources/views/. Identified a typo or misplaced Blade file outside the pages subfolder. Corrected the path structure to resources/views/pages/home.blade.php to match the view('pages.home') call from the Controller.

Resolving Blade Inheritance and Layout Issues:

Ensured that the layout name in @extends('layouts.app') matched resources/views/layouts/app.blade.php exactly. Aligned @yield('content') in the Master Layout with @section('content') in each Child View, making sure sections were closed properly using @endsection.

## 12. Reflection
Building my first multi-page web application using Laravel's Model-View-Controller (MVC) architecture provided me with a strong foundational understanding of modern server-side software development. Prior to working with Laravel, managing dynamic content often meant mixing HTML structural markup, style parameters, and PHP execution logic within single, cluttered files. This project clearly demonstrated the transformative power of architectural patterns in organizing code, improving scalability, and enforcing structural cleanliness across a web application.

Understanding the core philosophy of MVC—specifically the Separation of Concerns—was one of the most rewarding takeaways from this assignment. Separation of concerns dictates that distinct features and responsibilities within a program should be divided into isolated sections. In Laravel, the Model manages business data rules, the View handles the user interface presentation, and the Controller acts as the intelligent mediator. This separation ensures that changing the visual aesthetics of a webpage in a Blade template requires zero modifications to underlying routing or request-handling logic. For developers, this isolates bugs, prevents unintended side effects during updates, and dramatically increases overall code maintainability.

The seamless interplay between routes, controllers, and views forms the core request-response lifecycle of Laravel applications. When a user requests a URL, Laravel's router interprets the incoming HTTP request and delegates execution to a specific method within CompanyController. The controller evaluates any required logic and determines which Blade view should be returned. The Blade Templating Engine then dynamically assembles layout components—such as headers, footers, and content sections—into a clean HTML payload delivered straight back to the user's browser. Experiencing this entire flow firsthand demystified how client-server web technologies operate under the hood.

Looking ahead, the architectural principles mastered in this project extend far beyond simple company profile websites. In large-scale enterprise environments, applications manage thousands of concurrent users, complex database transactions, third-party API integrations, and robust authorization pipelines. Utilizing a structured MVC framework ensures that massive development teams can collaborate simultaneously without code conflicts—frontend designers can polish Blade views while backend engineers optimize Controllers, Services, and Database Models. Mastering these foundational concepts serves as a critical stepping stone toward developing secure, modular, and enterprise-grade software systems.

## 13. References
Laravel Documentation. (n.d.). Routing & Controllers - Laravel 11.x. Laravel. https://laravel.com/docs/11.x/routing

Laravel Documentation. (n.d.). Blade Templates - Laravel 11.x. Laravel. https://laravel.com/docs/11.x/blade

MDN Web Docs. (2023). Model-View-Controller (MVC) architecture definition. Mozilla Developer Network. https://developer.mozilla.org/en-US/docs/Glossary/MVC

PHP Documentation. (2024). PHP Manual: Classes and Objects. PHP Group. https://www.php.net/manual/en/language.oop5.php

Tailwind CSS Documentation. (2024). Utility-first CSS framework for rapid UI development. Tailwind Labs. https://tailwindcss.com/docs


## Diagram

![Diagram](public/images/diagram.png)









