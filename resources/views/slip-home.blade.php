<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styleSlipHome.css">
    <title>Gerador de Conselho</title>
</head>
<body>
    <div class="container main">
        
        <h1 class="text-center pt-5">Gerador de Conselhos</h1>

        <p class="text-center fw-lighter mt-3 fs-5">Os conselhos são avisos, incentivos, ideias que caem muito bem quando estamos precisando. Você pode ou não segui-los, vai de você ver como eles se aplicam à sua realidade. E, algumas vezes, somos nós que precisaremos aconselhar alguém.</p>

        <div class="d-flex justify-content-center p-3">
            <button type="button" class="btn btn-outline-success" id="btnGenerationSlip">Pedir Conselho</button>
        </div>


        <div class="card">
            <div class="card-body d-flex justify-content-center">
                <p class="content-slip fs-2 text-center" style="font-weight: 200;"></p>
            </div>
        </div>
    </div>

    <div class="description container">
        <h1 class="text-center"> <span id='number'></span> Frases de conselhos que vão te ajudar a escolher um caminho</h1>

        <div class="text-center mt-5 p-3 fs-5">
            <p>
                Estar sozinho e sem alguém para nos ajudar é muito difícil. Por isso, precisamos de pessoas que nos deem uma mão para encontrar a direção certa. Essa forma de amparo pode ser feita por meio de palavras que se transformam em conselhos.
            </p> 
            <p>
                Os conselhos são avisos, incentivos, ideias que caem muito bem quando estamos precisando. Você pode ou não segui-los, vai de você ver como eles se aplicam à sua realidade. E, algumas vezes, somos nós que precisaremos aconselhar alguém.
            </p>   
            <p>
                Pensando nisso, selecionamos as melhores frases de conselho para você sempre ter a coisa certa para falar quando chegar a hora.
            </p>
        </div>
    </div>

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{ asset('js/advice.js') }}"></script>
</body>
</html>