document.getElementById('form-inicial').addEventListener('submit', function(event) {
    event.preventDefault(); // Impede o envio do formulário padrão

    // Fecha o modal
    var modal = bootstrap.Modal.getInstance(document.getElementById('formModal'));
    modal.hide();

    // Oculta o botão "Preencher Formulário"
    document.querySelector('.btn-primary').style.display = 'none';

    // Exibe o questionário
    document.getElementById('questionario').style.display = 'block';
    document.getElementById('botao').style.display = 'block';
    
    
});


function calcularPontuacao() {
    let marinha = 0;
    let aeronautica = 0;
    let exercito = 0;
    let vestibular = 0;

    for (let i = 1; i <= 10; i++) {
      const resposta = document.querySelector(`input[name="pergunta${i}"]:checked`);
      if (!resposta) {
        alert(`Por favor, responda todas as perguntas`);
        return;
    }
        const valor = resposta.value;
        if (valor.includes('1_1')) {
          marinha += 10;
        } else if (valor.includes('1_2')) {
          aeronautica += 10;
        } else if (valor.includes('1_3')) {
          exercito += 10;
        } else if (valor.includes('1_4')) {
          vestibular += 10;
        }
      }
    

    let aptidao;
    if (marinha >= aeronautica && marinha >= exercito && marinha >= vestibular) {
      aptidao = 'Marinha';
    } else if (aeronautica >= marinha && aeronautica >= exercito && aeronautica >= vestibular) {
      aptidao = 'Aeronáutica';
    } else if (exercito >= marinha && exercito >= aeronautica && exercito >= vestibular) {
      aptidao = 'Exército';
    } else {
      aptidao = 'Vestibular';
    }

    alert(`Parabéns, você tem grande aptidão para ${aptidao}`);
  }
  document.getElementById('enviar-btn').onclick = calcularPontuacao;