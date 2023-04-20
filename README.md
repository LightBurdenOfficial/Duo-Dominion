# Duo Dominion
## _Jogo de tabuleiro misto com interface em display's e banco de dados_

## PROPOSTA
O **Duo Dominion** é um jogo de tabuleiros que consiste em uma batalha num mapa selecionado pela maioria da equipe. Neste mapa até 6 equipes lutam contra o desafio do mapa, além de poderem se enfrentarem em batalhas diretas quando a sua posição estiver dentro das condições estabelecidas nas regras do jogo.
Ganha a partida quem vencer o desafio do jogo, sendo que apenas uma equipe deve restar no fim do jogo.

## ELEMENTOS DO JOGO
### • Mapa
O mapa é um tabuleiro com 26 posições horizontais(A-Z) e 50 posições verticais(1-50), totalizando 1.300 _slots_.
_SLOT_: Um _slot_ é um espaço vazio determinado pela junção de uma posição da coluna x uma posição de linha.

| - | A | B | ... | Y | Z |
| - | - | - | - | - | - |
| 1 |  |  |  |  |  |  |
| 2 |  |  |  |  |  |  |
| ... |  |  |  |  |  |  |
| 49 |  |  |  |  |  |  |
| 50 |  |  |  |  |  |  |

### • Ficha do jogo
A ficha do jogo deve ser preenchida antes do início da partida, trazendo elementos básicos e cruciais para o funcionamento da jogabilidade e a distribuição segura, justa e equalitária entre todos os jogadores.<br>

IMAGEM DA FICHA DE JOGO

### • Objetos
Os objetos são itens inanimados, como árvores, no mapa e possuem como característica fixa:<br>
Ataque: 0 pts<br>
Defesa: 0 pts<br>

_Obs.: Alguns objetos poderão receber valores de defesa, como portas, paredes e outros objetos que possam ter interação direta com os jogadores ou que são necessários para a continuação e/ou conclusão do objetivo do mapa. Estes objetos e seus respectivos valores deverão estar explícitos na ficha do jogo que será preenchida antes do início da partida._

### • NPC's
NPC's são personagens não-jogáveis, ou seja, personagens criados apenas como funções de suporte, informação, oponentes de áreas específicas ou oponentes líderes.

### • Equipes
Uma equipe é composta por 02 jogadores com habilidades destintas, conforme regras de habilidades disponíveis.

### • Jogadores
Um jogador é um participante de uma equipe, que possui uma característica única escolhida dentre as opções de classes.<br>
_Obs.: Cada membro da equipe deve possuir uma classe diferente da outra, não sendo admitido dois jogadores com mesma classe em uma mesma equipe._

### • Classes
Segue abaixo a tabela de classes e atributos(pts) de cada classe:

| PROFISSÃO | ATAQUE | DEFESA | SORTE | HABILIDADE ESPECIAL |
| --------  | ------ | ------ |  ---- | ------------------  |
| ATACANTE  |  60    |   40   |  80   |        10           |
| SUPORTE   |  40    |   60   |  80   |        10           |

### • Sorte
A sorte dos jogadores sempre iniciam com o mesmo valor, 80 pts, sendo que ela pode ser utilizada após um golpe fatal em um NPC dentro do mapa. Ao solicitar a rolagem do dado, o usuário reduz -5 pts de sua sorte, com isso o mesmo pode zerar sua sorte no jogo trazendo prejuízos a ele e ao seu parceiro.<br>
O dado de sorte é o de 10 faces, sendo que são exibidas as palavras "SORTE" e "AZAR" levando em consideração que ao aparecer a palavra "SORTE" o item será sorteado.<br>
A quantidade de palavras "SORTE" e "AZAR" varia ded acordo com o número de pts de sorte que o jogador possui, entendendo:<br>

| PTS DE SORTE DO JOGADOR |      % DE ENCONTRAR UM OBJETO DE SUPORTE |
| ----------------------- | ---------------------------------------- |
|           91-100        |                  100%                    |
|           81-90         |                  90%                     |
|           71-80         |                  80%                     |
|           61-70         |                  70%                     |
|           51-60         |                  60%                     |
|           41-50         |                  50%                     |
|           31-40         |                  40%                     |
|           21-30         |                  30%                     |
|           11-20         |                  20%                     |
|           01-10         |                  10%                     |
|           00            |                  0%                      |

### • Objetos de suporte
No decorrer do mapa poderão ser encontrados objetos de suporte para os jogadores, cada objeto traz uma descrição do que se trata e o valor de atributo que ele pode oferecer ou remover do jogador.<br>
Lista de objetos de suporte:<br>

