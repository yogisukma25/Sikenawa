<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
.background-image{
    background-image: url('https://cdn.pixabay.com/photo/2022/02/17/17/21/cows-7019167_1280.jpg');
    background-size: contain;
    background-repeat: no-repeat;
    height: 140vh;
    opacity: 90%;
}    
</style>  
</head>
  @include('partial.navbar')
  <body>
    <div class="background-image">
        <br><br>
        <div class="card mx-auto bg-secondary" style="opacity:70%; width: 30rem;">
            <div class="mb-3 mx-auto" style="width: 80%">
                <label for="formGroupExampleInput" class="form-label">Nama</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
            </div>
            <div class="mb-3 mx-auto" style="width: 80%">
                <label for="formGroupExampleInput" class="form-label">Nomor HP</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
            </div>
            <div class="mb-3 mx-auto" style="width: 80%">
                <label for="formGroupExampleInput" class="form-label">Email</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
            </div>
            <div class="mb-3 mx-auto" style="width: 80%">
                <label for="formGroupExampleInput" class="form-label">Lokasi</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
            </div>
            <div class="mb-3 mx-auto" style="width: 80%">
                <label for="formGroupExampleInput" class="form-label">Isi Aduan</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
  @include('partial.footer')
</html>

