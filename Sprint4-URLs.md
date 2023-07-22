# Sprint 4: URLs

Step 1: 

    Views form / usertest

    Controller User / Admin

Step 2:

    Filter \App\Filters\AuthFilter::class

    App/Config/Filters

Step 3: 

    Routes

    Voici quelques exercices pour vous aider à tester et à maîtriser l'utilisation de la syntaxe Array Callable dans le routage des URI de CodeIgniter 4 :

    Exercice de base :

    Définissez une route pour l'URI "/home" qui appelle la méthode "index" du contrôleur "HomeController".
    Testez la route en accédant à l'URL "/home" et vérifiez si la méthode "index" est appelée correctement.
    Exercice de paramètres :

    Définissez une route pour l'URI "/users/(:num)/edit" qui appelle la méthode "edit" du contrôleur "UserController" avec le paramètre numérique.
    Testez la route en accédant à des URLs tels que "/users/123/edit" et "/users/456/edit" et vérifiez si la méthode "edit" est appelée avec les bons paramètres.
    Exercice de groupe de routes :

    Créez un groupe de routes avec le préfixe "admin".
    Dans ce groupe, définissez une route pour l'URI "/users" qui appelle la méthode "index" du contrôleur "Admin\UserController".
    Testez la route en accédant à l'URL "/admin/users" et vérifiez si la méthode "index" du contrôleur approprié est appelée.
    Exercice de routage inverse :

    Définissez une route pour l'URI "/profile" qui appelle la méthode "profile" du contrôleur "UserController" et donnez-lui le nom de route "user-profile".
    Utilisez la fonction site_url('user-profile') pour générer l'URL correspondante et vérifiez si elle renvoie "/profile".
    Exercice d'utilisation de filtres :

    Créez un filtre appelé "auth" qui vérifie si l'utilisateur est authentifié avant d'exécuter une route.
    Appliquez ce filtre à une route de votre choix.
    Testez la route en accédant à l'URL correspondante et vérifiez si le filtre "auth" est exécuté correctement avant la méthode du contrôleur.
    Ces exercices vous permettront de pratiquer et de renforcer votre compréhension de l'utilisation de la syntaxe Array Callable dans le routage des URI de CodeIgniter 4. N'hésitez pas à explorer davantage les différentes fonctionnalités et options de routage pour développer votre maîtrise de ce framework.