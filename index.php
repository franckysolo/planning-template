<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template agenda mini</title>
    <style media="all" type="text/css">
      .container {
        background: #eee;
        height: 98vh;
        width: 98vw;
        display: flex;
        justify-content: center;
        align-items: center;
        align-self: center;
        align-content: center;
      }
      #agenda {
        background: #fff;
        height: 312px;
        overflow-y: hidden;
        overflow-x: scroll;
        display:grid;
        box-sizing: border-box;
      }
      #agenda table {
        border-collapse: collapse;
        border: none;
        table-layout: fixed;
        overflow-y: scroll;
        overflow-x: none;
        max-height: 312px;
        display: flex;
      }
      #agenda thead {
        width: auto;
        background: rgba(222,222,222, 1);
        position: fixed;
        z-index: 5;
      }
      #agenda tbody {
        width: auto;
        position: relative;
        top: 96px;
        table-layout: fixed;
      }
      #agenda tr {
        width: 100%;
      }
      #agenda th,
      #agenda td {
        width: 44px;
        height: 44px;
        border: 1px solid #ccc;
        text-align: center;
        table-layout: fixed;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div id="agenda">
        <table>
          <thead>
            <tr>
              <th scope="col" class="empty-cell"></th>
              <th scope="col" colspan="6">Mardi 14 Février 2018</th>
              <th scope="col" colspan="6">Mercredi 15 Février 2018</th>
              <th scope="col" colspan="6">Jeudi 16 Février 2018</th>
            </tr>
            <tr>
              <th scope="row">Hor</th>
              <?php for ($j = 0; $j < 3; $j++):?>
                <?php for ($k = 0; $k < 6; $k++):?>
                <th>C<?php echo $k + 1; ?></th>
                <?php endfor;?>
              <?php endfor;?>
            </tr>
          </thead>
          <tbody>
            <?php for ($i = 0; $i < 10; $i++):?>
              <tr>
                <th scope="row"><?php echo $i; ?></th>
                <?php for ($j = 0; $j < 3; $j++):?>
                  <?php for ($k = 0; $k < 6; $k++):?>
                    <td><?php echo $k;?></td>
                  <?php endfor;?>
                <?php endfor;?>
              </tr>
            <?php endfor; ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
