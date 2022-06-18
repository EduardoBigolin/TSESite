"use strict";
const candidatos = [
  {
    id: 0,
    nome: "Jair Bolsonaro",
    partido: "PL",
    numero: 17,
    descricao:
      "O presidente Jair Bolsonaro, 67 anos, se filiou ao PL em novembro para disputar a reeleição. Ele é natural de Glicério (SP), seguiu carreira militar e chegou a capitão. Deu início à carreira política em 1988, quando se elegeu vereador. Depois, entre 1990 e 2018, ocupou a cadeira de deputado federal. Por último, se elegeu presidente como o 1º militar que chegou ao posto pelo voto desde 1945.",
    img: "./assets/img/bolsonaro.jpg",
  },
  {
    id: 1,
    nome: "Ciro Gomes",
    partido: "PDT",
    numero: 12,
    descricao:
      "Pré-candidato à Presidência da República pelo PDT, Ciro Gomes é de Pindamonhangaba, interior de São Paulo. Foi governador do Ceará, ministro da Fazenda no governo Itamar Franco e ministro da Integração Nacional no governo Lula. Disputou as eleições presidenciais de 1998 e 2002 pelo PPS e de 2018 pelo PDT, quando ficou em terceiro lugar. Em 2018, o JOTA mostrou que na ocasião Gomes respondia a 77 processos que requeriam danos morais ou que imputavam a ele o cometimento de crimes contra a honra. Esta é a quarta vez que Ciro Gomes será candidato à Presidência da República.",
    img: "./assets/img/CiroGomes.jpg",
  },
  {
    id: 2,
    nome: "Luiz Inácio Lula da Silva",
    partido: "PT",
    numero: 13,
    descricao:
      "O ex-presidente Luiz Inácio Lula da Silva é o pré-candidato à Presidência da República pelo PT e o principal adversário de Bolsonaro, segundo as pesquisas de intenção de voto. Lula nasceu em Caetés, na época um distrito Garanhuns (PE), é ex-metalúrgico e governou o país entre 2003 e 2010. Em 2018, foi preso para fins de execução provisória da pena no processo do tríplex do Guarujá e foi impedido de disputar as eleições daquele ano com base na Lei da Ficha Limpa. Em 2021, o Supremo Tribunal Federal (STF) anulou as condenações de Lula. Posteriormente, os processos da Lava Jato contra ele prescreveram ou foram arquivados.",
    img: "./assets/img/lula.jpg",
  },
  {
    id: 3,
    nome: "Simone Tebet",
    partido: "MDB",
    numero: 14,
    descricao:
      "Simone Tebet, 52 anos, é natural de Três Lagoas (MS) e formou-se em Direito pela Universidade Federal do Rio de Janeiro (UFRJ). Fez carreira como advogada e professora. Em 2002, foi eleita deputada estadual. Depois se elegeu prefeita de Três Lagoas (MS) por 2 mandatos e foi vice-governadora, em 2010. Ao chegar ao Senado, em 2014, liderou a primeira bancada feminina, foi a primeira mulher a presidir a Comissão de Constituição e Justiça (CCJ), e participou da CPI da Pandemia. Agora tenta se consolidar como a candidata da ‘terceira via’ à Presidência da República nas eleições 2022.",
    img: "./assets/img/simone.jpg",
  },
  {
    id: 4,
    nome: "Pablo Marçal",
    partido: "PROS",
    numero: 33,
    descricao:
      "Pablo Marçal é o responsável por criar o Método IP, um treinamento imersivo que busca aprimorar a inteligência emocional de quem o utiliza, causando também desbloqueios cerebrais. Além disso, é um dos maiores nomes brasileiros quando se trata de marketing digital e branding digital.",
    img: "./assets/img/pauloMarçal.jpg",
  },

  {
    id: 5,
    nome: "Luciano Bivar",
    partido: "UNIÃO",
    numero: 15,
    descricao: "",
    img: "./assets/img/Luciano.jpg",
  },
];
function projeto() {
  candidatos.map((e) => {
    const card = `<div  class="card m-auto " style="width: 18rem;">
    <img src="${e.img}" class="card-img-top" style="height:360px" alt="...">
    <div class="card-body">
      <h5 class="card-title">${e.nome}</h5>
      <p class="card-text">Partido: ${e.partido}</p>
      <form action="./ArmazenaDados.php" method='post'>
      <input type="hidden" name="id" value="${e.nome}"/>
      <button  class="btn btn-primary my-3">Votar</button>
      </form>
      <form action="./detalhes.php" method='POST'>
      <input type="hidden" name="id" value="${e.id}"/>
      <input type="hidden" name="nome" value="${e.nome}"/>
      <input type="hidden" name="partido" value="${e.partido}"/>
      <input type="hidden" name="descricao" value="${e.descricao}"/>
      <input type="hidden" name="img" value="${e.img}"/>
      <input type="hidden" name="numero" value="${e.numero}"/>
      <button type="submit " class="btn">Detalhes</button>
      </form>
    </div>
  </div>`;
    const candidato = $(".candidato");
    candidato.append(card);
  });
}
projeto();
