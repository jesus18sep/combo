<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/style.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Estado <span style="color: #F31919">*</span></label>
                    <select class="form-control text ui-widget-content ui-corner-all" name="estados" id="estados" required="">
                        <option value="0">Seleccione</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Municipio <span style="color: #F31919">*</span></label>
                    <select class="form-control text ui-widget-content ui-corner-all" name="municipios" id="municipios" required="">
                        <option value="0">Seleccione</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Parroquia <span style="color: #F31919">*</span></label>
                    <select class="form-control text ui-widget-content ui-corner-all" name="parroquias" id="parroquias" required="">
                        <option value="0">Seleccione</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

</body>

</html>