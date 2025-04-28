# Funcionamento do Sistema de Locadora de Veiculos com PHP e Bootstrap

Esse documento descreve o funcionamento do sistema de Locadora de Veiculos desenvolvido em PHP, utilizando o Bootstrap para a interface, com autenticação de usuarios, gerenciamento de veiculos (carros e motos) e persistencia de dados em arquivos JSON. O foco principal é explicar o funcionamento geral do sistema, com ênfase especial nos perfis de acesso (admin e usuarios).

## 1. Visão Geral do Sistema 

O sistema de Locadora de Veiculos é uma aplicação web que permite:
- Autenticação de usuario com dois perfis: **admin** (administrador) e **usuario**;
- Gerenciamento de veículos: cadastro, aluguel, devolução e exclusão;
- Cauculo de previsão de aluguel: com base no tipo de veiculo (carro ou moto) e numero de dias;
- Interface responsiva.

Os dados são armazenados em dois arquivos JSON:
- `usuarios.json` : username, senha criptografada e perfil
- `veiculos.json` : tipo, modelo, placa e status de disponibilidade

## 2. Estrutura do sistema
O sistema utiliza:
- **PHP**: para a logica 
- **Bootstrap**: para a estilização
- **Bootstrap Icons**: para os icones da interface
- **Composer**: para autoloading de classes
- **JSON**: para persistência de dados

### 2.1 Componentes Principais
- **Interfaces**: Define a interface `Locavel` para veiculos e utiliza os metodos `alugar()` , `devolver()` e `isDisponivel()`
- **Models**: classes `Veiculo` (abstrata), `Carro` e `Moto`para os veiculos, com calculo de aluguel baseado em diarias constantes (`DIARIA_CARRO` e `DIARIA_MOTO`)
- **Services**: Classes `AUTH` (autenticação e gerenciamento de usuarios) e `Locadora` (gerenciamento dos veiculos)
- **Views**: Template principal `template.php`para renderizar a interface e `login.php` para a autenticação
- **Controllers**:Logica em `index.php` para processar requisiçoes e carregar o template.  


