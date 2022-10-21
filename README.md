# Khana Mangana Website - WOW Foods

This is an Online Food Ordering Restaurant Themed Website, designed using PHP and MySQL. This website is responsive and dynamic with separate client and admin interfaces. It offers a variety of facilities such as viewing, adding, deleting and updating the different admins, similarly changing categories, foods, managing orders etc. The client side is inspired by the interface of Zomato, which is an online food ordering platform, it offers pictures, descriptions and ordering flexibilties to the customer.

The website's database is maintained around 4 different tables, for admins, categories, foods and orders. Efforts have been made towards securing the website's code through the use of SQL injection features, md5 and a login for admins without which the admin dashboard will not be accessible. This project has been developed while self learning PHP and MySQL and has helped me in understanding and mastering create, insert and delete operations of various enteries.

## Technologies Used

1. PHP
2. MySQL

## Pages developed for client side interface

1. **index.php** - Home Page (Search Food, Some Categories, Featured Foods, Social Media links)
2. **categories.php** - List all Categories on Single Page
3. **foods.php** - List all foods on a single page
4. **order.php** - Page to Order Selected Food
5. **category_foods.php** - Page to list all the Foods based on Category Selected
6. **food_search.php** - Page to list all the Foods based on Search keyword

## Pages developed for admin side interface

1. **index.php** - Summarized Dashboard for the admin (Categories, foods, Total orders, Revenue generated)
2. **login.php** - Authetication page asking for username and password, prompts error if details don't match
3. **logout.php** - Terminates current sessions, redirects back to login
4. **update-password.php** - Confirms current password, allows changes to update current password
5. **manage-admin.php** - To view all admins, update, delete and change password for admins
6. **manage-category.php** - Page including all current categories with pictures, allowing update & delete
7. **manage-food.php** - To manage all current food on the menu, update, delete, add new foods
8. **manage-order.php** - Manage all orders with their status, order date and time and customer details
9. **add-admin.php** - Form to add a new admin with full name, username and encrypted password
10. **add-category.php** - To add a new category with a picture (optional) and mark as active/featured
11. **add-food.php** - Adds a new food item on the menu with or without a picture/description & price details
12. **update-admin.php** - Simple form to change username/password of any admin
13. **update-category.php** - Updates category details like image, name, active/featured
14. **update-food.php** - To Update food name, image, category etc
15. **update-order.php** - To update customer details, order status and quantity
16. **delete-admin.php** - Deletes selected admin
17. **delete-category.php** - Deletes selected category
18. **delete-food.php** - Deletes selected food

## For Project Enquiry, Contact me on:

Email - rabbumashi@gmail.com
Contact number - +91 89781 21470

## Social Media Links

1. LinkedIn - [Rabab Fatima](www.linkedin.com/in/rababfatima209)
2. Instagram - [@rababnaqvi143](https://www.instagram.com/rababnaqvi143/)
3. Github - [RababHussain](https://github.com/RababHussain)
