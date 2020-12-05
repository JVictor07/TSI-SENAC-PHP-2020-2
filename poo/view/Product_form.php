<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <center>
    <form method="post">

      <?php
        if( !empty($msg) ) {
          echo "<strong>$msg</strong>";
        }
      ?>

      <table>

        <tr>
          <td>
            Name: 
          </td>
          <td>
            <input type="text" name="name">
          </td>
        </tr>
        <tr>
          <td>
            Description: 
          </td>
          <td>
            <input type="text" name="description">
          </td>
        </tr>
        <tr>
          <td>
            Price: 
          </td>
          <td>
            <input type="text" name="price">
          </td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input type="submit" name="register" value="Register">
          </td>
        </tr>

      </table>
    </form>
  </center>
</body>
</html>