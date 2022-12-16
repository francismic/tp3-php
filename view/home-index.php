{{ include('header.php', {title: 'Home'})}}
<body>

<tr>
        <td>{{ session.user_id }}</td>
        <td>{{ session.privilege_id}}</td>
        <td>{{ session.user_name }}</td>
        <td>{{ session.fingerPrint }}</td>
        <td>{{ session.ip_adress }}</td>
        <td>{{ session.login_time }}</td>
</tr>

</body>
</html>