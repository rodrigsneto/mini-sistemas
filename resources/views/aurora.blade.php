<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora</title>
</head>
<body>
    <header>
        <h1>Aurora</h1>
    </header>

    <div>
        <h4>Digite agora um texto em portugues-brasil:</h4>
        <textarea style="resize: none" rows="10" cols="50" id="TextoOriginal" placeholder="Coloque o texto sem graça"></textarea><br/>
        <button onclick="converte()">Converter</button>
    </div>
        <h4>Veja como fica em aurorês:</h4>
        <textarea style="resize: none" rows="10" cols="50" id="TextoConvertido" wrap disabled>Aqui é onde fica a mágica</textarea>

<script>
    function ehVogal(letra) {
            return ['a', 'e', 'i', 'o', 'u'].includes(letra.toLowerCase());
        }

        function ehConsoante(letra) {
            return /^[a-zA-Z]$/.test(letra) && !ehVogal(letra);
        }

        function erre(texto) {
        let textoNovo = "";
        
        for (let i = 0; i < texto.length; i++) {
            let charAtual = texto[i];
            let novoChar = texto[i];

            
            if (charAtual === "c") {
                let charAnterior = texto[i - 1];
                let charPosterior = texto[i + 1];

                if (charAnterior == " " || charAnterior == "" ) {
                    charAtual = "t";
                }
            }

            if (charAtual === "g") {
                charAtual = "d";
            }

            if (charAtual === "r") {
                let charAnterior = texto[i - 1];
                let charPosterior = texto[i + 1];

                if(charAnterior && charPosterior) {
                    if(ehVogal(charAnterior) && ehVogal(charPosterior)) {
                        charAtual = "i";
                    }
                }

                
                if(ehConsoante(charAnterior) || ehConsoante(charPosterior)) {
                    if (charAnterior == "r" || charPosterior == "r" ) {        } else {
                    charAtual = "";
                    }
                }


                if(charPosterior == false) {
                    charAtual = "";
                }
            }

            textoNovo += charAtual;      
        }
        
        return textoNovo;
    }

    function converte() {
        let textoOriginal = document.getElementById("TextoOriginal").value;
        document.getElementById("TextoConvertido").value = erre(textoOriginal);

        console.log(erre(textoOriginal));
    }

</script>
</body>
</html>