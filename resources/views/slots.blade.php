<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Criar Conselhos</title>
  </head>
  <body class="d-flex justify-content-center align-items-center" style="height: 100vh">
    <div class="container">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>  
        @endif

        <form action="{{ route('slip.save') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Digite o seu conselho</label>
              <textarea name="content" class="form-control" id="conselho" aria-describedby="conselhohelp"></textarea>
              <div id="conselhohelp" class="form-text">Os conselhos são avisos, incentivos, ideias que caem muito bem quando estamos precisando.</div>
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
  </body>
</html>