| OBJETO     | VALOR | VALIDADE  | INFORMAÇÃO |
| ---------- | ----- | --------- | ---------- |
| Remédio    | +5    | 2 rodadas | Esse objeto regenera a vitalidade em +5 pts de seu possuidor a cada jogada, com prazo máximo de 2 rodadas, contadas à partir da primeira utilização. |
| Esteróide  | +5/-5 | 2 rodadas | Esse objeto gera +5 pts de ataque de seu possuidor a cada jogada, mas remove -5 pts de vitalidade de seu possuidor, com prazo máximo de 2 rodadas, contadas à partir da primeira utilização. |
| Manuscrito | +10   | 1 rodada  | Esse objeto gera +10 pts de habilidade especial de seu possuidor a cada jogada, com prazo máximo de 1 rodada, contadas à partir da primeira utilização. |
| Trevo      | +40   | 1 rodada  | Esse objeto gera +40 pts de sorte, com prazo máximo de 1 rodada. |

<br>
_Obs.: Poderão ser gerados um número máximo de itens totais definidos pelos jogadores antes do início da partida, sendo que os mesmos deverão constar na ficha do jogo.

### • Habilidade Especial
Uma habilidade especial é uma pontuação extra que pode adicionar, remover ou promover a outros usuários vantagens/desvantagens em uma jogada.
Essa é a lista com as habilidades especiais disponíveis, suas pontuações e suas atribuições:

| HABILIDADE ESPECIAL | ATRIBUTOS | DADO(FACES) |
| ------------------- | --------- | ----------- |
| Artilharia          | Habilidade que adiciona um valor extra de ataque que será multiplicado pelo número da face do dado correspondente. | 8 faces |
| Escudeiro           | Habilidade que adiciona um valor extra de defesa que será multiplicado pelo número da face do dado correspondente. | 8 faces |
| Envenenamento       | Habilidade que reduz imediatamente um valor de vitalidade(HP) ao jogador selecionado que será multiplicado pelo número da face do dado correspondente. | 4 faces |
| Curandeiro          | Habilidade que adiciona imediatamente um valor extra de vitalidade(HP) ao jogador selecionado que será multiplicado pelo número da face do dado correspondente. | 4 faces |

As habilidadeds podem ser usadas 03(três) vezes em toda a partida, sendo solicitadas após o movimento do jogador.

### • Posições e movimentos
Cada elemento ocupa um número de posições dentro deste mapa, sendo que o seu deslocamento, quando possível, será de valor igual a sua posição.<br>
**Exemplo:**
_Um objeto ocupa 2 posições dentro do mapa, então ele poderá se mover 2 posições para qualquer posição livre ao seu redor, obedecendo os limites do mapa._<br>
_Se ele estiver, por exemplo, na posição A1/A2 ele poderá ir para B1/B2(01A) ou A3/A4(01B) , agora, se ele estiver na posição G18/G19, poderá ir para, por exemplo, G16/G17(02A), H18/H19(02B), G20/G21(02C) ou F18/F19(02C)._

MOVIMENTO 01A:
| - | A | B | C | D |
| - | - | - | - | - |
| 1 | █ | × |  |  |
| 2 | █ | × |  |  |
| 3 |  |  |  |  |
| 4 |  |  |  |  |


MOVIMENTO 01B:
| - | A | B | C | D |
| - | - | - | - | - |
| 1 | █ |  |  |  |
| 2 | █ |  |  |  |
| 3 | × |  |  |  |
| 4 | × |  |  |  |


MOVIMENTO 02A:
| - | E | F | G | H | I |
| - | - | - | - | - | -|
| 16 |  |  | × |  |  |
| 17 |  |  | × |  |  |
| 18 |  |  | █ |  |  |
| 19 |  |  | █ |  |  |
| 20 |  |  |  |  |  |
| 21 |  |  |  |  |  |


MOVIMENTO 02B:
| - | E | F | G | H | I |
| - | - | - | - | - | -|
| 16 |  |  |  |  |  |
| 17 |  |  |  |  |  |
| 18 |  |  | █ | × |  |
| 19 |  |  | █ | × |  |
| 20 |  |  |  |  |  |
| 21 |  |  |  |  |  |


MOVIMENTO 02C:
| - | E | F | G | H | I |
| - | - | - | - | - | -|
| 16 |  |  |  |  |  |
| 17 |  |  |  |  |  |
| 18 |  |  | █ |  |  |
| 19 |  |  | █ |  |  |
| 20 |  |  | × |  |  |
| 21 |  |  | × |  |  |


