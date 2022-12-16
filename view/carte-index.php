{{ include('header.php', {title: 'Carte', pageHeader: 'Liste des cartes à vendre'})}}
    <main>
        <section>
            <table>
                <thead>
                    <tr>
                        <th>Nom du Joueur</th>
                        <th>Equipe</th>
                        <th>Quantité</th>
                        <th>Prix</th>
                        <th>Categorie</th>
                        <th>Collection</th>

                        {% if session.privilege_id == 1 %}
                        <th>Acheter</th>
                        {% endif %}  

                        {% if session.privilege_id == 2 %}
                        <th>Edit</th>
                        {% endif %}                         
                    </tr> 
                </thead>


                <tbody>
                
                    {% for carte in cartes %}
                    <tr>
                    <td>{{ carte.nomJoueur }}</td>
                        <td>{{ carte.equipe }}</td>
                        <td>{{ carte.quantite }}</td>
                        <td>{{ carte.prix }}</td>

 
                        {% for categorie in categories %}
                            {% if categorie.id == carte.categorie_id %}
                        <td>{{ categorie.categorie }}</td>
                             {% endif %}
                        {% endfor %}

 
                        {% for collection in collections %}
                            {% if collection.id == carte.collection_id %}
                        <td>{{ collection.collection }}</td>
                             {% endif %}
                        {% endfor %}

                        {% if session.privilege_id == 1 %}
                        <td><a href="{{ path }}carte/achat/{{ carte.id}}">Acheter</a></td>
                        {% endif %}  
    
                        {% if session.privilege_id == 2 %}
                        <td><a href="{{ path }}carte/show/{{ carte.id}}">Modifier</a></td>
                        {% endif %}  
                    </tr>
                    {% endfor %}
                </tbody>
                
            </table>
        </section>
    </main>
</body>
</html>