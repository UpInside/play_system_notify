<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <title>UpInside Play - Trigger Notify</title>

    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" href="_cdn/style.css">
    <link rel="stylesheet" href="_cdn/fonticon.css">
</head>
<body>

    <h1>Aplicação de Trigger Notify</h1>

    <button class="call_trigger_blue">Me clica!</button>

    <form method="post">
        <select name="status">
            <option value="true">Sucesso!</option>
            <option value="false">Info!</option>
        </select>

        <input type="submit">
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>
    <script src="_cdn/script.js"></script>
</body>
</html>