MOVIMENTO 02D:
| - | E | F | G | H | I |
| - | - | - | - | - | -|
| 16 |  |  |  |  |  |
| 17 |  |  |  |  |  |
| 18 |  | × | █ |  |  |
| 19 |  | × | █ |  |  |
| 20 |  |  |  |  |  |
| 21 |  |  |  |  |  |


As posições iniciais são definidas pela equipe antes do início da partida, sendo que o objetivo final também será determinado em votação pelas equipes, sendo que a escolha deste objetivo deve obedecer o distanciamento mínimo e máximo determinado nas regras do objetivo do jogo.
Os movimentos são realizados em cada rodada, podendo ser determinado pelo jogador da vez, movimentar ou passar sua vez de jogar, sendo que em cada uma das situações ocorrerá o que se segue:

**► Decisão de Movimentar:** O jogador irá movimentar uma posição para uma direção a sua escolha, obedecendo os limites do mapa, não sendo possível movimentar mais de uma posição em nenhuma hipótese. Após o movimento o jogador poderá escolher atacar, desviar ou manter posição, observando:<br>
| Decisão | Ação |
| ------ | ------ |
| Atacar | O jogador seleciona o alvo de acordo com a distância mínima e máxima definida nas regras de ataque e efetua um único ataque direto. O resultado do ataque será conforme referência das regras de ataque. |
| Defender | O jogador fica em posição de defesa, recebendo os atributos e obedeceendo as regras de defesa. |
| Manter posição | O jogador não efetua nenhuma ação após o movimento realizando a sequência das rodadas. |

**► Decisão de Passar sua vez:** O jogador desiste de movimentar e passa sua jogada para o próximo jogador conforme sequência das rodadas.<br>

**► Ações:**<br>
**Ataque**<br>
Ação: Ataque direto a objeto selecionado pelo usuário atacante.<br>
Distância mínima: 1 slot.<br>
Distância máxima: 1 slot.<br>
Frequência de uso: 1 vez após a mudança de posição.<br>
Limite de uso: SEM LIMITES.<br>
Tipo de dado: NENHUM.<br>
Fórmula: ATAQUE - DEFESA DO OBJETO/NPC/JOGADOR<br>
Informações: Um ataque é direcinado a qualquer objeto, NPC ou jogador dentro do mapa, desde que obedeça os requisitos informados acima.<br>

**Defesa**<br>
Ação: Defesa de um ataque direto deferido por um objeto, NPC ou jogador.<br>
Distância mínima: 1 slot.<br>
Distância máxima: 1 slot.<br>
Frequência de uso: 1 vez após a mudança de posição.<br>
Limite de uso: SEM LIMITES.<br>
Tipo de dado: NENHUM.<br>
Fórmula: ATAQUE DO OBJETO/NPC/JOGADOR - DEFESA<br>
Informações: Uma defesa é o ato de receber diretamente o ataque originado de um objeto, NPC ou jogador no mapa estando em uma posição de defesa escolhida na jogada anterior, obedecendo os requisitos informados acima.<br>

**Habilidade Especial**<br>
Ação: Uso de uma habilidade especial escolhida pelo jogador antes do início da partida.<br>
Distância mínima: 1 slot.<br>
Distância máxima: 1 slot.<br>
Frequência de uso: 1 vez após a mudança de posição a cada 2 rodadas.<br>
Limite de uso: 3 usos em toda a partida.<br>
Tipo de dado: 4 ou 8 faces dependendo da habilidade do personagem.<br>
Fórmula: ATAQUE/DEFESA + VALOR DA FACE<br>
Informações: Uma habilidade especial pode ser utilizada antes do término da jogada do jogador, obedecendo os requisitos informados acima.<br>

**Objetos de suporte**<br>
Ação: Podem ser solicitados o lançamento de um dado especial para verificar se algum objeto de suporte foi localizado após a derrota de um NPC.<br>
Distância mínima: 1 slot.<br>
Distância máxima: 1 slot.<br>
Frequência de uso: 1 vez após a morte de um NPC que estava sendo ataque pelo jogador solicitante.<br>
Limite de uso: SEM LIMITES.<br>
Tipo de dado: 10 faces<br>
Fórmula: NÃO POSSUI<br>
Informações: Após a morte de um NPC, o jogador que realizou o ataque fatal poderá solicitar o lançamento do dado de sorte para verificar se aquele NPC gerou algum objeto de suporte.<br>
