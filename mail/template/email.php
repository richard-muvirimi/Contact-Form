<html>

<head>
    <title>Contact us Mail</title>
</head>

<body>
    <p>$mail->message</p>
    <h3>Contact details</h3>
    <table>
        <tr>
            <th>Name</th>
            <th>$mail->name</th>
        </tr>
        <tr>
            <td>Email</td>
            <td><a href='mailto://$mail->email'>$mail->email</a></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><a href='tel:$mail->phone'>$mail->phone</a></td>
        </tr>
    </table>
</body>

</html>