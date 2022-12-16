<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ title }}</title>
    <link rel="stylesheet" href="{{ path }}css\style.css">
</head>
<body>
<header>

    <nav>
        {% if guest %}        
        <a href="{{path}}carte">Collection</a>
        <a href="{{path}}user/create">Créer un compte</a>
        <a href="{{path}}user/login">Login</a>
        {% else %}
        {% if session.privilege_id == 1 %}
        <a href="{{path}}carte">Collection</a>
        <a href="{{path}}user/logout">Logout</a>
        {% endif %}
        {% if session.privilege_id == 2 %}
        <a href="{{path}}carte">Collection</a>
        <a href="{{ path }}carte/create">Ajouter une carte</a>
        <a href="{{path}}journal">Log Book</a>
        <a href="{{path}}user/logout">Logout</a>
        {% endif %}
        {% endif %}
        
    </nav>

    <header>
        <h1>{{ pageHeader}}</h1>
    </header>
    <aside>
    {% if errors is defined %}
            <span class="error">{{ errors | raw}}</span>
        {% endif %}
    </aside>