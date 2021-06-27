@extends('layouts.main')

@section('title', 'Landing Page')

@section('content')

  <h3>Ok, você quer converter temperaturas, mas você as conhece?</h3>
  <h7 class="subtitle">A equipe cakesoft preparou um pequeno conteúdo sobre as medidas... e você pode até criar a sua!</h7>
  <br>
  <br>
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="tab" href="#home">As Temperaturas e onde são usadas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#profile">Faça a sua escala termométrica!</a>
    </li>
  </ul>

  <div id="myTabContent" class="tab-content">
    <div class="tab-pane fade show active" id="home">

      <h5>Grau Celsius °C</h5>
      <p>A escala Celsius (unidade °C), também conhecida como a escala centígrada, é uma escala termométrica do sistema métrico[1] usada na maioria dos países do mundo. Teve origem a partir do modelo proposto pelo astrônomo sueco Anders Celsius (1701-1744).

        Esta escala é baseada nos pontos de fusão e de ebulição da água, em condição atmosférica padrão, aos quais são atribuídos os valores de 0 °C e 100 °C, respectivamente.[2] Devido a esta divisão centesimal, se deu a antiga nomenclatura grau centígrado (cem partes/graus) que, em 1948, durante a 9.ª Conferência Geral de Pesos e Medidas (CR 64), teve seu nome oficialmente modificado para grau Celsius, em reconhecimento ao trabalho de Anders Celsius e para fim de desambiguação com o prefixo centi do Sistema Internacional de Unidades.

        Enquanto que os valores de congelamento e evaporação da água estão aproximadamente corretos, a definição original não é apropriada como um padrão formal pois ela depende da definição de pressão atmosférica padrão, que por sua vez depende da própria definição de temperatura. A definição oficial atual de grau Celsius define 0,01 °C como o ponto triplo da água, e 1 grau Celsius como sendo 1/273,16 da diferença de temperatura entre o ponto triplo da água e o zero absoluto. Esta definição garante que 1 grau Celsius apresente a mesma variação de temperatura que 1 kelvin.
        fonte: https://pt.wikipedia.org/wiki/Grau_Celsius</p>
      <br>

      <h5>Grau Farenheint °F</h5>
      <p>Fahrenheit é uma escala de temperatura proposta por Daniel Gabriel Fahrenheit em 1724. Sua unidade é o grau Fahrenheit (símbolo: °F). Nesta escala, o ponto de fusão da água é de 32 °F e o ponto de ebulição é de 212 °F. Uma diferença de 1,8 °F é igual a uma diferença de 1 °C.[1]

        Esta escala foi utilizada principalmente pelos países que foram colonizados pelos britânicos, mas seu uso atualmente se restringe a poucos países de língua inglesa, como os Estados Unidos e Belize. E também, muito utilizada com o povo grego, para medir a temperatura de um corpo.

        Para uso científico, há uma escala de temperatura, chamada de Rankine, que leva o marco zero de sua escala ao zero absoluto e possui a mesma variação da escala fahrenheit, existindo, portanto, correlação entre a escala de Rankine e grau fahrenheit do mesmo modo que existe correlação das escalas kelvin e grau Celsius.
        fonte: https://pt.wikipedia.org/wiki/Grau_Fahrenheit</p>
      <br>

      <h5>Grau Kelvin K</h5>
      <p>O kelvin (símbolo: K) é a unidade de base do Sistema Internacional de Unidades (SI) para a grandeza temperatura termodinâmica. O kelvin é a fração 1/273,16 da temperatura termodinâmica do ponto triplo da água, ou seja, é definido de tal modo que o ponto triplo da água é exatamente 273,16 K.[1] É uma das sete unidades de base do SI, muito utilizada na física e química. É utilizado para medir a temperatura absoluta de um objeto, com zero absoluto sendo 0 K.

        A escala kelvin recebeu este nome em homenagem ao físico e engenheiro irlandês William Thomson (1824–1907), 1º barão Kelvin, que escreveu sobre a necessidade de uma "escala termométrica absoluta".

        Diferentemente do grau Fahrenheit e do grau Celsius, o kelvin não é referido nem escrito como um grau. O kelvin é a unidade primária de medida de temperatura nas ciências físicas, mas é frequentemente usado em conjunção com o grau Celsius, que tem a mesma magnitude.
        fonte: https://pt.wikipedia.org/wiki/Kelvin</p>
      <br>

      <h5>Grau Reaumur °Re</h5>
      <p>A escala Réaumur (símbolo: °Ré, °Re, °R) é uma escala de temperatura proposta em 1730 pelo físico e inventor francês René-Antoine Ferchault de Réaumur, cujos pontos fixos são o ponto de congelamento da água (0°Ré) e seu ponto de ebulição (80°Ré).[2][3] Assim, a unidade desta escala, o grau Réaumur, vale 5/4 de 1 grau Celsius e a escala tem o mesmo zero que a escala Celsius.

        O termômetro contem álcool diluído e foi construído sob o princípio de tomar o ponto de congelamento da água como zero. A graduação do tubo foi feita em graus nos quais cada um deles era um milésimo do volume contido no bulbo. Réaumur escolheu o álcool em vez do mercúrio, alegando que esse se expandiu de forma mais visível, mas essa escolha provocou problemas, pois seus termômetros originais eram muito volumosos, e o baixo ponto de ebulição do álcool os fez impróprios para muitas aplicações.
        fonte: https://pt.wikipedia.org/wiki/R%C3%A9aumur</p>
      <br>

      <h5>Grau Rankine Ra</h5>
      <p>A escala Rankine (símbolo R, Ra) é uma escala de temperatura absoluta assim chamada em homenagem ao engenheiro e físico escocês William John Macquorn Rankine, que a propôs em 1859.

        Assim como a escala absoluta Kelvin, o 0 Ra é o zero absoluto, porém a variação do Rankine é definida como sendo igual a um grau Fahrenheit. Assim, a variação de um Ra equivale à variação de um °F. Então a temperatura de -459,67 °F é exatamente igual a 0 Ra.[2]

        Assim como a escala absoluta Kelvin,a escala absoluta Rankine também não é grafada com o termo "grau" desde decisão do CGPM em 1967.

        Apesar de não ser tão popular, a escala Rankine é usada em alguns campos da engenharia nos Estados Unidos,[3] entretanto o Instituto Nacional de Padrões e Tecnologia recomenda não usar essa escala em publicações NIST.[4]
        fonte: https://pt.wikipedia.org/wiki/Rankine</p>
      <br>

      <h5>Grau Luisius °L</h5>
      <p>O meu grau favorito: Uma escala arbitrária usando os números "meme" da internet. Fiz ele como prova de conceito que este sistema está pronto para receber qualquer escala termométrica. Na outra aba tem instruções de como fazer a sua!</p>
      <br>
    </div>

    <div class="tab-pane fade" id="profile">
      <p>
      Todas as escalas termométricas devem possuir 2 parâmetros: ponto de gelo (fusão) e o ponto de ebulição. Para converter 100 graus celsius em farenheint por exemplo, você deve fazer a comparação da seguinte maneira:
      <img src=''>
      
      </p>
      </div>
  </div>
</div>


@endsection