## SPRINT 1

# Step one : Let’s Make our First Controller:

We create a file at app/Controllers/first/Pages.php.

>There are two view() functions referred to in this tutorial. One is the class method created with public function view($page = 'home') and return view('welcome_message') for displaying a view. Both are technically a function. But when you create a function in a class, it’s called a method.

# Step two : first views:

Create the header at app/Views/templates/header.php .

- `esc($title)` : It’s a global function provided by CodeIgniter to help prevent XSS attacks (for more inf : https://codeigniter4.github.io/userguide/general/common_functions.html)

Escapes data for inclusion in web pages, to help prevent XSS attacks. This uses the Laminas Escaper library to handle the actual filtering of the data.

If $data is a string, then it simply escapes and returns it. If $data is an array, then it loops over it, escaping each ‘value’ of the key/value pairs.

Valid context values: html, js, css, url, attr, raw

# Step three  Adding logic to the Controller:

Create static page bodies in app/Views/pages

In that directory, create two files named home.php and about.php. Within those files, type some text - anything you’d like 

Modification of the Controller Pages

> Controllers must return a string or a Response object.

# Step 4 : Routing

We have made the controller. The next thing is to set routing rules. Routing associates a URI with a controller’s method.

Open the routing file located at app/Config/Routes.php and look for the “Route Definitions” section of the configuration file.

CodeIgniter reads its routing rules from top to bottom and routes the request to the first matching rule. 

> The third rule in the $routes object matches a GET request to a URI segment using the placeholder (:segment), and passes the parameter to the view() method of the Pages class.



