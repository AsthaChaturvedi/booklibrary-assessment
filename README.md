# Book Library - WordPress Developer Assessment

## Overview

This project implements a custom WordPress Book Library system with restricted access for authenticated users.

Features include:

* Custom Post Type (Books)
* Custom Fields (Author, Genre, Published Date, Description)
* Protected Books Listing Page
* Protected Single Book Pages
* Pagination
* Responsive Front-End Layout

---

## Setup Instructions

### 1. Install Plugin

Copy the plugin folder into:

wp-content/plugins/

Activate the plugin from the WordPress Admin Dashboard.

---

### 2. Install Advanced Custom Fields (ACF)

Install and activate the Advanced Custom Fields plugin.

Create the following fields for the **Books** post type:

| Field Label    | Field Type     |
| -------------- | -------------- |
| Author         | Text           |
| Genre          | Select         |
| Published Date | Date Picker    |
| Description    | WYSIWYG Editor |

---

### 3. Create Books

Navigate to:

Books → Add New

Add sample book entries and populate the custom fields.

---

### 4. Create Books Listing Page

Create a page named:

Books Listing

Add the shortcode:

[books_list]

Publish the page.

---

## Testing Instructions

### Guest User

Verify that the following pages are protected:

* Books Listing Page
* Single Book Pages

Guests should receive a login prompt before accessing protected content.

---

### Authenticated User

After logging in:

* View the Books Listing Page
* Open individual Book Pages
* Navigate through paginated book listings

---

## Access Restriction Implementation

Access control is implemented using the WordPress:

* template_redirect hook
* is_user_logged_in() function

The following content is restricted:

* Books Listing Page
* Single Book Pages

Unauthenticated users are presented with a login prompt before accessing protected content.

---

## Project Structure

book-library/

├── assets/

├── includes/

├── screenshots/

├── templates/

├── book-library.php

├── README.md

└── .gitignore

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
