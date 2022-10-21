# Khana Mangana

Indulge into divine luxury cuisine in the comfort of your home with this Online Food Ordering, Restaurant Themed Website designed using PHP and MySQL. This website is responsive and dynamic with separate client and admin interfaces. It offers a variety of facilities such as viewing, adding, deleting and updating the different admins, similarly changing categories, foods, managing orders etc. The client side is inspired by the interface of Zomato, which is an online food ordering platform, it offers pictures, descriptions and ordering flexibilties to the customer.

The website's database is maintained around 5 different tables, for admins, categories, foods and orders. Efforts have been made towards securing the website's code through the use of SQL injection features, md5 and a login for admins without which the admin dashboard will not be accessible. This project has been developed while self learning PHP and MySQL and has helped me in understanding and mastering create, insert and delete operations of various enteries. I have started by creating an HTML template then converted it into PHP and then used MySQL database to fetch products and display it in the project.

The client side interface blends in expressive yet simple UI and color themes that enhance the look of the website. 4 navigating pages including home, explore foods, foods and contact page that help the user browse and view different food items and order them idividually through a simple form. The explore foods page showcases all the categories of foods available and the foods page lists out every item on the menu. The contact page is a simple form to send in any suggestions, feedback or queries to the restaurant.

 The admin side is an ideal dashboard to organise and manage affairs of the restaurant including home - a landing page once the user logs into the admin side and shows the current orders, foods, categories and Total revenue generated. The admins page is a tabular representation of the current admins with the faciltiy to add new admins, update their details and update their passwords. The next page is the categories page which allows entries of new categories through a simple form. Similarly, the foods page allows addition of new food items within a specific category. The orders page contains all orders along with their current statuses that can be updated as well through a simple button. The messages page includes queries/feedbacks/suggestions that customers have sent directly to the restaurant. A simple logout buttons terminates the users current session and requires a new login before the user can access the admin side again.

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



##Screenshots


![Screenshot (57)](https://user-images.githubusercontent.com/96685742/197266588-f58db7a7-ee1d-4a33-b90c-e94930b34ce7.png)

![Screenshot (58)](https://user-images.githubusercontent.com/96685742/197266633-bb980687-1e5e-4489-ad66-ccafb1b7c3d1.png)

![Screenshot (59)](https://user-images.githubusercontent.com/96685742/197266667-d511a155-58e7-4ccb-b501-e74d18328406.png)

![Screenshot (60)](https://user-images.githubusercontent.com/96685742/197266694-180de4f2-6c86-4b55-b24b-c41190397d04.png)

![Screenshot (61)](https://user-images.githubusercontent.com/96685742/197266730-fa7e043c-973c-4b59-8e87-3b8b124f3548.png)

![Screenshot (62)](https://user-images.githubusercontent.com/96685742/197266758-99d181ec-87c1-4a85-84ac-556308dc3509.png)

![Screenshot (63)](https://user-images.githubusercontent.com/96685742/197266797-babbbf1c-e0a9-4611-988a-2530507ebce6.png)

![Screenshot (64)](https://user-images.githubusercontent.com/96685742/197266823-5fc6207e-16f1-48f4-bcc2-cfb82aeac6c7.png)

![Screenshot (65)](https://user-images.githubusercontent.com/96685742/197266844-277205d6-0ac5-49a5-9974-cd5dcb57d1a1.png)

![Screenshot (66)](https://user-images.githubusercontent.com/96685742/197266880-1d098edb-4a41-47a6-8199-e3a5dee452a6.png)

![Screenshot (67)](https://user-images.githubusercontent.com/96685742/197266927-07b22067-d5f3-405d-863a-b0c06f10eace.png)

![Screenshot (68)](https://user-images.githubusercontent.com/96685742/197266964-864d9283-a6e0-450a-8f0a-5b265be095cb.png)

![Screenshot (69)](https://user-images.githubusercontent.com/96685742/197266989-d8e3bc89-034d-44f3-9d8e-6f7d79ff7dcf.png)

![Screenshot (70)](https://user-images.githubusercontent.com/96685742/197267005-2e8abc99-3650-4c92-816d-7de346d30d0e.png)

## Future Scope:
1. The next update of the website will include a cart that shows the current items a customer has choosed to buy and will also show the total price to be payed.
2. A notifcation system from the website when the user has not visited the website in over 24 hours using the notification service REST API.


Note for payments on the website:
Currently this website is designed to accept only Cash On Delivery payments and does not have any online payment gateways, this ofcourse will be implemented when the website is hosted live.






