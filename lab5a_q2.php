<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <style>
    table, th, td {
      border: 1px solid;
    }
    td{
        text-align: center;
        padding: 1vh;
        width: 6vw;
    }
</style>
  <body>
    <?php

      $students = [
        [
          'name' => 'Alice',
          'program' => 'BIP',
          'age' => 21
        ],
        [
          'name' => 'Bob',
          'program' => 'BIS',
          'age' => 20
        ],
        [
          'name' => 'Raju',
          'program' => 'BIT',
          'age' => 22
        ]
      ]
    ?>


     <table>
      <thead>
        <td>Name</td>
        <td>Program</td>
        <td>Age</td>
      </thead>
      <?php foreach($students as $student){ ?>
      <thead>
          <td><?php echo $student['name']?></td>
          <td><?php echo $student['program']?></td>
          <td><?php echo $student['age']?></td>
        <?php } ?>
      </thead>
     </table>     
  </body>
</html>
