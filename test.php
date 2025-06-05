<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Hover no avô</title>
  <style>
    .avo {
      padding: 20px;
      background-color: #e3f2fd;
      border: 2px solid #42a5f5;
      border-radius: 10px;
      font-family: sans-serif;
      width: fit-content;
    }

    .pai {
      padding: 10px;
      background-color: #bbdefb;
      border-radius: 8px;
    }

    .trigger {
      background-color: #1e88e5;
      color: white;
      padding: 10px;
      border-radius: 5px;
      cursor: pointer;
      margin-bottom: 10px;
    }

    .target {
      display: none;
      margin-top: 10px;
      padding: 10px;
      background-color: #c8e6c9;
      border-radius: 5px;
    }

    /* Hover no avô faz o target aparecer */
    .avo:hover .target {
      display: block;
    }
  </style>
</head>
<body>

  <div class="avo">
    <div class="pai">
      <div class="trigger">Passe o mouse aqui (no avô)</div>
      <div class="target">👴 Eu apareci porque o avô foi hoverado!</div>
    </div>
  </div>

</body>
</html>
