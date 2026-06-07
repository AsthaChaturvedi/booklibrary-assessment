# Book Library - WordPress Developer Assessment

## Project Overview

This project is a custom WordPress solution that allows authenticated users to manage and browse a collection of books.

The implementation includes a custom post type, custom fields, access restrictions, custom templates, pagination, and responsive styling.

---

## Features

### Custom Post Type

A custom post type called **Books** has been created.

Each book contains:

* Title
* Author
* Genre
* Published Date
* Description

---

## Access Restriction

Access is restricted to logged-in users for:

* Books Listing Page
* Single Book Pages

Unauthenticated users are prompted to log in before accessing protected content.

---

## Single Book Page

The single book template displays:

* Book Title
* Author
* Genre
* Published Date
* Description

---

## Books Listing Page

Books are displayed using the shortcode:

`[books_list]`

Features include:

* Linked book title
* Author
* Genre
* Pagination (5 books per page)

---

## Responsive Design

The pages have been styled using responsive CSS to ensure usability across desktop, tablet, and mobile devices.

---

## Installation

1. Copy the plugin folder into:

   `wp-content/plugins/`

2. Activate the plugin from the WordPress Admin Dashboard.

3. Install and activate **Advanced Custom Fields (ACF)**.

4. Create the following ACF fields for the Books post type:

   * Author (Text)
   * Genre (Select)
   * Published Date (Date Picker)
   * Description (WYSIWYG)

5. Create a page containing:

   `[books_list]`

6. Add sample book entries.

---

## Access Control Implementation

Access restriction is implemented using:

* `template_redirect`
* `is_user_logged_in()`

Users who are not logged in cannot access:

* Single Book pages
* Books Listing page

---

## Technologies Used

* WordPress
* PHP
* HTML
* CSS
* Advanced Custom Fields (ACF)

---

## Author

Astha Chaturvedi
# booklibrary-assessment
