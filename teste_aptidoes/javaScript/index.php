<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionário</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Questionário</h1>
        <form action="#" method="post" id="questionario-form">
            <div class="form-group">
                <label for="medo-altura">Você tem medo de altura?</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input medoAltura" type="radio" id="medo-altura-sim" name="medo-altura" value="sim">
                    <label class="form-check-label" for="medo-altura-sim">Sim</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input medoAltura" type="radio" id="medo-altura-nao" name="medo-altura" value="não">
                    <label class="form-check-label" for="medo-altura-nao">Não</label>
                </div>
            </div>

            <div class="form-group">
                <label for="sabe-nadar">Sabe nadar?</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="sabe-nadar-sim" name="sabe-nadar" value="sim">
                    <label class="form-check-label" for="sabe-nadar-sim">Sim</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="sabe-nadar-nao" name="sabe-nadar" value="não">
                    <label class="form-check-label" for="sabe-nadar-nao">Não</label>
                </div>
            </div>

            <div class="form-group">
                <label for="correr-10km">Consegue correr 10 km?</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="correr-10km-sim" name="correr-10km" value="sim">
                    <label class="form-check-label" for="correr-10km-sim">Sim</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="correr-10km-nao" name="correr-10km" value="não">
                    <label class="form-check-label" for="correr-10km-nao">Não</label>
                </div>
            </div>

            <div class="form-group">
                <label for="sabe-dirigir">Sabe dirigir?</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="sabe-dirigir-sim" name="sabe-dirigir" value="sim">
                    <label class="form-check-label" for="sabe-dirigir-sim">Sim</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="sabe-dirigir-nao" name="sabe-dirigir" value="não">
                    <label class="form-check-label" for="sabe-dirigir-nao">Não</label>
                </div>
            </div>

            <div class="form-group">
                <label for="comandar-pelotao">Consegue comandar um pelotão?</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="comandar-pelotao-sim" name="comandar-pelotao" value="sim">
                    <label class="form-check-label" for="comandar-pelotao-sim">Sim</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="comandar-pelotao-nao" name="comandar-pelotao" value="não">
                    <label class="form-check-label" for="comandar-pelotao-nao">Não</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function obterValores() {
            const form = document.getElementById('questionario-form');
            
            const medoAltura = form.elements['medo-altura'].value;
            const sabeNadar = form.elements['sabe-nadar'].value;
            const correr10km = form.elements['correr-10km'].value;
            const sabeDirigir = form.elements['sabe-dirigir'].value;
            const comandarPelotao = form.elements['comandar-pelotao'].value;

            const respostas = {
                medoAltura: medoAltura,
                sabeNadar: sabeNadar,
                correr10km: correr10km,
                sabeDirigir: sabeDirigir,
                comandarPelotao: comandarPelotao
            };

            console.log(respostas);

            return respostas;
        }

        
    </script>
</body>
</html>