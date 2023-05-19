<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
        <!-- data table -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Tambah Data</title>
</head>
<body>
        <div class="container mt-3">
        <form action="proses.php" method="post" id="form_id">
          <div class="mb-3">
            <label for="TextInput" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp">
            <p id="name_error"></p>
          </div>
          <div class="mb-3">
            <label for="disabledSelect" class="form-label">Jenis</label>
            <select name="jenis" id="jenis" class="form-select">
                <option value=""></option>
                <option value="padat">Padat</option>
                <option value="cair">Cair</option>
                <option value="gas">Gas</option>
            </select>
            <p id="jenis_error"></p>
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Harga</label>
            <input type="text" name="harga" class="form-control" id="harga">
            <p id="harga_error"></p>
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Stok</label>
            <input type="text" name="stok" class="form-control" id="stok">
            <p id="stok_error"></p>
          </div>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Distributor Id</label>
            <input type="text" name="distributor_id" class="form-control" id="distributor_id">
            <p id="distributorid_error"></p>
          </div>
          <button type="submit" class="btn btn-primary" id="button_id">Simpan</button>
        </form>
        </div>

        <script type="text/javascript">
	$('#button_id').click(function() {
		if ($('#nama').val().length == 0 || $('#jenis').val().length == 0 || $('#harga').val().length == 0 || $('#stok').val().length == 0 || $('#distributor_id').val().length == 0) {
			$('#nama, #jenis, #harga, #stok, #distributor_id').css({"border-color" : "red"});
			$('#name_error').text('Silahkan isi nama terlebih dahulu').css({"color" : "red", "font-size" : "10pt"});
                        $('#jenis_error').text('Silahkan isi jenis terlebih dahulu').css({"color" : "red", "font-size" : "10pt"});
                        $('#harga_error').text('Silahkan isi harga terlebih dahulu').css({"color" : "red", "font-size" : "10pt"});
                        $('#stok_error').text('Silahkan isi stok terlebih dahulu').css({"color" : "red", "font-size" : "10pt"});
                        $('#distributorid_error').text('Silahkan isi id distributor terlebih dahulu').css({"color" : "red", "font-size" : "10pt"});
		} else {
			$('#form_id').submit();
		}
	});
        </script>
</body>
</html>