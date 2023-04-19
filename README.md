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

### • Equipes
Uma equipe é composta por 02 jogadores com habilidades destintas, conforme regras de habilidades disponíveis.

### • Jogadores
Um jogador é um participante de uma equipe, que possui uma característica única escolhida dentre as opções de classes.<br>
_Obs.: Cada membro da equipe deve possuir uma classe diferente da outra, não sendo admitido dois jogadores com mesma classe em uma mesma equipe._

### • Classes
Segue abaixo a tabela de classes e atributos de cada classe:

| PROFISSÃO | ATAQUE | DEFESA | HABILIDADE ESPECIAL |
| --------  | ------ | ------ | ---------  |
| ATACANTE  |  60    |   40   |  10     |
| SUPORTE |  40    | 60     |  10     |

### • Habilidade Especial
Uma habilidade especial é uma pontuação extra que pode adicionar, remover ou promover a outros usuários vantagens/desvantagens em uma jogada.
Essa é a lista com as habilidades especiais disponíveis, suas pontuações e suas atribuições:

| HABILIDADE ESPECIAL | ATRIBUTOS | DADO(FACES) |
| ----- | ------ | ------- |
| Artilharia | Habilidade que adiciona um valor extra de ataque que será multiplicado pelo número da face do dado correspondente. | 8 lados |
| Escudeiro | Habilidade que adiciona um valor extra de defesa que será multiplicado pelo número da face do dado correspondente. | 8 lados |
| Envenenamento | Habilidade que reduz imediatamente um valor de vitalidade(HP) ao jogador selecionado que será multiplicado pelo número da face do dado correspondente. | 4 lados |
| Curandeiro | Habilidade que adiciona imediatamente um valor extra de vitalidade(HP) ao jogador selecionado que será multiplicado pelo número da face do dado correspondente. | 4 lados |

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

**► Decisão de Passar sua vez:** O jogador desiste de movimentar e passa sua jogada para o próximo jogador conforme sequência das rodadas.

### • Tipos de dados:
Os dados lançados por cada jogador nas ocasiões oportunas, conforme referência abaixo, serão dos seguintes lados, sendo que os mesmos são digitais disponíveis na plataforma na ocasião de cada jogada:

| OCASIÕES | DADOS(FACES) | INFORMAÇÕES |
| -------- | ------------ | ----------- |
|  |  |  |
|  |  |  |
|  |  |  |
|  |  |  |

