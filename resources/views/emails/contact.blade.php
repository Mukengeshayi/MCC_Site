<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouveau message de contact</title>
    <style>
        body { font-family: Arial, sans-serif; color:#333; }
        .container { max-width: 600px; margin: auto; padding: 20px; background:#f9f9f9; border-radius:8px; }
        h2 { color: #1d72b8; }
        p { line-height: 1.5; }
        .footer { margin-top:20px; font-size: 12px; color: #888; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Nouveau message depuis le formulaire de contact</h2>
        <p><strong>Nom :</strong> {{ $data['name'] }}</p>
        <p><strong>Email :</strong> {{ $data['email'] }}</p>
        <p><strong>Objet :</strong> {{ $data['subject'] }}</p>
        <p><strong>Message :</strong></p>
        <p>{{ $data['message'] }}</p>
        <div class="footer">
            <p>Ceci est un message automatique généré par votre site web.</p>
        </div>
    </div>
</body>
</html>






