# News section

- Step 1: Create a Database to Work with

- Step 2: Connect to Your Database

- Step 3: Setting up Your Model

- Step 4: Display the News

- Step 5: Routing


# Step 1:

You need to create a database ci4tutorial that can be used for this tutorial, and then configure CodeIgniter to use it.

    CREATE TABLE news (
        id serial Primary key,
        title VARCHAR(128) NOT NULL,
        slug VARCHAR(128) NOT NULL unique,
        body TEXT NOT NULL
    );

Records:

    INSERT INTO news VALUES
        (1,'Elvis sighted','elvis-sighted','Elvis was sighted at the Podunk internet cafe. It looked like he was writing a CodeIgniter app.'),
        (2,'Say it is not so!','say-it-isnt-so','Scientists conclude that some programmers have a sense of humor.'),
        (3,'Caffeination, Yes!','caffeination-yes','World s largest coffee shop open onsite nested coffee shop for staff only.');

# Step 2:

    See app/Config/Database.php

# Step 3 :
