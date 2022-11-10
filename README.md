# teste_ABL
![Home-page](https://user-images.githubusercontent.com/109229894/201083204-e93b1ab7-ce2a-4f4f-821f-304040a360ea.png)

> Situação: finalizado!

## Sistema para gerenciamento de moradores de um condomínio

![Cadastro-Apartamento](https://user-images.githubusercontent.com/109229894/201083623-ce6fbfe9-df63-4f99-aad3-57e3c89866c3.png)

![Visualizar-Apartamento](https://user-images.githubusercontent.com/109229894/201084311-b71ed25c-79ff-4093-a7a0-5dd5b1dccb5c.png)

![Cadastro-Morador](https://user-images.githubusercontent.com/109229894/201084411-791c57dd-c95a-44dc-a4ba-5edcf66d7e7f.png)

![Visualizar-Morador](https://user-images.githubusercontent.com/109229894/201084495-181e6571-17af-416e-97d5-102daa97e1ff.png)

## Para o desenvolvimento do CRUD do sistema foram utilizadas duas tabelas:

Moradors        |
-------------   |
id              |
fk_id_apto      | 
nome            |
cpf             |
telefone        | 
email           |

Apartamentos    | 
-------------   |
id              |
nome_edificio   |
numero_apto     |

-----------------------------------

><strong>Relacionamento entre as tabelas</strong>

![Relacionamento](https://user-images.githubusercontent.com/109229894/201085044-cb83867e-c343-4fd3-8e65-0451f20d2b22.png)

><strong>Tecnologias usadas</strong>
<table>
   <tr>
     <td><strong>Tecnologia</strong></td>
     <td>PHP</td>
     <td>MySQL</td>
     <td>Laravel</td>
     <td>Composer</td>
     <td>HTML</td>
     <td>Bootstrap</td>
   </tr>
   <tr>
     <td><strong>Versão</strong></td>
     <td>8.0.24</td>
     <td>8.0</td>
     <td>9.38.0</td>
     <td>2.4.4</td>
     <td>5</td>
     <td>4.1.3</td>
   </tr>
</table>

## Como executar o código:
1. Certifique-se de ter o PHP, MySQL, Laravel e o Composer instalados no seu dispositivo
2. Baixe a pasta do projeto
3. Verifique a conexão do seu banco de dados no arquivo .env
4. No terminal do seu projeto, execute o comando -> php artisan migrate para criar o seu banco de dados
5. No terminal do seu projeto, execute o comando -> php artisan serve para iniciar o servidor do projeto
6. Execute o projeto em algum navegador

## OBS:
Esse commit foi realizado após o prazo, pois ao realiza-lo ontem ocorreu um erro no commit e eu nao me atentei!
