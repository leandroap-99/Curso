# Atividades para treinar Arrays, For, Foreach, Funções, etc.

Neste projeto encontra-se alguns arquivos para simularmos um banco de dados e trabalharmos com ele.  
A ideia é que você monte funções para trabalhar com as informações geradas.  

Estrutura de arquivos:

    - dados/alunos.php;
    - dados/cursos.php;
    - dados/matriculas.php;
    - dados/dados.php;
    
### alunos.php
JSON com 50 pessoas aleatórias geradas pelo site http://www.theonegenerator.com/pt  
Este JSON é transformado em um array para trabalharmos com ele no PHP.  
No final temos um FOR para colocar os Id's em cada.  

#### $aluno
```code
[
        [id] => 1
        [name] => Heath Ledger
        [email] => heathledger@tortor.com
        [cpf] => 64596650950
        [password] => 80dph2sh
        [birthday] => 19/05/1956
        [rg] => 852549829
]
```
### cursos.php
Um array com alguns cursos de exemplo.  
Uma Função para gerar um Id aleatório de um dos Cursos.  

    - É passado por parametro um número `1` ou `2`
    - IF número == `1` - Cursos entre 500 e 503
    - IF número == `2` - Cursos entre 600 e 602

#### $curso
```code
[
    [500] => Desenvolvimento Web com PHP
]
```
### matriculas.php
Include do arquivo `cursos.php`  
FOR para gerar matrículas aleatórias.  
#### $matricula
```code
[
    [id] => 1
        [curso_id] => 500
        [aluno_id] => 1
        [notas] => [
                [prova_1] => 0.1
                [prova_2] => 7.7
            ]
        [frequencia] => 10
]
```

### dados.php
Local onde dou `include` em todos arquivos para reunir tudo em apenas um local.  


## Exercícios para praticar

- Criar função para trazer informações do aluno passando algo por paramêtro;
    - Ex. `buscarAluno('id',33)` deve retornar aluno de `id` `33`;
    - Ex. `buscarAluno('name','Jensen Ankles')` deve retornar aluno de `name` `Jensen Ankles`;
    - Etc.

- Repetir o exemplo acima para Matrículas;

- Criar função para trazer as Matrículas `Aprovadas` = `1`, `Reprovadas` = `2` ou `em Recuperação` = `3` de um Curso;
    - Ex. `buscarMatriculas('curso_id', 500, 1)` deve retornar as matrículas aprovadas do curso 500

    - Alunos Aprovados      - Média das notas >= 7 e frequencia >= 8;
    - Alunos em Recuperação - Média das notas >= 5 e < 7 e frequencia >= 8;
    - Alunos Reprovados     - Média das notas < 5 ou frequencia < 8;

- Exibir dados do Aluno, cursos em que está matrículado, suas notas e frequencia.