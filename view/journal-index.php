{{ include('header.php', {title: 'Journal'})}}

    <main>
        <table>
            <thead>
                <tr>
                    <th>Identifiant client</th>
                    <th>Date</th>
                    <th>Adesse ip</th>
                    <th>user Id</th>
                </tr>
            </thead>
            <tbody>
                {% for info in infos %}
                        <tr>
                            <td>{{ info.id }}</td>
                            <td>{{ info.date }}</td>
                            <td>{{ info.adresseIP }}</td>
                            <td>{{ info.userId }}</td>
                        </tr>
                {% endfor %}
                
            </tbody>
        </table>
    </main>
</body>
</html
