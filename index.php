<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Comment inserer date dans Mysql</title>
</head>
<body>
    
    <div class="container">
    <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <form action="simple.php" method="POST">
                <label for=""  class="form-label">Le Cours</label>
                <input type="text" name="cours" class="form-control">
                <label for=""  class="form-label">La date</label>
                <input type="date" name="date_cours" class="form-control">
                
                <input type="submit" name="ajouter" class="btn btn-primary mt-4" value="Ajouter">
        
        </form>
    
    </div>
    <div class="col-2"></div>
    </div>
    </div>
</body>
</html>